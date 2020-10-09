<!DOCTYPE html>
<html lang="en">

<?php
        $page_name = "Edit Group";
        require_once('layouts/head.php');
    // Checkin What level user has permission to view this page
        page_require_level(0);
?>

<?php
$e_group = find_by_id('user_groups',(int)$_GET['id']);
if(!$e_group){
    $session->msg("d","Missing Group id.");
    redirect('group.php');
}
?>

<?php
if(isset($_POST['update'])){

    $req_fields = array('group-name','group-level');
    validate_fields($req_fields);
    if(empty($errors)){
        $name = remove_junk($db->escape($_POST['group-name']));
        $level = remove_junk($db->escape($_POST['group-level']));

        $query  = "UPDATE user_groups SET ";
        $query .= "group_name='{$name}',group_level='{$level}'";
        $query .= "WHERE ID='{$db->escape($e_group['id'])}'";
        $result = $db->query($query);
        if($result && $db->affected_rows() === 1){
            //sucess
            $session->msg('s',"Group has been updated! ");
            redirect('group.php');
        } else {
            //failed
            $session->msg('d',' Sorry failed to update group');
            redirect('group.php');
        }
    } else {
        $session->msg("d", $errors);
        redirect('group.php');
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
                            <h6 class="m-0 font-weight-bold text-primary">Edit <?php echo remove_junk(ucwords($e_user['name'])); ?>'s Account Form</h6>
                        </div>
                        </div>
                        <div class="card-body">
                            <form method="post" action="edit_group.php?id=<?php echo (int)$e_group['id'];?>" class="clearfix">
                                <div class="form-group">
                                    <label for="name" class="control-label">Group Name</label>
                                    <input type="name" class="form-control" name="group-name" value="<?php echo remove_junk(ucwords($e_group['group_name'])); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="level" class="control-label">Group Level</label>
                                    <input type="number" class="form-control" name="group-level" value="<?php echo (int)$e_group['group_level']; ?>">
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
