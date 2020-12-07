<?php
require_once('includes/load.php');
$user = current_user();
$brand = brand();
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php echo $brand['Name'];?> - <?php echo $page_name;?></title>
    <link rel="icon" type="image/png" sizes="262x286" href="logo/Troop61.png">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css?v=1.0.0">
    <link rel="stylesheet" href="vendor/googlefonts/lora.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="vendor/ionicons/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="css/styles.css?v=1.0.1">
    <link rel="stylesheet" href="vendor/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="vendor/swiper/swiper-bundle.min.css">
    <!-- DataTables Bootstrap 4 CSS -->
    <link rel="stylesheet" type="text/css" href="vendor/datatables/css/dataTables.bootstrap4.min.css"/>

</head>


