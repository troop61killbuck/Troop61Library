<!DOCTYPE html>
<html>
<?php
	$verificationCode = $_GET['verificationCode'];
	$email = $_GET['email'];
	$id = $_GET['id'];
?>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Troop 61 Library</title>
    <link rel="icon" type="image/png" sizes="262x286" href="assets/img/Troop61.png">
    <link rel="icon" type="image/png" sizes="262x286" href="assets/img/Troop61.png">
    <link rel="icon" type="image/png" sizes="262x286" href="assets/img/Troop61.png">
    <link rel="icon" type="image/png" sizes="262x286" href="assets/img/Troop61.png">
    <link rel="icon" type="image/png" sizes="262x286" href="assets/img/Troop61.png">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css?v=1.0.0">
    <link rel="stylesheet" href="vendor/googlefonts/lora.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="vendor/ionicons/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
    <link rel="stylesheet" href="vendor/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="vendor/swiper/swiper-bundle.min.css">

<style type="text/css">
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}
</style>
</head>

<body>
    <!-- Start: Login Form Dark -->
    <div class="login-dark">
        <form method="post" action="../verify_email.php" class="clearfix">
            <h2 class="text-center sr-only" style="color: rgb(255,255,255);margin-bottom: 0;">Forgot Username / Password?</h2>
            <div class="illustration" style="padding-top: 0;padding-bottom: 0;"><i class="fas fa-mail-bulk"></i>
                <p class="lead text-center" style="color: rgb(255,255,255);">Email Verification</p>
            </div><p class="forgot">Click the button below to verify your email for the Troop 61 Library Administration Software.</p>
		<input type="hidden" name="id" value="1<?php echo $userID;?>">
		<input type="hidden" name="email" value="<?php echo $email;?>">
		<input type="hidden" name="verification_code" value="<?php echo $verificationCode;?>">
            <div class="form-group"><button class="btn btn-primary btn-block" name="verify_email" type="submit">Verify Email</button></div>
        </form>
    </div>
    <!-- End: Login Form Dark -->
    <script src="vendor/jquery/js/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/swiper/swiper-bundle.js"></script>
    <script src="vendor/swiper/swiper-bundle.min.js"></script>
</body>

</html>