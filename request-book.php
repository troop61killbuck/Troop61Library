<!DOCTYPE html>
 <?php require_once('layouts/variables.php');?> 
<html>

<?php
    $page_name = "Request Catalog Item";
    $contact_active = "active";
	require_once('layouts/head.php');
$email_info = find_all_email('bookRequests');
$title = urldecode($_GET['catalogName']);
?>

<?php
if(isset($_POST['request-book'])){

    $req_fields = array('name','book-name');
    validate_fields($req_fields);

    if(empty($errors)){
        $name   = remove_junk($db->escape($_POST['name']));
        $email   = remove_junk($db->escape($_POST['email']));
        $book_name   = remove_junk($db->escape($_POST['book-name']));
        $timestamp = date('Y-m-d H:i:s');

        $query = "INSERT INTO `book_requests` (";
        $query .="`name`, `email`, `book_requesting`, `datetime_submitted`";
        $query .=") VALUES (";
        $query .="'{$name}', '{$email}', '{$book_name}', '{$timestamp}'";
        $query .=")";
        if($db->query($query)){
            //sucess
          foreach($email_info as $a_result){
              $email = $a_result['email'];
		  $name = $a_result['name'];
		include('sendgrid/book_request_email.php');
}
    activityLog("A contact us response was submitted.");
            $session->msg('s','Catalog item request submitted!');
            redirect('request-book.php', false);
        } else {
            //failed
            $session->msg('d','Sorry, failed to submit request!');
            redirect('request-book.php', false);
        }
    } else {
        $session->msg("d", $errors);
        redirect('request-book.php',false);
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
                    <h2 class="text-info">Request Catalog Item</h2>
                    <p>Enter your request below, and we will get back to you shorly.</p>
                </div>
      				<form method="post" action="request-book.php">
					  <div class="form-group">
                                    <label><b>Name*</b></label>
                                    <input type="text" name="name" class="form-control item" <?php if($session->isMemberLoggedIn(true)){ echo 'value="'.remove_junk($user['name']).'" readonly';} ?> placeholder="Enter First and Last Name...">
                                </div>
                                <div class="form-group">
                                    <label><b>Email</b></label>
                                    <input type="text" name="email" class="form-control item" value="<?php echo remove_junk($alert['email']); ?>" placeholder="Enter Email...">
                                </div>
                                <div class="form-group">
                                    <label><b>Book Requesting*</b></label>
                                    <textarea type="text" name="book-name" class="form-control item" placeholder="Enter Book Name That You Are Requesting..." <?php if(isset($_GET['catalogName'])){ echo 'readonly';} ?>><?php if(isset($_GET['catalogName'])){ echo $title;} ?></textarea>
                                </div>
                                <div class="form-group clearfix">
						<button class="btn btn-primary btn-block" name="request-book" role="submit" type="submit">Submit</button>
                                </div>
                            </form>
        </section>

    </main>
    <!-- Start: Footer Dark -->
    <?php require_once('layouts/footer.php');?>
</body>

</html>