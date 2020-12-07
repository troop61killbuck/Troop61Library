<!DOCTYPE html> 
 <?php require_once('layouts/variables.php');?> 

<html lang="en">

<?php
        $page_name = "Edit Media";
        require_once('layouts/head.php');
    // Checkin What level user has permission to view this page
        page_require_level(0);
?>

<?php
$e_media = find_by_id('book_media',(int)$_GET['id']);
if(!$e_media){
    $session->msg("d","Missing user id.");
    redirect('book_media.php');
}
?>

<?php
//Update User basic info
if(isset($_POST['update'])) {
    $req_fields = array('title');
    validate_fields($req_fields);

    if(empty($errors)){
        $id = (int)$e_media['id'];
        $title = remove_junk($db->escape($_POST['title']));
        $sql = "UPDATE book_media SET name ='{$title}' WHERE id='{$db->escape($id)}'";
        $result = $db->query($sql);
        if($result && $db->affected_rows() === 1){
    activityLog($user['name']." updated a media item.");
            $session->msg('s',"Account Updated ");
            redirect('book_media.php', false);
        } else {
            $session->msg('d',' Sorry failed to update!');
            redirect('edit_media.php?id='.(int)$e_media['id'], false);
        }
    } else {
        $session->msg("d", $errors);
        redirect('edit_media.php?id='.(int)$e_media['id'],false);
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
                            <h6 class="m-0 font-weight-bold text-primary">Edit Media</h6>
                        </div>
                        </div>
                        <div class="card-body">
                            <form method="post" action="edit_media.php?id=<?php echo (int)$e_media['id'];?>" class="clearfix">
                                <div class="form-group">
                                    <label for="title" class="control-label"><b>Image Name</b></label>
                                    <input type="name" class="form-control" name="title" value="<?php echo remove_junk(ucwords($e_media['name'])); ?>">
                                </div>
                                <div class="form-group clearfix">
                                    <button type="submit" name="update" class="btn btn-info">Update</button>
                                </div>
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
