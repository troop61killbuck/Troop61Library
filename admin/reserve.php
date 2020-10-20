<!DOCTYPE html>
<html lang="en">

<?php
        $page_name = "Reserve Catalog Item";
        require_once('layouts/head.php');
    // Checkin What level user has permission to view this page
        page_require_level(0);
?>

<?php
	if(isset($_GET['redirect'])) {
    		$redirect = $_GET['redirect'];
	}
	if(isset($_GET['catalogID'])) {
    		$catalogID = $_GET['catalogID'];
		$session->msg('s','Catalog ID Detected, Redirected To ID Locked Reserve');
            redirect('reserve_id.php?catalogID='.$catalogID.'&redirect='.$redirect, false);
	}
?>

<?php
if(isset($_POST['reserve'])){

    $req_fields = array('catalogID','memberID');
    validate_fields($req_fields);

    if(empty($errors)){
        $catalogIDa = remove_junk($db->escape($_POST['catalogID']));
	  $book_checked_out = check_if_loaned($catalogIDa);
	  if($book_checked_out['status'] === "1") {
            $session->msg('d',"Book On Hold, If You Are Trying To Check It Out Please Select Check Out In The Table Next To The Book Title And ID From The List Of Circulations");
            redirect($redirect, false);
        } elseif($book_checked_out['status'] === "2") {
            $session->msg('d',"Book Already Checked Out ");
            redirect($redirect, false);
        } elseif($book_checked_out['status'] === "0") {
	  
        $memberID   = remove_junk($db->escape($_POST['memberID']));
	  $date = make_date();
	  
	  $randID = randString(11);

	  $check = $db->query("SELECT COUNT(1) FROM book_circulations WHERE randomID = '$randID'");
	  $row = $check->fetch_row();
	  
	  if($row[0] >= 1) {
		$randID = randString(11);
  	  } elseif($row[0] == 0) {
	  }

                $sql = "INSERT INTO book_circulations (book_id,member_id,date_checked_out,status,randomID) VALUES ('{$catalogIDa}','{$memberID}','{$date}','0','{$randID}')";
        	    $result = $db->query($sql);
	  	    $sql2 = "UPDATE book_catalog SET status = '1', CirculationsAssociatedID = '$randID' WHERE id = '{$catalogIDa}'";
        	    $result2 = $db->query($sql2);
        	    if($result && $result2){
    activityLog($user['name']." reserved an item.");

            	    $session->msg('s',"Reserved");
            	    redirect($redirect, false);
        	    } else {
            	    $session->msg('d',' Reserved failed!');
            	    redirect($redirect, false);
        	    }
	}
    } else {
        $session->msg("d", $errors);
        redirect($redirect,false);
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
                        <div class="card-body">
					<div class="modal-body">
					<form method="post" action="reserve.php?redirect=<?php echo $redirect;?>">
                               	<div class="form-group">
                                    	<label for="catalogID"><b>Catalog Item ID</b></label>
                                    	<input type="text" class="form-control" name="catalogID" pattern="4061.+" minlength="8" maxlength="8" title="Must Be In The Following Format: 4061####" autofocus> 
                                	</div>
                                	<div class="form-group">
                                    	<label for="memberID"><b>Member ID</b></label>
                                    	<input type="text" class="form-control" name="memberID" pattern="100.+" id="memberID" minlength="6" maxlength="6" title="Must Be In The Following Format: 100###"> 
                                	</div>
				  </div>
            		  <div class="modal-footer">
                			<a href="<?php echo $redirect;?>" class="btn btn-secondary" type="button">Cancel</a>
                			<button class="btn btn-primary" type="submit" name="reserve">Submit</button>
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
