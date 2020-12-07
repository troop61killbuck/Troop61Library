    <!-- Start: Navigation-->
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container">
            <div class="d-none d-sm-block"><img src="assets/img/scenery/Troop61.png?h=ac0a7c708392af5ecb7eff82766a0861" width="50px" title="Troop 61"></div><a class="navbar-brand logo" href="index.php" style="margin: 0 16px 0 16px;">Troop 61 Library</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link <?php echo $home_active;?>" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo $catalog_active;?>" href="catalog-page.php">Catalog</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo $search_active;?>" href="search.php">Search Catalog</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo $contact_active;?>" href="contact-us.php">Contact Us</a></li>
<?php if($session->isMemberLoggedIn(true)):?>
                    <li class="nav-item dropdown <?php echo $dropdown_active;?>"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><?php echo $user['name'];?></a>
                        <div class="dropdown-menu">
					<a class="dropdown-item" href="settings.php">Settings</a>
					<a class="dropdown-item" href="account.php">My Account</a>
                              <hr style="margin: 8px;margin-top: 8px;margin-right: 16px;margin-left: 16px;">
					<a class="dropdown-item" href="logout.php?redirect=<?php echo $redirect;?>">Log Out</a></div>
                    </li>
<?php else:?>
                    <li class="nav-item"><a class="nav-link <?php echo $login_active;?>" href="login.php">Sign In</a></li>
<?php endif;?>
                    <li class="nav-item"></li>
                </ul>
        </div>
        </div>
    </nav>
    <!-- End: Navigation-->