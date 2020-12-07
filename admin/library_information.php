<!DOCTYPE html> 
 <?php require_once('layouts/variables.php');?> 

<html lang="en">

<?php
$page_name = "Library Information";
$library_info_active = "active";
require_once('layouts/head.php');
page_require_level(0);
$lib_information = find_by_id('library_information',1);
$email_info = find_all_email('libraryInfoChange');
?>

<?php
if(isset($_POST['update_lib_information'])){

    $req_fields = array('lib_name','lib_description','lib_email','apiKey');
    validate_fields($req_fields);

    if(empty($errors)){
        $lib_name   = remove_junk($db->escape($_POST['lib_name']));
        $lib_description   = remove_junk($db->escape($_POST['lib_description']));
        $lib_email   = remove_junk($db->escape($_POST['lib_email']));
        $apiKey   = remove_junk($db->escape($_POST['apiKey']));
        $query = "UPDATE `library_information` SET `Name` = '{$lib_name}', `Description` = '{$lib_description}', `Email` = '{$lib_email}', `apiKey` = '{$apiKey}' WHERE `id` = 1";
        if($db->query($query)){
            //sucess
    activityLog($user['name']." updated library information.");

          foreach($email_info as $a_result){
              $email = $a_result['email'];
		  $name = $a_result['name'];
		include('sendgrid/library_information_email.php');
}
            $session->msg('s',"Library Information Updated");
            redirect('library_information.php', false);
        } else {
            //failed
            $session->msg('d','Failed To Update Library Information');
            redirect('library_information.php', false);
        }
    } else {
        $session->msg("d", $errors);
        redirect('library_information.php',false);
    }
}
?>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <?php require_once('layouts/sidebar.php'); ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <?php require_once('layouts/topbar.php'); ?>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800"><?php echo $page_name; ?></h1>
                </div>

                <!-- Content Row -->
                <div class="col-md-12">
                    <?php echo display_msg($msg); ?>
                </div>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Library Info</h6>
                        </div>
                        <div class="card-body">
                    <form method="post" action="library_information.php">
                        <div class="form-group">
                            <label for="lib_name">Library Name</label>
                            <input name="lib_name" maxlength="255" type="text" value="<?php echo remove_junk($lib_information['Name']); ?>" id="lib_name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="lib_description">Description</label>
                            <textarea name="lib_description" class="form-control" cols="30" rows="6" id="lib_description"><?php echo remove_junk($lib_information['Description']); ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="lib_email">Sendgrid Sender Email</label>
                            <input name="lib_email" maxlength="100" type="email" aria-describedby="emailHelp" value="<?php echo remove_junk($lib_information['Email']); ?>" id="lib_email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="apiKey">Sendgrid API Key</label>
                            <input name="apiKey" maxlength="100" value="<?php echo remove_junk($lib_information['apiKey']); ?>" id="apiKey" class="form-control">
                        </div>
                        <button name="update_lib_information" type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                    </div>
                </div>

            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <?php require_once('layouts/footer.php'); ?>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<?php require_once('layouts/logout_page.php'); ?>

<!-- Scripts-->
<?php require_once('layouts/page_scripts.php'); ?>

</body>

</html>
