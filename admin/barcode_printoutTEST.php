<?php

require_once('includes/load.php');

    $checkbox[] = $_POST['c1r1'];
    $checkbox[] = $_POST['c1r2'];
    $checkbox[] = $_POST['c1r3'];
    $checkbox[] = $_POST['c1r4'];
    $checkbox[] = $_POST['c1r5'];
    $checkbox[] = $_POST['c1r6'];
    $checkbox[] = $_POST['c1r7'];
    $checkbox[] = $_POST['c1r8'];
    $checkbox[] = $_POST['c1r9'];
    $checkbox[] = $_POST['c1r10'];
    $checkbox[] = $_POST['c2r1'];
    $checkbox[] = $_POST['c2r2'];
    $checkbox[] = $_POST['c2r3'];
    $checkbox[] = $_POST['c2r4'];
    $checkbox[] = $_POST['c2r5'];
    $checkbox[] = $_POST['c2r6'];
    $checkbox[] = $_POST['c2r7'];
    $checkbox[] = $_POST['c2r8'];
    $checkbox[] = $_POST['c2r9'];
    $checkbox[] = $_POST['c2r10'];
    $checkbox[] = $_POST['c3r1'];
    $checkbox[] = $_POST['c3r2'];
    $checkbox[] = $_POST['c3r3'];
    $checkbox[] = $_POST['c3r4'];
    $checkbox[] = $_POST['c3r5'];
    $checkbox[] = $_POST['c3r6'];
    $checkbox[] = $_POST['c3r7'];
    $checkbox[] = $_POST['c3r8'];
    $checkbox[] = $_POST['c3r9'];
    $checkbox[] = $_POST['c3r10'];

$checked = array_count_values($checkbox);

$name[] = 0;
$group[] = 0;
$barcode_url[] = 0;

$all_cards = find_all_cards_limited($checked['1']);

foreach($all_cards as $a_card):

$name[] = $a_card['member_name'] . " - ";
$group[] = $a_card['group_name'];
$barcode_url[] = $a_card['barcode_url'];
$id = $a_card['id'];

$query  = "UPDATE barcode_generator SET created = '1' WHERE id = '$id'";
$db->query($query);

endforeach;

$array_count_name = count($name);
$array_count_group = count($group);
$array_count_barcode_url = count($barcode_url);

$name = array_pad($name, 31, '');
$group = array_pad($group, 31, '');
$barcode_url = array_pad($barcode_url, 31, 'barcode_generator/generated_barcodes/blank.png');

//Creates Array For Printout
switch ($checkbox[0]) {
  case "1":
    $c1r1 = next($name) . "" .  next($group);
    $c1r1i = next($barcode_url);
    break;
    default:
    $c1r1 = "";
    $c1r1i = "barcode_generator/generated_barcodes/blank.png";
}
switch ($checkbox[1]) {
  case "1":
    $c1r2 = next($name) . "" .  next($group);
    $c1r2i = next($barcode_url);
    break;
    default:
    $c1r2 = "";
    $c1r2i = "barcode_generator/generated_barcodes/blank.png";
}
switch ($checkbox[2]) {
  case "1":
    $c1r3 = next($name) . "" .  next($group);
    $c1r3i = next($barcode_url);
    break;
    default:
    $c1r3 = "";
    $c1r3i = "barcode_generator/generated_barcodes/blank.png";
}
switch ($checkbox[3]) {
  case "1":
    $c1r4 = next($name) . "" .  next($group);
    $c1r4i = next($barcode_url);
    break;
    default:
    $c1r4 = "";
    $c1r4i = "barcode_generator/generated_barcodes/blank.png";
}
switch ($checkbox[4]) {
  case "1":
    $c1r5 = next($name) . "" .  next($group);
    $c1r5i = next($barcode_url);
    break;
    default:
    $c1r5 = "";
    $c1r5i = "barcode_generator/generated_barcodes/blank.png";
}
switch ($checkbox[5]) {
  case "1":
    $c1r6 = next($name) . "" .  next($group);
    $c1r6i = next($barcode_url);
    break;
    default:
    $c1r6 = "";
    $c1r6i = "barcode_generator/generated_barcodes/blank.png";
}
switch ($checkbox[6]) {
  case "1":
    $c1r7 = next($name) . "" .  next($group);
    $c1r7i = next($barcode_url);
    break;
    default:
    $c1r7 = "";
    $c1r7i = "barcode_generator/generated_barcodes/blank.png";
}
switch ($checkbox[7]) {
  case "1":
    $c1r8 = next($name) . "" .  next($group);
    $c1r8i = next($barcode_url);
    break;
    default:
    $c1r8 = "";
    $c1r8i = "barcode_generator/generated_barcodes/blank.png";
}
switch ($checkbox[8]) {
  case "1":
    $c1r9 = next($name) . "" .  next($group);
    $c1r9i = next($barcode_url);
    break;
    default:
    $c1r9 = "";
    $c1r9i = "barcode_generator/generated_barcodes/blank.png";
}
switch ($checkbox[9]) {
  case "1":
    $c1r10 = next($name) . "" .  next($group);
    $c1r10i = next($barcode_url);
    break;
    default:
    $c1r10 = "";
    $c1r10i = "barcode_generator/generated_barcodes/blank.png";
}
switch ($checkbox[10]) {
  case "1":
    $c2r1 = next($name) . "" .  next($group);
    $c2r1i = next($barcode_url);
    break;
    default:
    $c2r1 = "";
    $c2r1i = "barcode_generator/generated_barcodes/blank.png";
}
switch ($checkbox[11]) {
  case "1":
    $c2r2 = next($name) . "" .  next($group);
    $c2r2i = next($barcode_url);
    break;
    default:
    $c2r2 = "";
    $c2r2i = "barcode_generator/generated_barcodes/blank.png";
}
switch ($checkbox[12]) {
  case "1":
    $c2r3 = next($name) . "" .  next($group);
    $c2r3i = next($barcode_url);
    break;
    default:
    $c2r3 = "";
    $c2r3i = "barcode_generator/generated_barcodes/blank.png";
}
switch ($checkbox[13]) {
  case "1":
    $c2r4 = next($name) . "" .  next($group);
    $c2r4i = next($barcode_url);
    break;
    default:
    $c2r4 = "";
    $c2r4i = "barcode_generator/generated_barcodes/blank.png";
}
switch ($checkbox[14]) {
  case "1":
    $c2r5 = next($name) . "" .  next($group);
    $c2r5i = next($barcode_url);
    break;
    default:
    $c2r5 = "";
    $c2r5i = "barcode_generator/generated_barcodes/blank.png";
}
switch ($checkbox[15]) {
  case "1":
    $c2r6 = next($name) . "" .  next($group);
    $c2r6i = next($barcode_url);
    break;
    default:
    $c2r6 = "";
    $c2r6i = "barcode_generator/generated_barcodes/blank.png";
}
switch ($checkbox[16]) {
  case "1":
    $c2r7 = next($name) . "" .  next($group);
    $c2r7i = next($barcode_url);
    break;
    default:
    $c2r7 = "";
    $c2r7i = "barcode_generator/generated_barcodes/blank.png";
}
switch ($checkbox[17]) {
  case "1":
    $c2r8 = next($name) . "" .  next($group);
    $c2r8i = next($barcode_url);
    break;
    default:
    $c2r8 = "";
    $c2r8i = "barcode_generator/generated_barcodes/blank.png";
}
switch ($checkbox[18]) {
  case "1":
    $c2r9 = next($name) . "" .  next($group);
    $c2r9i = next($barcode_url);
    break;
    default:
    $c2r9 = "";
    $c2r9i = "barcode_generator/generated_barcodes/blank.png";
}
switch ($checkbox[19]) {
  case "1":
    $c2r10 = next($name) . "" .  next($group);
    $c2r10i = next($barcode_url);
    break;
    default:
    $c2r10 = "";
    $c2r10i = "barcode_generator/generated_barcodes/blank.png";
}
switch ($checkbox[20]) {
  case "1":
    $c3r1 = next($name) . "" .  next($group);
    $c3r1i = next($barcode_url);
    break;
    default:
    $c3r1 = "";
    $c3r1i = "barcode_generator/generated_barcodes/blank.png";
}
switch ($checkbox[21]) {
  case "1":
    $c3r2 = next($name) . "" .  next($group);
    $c3r2i = next($barcode_url);
    break;
    default:
    $c3r2 = "";
    $c3r2i = "barcode_generator/generated_barcodes/blank.png";
}
switch ($checkbox[22]) {
  case "1":
    $c3r3 = next($name) . "" .  next($group);
    $c3r3i = next($barcode_url);
    break;
    default:
    $c3r3 = "";
    $c3r3i = "barcode_generator/generated_barcodes/blank.png";
}
switch ($checkbox[23]) {
  case "1":
    $c3r4 = next($name) . "" .  next($group);
    $c3r4i = next($barcode_url);
    break;
    default:
    $c3r4 = "";
    $c3r4i = "barcode_generator/generated_barcodes/blank.png";
}
switch ($checkbox[24]) {
  case "1":
    $c3r5 = next($name) . "" .  next($group);
    $c3r5i = next($barcode_url);
    break;
    default:
    $c3r5 = "";
    $c3r5i = "barcode_generator/generated_barcodes/blank.png";
}
switch ($checkbox[25]) {
  case "1":
    $c3r6 = next($name) . "" .  next($group);
    $c3r6i = next($barcode_url);
    break;
    default:
    $c3r6 = "";
    $c3r6i = "barcode_generator/generated_barcodes/blank.png";
}
switch ($checkbox[26]) {
  case "1":
    $c3r7 = next($name) . "" .  next($group);
    $c3r7i = next($barcode_url);
    break;
    default:
    $c3r7 = "";
    $c3r7i = "barcode_generator/generated_barcodes/blank.png";
}
switch ($checkbox[27]) {
  case "1":
    $c3r8 = next($name) . "" .  next($group);
    $c3r8i = next($barcode_url);
    break;
    default:
    $c3r8 = "";
    $c3r8i = "barcode_generator/generated_barcodes/blank.png";
}
switch ($checkbox[28]) {
  case "1":
    $c3r9 = next($name) . "" .  next($group);
    $c3r9i = next($barcode_url);
    break;
    default:
    $c3r9 = "";
    $c3r9i = "barcode_generator/generated_barcodes/blank.png";
}
switch ($checkbox[29]) {
  case "1":
    $c3r10 = next($name) . "" .  next($group);
    $c3r10i = next($barcode_url);
    break;
    default:
    $c3r10 = "";
    $c3r10i = "barcode_generator/generated_barcodes/blank.png";
}


require('vendor/autoload.php');

use \setasign\Fpdi\Fpdi;

// initiate FPDI
$pdf = new Fpdi('P','in','Letter');

// get the page count
$pageCount = $pdf->setSourceFile('docs/avery.pdf');
// iterate through all pages
for ($pageNo = 1; $pageNo <= $pageCount; $pageNo++) {
    // import a page
    $templateId = $pdf->importPage($pageNo);

    $pdf->AddPage();
    // use the imported page and adjust the page size
    $pdf->useTemplate($templateId, ['adjustPageSize' => true]);
    
    $pdf->SetAutoPageBreak(true, 0);

    $pdf->SetFont('Times');

$pdf->Image($c1r1i,0.19,0.61,2.625);
$pdf->Image($c1r2i,0.19,1.61,2.625);
$pdf->Image($c1r3i,0.19,2.61,2.625);
$pdf->Image($c1r4i,0.19,3.61,2.625);
$pdf->Image($c1r5i,0.19,4.61,2.625);
$pdf->Image($c1r6i,0.19,5.61,2.625);
$pdf->Image($c1r7i,0.19,6.61,2.625);
$pdf->Image($c1r8i,0.19,7.61,2.625);
$pdf->Image($c1r9i,0.19,8.61,2.625);
$pdf->Image($c1r10i,0.19,9.61,2.625);
$pdf->Image($c2r1i,2.94,0.61,2.625);
$pdf->Image($c2r2i,2.94,1.61,2.625);
$pdf->Image($c2r3i,2.94,2.61,2.625);
$pdf->Image($c2r4i,2.94,3.61,2.625);
$pdf->Image($c2r5i,2.94,4.61,2.625);
$pdf->Image($c2r6i,2.94,5.61,2.625);
$pdf->Image($c2r7i,2.94,6.61,2.625);
$pdf->Image($c2r8i,2.94,7.61,2.625);
$pdf->Image($c2r9i,2.94,8.61,2.625);
$pdf->Image($c2r10i,2.94,9.61,2.625);
$pdf->Image($c3r1i,5.69,0.61,2.625);
$pdf->Image($c3r2i,5.69,1.61,2.625);
$pdf->Image($c3r3i,5.69,2.61,2.625);
$pdf->Image($c3r4i,5.69,3.61,2.625);
$pdf->Image($c3r5i,5.69,4.61,2.625);
$pdf->Image($c3r6i,5.69,5.61,2.625);
$pdf->Image($c3r7i,5.69,6.61,2.625);
$pdf->Image($c3r8i,5.69,7.61,2.625);
$pdf->Image($c3r9i,5.69,8.61,2.625);
$pdf->Image($c3r10i,5.69,9.61,2.625);


$pdf->SetXY(0.19, 0.5);
$pdf->MultiCell(2.625,.33,$c1r1. "\n \n \n",0,'C');

$pdf->SetXY(0.19, 1.5);
$pdf->MultiCell(2.625,.33,$c1r2. "\n \n \n",0,'C');

$pdf->SetXY(0.19, 2.5);
$pdf->MultiCell(2.625,.33,$c1r3. "\n \n \n",0,'C');

$pdf->SetXY(0.19, 3.5);
$pdf->MultiCell(2.625,.33,$c1r4. "\n \n \n",0,'C');

$pdf->SetXY(0.19, 4.5);
$pdf->MultiCell(2.625,.33,$c1r5. "\n \n \n",0,'C');

$pdf->SetXY(0.19, 5.5);
$pdf->MultiCell(2.625,.33,$c1r6. "\n \n \n",0,'C');

$pdf->SetXY(0.19, 6.5);
$pdf->MultiCell(2.625,.33,$c1r7. "\n \n \n",0,'C');

$pdf->SetXY(0.19, 7.5);
$pdf->MultiCell(2.625,.33,$c1r8. "\n \n \n",0,'C');

$pdf->SetXY(0.19, 8.5);
$pdf->MultiCell(2.625,.33,$c1r9. "\n \n \n",0,'C');

$pdf->SetXY(0.19, 9.5);
$pdf->MultiCell(2.625,.33,$c1r10. "\n \n \n",0,'C');

$pdf->SetXY(2.94, 0.5);
$pdf->MultiCell(2.625,.33,$c2r1. "\n \n \n",0,'C');

$pdf->SetXY(2.94, 1.5);
$pdf->MultiCell(2.625,.33,$c2r2. "\n \n \n",0,'C');

$pdf->SetXY(2.94, 2.5);
$pdf->MultiCell(2.625,.33,$c2r3. "\n \n \n",0,'C');

$pdf->SetXY(2.94, 3.5);
$pdf->MultiCell(2.625,.33,$c2r4. "\n \n \n",0,'C');

$pdf->SetXY(2.94, 4.5);
$pdf->MultiCell(2.625,.33,$c2r5. "\n \n \n",0,'C');

$pdf->SetXY(2.94, 5.5);
$pdf->MultiCell(2.625,.33,$c2r6. "\n \n \n",0,'C');

$pdf->SetXY(2.94, 6.5);
$pdf->MultiCell(2.625,.33,$c2r7. "\n \n \n",0,'C');

$pdf->SetXY(2.94, 7.5);
$pdf->MultiCell(2.625,.33,$c2r8. "\n \n \n",0,'C');

$pdf->SetXY(2.94, 8.5);
$pdf->MultiCell(2.625,.33,$c2r9. "\n \n \n",0,'C');

$pdf->SetXY(2.94, 9.5);
$pdf->MultiCell(2.625,.33,$c2r10. "\n \n \n",0,'C');

$pdf->SetXY(5.69, 0.5);
$pdf->MultiCell(2.625,.33,$c3r1. "\n \n \n",0,'C');

$pdf->SetXY(5.69, 1.5);
$pdf->MultiCell(2.625,.33,$c3r2. "\n \n \n",0,'C');

$pdf->SetXY(5.69, 2.5);
$pdf->MultiCell(2.625,.33,$c3r3. "\n \n \n",0,'C');

$pdf->SetXY(5.69, 3.5);
$pdf->MultiCell(2.625,.33,$c3r4. "\n \n \n",0,'C');

$pdf->SetXY(5.69, 4.5);
$pdf->MultiCell(2.625,.33,$c3r5. "\n \n \n",0,'C');

$pdf->SetXY(5.69, 5.5);
$pdf->MultiCell(2.625,.33,$c3r6. "\n \n \n",0,'C');

$pdf->SetXY(5.69, 6.5);
$pdf->MultiCell(2.625,.33,$c3r7. "\n \n \n",0,'C');

$pdf->SetXY(5.69, 7.5);
$pdf->MultiCell(2.625,.33,$c3r8. "\n \n \n",0,'C');

$pdf->SetXY(5.69, 8.5);
$pdf->MultiCell(2.625,.33,$c3r9. "\n \n \n",0,'C');

$pdf->SetXY(5.69, 9.5);
$pdf->MultiCell(2.625,.33,$c3r10. "\n \n \n",0,'C');




}

// Output the new PDF
$pdf->Output();