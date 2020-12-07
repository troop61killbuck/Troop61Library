<!DOCTYPE html>
 <?php require_once('layouts/variables.php');?> 
<html>

<?php
    $page_name = "Login";
    $login_active = "active";
    require_once('layouts/head.php');
    if($session->isMemberLoggedIn(true)){
        $session->msg("w", "You are already logged in.");
        redirect('index.php');
    }
?>

<body>
    <?php require_once('layouts/navbar.php');?>
    <main class="page login-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Log In</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                </div>
                <form method="post" action="auth_v2.php">
                            <div class="form-group"><label for="username">Username</label><input class="form-control" type="text" name="username" placeholder="Username"></div>
                            <div class="form-group"><label for="password">Password</label><input class="form-control" type="password" name="password" placeholder="Password" autocomplete="on"></div>
                            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Log In</button></div><a class="forgot" href="forgot.php">Forgot your username or password?</a>
		    </form>
            </div>
        </section>
    </main>
    <!-- Start: Footer Dark -->
    <?php require_once('layouts/footer.php');?>
</body>

</html>