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

$count_cards = $a1 + $a2 + $a3 + $a4 + $a5 + $a6 + $a7 + $a8 + $a9 + $a10 + $a11 + $a12 + $a13 + $a14 + $a15 + $a16 + $a17 + $a18 + $a19 + $a20 + $a21 + $a22 + $a23 + $a24 + $a25 + $a26 + $a27 + $a29 + $a29 + $a30;

   $all_cards = find_all_cards_limited($count_cards);
print($count_cards);

foreach($all_cards as $a_card):

$name[] = $a_card['member_name'];
$group[] = $a_card['group_name'];
$barcode_url[] = $a_card['barcode_url'];

endforeach;

echo next($name) . "<br>";
echo next($name) . "<br>";
echo next($name) . "<br>";


echo next($group) . "<br>";
echo next($group) . "<br>";
echo next($group) . "<br>";


echo next($barcode_url) . "<br>";
echo next($barcode_url) . "<br>";
echo next($barcode_url) . "<br>";
?>
