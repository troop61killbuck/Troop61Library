<?php
date_default_timezone_set('America/New_York');

require_once('includes/load.php');

    if(!$session->isMemberLoggedIn(true)){
        $session->msg("w", "You must be logged in to see that page.");
        redirect('index.php');
    }

$all_circulations_h = find_all_circulations_current('member_id','100032');


$name = current_user()['name'];
require('vendor/setasign/fpdf/fpdf.php');

class PDF extends FPDF
{
// Load data
function LoadData($file)
{
    // Read file lines
    $lines = file($file);
    $data = array();
    foreach($lines as $line)
        $data[] = explode(';',trim($line));
    return $data;
}

// Simple table
function BasicTable($header, $all_circulations_h)
{
    // Header

$this->AddFont('Montserrat-Bold','','Montserrat-Bold.php');
$this->SetFont('Montserrat-Bold','','14');
$this->Cell(.334,0.5,"#",1,'','C');
$this->Cell(2.38866666667,0.5,"Book Title / ID",1,'','C');
$this->Cell(2.38866666667,0.5,"Date Updated",1,'','C');
$this->Cell(2.38866666667,0.5,"Status",1,'','C');
    $this->Ln();
    // Data
$this->SetFont('Montserrat-Regular','','10');
    foreach($all_circulations_h as $a_circulations_h)
    {
$title = remove_junk(ucwords($a_circulations_h['title']));
$title .= "\n";
$title .= remove_junk($a_circulations_h['book_id']);

if ($a_circulations_h['status'] == '0'){
$status  = "Requested";
$w = 0.6;
} elseif ($a_circulations_h['status'] == '1'){
$status = "Issued";
$w = 0.6;
} elseif ($a_circulations_h['status'] == '2'){
$status = "Returned";
$status .= "\n";
$status .= remove_junk(read_date($a_circulations_h['date_checked_in']));
$w = 0.3;
}

$width = 2.38866666667;

$this->MultiCell(.334,0.6,count_id(),1,'C');

$y = $this->GetY();
$x = $this->GetX();
$newX = $x + .334;
$newY = $y - .6;
$this->SetXY($newX, $newY);
$this->MultiCell(2.38866666667,0.3,$title,1,'C');

$y1 = $this->GetY();
$x1 = $this->GetX();
$newX1 = $x1 + 2.38866666667 + .334;
$newY1 = $y1 - .6;
$this->SetXY($newX1, $newY1);
$this->MultiCell(2.38866666667,0.6,remove_junk(read_date($a_circulations_h['date_checked_out'])),1,'C');

$y2 = $this->GetY();
$x2 = $this->GetX();
$newX2 = $x2 + 2.38866666667 + 2.38866666667 + .334;
$newY2 = $y2 - .6;
$this->SetXY($newX2, $newY2);
$this->MultiCell(2.38866666667,$w,$status,1,'C');

    }
        $this->Ln();
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-0.590551);

    $this->AddFont('Montserrat-Italic','','Montserrat-Italic.php');
    $this->SetFont('Montserrat-Italic','',8);
    // Page number
    $this->Cell(0,0.393701,current_user()['name'],0,0,'L');
    $this->SetX(0);
    $this->Cell(0,0.393701,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    $this->SetX(0);
    $this->Cell(0,0.393701,date("F j, Y, g:i a"),0,0,'R');

}
}

$pdf = new PDF('P','in','Letter');
$pdf->SetMargins(.5,.5);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->AddFont('Montserrat-Regular','','Montserrat-Regular.php');
$pdf->SetFont('Montserrat-Regular','','24');
$pdf->Image('logo/Troop61.png',.5,.65,1);
$pdf->SetXY(1.65,0.861111111);
$pdf->Write('.5',"Troop 61 Library - Current Bookings");

$pdf->SetFont('Montserrat-Regular','','16');
$pdf->SetXY(2,1.25);
$pdf->Write('.5',$name);

$pdf->SetFont('Montserrat-Regular','','16');
$pdf->SetXY(-2.40,1.25);
$pdf->Write('.5',date("m/d/Y"));

$pdf->SetY(2.25);
$pdf->BasicTable($header,$all_circulations_h);

$pdf->Output(I,'bookings.pdf');