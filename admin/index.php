<!DOCTYPE html> 
 <?php require_once('layouts/variables.php');?> 
<html lang="en">
<?php
ob_start();
require_once('includes/load.php');
if($session->isUserLoggedIn(true)) { redirect('dashboard.php', false);}
?>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Troop 61 Library Administration - Login</title>

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link href="vendor/googlefonts/nunito.css" rel="stylesheet">
    
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="css/sb-admin-2.css?v=1.0.1">
    <link rel="stylesheet" href="css/floating-labels.css?v=1.0.1">
    <link rel="stylesheet" href="vendor/bootstrap-switch/css/bootstrap-switch-button.min.css">
    <script type="text/javascript" src="vendor/bootstrap-switch/dist/bootstrap-switch-button.min.js"></script>

    <!-- DataTables Bootstrap 4 CSS -->
    <link rel="stylesheet" type="text/css" href="vendor/datatables/css/dataTables.bootstrap4.min.css"/>

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
<br>
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                  </div>
                    <?php echo display_msg($msg); ?>
                  <form class="user" method="post" action="auth_v2.php" class="clearfix">
                    <div class="form-label-group">
                      <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username / Email Address">
			    <label for="username">Username / Email Address</label>
                    </div>
                    <div class="form-label-group">
                      <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password" autocomplete="on">
			    <label for="password">Password</label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot_password.php">Forgot Password?</a>
                  </div>
                </div>
<br>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="vendor/popper.js/dist/umd/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/bootstrap-switch/dist/bootstrap-switch-button.min.js" defer></script>


    <!-- Page level plugins -->
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/js/dataTables.bootstrap4.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery/easing/jquery.easing.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Chart.js CDN -->
<script src="vendor/chart.js/dist/Chart.min.js"></script>



    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>





</body>

</html>
