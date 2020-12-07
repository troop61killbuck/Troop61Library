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
    <main class="page landing-page">
        <section class="clean-block clean-hero" style="background-image: url(&quot;assets/img/tech/used-books-store-2.jpg?h=ad8ddc4af91ef090f4f8d16d4e61c7b9&quot;);color: rgba(9, 162, 255, 0.85);">
            <div class="text">
                <div class="col-md-12">
                    <?php echo display_msg($msg); ?>
                </div>
                <h2>Welcome to the Troop 61 Library</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
            </div>
        </section>
        <section class="clean-block clean-info dark">
            <div class="container">
                <div class="block-heading">

                    <h2 class="text-info">Info</h2>
                    <p>Welcome to the new library cataloging system for Troop 61 in Wooster, Ohio. You can use the links at the top of the page, or below to start your search.</p>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6"><img class="img-thumbnail" src="assets/img/scenery/image5.jpg?h=5a16d46fccd884924ce66752802d76c5"></div>
                    <div class="col-md-6">
                        <h3>Lorem impsum dolor sit amet</h3>
                        <div class="getting-started-info">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div><button class="btn btn-outline-primary btn-lg" type="button">Join Now</button></div>
                </div>
            </div>
        </section>
        <section class="clean-block about-us">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">About Us</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                </div>
            </div>
        </section>
    </main>
    <!-- Start: Footer Dark -->
    <?php require_once('layouts/footer.php');?>
</body>

</html>