<!DOCTYPE html>
<html lang="en">

<?php
$page_name = "Add Group";
	  $users_active = "active";
	  $users_show = "show";
	  $agroup_dropdown_active = "active";
require_once('layouts/head.php');
// Checkin What level user has permission to view this page
page_require_level(0);
?>

<?php
if(isset($_POST['add'])){

    $req_fields = array('group-name','group-level');
    validate_fields($req_fields);

    if(find_by_groupName($_POST['group-name']) === false ){
        $session->msg('d','<b>Sorry!</b> Entered Group Name already in database!');
        redirect('add_group.php', false);
    }elseif(find_by_groupLevel($_POST['group-level']) === false) {
        $session->msg('d','<b>Sorry!</b> Entered Group Level already in database!');
        redirect('add_group.php', false);
    }
    if(empty($errors)){
        $name = remove_junk($db->escape($_POST['group-name']));
        $level = remove_junk($db->escape($_POST['group-level']));


        $query  = "INSERT INTO user_groups (";
        $query .="group_name,group_level";
        $query .=") VALUES (";
        $query .=" '{$name}', '{$level}'";
        $query .=")";
        if($db->query($query)){
            //sucess
    activityLog($user['name']." added a group.");

            $session->msg('s',"Group has been created! ");
            redirect('group.php', false);
        } else {
            //failed
            $session->msg('d',' Sorry failed to create Group!');
            redirect('group.php', false);
        }
    } else {
        $session->msg("d", $errors);
        redirect('group.php',false);
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
                            <h6 class="m-0 font-weight-bold text-primary">Add Group Form</h6>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="add_group.php" class="clearfix">
                            <div class="form-group">
                                <label for="name" class="control-label">Group Name</label>
                                <input type="name" class="form-control" name="group-name">
                            </div>
                            <div class="form-group">
                                <label for="level" class="control-label">Group Level</label>
                                <input type="number" class="form-control" name="group-level">
                            </div>
                            <div class="form-group clearfix">
                                <button type="submit" name="add" class="btn btn-info">Submit</button>
                            </div>
                        </form>
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
