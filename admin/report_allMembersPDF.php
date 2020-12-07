<?php
date_default_timezone_set('America/New_York');

require_once('includes/load.php');

$all_members = find_all_members();

require('vendor/setasign/fpdf/fpdf.php');

class PDF extends FPDF
{
// Simple table
function BasicTable($header, $all_members)
{
    // Header

$this->AddFont('Montserrat-Bold','','Montserrat-Bold.php');
$this->SetFont('Montserrat-Bold','','14');
$this->Cell(.334,0.5,"#",1,'','C');
$this->Cell(2.38866666,0.5,"Member Name",1,'','C');
$this->Cell(1.88866666,0.5,"Username",1,'','C');
$this->Cell(1.88866666,0.5,"Group Name",1,'','C');
$this->Cell(1,0.5,"ID",1,'','C');
    $this->Ln();
    // Data
$this->SetFont('Montserrat-Regular','','10');
    foreach($all_members as $a_member)
    {

$this->MultiCell(.334,0.6,count_id(),1,'C');

$y = $this->GetY();
$x = $this->GetX();
$newX = $x + .334;
$newY = $y - .6;
$this->SetXY($newX, $newY);
$this->MultiCell(2.38866666,0.6,remove_junk(ucwords($a_member['name'])),1,'C');

$y1 = $this->GetY();
$x1 = $this->GetX();
$newX1 = $x1 + 2.38866666 + .334;
$newY1 = $y1 - .6;
$this->SetXY($newX1, $newY1);
$this->MultiCell(1.88866666,0.6,remove_junk(ucwords($a_member['username'])),1,'C');

$y2 = $this->GetY();
$x2 = $this->GetX();
$newX2 = $x2 + 2.38866666 + 1.88866666 + .334;
$newY2 = $y2 - .6;
$this->SetXY($newX2, $newY2);
$this->MultiCell(1.88866666,0.6,remove_junk(ucwords($a_member['group_name'])),1,'C');

$y3 = $this->GetY();
$x3 = $this->GetX();
$newX3 = $x3 + 2.38866666 + 1.88866666 + 1.88866666 + .334;
$newY3 = $y3 - .6;
$this->SetXY($newX3, $newY3);
$this->MultiCell(1,0.6,remove_junk(ucwords($a_member['id'])),1,'C');

    }
        $this->Ln();
}

// Page footer
function Footer()
{
global $page_name;
    // Position at 1.5 cm from bottom
    $this->SetY(-0.590551);

    $this->AddFont('Montserrat-Italic','','Montserrat-Italic.php');
    $this->SetFont('Montserrat-Italic','',8);
    // Page number
    $this->Cell(0,0.393701,"Troop 61 Library - All Members",0,0,'L');
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
$pdf->Write('.5',"Troop 61 Library - All Members");

$pdf->SetFont('Montserrat-Regular','','16');
$pdf->SetXY(2,1.25);
$pdf->Write('.5',$page_name);

$pdf->SetFont('Montserrat-Regular','','16');
$pdf->SetXY(-3,1.25);
$pdf->Write('.5',date("m/d/Y"));

$pdf->SetY(2.25);
$pdf->BasicTable($header,$all_members);

$pdf->Output(I,'bookings.pdf');