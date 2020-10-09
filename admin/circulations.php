<!DOCTYPE html>
<html lang="en">

<?php
        $page_name = "Circulations";
	  $circulations_active = "active";
        require_once('layouts/head.php');
    // Checkin What level user has permission to view this page
        page_require_level(0);
?>

<?php

	if(isset($_GET['redirect'])) {
		$redirect = $_GET['redirect'];
	} else {
		$redirect = 'circulations.php';
	}

	if(isset($_GET['catalogID'])) {
		$catalogID = $_GET['catalogID'];
      	$all_circulations = find_all_circulations_id($catalogID);
	} elseif(isset($_GET['memberHistory'])) {
		$memberHistory = $_GET['memberHistory'];
      	$all_circulations = find_all_circulations_history('member_id',$memberHistory);
		$book_information = find_by_id('members',$memberHistory);
		$page_name = "Member Circulation History - ".remove_junk(ucwords($book_information['name']));
	} elseif(isset($_GET['catalogHistory'])) {
		$catalogHistory = $_GET['catalogHistory'];
      	$all_circulations = find_all_circulations_history('book_id',$catalogHistory);
		$book_information = find_by_id('book_catalog',$catalogHistory);
		$page_name = "Circulation History - ".remove_junk(ucwords($book_information['title']));
	} else {
		$all_circulations = find_all_circulations();
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
		<?php if(isset($_GET['memberHistory']) || isset($_GET['catalogHistory'])):?>
                <!-- Page Heading -->
                <a href="<?php echo $redirect;?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-arrow-circle-left fa-sm text-white-50"></i> Back</a>
                <br>
                <br>
		<?php endif;?>

                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800"><?php echo $page_name; ?></h1>
                </div>

                <!-- Content Row -->
                <div class="col-md-12">
                    <?php echo display_msg($msg); ?>
                </div>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="d-sm-flex align-items-center justify-content-right">
                            <a href="reserve.php?redirect=<?php echo $redirect;?>" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm float-right"><i class="fas fa-user-clock fa-sm text-white-50"></i> Reserve Item</a>&nbsp &nbsp 
                            <a href="check_out.php?redirect=<?php echo $redirect;?>" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm float-right"><i class="fas fa-arrow-circle-right fa-sm text-white-50"></i> Check Out Item</a>&nbsp &nbsp 
                            <a href="add_catalog.php?redirect=<?php echo $redirect;?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm float-right"><i class="fas fa-check-circle fa-sm text-white-50"></i> Return Item</a> 
                        </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th class="text-center" style="width: 50px;">#</th>
                                        <th class="text-center" style="width: 33%;">Book Title / ID</th>
                                        <th class="text-center" style="width: 20%;">Member Name / ID</th>
						    <th class="text-center" style="width: 150px;">Date Checked Out</th>
                                        <th class="text-center" style="width: 100px;">Status</th>
                                        <th class="text-center" style="width: 250px;">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($all_circulations as $a_circulations): ?>
                                    <tr>
                                        <td class="text-center"><?php echo count_id();?></td>
                                        <td class="text-center"><?php echo remove_junk(ucwords($a_circulations['title']))?><br><?php echo remove_junk($a_circulations['book_id'])?></td>
                                        <td class="text-center"><?php echo remove_junk(ucwords($a_circulations['name']))?><br><?php echo remove_junk($a_circulations['member_id'])?></td>
                                        <td class="text-center"><?php echo remove_junk(read_date($a_circulations['date_checked_out']))?></td>
                                        <td class="text-center">
								<?php if ($a_circulations['status'] == '0'): ?>
									<b>Requested</b>
								<?php elseif ($a_circulations['status'] == '1'): ?>
									<b>Issued</b>
								<?php elseif ($a_circulations['status'] == '2'): ?>
									<b>Returned</b>
									<br>
									<?php echo remove_junk(read_date($a_circulations['date_checked_in']));?>
								<?php endif; ?>
						    </td>
                                        <td class="text-center">
                                                <?php if ($a_circulations['status'] == '0'): ?>
									<a href="cancel_reservation.php?ID=<?php echo remove_junk($a_circulations['id'])?>&catalogID=<?php echo remove_junk($a_circulations['book_id'])?>&redirect=<?php echo $redirect;?>" class="btn btn-xs btn-danger" data-toggle="tooltip" title="Cancel Reservation">
                                                    		<i class="fas fa-times"></i>&nbsp<i class="fas fa-book-open"></i>
                                                	</a>
									<a href="check_out.php?ID=<?php echo remove_junk($a_circulations['id'])?>&catalogID=<?php echo (int)$a_circulations['book_id'];?>&memberID=<?php echo (int)$a_circulations['member_id'];?>&redirect=<?php echo $redirect;?>" class="btn btn-xs btn-success" data-toggle="tooltip" title="Check Out Item">
                                                    		<i class="fas fa-arrow-circle-right"></i>&nbsp<i class="fas fa-book-open"></i>
                                                    	</a>
								<?php elseif ($a_circulations['status'] == '1'): ?>
									<a href="check_in_id.php?id=<?php echo (int)$a_circulations['id'];?>&redirect=<?php echo $redirect;?>" class="btn btn-xs btn-primary" data-toggle="tooltip" title="Check In Item">
                                                    		<i class="fas fa-arrow-circle-left"></i>&nbsp<i class="fas fa-book-open"></i>
                                                    	</a>
								<?php endif; ?>
                                        </td>
                                    </tr>
                                    <?php endforeach;?>
                                    </tbody>
                                </table>
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
