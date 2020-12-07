<!DOCTYPE html> 
 <?php require_once('layouts/variables.php');?> 
<html>

<?php
    $page_name = "Forgot Username/Password";
	require_once('layouts/head.php');
?>

<body style="background: rgb(241,247,252);">
<?php require_once('layouts/navbar.php');?>
    <!-- Start: Login Form Dark -->
    <div class="login-dark">
        <form method="post">
            <h2 class="text-center sr-only" style="color: rgb(255,255,255);margin-bottom: 0;">Forgot Username / Password?</h2>
            <div class="illustration" style="padding-top: 0;padding-bottom: 0;"><i class="icon ion-ios-locked-outline"></i>
                <p class="lead text-center" style="color: rgb(255,255,255);">Did you forget your username or password? Please fill out your name and email so we can alert you when it has been reset.</p>
            </div>
            <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Name"></div>
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Submit</button></div><a class="forgot" href="forgot_noEmail.php">Don't have an email address?</a></form>
    </div>
    <!-- End: Login Form Dark -->
<?php require_once('layouts/footer.php');?>
</body>

</html>