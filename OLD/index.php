<!DOCTYPE html> 
 <?php require_once('layouts/variables.php');?> 
<html>

<?php
    $page_name = "Home";
    $home_active = "active";
	require_once('layouts/head.php');
?>

<body>
<?php require_once('layouts/navbar.php');?>
    <!-- Start: 2 Rows 1+3 Columns -->
    <div class="contact-clean" style="margin-top: 80px;">
        <div class="container">
	    <?php echo display_msg($msg); ?>
            <div class="row">
                <div class="col-md-4">
                    <div class="login-clean">
			    <?php if($session->isMemberLoggedIn(true)):?>
                        <form style="height: 525px;">
                            <h2 class="sr-only">Member Logged In</h2>
                            <div class="illustration" style="color: rgb(75,112,221);"><i class="fas fa-user-lock"></i>
                                <h3>Welcome:</h3>
					  <h5><?php echo $user['name'];?></h5>
					  <hr />
					  <p class="forgot">You are successfully logged into Troop 61 Library. Please click on the respective buttons below to update your member information or to safely exit the library.</p>
					  <div class="form-group inline"><a class="btn btn-light btn-block" role="button" href="account.php">Account Settings</a><a class="btn btn-light ml-auto btn-block" role="button" href="logout.php">Log Out</a></div>
                            </div>
				</form>
			    <?php else:?>
                        <form method="post" action="auth_v2.php" style="height: 525px;">
                            <h2 class="sr-only">Login Form</h2>
                            <div class="illustration" style="color: rgb(75,112,221);"><i class="fas fa-user-lock"></i>
                                <h3>Member Login</h3>
                            </div>
                            <div class="form-group"><input class="form-control" type="text" name="username" placeholder="Username"></div>
                            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password" autocomplete="on"></div>
                            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Log In</button></div><a class="forgot" href="forgot.php">Forgot your username or password?</a></form>
			    <?php endif;?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="login-clean">
                        <form method="post" style="height: 525px;">
                            <h2 class="sr-only">Search Form</h2>
                            <div class="illustration" style="color: rgb(75,112,221);"><i class="fas fa-search"></i>
                                <h3>Search Catalog</h3>
                            </div>
                            <div class="form-group"><input class="form-control" type="text" placeholder="Keyword" name="search"></div>
                            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Search</button></div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="login-clean">
                        <form method="post" style="height: 525px;">
                            <h2 class="sr-only">Library Resources</h2>
                            <div class="illustration" style="color: rgb(75,112,221);"><i class="fas fa-folder"></i>
                                <h3>Library Resources</h3>
                            </div>
                            <ul class="list-group">
                                <li class="list-group-item"><span><a href="catalog.php">Full Catalog</a></span></li>
                                <li class="list-group-item"><span><a href="new_arrivals.php">New Arrivals</a></span></li>
                                <li class="list-group-item"><span><a href="contact.php">Contact Us</a></span></li>
                                <li class="list-group-item"><span><a href="admin/index.php">Admin Login</a></span></li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End: 2 Rows 1+3 Columns -->
<?php require_once('layouts/footer.php');?>
</body>

</html>