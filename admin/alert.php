<!DOCTYPE html>
<html lang="en">

<?php
        $page_name = "Alerts";
        require_once('layouts/head.php');
    // Checkin What level user has permission to view this page
        page_require_level(0);

$alert = find_by_id('alerts',(int)$_GET['id']);
if(!$alert){
$session->msg("d","Missing alert id.");
        redirect('admin_dashboard.php');
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

                <!-- Content Row -->
                <div class="col-md-12">
                    <?php echo display_msg($msg); ?>
                </div>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="d-sm-flex align-items-center justify-content-between">
					<!--<div class="row justify-content-between">-->
						<div class="col-lg-1">
                            			<div class="icon-circle bg-<?php echo $alert['color'];?>">
                        				<i class="<?php echo $alert['icon'];?>"></i>
                    				</div>
						</div>
						<div class="col-lg-9">
							<h1 class="h3 mb-0 text-gray-800 text-center"><b><?php echo remove_junk($alert['title']); ?></b></h1>
						</div>
						<div class="col-lg-2">
							<div class="small text-gray-500 text-right"><b>Date:  </b><?php echo read_date($alert['date']); ?></div>
						</div>
					</div>
				    <!--</div>-->
                        </div>
                        <div class="card-body">
					<div class="row">
    						<div class="col">
      						<?php echo remove_junk($alert['message']); ?>
    						</div>
    						<div class="col-sm-auto">
      						<div class="float-center">
		    						<?php if ($alert['viewed'] == "0"): ?>
									<a style="text-decoration: none; color: #3a3b45;" href="#" onclick="markRead('<?php echo $alert['id'];?>')" data-toggle="tooltip" data-placement="bottom" title="Mark As Read">
										<div>
                    								<i class="far fa-envelope-open fa-3x"></i>
                  							</div>
									</a>
		    						<?php elseif ($alert['viewed'] == "1"): ?>
									<a style="text-decoration: none; color: #3a3b45;" href="#" onclick="markUnread('<?php echo $alert['id'];?>')" data-toggle="tooltip" data-placement="bottom" title="Mark As Unread">
										<div>
                     								<i class="far fa-envelope fa-3x"></i>
                  							</div>
									</a>
		    						<?php endif;?>
							</div>
   						 </div>
					
					
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

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
