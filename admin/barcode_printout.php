<?php

require_once('includes/load.php');

    $c1r1 = $_POST['c1r1'];
    $c1r2 = $_POST['c1r2'];
    $c1r3 = $_POST['c1r3'];
    $c1r4 = $_POST['c1r4'];
    $c1r5 = $_POST['c1r5'];
    $c1r6 = $_POST['c1r6'];
    $c1r7 = $_POST['c1r7'];
    $c1r8 = $_POST['c1r8'];
    $c1r9 = $_POST['c1r9'];
    $c1r10 = $_POST['c1r10'];
    $c2r1 = $_POST['c2r1'];
    $c2r2 = $_POST['c2r2'];
    $c2r3 = $_POST['c2r3'];
    $c2r4 = $_POST['c2r4'];
    $c2r5 = $_POST['c2r5'];
    $c2r6 = $_POST['c2r6'];
    $c2r7 = $_POST['c2r7'];
    $c2r8 = $_POST['c2r8'];
    $c2r9 = $_POST['c2r9'];
    $c2r10 = $_POST['c2r10'];
    $c3r1 = $_POST['c3r1'];
    $c3r2 = $_POST['c3r2'];
    $c3r3 = $_POST['c3r3'];
    $c3r4 = $_POST['c3r4'];
    $c3r5 = $_POST['c3r5'];
    $c3r6 = $_POST['c3r6'];
    $c3r7 = $_POST['c3r7'];
    $c3r8 = $_POST['c3r8'];
    $c3r9 = $_POST['c3r9'];
    $c3r10 = $_POST['c3r10'];

//Counts Number of Boxes Checked
switch ($c1r1) {
  case "1":
    $a1 = 1;
    break;
    default:
    $a1 = 0;
}
switch ($c1r2) {
  case "1":
    $a2 = 1;
    break;
    default:
    $a2 = 0;
}
switch ($c1r3) {
  case "1":
    $a3 = 1;
    break;
    default:
    $a3 = 0;
}
switch ($c1r4) {
  case "1":
    $a4 = 1;
    break;
    default:
    $a4 = 0;
}
switch ($c1r5) {
  case "1":
    $a5 = 1;
    break;
    default:
    $a5 = 0;
}
switch ($c1r6) {
  case "1":
    $a6 = 1;
    break;
    default:
    $a6 = 0;
}
switch ($c1r7) {
  case "1":
    $a7 = 1;
    break;
    default:
    $a7 = 0;
}
switch ($c1r8) {
  case "1":
    $a8 = 1;
    break;
    default:
    $a8 = 0;
}
switch ($c1r9) {
  case "1":
    $a9 = 1;
    break;
    default:
    $a9 = 0;
}
switch ($c1r10) {
  case "1":
    $a10 = 1;
    break;
    default:
    $a10 = 0;
}
switch ($c2r1) {
  case "1":
    $a11 = 1;
    break;
    default:
    $a11 = 0;
}
switch ($c2r2) {
  case "1":
    $a12 = 1;
    break;
    default:
    $a12 = 0;
}
switch ($c2r3) {
  case "1":
    $a13 = 1;
    break;
    default:
    $a13 = 0;
}
switch ($c2r4) {
  case "1":
    $a14 = 1;
    break;
    default:
    $a14 = 0;
}
switch ($c2r5) {
  case "1":
    $a15 = 1;
    break;
    default:
    $a15 = 0;
}
switch ($c2r6) {
  case "1":
    $a16 = 1;
    break;
    default:
    $a16 = 0;
}
switch ($c2r7) {
  case "1":
    $a17 = 1;
    break;
    default:
    $a17 = 0;
}
switch ($c2r8) {
  case "1":
    $a18 = 1;
    break;
    default:
    $a18 = 0;
}
switch ($c2r9) {
  case "1":
    $a19 = 1;
    break;
    default:
    $a19 = 0;
}
switch ($c2r10) {
  case "1":
    $a20 = 1;
    break;
    default:
    $a20 = 0;
}
switch ($c3r1) {
  case "1":
    $a21 = 1;
    break;
    default:
    $a21 = 0;
}
switch ($c3r2) {
  case "1":
    $a22 = 1;
    break;
    default:
    $a22 = 0;
}
switch ($c3r3) {
  case "1":
    $a23 = 1;
    break;
    default:
    $a23 = 0;
}
switch ($c3r4) {
  case "1":
    $a24 = 1;
    break;
    default:
    $a24 = 0;
}
switch ($c3r5) {
  case "1":
    $a25 = 1;
    break;
    default:
    $a25 = 0;
}
switch ($c3r6) {
  case "1":
    $a26 = 1;
    break;
    default:
    $a26 = 0;
}
switch ($c3r7) {
  case "1":
    $a27 = 1;
    break;
    default:
    $a27 = 0;
}
switch ($c3r8) {
  case "1":
    $a28 = 1;
    break;
    default:
    $a28 = 0;
}
switch ($c3r9) {
  case "1":
    $a29 = 1;
    break;
    default:
    $a29 = 0;
}
switch ($c3r10) {
  case "1":
    $a30 = 1;
    break;
    default:
    $a30 = 0;
}

$name[] = 0;
$group[] = 0;
$barcode_url[] = 0;

$count_cards = $a1 + $a2 + $a3 + $a4 + $a5 + $a6 + $a7 + $a8 + $a9 + $a10 + $a11 + $a12 + $a13 + $a14 + $a15 + $a16 + $a17 + $a18 + $a19 + $a20 + $a21 + $a22 + $a23 + $a24 + $a25 + $a26 + $a27 + $a29 + $a29 + $a30;

$all_cards = find_all_cards_limited($count_cards);

foreach($all_cards as $a_card):

$name[] = $a_card['member_name'];
$group[] = $a_card['group_name'];
$barcode_url[] = $a_card['barcode_url'];
$id = $a_card['id'];

$query  = "UPDATE barcode_generator SET created = '1' WHERE id = '$id'";
$db->query($query);

endforeach;

$array_count_name = count($name);
$array_count_group = count($group);
$array_count_barcode_url = count($barcode_url);

switch ($array_count_name) {
  case "2":
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
  break;
  case "3":
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
    break;
  case "4":
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
    break;
  case "5":
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
    break;
  case "6":
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
    break;
  case "7":
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
    break;
  case "8":
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
    break;
  case "9":
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
    break;
  case "10":
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
    break;
  case "11":
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
    break;
  case "12":
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
    break;
  case "13":
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
    break;
  case "14":
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
    break;
  case "15":
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
    break;
  case "16":
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
    break;
  case "17":
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
    break;
  case "18":
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
    break;
  case "19":
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
    break;
  case "20":
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
    break;
  case "21":
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
    break;
  case "22":
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
    break;
  case "23":
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
    break;
  case "24":
	$name[] = "";
	$name[] = "";
	$name[] = "";
	$name[] = "";
    break;
  case "25":
	$name[] = "";
	$name[] = "";
	$name[] = "";
    break;
  case "26":
	$name[] = "";
	$name[] = "";
    break;
  case "27":
	$name[] = "";
  break;
}

switch ($array_count_group) {
  case "2":
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
    break;
  case "3":
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
    break;
  case "4":
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
    break;
  case "5":
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
    break;
  case "6":
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
    break;
  case "7":
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
    break;
  case "8":
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
    break;
  case "9":
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
    break;
  case "10":
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
    break;
  case "11":
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
    break;
  case "12":
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
    break;
  case "13":
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
    break;
  case "14":
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
    break;
  case "15":
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
    break;
  case "16":
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
    break;
  case "17":
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
    break;
  case "18":
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
    break;
  case "19":
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
    break;
  case "20":
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
    break;
  case "21":
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
    break;
  case "22":
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
    break;
  case "23":
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
    break;
  case "24":
	$group[] = "";
	$group[] = "";
	$group[] = "";
	$group[] = "";
    break;
  case "25":
	$group[] = "";
	$group[] = "";
	$group[] = "";
    break;
  case "26":
	$group[] = "";
	$group[] = "";
    break;
  case "27":
	$group[] = "";
  break;
}

switch ($array_count_barcode_url) {
  case "2":
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
    break;
  case "3":
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
    break;
  case "4":
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
    break;
  case "5":
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
    break;
  case "6":
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
    break;
  case "7":
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
    break;
  case "8":
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
    break;
  case "9":
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
    break;
  case "10":
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
    break;
  case "11":
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
    break;
  case "12":
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
    break;
  case "13":
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
    break;
  case "14":
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
    break;
  case "15":
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
    break;
  case "16":
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
    break;
  case "17":
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
    break;
  case "18":
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
    break;
  case "19":
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
    break;
  case "20":
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
    break;
  case "21":
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
    break;
  case "22":
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
    break;
  case "23":
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
    break;
  case "24":
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
    break;
  case "25":
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
    break;
  case "26":
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
    break;
  case "27":
	$barcode_url[] = "barcode_generator/generated_barcodes/blank.png";
  break;
}



//Creates Array For Printout
switch ($c1r1) {
  case "1":
    $c1r1 = next($name) . " - " . next($group);
    $c1r1i = next($barcode_url);
    break;
    default:
    $c1r1 = "";
    $c1r1i = "barcode_generator/generated_barcodes/blank.png";
}
switch ($c1r2) {
  case "1":
    $c1r2 = next($name) . " - " . next($group);
    $c1r2i = next($barcode_url);
    break;
    default:
    $c1r2 = "";
    $c1r2i = "barcode_generator/generated_barcodes/blank.png";
}
switch ($c1r3) {
  case "1":
    $c1r3 = next($name) . " - " . next($group);
    $c1r3i = next($barcode_url);
    break;
    default:
    $c1r3 = "";
    $c1r3i = "barcode_generator/generated_barcodes/blank.png";
}
switch ($c1r4) {
  case "1":
    $c1r4 = next($name) . " - " . next($group);
    $c1r4i = next($barcode_url);
    break;
    default:
    $c1r4 = "";
    $c1r4i = "barcode_generator/generated_barcodes/blank.png";
}
switch ($c1r5) {
  case "1":
    $c1r5 = next($name) . " - " . next($group);
    $c1r5i = next($barcode_url);
    break;
    default:
    $c1r5 = "";
    $c1r5i = "barcode_generator/generated_barcodes/blank.png";
}
switch ($c1r6) {
  case "1":
    $c1r6 = next($name) . " - " . next($group);
    $c1r6i = next($barcode_url);
    break;
    default:
    $c1r6 = "";
    $c1r6i = "barcode_generator/generated_barcodes/blank.png";
}
switch ($c1r7) {
  case "1":
    $c1r7 = next($name) . " - " . next($group);
    $c1r7i = next($barcode_url);
    break;
    default:
    $c1r7 = "";
    $c1r7i = "barcode_generator/generated_barcodes/blank.png";
}
switch ($c1r8) {
  case "1":
    $c1r8 = next($name) . " - " . next($group);
    $c1r8i = next($barcode_url);
    break;
    default:
    $c1r8 = "";
    $c1r8i = "barcode_generator/generated_barcodes/blank.png";
}
switch ($c1r9) {
  case "1":
    $c1r9 = next($name) . " - " . next($group);
    $c1r9i = next($barcode_url);
    break;
    default:
    $c1r9 = "";
    $c1r9i = "barcode_generator/generated_barcodes/blank.png";
}
switch ($c1r10) {
  case "1":
    $c1r10 = next($name) . " - " . next($group);
    $c1r10i = next($barcode_url);
    break;
    default:
    $c1r10 = "";
    $c1r10i = "barcode_generator/generated_barcodes/blank.png";
}
switch ($c2r1) {
  case "1":
    $c2r1 = next($name) . " - " . next($group);
    $c2r1i = next($barcode_url);
    break;
    default:
    $c2r1 = "";
    $c2r1i = "barcode_generator/generated_barcodes/blank.png";
}
switch ($c2r2) {
  case "1":
    $c2r2 = next($name) . " - " . next($group);
    $c2r2i = next($barcode_url);
    break;
    default:
    $c2r2 = "";
    $c2r2i = "barcode_generator/generated_barcodes/blank.png";
}
switch ($c2r3) {
  case "1":
    $c2r3 = next($name) . " - " . next($group);
    $c2r3i = next($barcode_url);
    break;
    default:
    $c2r3 = "";
    $c2r3i = "barcode_generator/generated_barcodes/blank.png";
}
switch ($c2r4) {
  case "1":
    $c2r4 = next($name) . " - " . next($group);
    $c2r4i = next($barcode_url);
    break;
    default:
    $c2r4 = "";
    $c2r4i = "barcode_generator/generated_barcodes/blank.png";
}
switch ($c2r5) {
  case "1":
    $c2r5 = next($name) . " - " . next($group);
    $c2r5i = next($barcode_url);
    break;
    default:
    $c2r5 = "";
    $c2r5i = "barcode_generator/generated_barcodes/blank.png";
}
switch ($c2r6) {
  case "1":
    $c2r6 = next($name) . " - " . next($group);
    $c2r6i = next($barcode_url);
    break;
    default:
    $c2r6 = "";
    $c2r6i = "barcode_generator/generated_barcodes/blank.png";
}
switch ($c2r7) {
  case "1":
    $c2r7 = next($name) . " - " . next($group);
    $c2r7i = next($barcode_url);
    break;
    default:
    $c2r7 = "";
    $c2r7i = "barcode_generator/generated_barcodes/blank.png";
}
switch ($c2r8) {
  case "1":
    $c2r8 = next($name) . " - " . next($group);
    $c2r8i = next($barcode_url);
    break;
    default:
    $c2r8 = "";
    $c2r8i = "barcode_generator/generated_barcodes/blank.png";
}
switch ($c2r9) {
  case "1":
    $c2r9 = next($name) . " - " . next($group);
    $c2r9i = next($barcode_url);
    break;
    default:
    $c2r9 = "";
    $c2r9i = "barcode_generator/generated_barcodes/blank.png";
}
switch ($c2r10) {
  case "1":
    $c2r10 = next($name) . " - " . next($group);
    $c2r10i = next($barcode_url);
    break;
    default:
    $c2r10 = "";
    $c2r10i = "barcode_generator/generated_barcodes/blank.png";
}
switch ($c3r1) {
  case "1":
    $c3r1 = next($name) . " - " . next($group);
    $c3r1i = next($barcode_url);
    break;
    default:
    $c3r1 = "";
    $c3r1i = "barcode_generator/generated_barcodes/blank.png";
}
switch ($c3r2) {
  case "1":
    $c3r2 = next($name) . " - " . next($group);
    $c3r2i = next($barcode_url);
    break;
    default:
    $c3r2 = "";
    $c3r2i = "barcode_generator/generated_barcodes/blank.png";
}
switch ($c3r3) {
  case "1":
    $c3r3 = next($name) . " - " . next($group);
    $c3r3i = next($barcode_url);
    break;
    default:
    $c3r3 = "";
    $c3r3i = "barcode_generator/generated_barcodes/blank.png";
}
switch ($c3r4) {
  case "1":
    $c3r4 = next($name) . " - " . next($group);
    $c3r4i = next($barcode_url);
    break;
    default:
    $c3r4 = "";
    $c3r4i = "barcode_generator/generated_barcodes/blank.png";
}
switch ($c3r5) {
  case "1":
    $c3r5 = next($name) . " - " . next($group);
    $c3r5i = next($barcode_url);
    break;
    default:
    $c3r5 = "";
    $c3r5i = "barcode_generator/generated_barcodes/blank.png";
}
switch ($c3r6) {
  case "1":
    $c3r6 = next($name) . " - " . next($group);
    $c3r6i = next($barcode_url);
    break;
    default:
    $c3r6 = "";
    $c3r6i = "barcode_generator/generated_barcodes/blank.png";
}
switch ($c3r7) {
  case "1":
    $c3r7 = next($name) . " - " . next($group);
    $c3r7i = next($barcode_url);
    break;
    default:
    $c3r7 = "";
    $c3r7i = "barcode_generator/generated_barcodes/blank.png";
}
switch ($c3r8) {
  case "1":
    $c3r8 = next($name) . " - " . next($group);
    $c3r8i = next($barcode_url);
    break;
    default:
    $c3r8 = "";
    $c3r8i = "barcode_generator/generated_barcodes/blank.png";
}
switch ($c3r9) {
  case "1":
    $c3r9 = next($name) . " - " . next($group);
    $c3r9i = next($barcode_url);
    break;
    default:
    $c3r9 = "";
    $c3r9i = "barcode_generator/generated_barcodes/blank.png";
}
switch ($c3r10) {
  case "1":
    $c3r10 = next($name) . " - " . next($group);
    $c3r10i = next($barcode_url);
    break;
    default:
    $c3r10 = "";
    $c3r10i = "barcode_generator/generated_barcodes/blank.png";
}



$array = array($c1r1,$c1r2,$c1r3,$c1r4,$c1r5,$c1r6,$c1r7,$c1r8,$c1r9,$c1r10,$c2r1,$c2r2,$c2r3,$c2r4,$c2r5,$c2r6,$c2r7,$c2r8,$c2r9,$c2r10,$c3r1,$c3r2,$c3r3,$c3r4,$c3r5,$c3r6,$c3r7,$c3r8,$c3r9,$c3r10);

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