<?php
date_default_timezone_set('America/New_York');

require_once('includes/load.php');
$user = current_user();
$brand = brand();
$redirect = basename($_SERVER['REQUEST_URI']);

?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php echo $brand['Name'];?> - <?php echo $page_name;?></title>
    <link rel="icon" type="image/png" sizes="262x286" href="logo/Troop61.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css?h=89f0b9be90125968ebc6b8061583331d&v=0.0.2">
    <link rel="stylesheet" href="assets/fonts/google_fonts.css?v=0.0.1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css?h=b077f3d66f4dd45a76529f02462151f3">
    <link rel="stylesheet" href="assets/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/Search-Input-responsive.css?h=34fc6b75e22ded40f9183fa0812ab32c">
    <link rel="stylesheet" href="assets/css/smoothproducts.css?h=38a515b6b30123300b3619cce6411cec">
</head>


