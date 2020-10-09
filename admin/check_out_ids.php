<!DOCTYPE html>
<html lang="en">

<?php
        $page_name = "Check Out Catalog Item";
        require_once('layouts/head.php');
    // Checkin What level user has permission to view this page
        page_require_level(0);
?>

<?php
	if(isset($_GET['catalogID'])) {
    		$catalogID = $_GET['catalogID'];
		$book_information = find_by_id('book_catalog',$catalogID);
	} else { 
		die ('Failed to Get Catalog ID');
	}
	if(isset($_GET['redirect'])) {
    		$redirect = $_GET['redirect'];
	}
	if(isset($_GET['memberID'])) {
    		$memberID = $_GET['memberID'];
	} else { 
		die ('Failed to Get Member ID');
	}
	if(isset($_GET['ID'])) {
    		$ID = $_GET['ID'];
	} else { 
		die ('Failed to Get ID');
	}

?>
<?php
if(isset($_POST['circulate'])){

    $req_fields = array('catalogID','memberID');
    validate_fields($req_fields);

    if(empty($errors)){
	  $ID   = remove_junk($db->escape($_POST['ID']));
	  $catalogID = remove_junk($db->escape($_POST['catalogID']));
        $memberID   = remove_junk($db->escape($_POST['memberID']));
	  $date = make_date();
	  

	  $book_checked_out = check_if_loaned($catalogID);
	  if($book_checked_out['status'] === "2"){
            $session->msg('d',"Book Already Checked Out ");
            redirect($redirect, false);
        } elseif($book_checked_out['status'] === "0" || $book_checked_out['status'] === "1"){

        $sql = "UPDATE book_circulations SET book_id = '{$catalogID}', member_id = '{$memberID}', date_checked_out = '{$date}', status = '1' WHERE id = '{$ID}'";
        $result = $db->query($sql);
	  $sql2 = "UPDATE book_catalog SET status = '2' WHERE id = '{$catalogID}'";
        $result2 = $db->query($sql2);
        if($result && $result2){
            $session->msg('s',"Checked Out");
            redirect($redirect, false);
        } else {
            $session->msg('d',' Checked Out failed!');
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
                        <div class="card-header py-3">
                            <div class="d-sm-flex align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary"><b>Circulate</b> <?php echo $book_information['title'];?>:</h6>
                        </div>
                        </div>
                        <div class="card-body">
				  <div class="modal-body">
					<form method="post" action="check_out_ids.php?ID=<?php echo $ID;?>&catalogID=<?php echo remove_junk($book_information['id'])?>&memberID=<?php echo $memberID;?>&redirect=<?php echo $redirect;?>">
                               	<div class="form-group">
                                    	<label for="catalogID"><b>Catalog Item ID</b></label>
                                    	<input type="text" class="form-control" name="catalogID" value="<?php echo $book_information['id'];?>" pattern="4061.+" minlength="8" maxlength="8" title="Must Be In The Following Format: 4061####" readonly> 
                                	</div>
                                	<div class="form-group">
                                    	<label for="memberID"><b>Member ID</b></label>
                                    	<input type="text" class="form-control" name="memberID" value="<?php echo $memberID;?>" pattern="100.+" id="memberID" minlength="6" maxlength="6" title="Must Be In The Following Format: 100###" readonly> 
                                	</div>
							<input type="hidden" id="ID" name="ID" value="<?php echo $ID;?>">
				  </div>
            		  <div class="modal-footer">
                			<a href="<?php echo $redirect;?>" class="btn btn-secondary" type="button" >Cancel</a>
                			<button class="btn btn-primary" type="submit" name="circulate">Submit</button>
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
