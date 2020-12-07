<!DOCTYPE html>
 <?php require_once('layouts/variables.php');?> 
<html>

<?php
    $page_name = "Contact Us";
    $contact_active = "active";
	require_once('layouts/head.php');
$email_info = find_all_email('contactUs');
?>

<?php
if(isset($_POST['contact-us'])){

    $req_fields = array('name','message');
    validate_fields($req_fields);

    if(empty($errors)){
        $name   = remove_junk($db->escape($_POST['name']));
        $email   = remove_junk($db->escape($_POST['email']));
        $message   = remove_junk($db->escape($_POST['message']));
        $timestamp = date('Y-m-d H:i:s');

        $query = "INSERT INTO `contact_us_responses` (";
        $query .="`name`, `email`, `message`, `datetime_submitted`";
        $query .=") VALUES (";
        $query .="'{$name}', '{$email}', '{$message}', '{$timestamp}'";
        $query .=")";
        if($db->query($query)){
            //sucess
          foreach($email_info as $a_result){
              $email = $a_result['email'];
		  $name = $a_result['name'];
		include('sendgrid/contact_us_email.php');
}
    activityLog("A contact us response was submitted.");
            $session->msg('s','Contact us response submitted!');
            redirect('contact-us.php', false);
        } else {
            //failed
            $session->msg('d','Sorry, failed to submit contact us response!');
            redirect('contact-us.php', false);
        }
    } else {
        $session->msg("d", $errors);
        redirect('contact-us.php',false);
    }
}
?>

<body>
    <?php require_once('layouts/navbar.php');?>
    <main class="page contact-us-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                <div class="col-md-12">
                    <?php echo display_msg($msg); ?>
                </div>
                    <h2 class="text-info">Contact Us</h2>
                    <p>Enter your question or message below, and we will get back to you shorly.</p>
                </div>
      				<form method="post" action="contact-us.php">
					  <div class="form-group">
                                    <label><b>Name*</b></label>
                                    <input type="text" name="name" class="form-control item" placeholder="Enter First and Last Name...">
                                </div>
                                <div class="form-group">
                                    <label><b>Email</b></label>
                                    <input type="text" name="email" class="form-control item" placeholder="Enter Email...">
                                </div>
                                <div class="form-group">
                                    <label><b>Message*</b></label>
                                    <textarea type="text" name="message" class="form-control item" placeholder="Enter Message..."></textarea>
                                </div>
                                <div class="form-group clearfix">
						<button class="btn btn-primary btn-block" name="contact-us" role="submit" type="submit">Submit</button>
                                </div>
                            </form>
        </section>

    </main>
    <!-- Start: Footer Dark -->
    <?php require_once('layouts/footer.php');?>
</body>

</html>