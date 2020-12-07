<!DOCTYPE html> 
 <?php require_once('layouts/variables.php');?> 

<html lang="en">

<?php
        $page_name = "Edit User";
        require_once('layouts/head.php');
    // Checkin What level user has permission to view this page
        page_require_level(0);
?>

<?php
$e_user = find_by_id('users',(int)$_GET['id']);
$e_user_email = find_email($e_user['verification_code'], $e_user['email']);
$groups  = find_all('user_groups');
if(!$e_user){
    $session->msg("d","Missing user id.");
    redirect('users.php');
}
?>
<?php
 //update user other info
  if(isset($_POST['email_delete'])){
    if(empty($errors)){
           $id = (int)$_POST['id'];
           $email = $_POST['email'];
		$name = remove_junk(ucwords($e_user['name']));
           $code = $_POST['verification_code'];
		include_once('sendgrid/email_delete.php');
            $sql = "UPDATE users SET email = NULL, verification_code = NULL WHERE id='{$id}'";
    		$result = $db->query($sql);
          if($result && $db->affected_rows() === 1){
            $sql = "DELETE FROM user_emails WHERE id='{$code}' AND email='{$email}'";
    		$result = $db->query($sql);
            $sql2 = "DELETE FROM user_email_preferences WHERE id='{$id}'";
    		$result2 = $db->query($sql2);
    activityLog($user['name']." deleted a user\'s email.");
            $session->msg('s',"Email Deleted");
            redirect('edit_user.php?id='.$id, false);
          } else {
            $session->msg('d',' Sorry failed to delete!');
            redirect('edit_user.php?id='.$id, false);
          }
    } else {
      $session->msg("d", $errors);
      redirect('edit_user.php?id='.$id,false);
    }
}
    ?>


<?php
//Update User basic info
if(isset($_POST['update'])) {
    $req_fields = array('name','username','level');
    validate_fields($req_fields);
    if(empty($errors)){
        $id = (int)$e_user['id'];
        $name = remove_junk($db->escape($_POST['name']));
        $username = remove_junk($db->escape($_POST['username']));
        $level = (int)$db->escape($_POST['level']);
        $status   = remove_junk($db->escape($_POST['status']));
        $tester = $db->escape($_POST['tester']);
	     if ($tester === "1") {
			$tester = "1";
	     } else {
			$tester = "0";
	     }
        $sql = "UPDATE users SET name ='{$name}', username ='{$username}',user_level='{$level}',status='{$status}',tester='{$tester}' WHERE id='{$db->escape($id)}'";
        $result = $db->query($sql);
	  $u_level = find_name_by_groupLevel($level);
	  $levela = $u_level['0']['group_name'];
	     if ($status === "1") {
			$statusa = "Active";
	     } elseif ($status === "0") {
			$statusa = "Deactive";
	     }
        $email = $e_user['email'];
		require_once('sendgrid/user_info_change.php');
        if($result && $db->affected_rows() === 1){
    activityLog($user['name']." updated a user\'s account.");
            $session->msg('s',"Account Updated ");
            redirect('users.php', false);
        } else {
            $session->msg('d',' Sorry failed to update!');
            redirect('edit_user.php?id='.(int)$e_user['id'], false);
        }
    } else {
        $session->msg("d", $errors);
        redirect('edit_user.php?id='.(int)$e_user['id'],false);
    }
}
?>
<?php
// Update user password
if(isset($_POST['update-pass'])) {
    $req_fields = array('password');
    validate_fields($req_fields);
    if(empty($errors)){
        $id = (int)$e_user['id'];
        $password = remove_junk($db->escape($_POST['password']));
        $h_pass   = sha1($password);
        $sql = "UPDATE users SET password='{$h_pass}' WHERE id='{$db->escape($id)}'";
        $result = $db->query($sql);
	include_once('sendgrid/password_change.php');
        if($result && $db->affected_rows() === 1){
    activityLog($user['name']." updated a user\'s password.");
            $session->msg('s',"User password has been updated ");
            redirect('users.php', false);
        } else {
            $session->msg('d',' Sorry failed to update user password!');
            redirect('edit_user.php?id='.(int)$e_user['id'], false);
        }
    } else {
        $session->msg("d", $errors);
        redirect('edit_user.php?id='.(int)$e_user['id'],false);
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
                            <form method="post" action="edit_user.php?id=<?php echo (int)$e_user['id'];?>" class="clearfix">
                                <div class="form-group">
                                    <label for="name" class="control-label"><b>Name</b></label>
                                    <input type="name" class="form-control" name="name" placeholder="Enter User's Full Name" value="<?php echo remove_junk(ucwords($e_user['name'])); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="username" class="control-label"><b>Username</b></label>
                                    <input type="text" class="form-control" name="username" placeholder="Enter User's Username" value="<?php echo remove_junk(ucwords($e_user['username'])); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="level"><b>User Role</b></label>
                                    <select class="form-control" name="level">
                                        <?php foreach ($groups as $group ):?>
                                            <option <?php if($group['group_level'] === $e_user['user_level']) echo 'selected="selected"';?> value="<?php echo $group['group_level'];?>"><?php echo ucwords($group['group_name']);?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="status"><b>Status</b></label>
                                    <select class="form-control" name="status">
                                        <option <?php if($e_user['status'] === '1') echo 'selected="selected"';?>value="1">Active</option>
                                        <option <?php if($e_user['status'] === '0') echo 'selected="selected"';?> value="0">Deactive</option>
                                    </select>
                                </div>
<?php if($user['user_level'] === "-1"):?>
							  <div class="form-group inline">
                                                <input type="checkbox" id="tester" name="tester" data-onlabel="Yes" data-offlabel="No&nbsp" value="1" data-toggle="switchbutton" data-size="md" <?php if ($e_user['tester'] === '1') { echo "checked"; }?>>							
                                                <label for="tester" style="font-size: 1rem;">&nbsp &nbsp &nbsp &nbspTester?
                                                </label>               					
							  </div>
<?php endif;?>

                                <div class="form-group clearfix">
                                    <button type="submit" name="update" class="btn btn-info">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
<div class="row">
<div class="col-lg-6 mb-4">
                    <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <div class="d-sm-flex align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Change <?php echo remove_junk(ucwords($e_user['name'])); ?>'s Password</h6>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="edit_user.php?id=<?php echo (int)$e_user['id'];?>" method="post" class="clearfix">
                            <div class="form-group">
                                <label for="password" class="control-label"><b>Password</b></label>
                                <input type="password" class="form-control" name="password" placeholder="Type Users New Password" id="newPassword">
                            </div>
                            <div class="form-group clearfix">
                                <button type="submit" name="update-pass" class="btn btn-danger pull-right">Change</button>
                            </div>
                        </form>
                    </div>
                </div>
</div>
<div class="col-lg-6 mb-4">
                    <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <div class="d-sm-flex align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Email</h6>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php if($user['emailCOUNT'] == 1) :?>
                                            <form method="post" action="edit_user.php?id=<?php echo (int)$e_user['id'];?>" class="clearfix">
                                        	<div class="input-group inline">
                                        		<input type="email" class="form-control" name="email" id="email" value="<?php echo $e_user['email'];?>" disabled>
<?php if($e_user_email['verified'] == "0"):?>
  <div class="input-group-append">
    <span class="input-group-text" id="basic-addon2" data-toggle="tooltip" title="Email Not Verified"><i class="fas fa-question-circle" ></i></span>
  </div>
<?php elseif($e_user_email['verified'] == "1"):?>
  <div class="input-group-append">
    <span class="input-group-text" id="basic-addon2" data-toggle="tooltip" title="Email Verified"><i class="fas fa-check-circle" ></i></span>
  </div>
<?php endif;?>
                                        	</div>
<br>
                                        	<div class="form-group clearfix">
                                                <input type="hidden" name="id" value="<?php echo (int)$e_user['id'];?>">                					
                                         		<input type="hidden" name="verification_code" value="<?php echo $e_user['verification_code'];?>">
								<input type="hidden" name="email" value="<?php echo $e_user['email'];?>">
                                        		<button type="submit" name="email_delete" class="btn btn-danger float-right">Delete
                                                </button>
                                        	</div>
                                        </form>
                                        <?php elseif($user['emailCOUNT'] == 0) :?>					
                                            <div class="form-group"  data-toggle="tooltip" title="Only the user can add an email address to their account.">                  				
                                                <label for="email" class="control-label" >Add New Email Address
                                                </label>                  				
                                                <input type="email" class="form-control" name="email" id="email" data-toggle="tooltip" title="Only the user can add an email address to their account." disabled>            				
                                            </div>											
                                        <?php endif; ?>               	 	
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

</body>

</html>
