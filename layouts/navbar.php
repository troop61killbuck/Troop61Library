    <!-- Start: Navigation with Search -->
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top navigation-clean-search" style="background: rgb(75,112,221);color: rgb(255,255,255);">
        <div class="container-fluid"><img class="img-fluid" src="logo/Troop61.png" width="50px"><a class="navbar-brand" href="/index.php" style="margin: 0px 16px 0px 16px;"><?php echo $brand['Name'];?></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol">
                <ul class="nav navbar-nav">
                    <li class="nav-item"><a class="nav-link <?php echo $home_active;?>" href="/index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo $catalog_active;?>" href="/catalog.php">Catalog</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo $search_active;?>" href="/search.php">Search Catalog</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo $contact_active;?>" href="/contact.php">Contact Us</a></li>
                </ul><a class="btn btn-light ml-auto action-button" role="button" href="/admin/index.php" <?php if($session->isMemberLoggedIn(true)):?>style="margin-right: 20px;"<?php endif;?>>Library Administration</a>
<?php if($session->isMemberLoggedIn(true)):?>
<div class="btn-group">
<button type="button" class="btn btn-light ml-auto action-button dropdown-toggle" data-toggle="dropdown"><?php echo $user['name'];?></button>
    <div class="dropdown-menu dropdown-menu-right">
	<a href="settings.php" class="dropdown-item"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>Settings</a>
	<a href="account.php" class="dropdown-item"><i class="fas fa-user-circle fa-sm fa-fw mr-2 text-gray-400"></i>My Account</a>
     <div class="dropdown-divider"></div>
	<a href="logout.php" class="dropdown-item"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Log Out</a></div>
     </div>
<?php endif;?>
</div>

        </div>
    </nav>
    <!-- End: Navigation with Search -->