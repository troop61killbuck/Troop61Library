<!DOCTYPE html> 
 <?php require_once('layouts/variables.php');?> 

<html lang="en">

<?php
        $page_name = "Alerts";
        require_once('layouts/head.php');
    // Checkin What level user has permission to view this page
        page_require_level(0);
$location = $_GET['location'];
$alert = find_by_id($location,(int)$_GET['id']);
if(!$alert){
$session->msg("d","Missing alert id.");
        redirect('admin_dashboard.php');
}
if(isset($_GET['redirect'])){
	$redirect = base64_encode($_GET['redirect']);
} else {
	$redirect = base64_encode(basename($_SERVER['REQUEST_URI']));
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
                <a href="<?php echo $redirect;?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-arrow-circle-left fa-sm text-white-50"></i> Back</a>
                <br>
                <br>
                <!-- Content Row -->
                <div class="col-md-12">
                    <?php echo display_msg($msg); ?>
                </div>
		<?php if ($alert['location'] == "book_requests"):?>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="d-sm-flex align-items-center justify-content-between">
					<!--<div class="row justify-content-between">-->
						<div class="col-lg-1">
                            			<div class="icon-circle bg-primary">
                        				<i class="fas fa-book text-white"></i>
                    				</div>
						</div>
						<div class="col-lg-9">
							<h1 class="h3 mb-0 text-gray-800 text-center"><span class="font-weight-bold">[Book Request] - <?php echo remove_junk($alert['book_requesting']); ?></span> ( <?php echo remove_junk($alert['name']); ?> )</h1>
						</div>
						<div class="col-lg-2">
							<div class="small text-gray-500 text-right"><b>Date:  </b><?php echo read_date($alert['datetime_submitted']); ?></div>
						</div>
					</div>
                        </div>
                        <div class="card-body">
					<div class="row">
    						<div class="col">
      				<form>
					  <div class="form-group">
                                    <label><b>Name</b></label>
                                    <input type="text" class="form-control" value="<?php echo remove_junk($alert['name']); ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label><b>Email</b></label>
                                    <input type="text" class="form-control" value="<?php echo remove_junk($alert['email']); ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label><b>Book Requesting</b></label>
                                    <input type="text" class="form-control" value="<?php echo remove_junk($alert['book_requesting']); ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label><b>Date Requested</b></label>
                                    <input type="text" class="form-control" value="<?php echo read_date($alert['datetime_submitted']); ?>" disabled>
                                </div>
                            </form>
    						</div>
    						<div class="col-sm-auto">
      						<div class="float-center">
		    						<?php if ($notification['status'] == "0"): ?>
									<a style="text-decoration: none; color: #3a3b45;" href="mark_alert.php?id=<?php echo $_GET['id']?>&status=read&location=<?php echo $notification['location'];?>&redirect=<?php echo $redirect;?>" data-toggle="tooltip" data-placement="top" title="Mark As Read">
										<div>
                    								<i class="fas fa-check-circle fa-3x"></i>
                  							</div>
									</a>
		    						<?php elseif ($notification['status'] == "1"): ?>
									<a style="text-decoration: none; color: #3a3b45;" href="mark_alert.php?id=<?php echo $notification['id'];?>&status=unread&location=<?php echo $notification['location'];?>&redirect=<?php echo $redirect;?>" data-toggle="tooltip" data-placement="top" title="Mark As Unread">
										<div>
                     								<i class="fas fa-times-circle fa-3x"></i>
                  							</div>
									</a>
		    						<?php endif;?>
							</div>
   						 </div>
					
					
           			</div>

		<?php elseif ($alert['location'] == "contact_us_responses"):?>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="d-sm-flex align-items-center justify-content-between">
					<!--<div class="row justify-content-between">-->
						<div class="col-lg-1">
                            			<div class="icon-circle bg-primary">
                        				<i class="fas fa-book text-white"></i>
                    				</div>
						</div>
						<div class="col-lg-9">
							<h1 class="h3 mb-0 text-gray-800 text-center"><span class="font-weight-bold">[Contact Us Message] - <?php echo remove_junk($alert['name']); ?></span></h1>
						</div>
						<div class="col-lg-2">
							<div class="small text-gray-500 text-right"><b>Date:  </b><?php echo read_date($alert['datetime_submitted']); ?></div>
						</div>
					</div>
                        </div>
                        <div class="card-body">
					<div class="row">
    						<div class="col">
      				<form>
					  <div class="form-group">
                                    <label><b>Name</b></label>
                                    <input type="text" class="form-control" value="<?php echo remove_junk($alert['name']); ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label><b>Email</b></label>
                                    <input type="text" class="form-control" value="<?php echo remove_junk($alert['email']); ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label><b>Message</b></label>
                                    <textarea type="text" class="form-control" disabled><?php echo remove_junk($alert['message']); ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label><b>Date Submitted</b></label>
                                    <input type="text" class="form-control" value="<?php echo read_date($alert['datetime_submitted']); ?>" disabled>
                                </div>
                            </form>
    						</div>
    						<div class="col-sm-auto">
      						<div class="float-center">
		    						<?php if ($notification['status'] == "0"): ?>
									<a style="text-decoration: none; color: #3a3b45;" href="mark_alert.php?id=<?php echo $_GET['id']?>&status=read&location=<?php echo $notification['location'];?>&redirect=<?php echo $redirect;?>" data-toggle="tooltip" data-placement="top" title="Mark As Read">
										<div>
                    								<i class="fas fa-check-circle fa-3x"></i>
                  							</div>
									</a>
		    						<?php elseif ($notification['status'] == "1"): ?>
									<a style="text-decoration: none; color: #3a3b45;" href="mark_alert.php?id=<?php echo $notification['id'];?>&status=unread&location=<?php echo $notification['location'];?>&redirect=<?php echo $redirect;?>" data-toggle="tooltip" data-placement="top" title="Mark As Unread">
										<div>
                     								<i class="fas fa-times-circle fa-3x"></i>
                  							</div>
									</a>
		    						<?php endif;?>
							</div>
   						 </div>
					
					
           			</div>
		<?php endif;?>
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
