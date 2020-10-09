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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
</body>

</html>