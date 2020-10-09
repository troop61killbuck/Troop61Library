<!DOCTYPE html>
<html lang="en">

<?php
        $page_name = "Edit Member";
        require_once('layouts/head.php');
    // Checkin What level user has permission to view this page
        page_require_level(0);
?>

<?php
$e_member = find_by_id('members',(int)$_GET['id']);
$groups  = find_all('member_groups');
if(!$e_member){
    $session->msg("d","Missing user id.");
    redirect('members.php');
}
?>

<?php
//Update User basic info
if(isset($_POST['update'])) {
    $req_fields = array('name','username','group','login');
    validate_fields($req_fields);

    if(empty($errors)){
        $id = (int)$e_member['id'];
        $name = remove_junk($db->escape($_POST['name']));
        $username = remove_junk($db->escape($_POST['username']));
        $group = (int)$db->escape($_POST['group']);
        $status   = remove_junk($db->escape($_POST['status']));
        $login   = remove_junk($db->escape($_POST['login']));
        $sql = "UPDATE members SET name ='{$name}', username ='{$username}',`group`='{$group}',status='{$status}',login='{$login}' WHERE id='{$db->escape($id)}'";
        $result = $db->query($sql);
        if($result && $db->affected_rows() === 1){
            $session->msg('s',"Account Updated ");
            redirect('members.php', false);
        } else {
            $session->msg('d',' Sorry failed to update!');
            redirect('edit_member.php?id='.(int)$e_member['id'], false);
        }
    } else {
        $session->msg("d", $errors);
        redirect('edit_member.php?id='.(int)$e_member['id'],false);
    }
}
?>
<?php
// Update user password
if(isset($_POST['update-pass'])) {
    $req_fields = array('password');
    validate_fields($req_fields);
    if(empty($errors)){
        $id = (int)$e_member['id'];
        $password = remove_junk($db->escape($_POST['password']));
        $h_pass   = sha1($password);
        $sql = "UPDATE members SET password='{$h_pass}' WHERE id='{$db->escape($id)}'";
        $result = $db->query($sql);
        if($result && $db->affected_rows() === 1){
            $session->msg('s',"User password has been updated ");
            redirect('members.php', false);
        } else {
            $session->msg('d',' Sorry failed to update user password!');
            redirect('edit_member.php?id='.(int)$e_member['id'], false);
        }
    } else {
        $session->msg("d", $errors);
        redirect('edit_member.php?id='.(int)$e_member['id'],false);
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
                            <h6 class="m-0 font-weight-bold text-primary">Edit <?php echo remove_junk(ucwords($e_member['name'])); ?>'s Account Form</h6>
                        </div>
                        </div>
                        <div class="card-body">
                            <form method="post" action="edit_member.php?id=<?php echo (int)$e_member['id'];?>" class="clearfix">
                                <div class="form-group">
                                    <label for="name" class="control-label"><b>Name</b></label>
                                    <input type="name" class="form-control" name="name" placeholder="Enter User's Full Name" value="<?php echo remove_junk(ucwords($e_member['name'])); ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="username" class="control-label"><b>Username</b></label>
                                    <input type="text" class="form-control" name="username" placeholder="Enter User's Username" value="<?php echo remove_junk(ucwords($e_member['username'])); ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="login"><b>Member Has Login Privileges?</b></label>
                                    <select class="form-control" name="login">
                                        <option <?php if($e_member['login'] === '1') echo 'selected="selected"';?>value="1">Yes</option>
                                        <option <?php if($e_member['login'] === '0') echo 'selected="selected"';?> value="0">No</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="group"><b>User Role</b></label>
                                    <select class="form-control" name="group">
                                        <?php foreach ($groups as $group ):?>
                                            <option <?php if($group['group_level'] === $e_member['user_level']) echo 'selected="selected"';?> value="<?php echo $group['group_level'];?>"><?php echo ucwords($group['group_name']);?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="status"><b>Status</b></label>
                                    <select class="form-control" name="status">
                                        <option <?php if($e_member['status'] === '0') echo 'selected="selected"';?>value="0">Active</option>
                                        <option <?php if($e_member['status'] === '1') echo 'selected="selected"';?> value="1">Deactive</option>
                                    </select>
                                </div>
                                <div class="form-group clearfix">
                                    <button type="submit" name="update" class="btn btn-info">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <div class="d-sm-flex align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Change <?php echo remove_junk(ucwords($e_member['name'])); ?>'s Password</h6>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="edit_member.php?id=<?php echo (int)$e_member['id'];?>" method="post" class="clearfix">
                            <div class="form-group">
                                <label for="password" class="control-label"><b>Password</b></label>
                                <input type="password" class="form-control" name="password" placeholder="Type Members New Password" id="newPassword">
                            </div>
                            <div class="form-group clearfix">
                                <button type="submit" name="update-pass" class="btn btn-danger pull-right">Change</button>
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
