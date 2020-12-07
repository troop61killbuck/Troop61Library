<!DOCTYPE html> 
 <?php require_once('layouts/variables.php');?> 
<html>

<?php
    $page_name = "Contact Us";
    $contact_active = "active";
	require_once('layouts/head.php');
?>

<body style="background: rgb(241,247,252);">
<?php require_once('layouts/navbar.php');?>
    <!-- Start: Contact Form Clean -->
    <div class="contact-clean" style="margin-top: 80px;">
        <form method="post">
            <h2 class="text-center">Contact Us</h2>
            <!-- Start: Success Example -->
            <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Name"></div>
            <!-- End: Success Example -->
            <!-- Start: Error Example -->
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
            <!-- End: Error Example -->
            <div class="form-group"><textarea class="form-control" name="message" placeholder="Message" rows="14"></textarea></div>
            <div class="form-group"><button class="btn btn-primary" type="submit">send </button></div>
        </form>
    </div>
    <!-- End: Contact Form Clean -->
<?php require_once('layouts/footer.php');?>
</body>

</html>