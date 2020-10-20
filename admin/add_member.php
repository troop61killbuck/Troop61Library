<!DOCTYPE html>
<html lang="en">

<?php
        $page_name = "Add Member";
	  $members_active = "active";
	  $members_show = "show";
	  $amember_dropdown_active = "active";
        require_once('layouts/head.php');
    // Checkin What level user has permission to view this page
        page_require_level(0);
    $groups = find_all('member_groups');
?>

<?php
if(isset($_POST['add_member'])){

    $req_fields = array('full-name','username','password','login','level' );
    validate_fields($req_fields);

    if(find_by_member_name($_POST['full-name']) === false ){
        $session->msg('d','<b>Sorry!</b> Entered Member Name already in database!');
        redirect('add_member.php', false);
    }elseif(find_by_member_username($_POST['username']) === false) {
        $session->msg('d','<b>Sorry!</b> Entered Member Username already in database!');
        redirect('add_member.php', false);
    }

    if(empty($errors)){
        $name   = remove_junk($db->escape($_POST['full-name']));
        $username   = remove_junk($db->escape($_POST['username']));
        $password   = remove_junk($db->escape($_POST['password']));
        $login = (int)$db->escape($_POST['login']);
        $member_level = (int)$db->escape($_POST['level']);
        $password = sha1($password);
        $query = "INSERT INTO `members` (";
        $query .="`name`, `login`, `username`, `password`, `group`, `status`";
        $query .=") VALUES (";
        $query .="'{$name}', '{$login}', '{$username}', '{$password}', '{$member_level}', '0'";
        $query .=")";
        if($db->query($query)){
            //sucess
    activityLog($user['name']." added a member.");

            $session->msg('s',"User account has been creted! ");
            redirect('members.php', false);
        } else {
            //failed
            $session->msg('d',' Sorry failed to create account!');
            redirect('add_member.php', false);
        }
    } else {
        $session->msg("d", $errors);
        redirect('add_member.php',false);
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
                            <h6 class="m-0 font-weight-bold text-primary">Add Member Form</h6>
                        </div>
                        </div>
                        <div class="card-body">
                            <form method="post" action="add_member.php">
					  <div class="form-group">
                                    <label for="name"><b>Name</b></label>
                                    <input type="text" class="form-control" name="full-name" placeholder="Enter Member's Full Name">
                                </div>
                                <div class="form-group">
                                    <label for="username"><b>Username</b></label>
                                    <input type="text" class="form-control" name="username" placeholder="Enter Member's Username">
                                </div>
                                <div class="form-group">
                                    <label for="password"><b>Password</b></label>
                                    <input type="password" class="form-control" name ="password"  placeholder="Enter Member's Password" id="newPassword">
                                </div>
                                <div class="form-group">
                                    <label for="login"><b>Member Has Login Privileges?</b></label>
                                    <select class="form-control" name="login">
                                        <option>Select Yes or No For Member Login Privileges</option>
                                            <option value="0">Yes</option>
                                            <option value="1">No</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="level"><b>Member's Group</b></label>
                                    <select class="form-control" name="level">
                                        <option value="">Select Member's Group</option>
                                        <?php foreach ($groups as $group ):?>
                                            <option value="<?php echo $group['group_level'];?>"><?php echo ucwords($group['group_name']);?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                                <div class="form-group clearfix">
                                    <button type="submit" name="add_member" class="btn btn-primary">Add Member</button>
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
