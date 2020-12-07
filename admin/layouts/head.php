<?php
date_default_timezone_set('America/New_York');

require_once('includes/load.php');
$user = current_user();
$brand = brand();
$redirect = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1410)) {
// last request was more than 30 minutes ago
$session->msg('w',"You have been signed out due to inactivity. Please sign in again to continue working.");
require_once('logout.php');
}
$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $brand['Name'];?> Administration - <?php echo $page_name; ?></title>

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link href="vendor/googlefonts/nunito.css" rel="stylesheet">
    
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="css/sb-admin-2.css?v=1.0.1">
    <link rel="stylesheet" href="vendor/bootstrap-switch/css/bootstrap-switch-button.min.css">
    <script type="text/javascript" src="vendor/bootstrap-switch/dist/bootstrap-switch-button.min.js"></script>

    <!-- DataTables Bootstrap 4 CSS -->
    <link rel="stylesheet" type="text/css" href="vendor/datatables/css/dataTables.bootstrap4.min.css"/>

</head>

