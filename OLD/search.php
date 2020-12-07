<!DOCTYPE html> 
 <?php require_once('layouts/variables.php');?> 
<html>

<?php
    $page_name = "Search";
    $search_active = "active";
	require_once('layouts/head.php');
?>

<body style="background: rgb(241,247,252);">
<?php require_once('layouts/navbar.php');?>
    <!-- Start: Contact Form Clean -->
    <div class="contact-clean" style="margin-top: 80px;">
        <form method="post" action="search_results.php">
            <h2 class="text-center">Search</h2>
            <!-- Start: Success Example -->
            <div class="form-group"><input class="border rounded form-control" type="text" name="name" placeholder="Name" autofocus=""></div>
            <!-- End: Success Example -->
            <div class="form-group"><button class="btn btn-primary" type="submit">Search</button></div>
        </form>
    </div>
    <!-- End: Contact Form Clean -->
<?php require_once('layouts/footer.php');?>
</body>

</html>