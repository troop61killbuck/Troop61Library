<!DOCTYPE html> 
 <?php require_once('layouts/variables.php');?> 
<html>

<?php
    $page_name = "Settings";
	require_once('layouts/head.php');
page_require_level(2);

?>
<?php
//Update User basic info
if(isset($_POST['update'])) {
    $req_fields = array('name','username');
    validate_fields($req_fields);

    if(empty($errors)){
        $id = (int)$user['id'];
        $name = remove_junk($db->escape($_POST['name']));
        $username = remove_junk($db->escape($_POST['username']));
        $sql = "UPDATE members SET name ='{$name}', username ='{$username}' WHERE id='{$db->escape($id)}'";
        $result = $db->query($sql);
        if($result && $db->affected_rows() === 1){
    activityLog($user['name']." (".$user['username'].") updated their account.");
            $session->msg('s',"Account Updated ");
            redirect('settings.php', false);
        } else {
            $session->msg('d',' Sorry failed to update!');
            redirect('settings.php', false);
        }
    } else {
        $session->msg("d", $errors);
        redirect('settings.php',false);
    }
}
?>
<?php
if(isset($_POST['update_pass'])){


    $req_fields = array('new-password','old-password','id' );
    validate_fields($req_fields);


    if(empty($errors)){


        if(sha1($_POST['old-password']) !== current_user()['password'] ){
            $session->msg('d', "Your old password does not match");
            redirect('settings.php',false);
        }


        $id = $user['id'];
        $new = remove_junk($db->escape(sha1($_POST['new-password'])));
        $sql = "UPDATE `members` SET `reset_password` = '0', `password` = '$new' WHERE `members`.`id` = $id;";
        $result = $db->query($sql);
        if($result && $db->affected_rows() === 1):
    activityLog($user['name']." (".$user['username'].") changed their password.");
            $session->logout();
            $session->msg('s',"Please login with your new password.");
            redirect('index.php', false);
        else:
            $session->msg('d',' Sorry failed to update password.');
            redirect('settings.php', false);
        endif;
    } else {
        $session->msg("d", $errors);
        redirect('settings.php',false);
    }
}
?>

<body style="background: rgb(241,247,252);">
<?php require_once('layouts/navbar.php');?>
    <!-- Start: 1 Row 1 Column -->
    <div class="contact-clean" style="margin-top: 90px;margin-right: 20px;margin-left: 20px;">
<div class="intro">
                <div class="col-md-12">
                    <?php echo display_msg($msg); ?>
                </div>
                                            </div>
                            <form method="post" action="settings.php" class="clearfix">
					<h4 style="font-family: -apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Roboto,&quot;Helvetica Neue&quot;,Arial,&quot;Noto Sans&quot;,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;,&quot;Segoe UI Symbol&quot;,&quot;Noto Color Emoji&quot;;margin-bottom:20px;"><strong>Account Name and Username</strong><br></h4>
                                <div class="form-group">
                                    <label for="name" class="control-label"><b>Name</b></label>
                                    <input type="name" class="form-control" name="name" placeholder="Enter User's Full Name" value="<?php echo remove_junk(ucwords($user['name'])); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="username" class="control-label"><b>Username</b></label>
                                    <input type="text" class="form-control" name="username" placeholder="Enter User's Username" value="<?php echo remove_junk($user['username']); ?>">
                                </div>

                                <div class="form-group clearfix">
                                    <button type="submit" name="update" class="btn btn-primary">Update</button>
                                </div>
                            </form>
<br>
      				<form method="post" action="settings.php" class="clearfix">
<h4 style="font-family: -apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Roboto,&quot;Helvetica Neue&quot;,Arial,&quot;Noto Sans&quot;,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;,&quot;Segoe UI Symbol&quot;,&quot;Noto Color Emoji&quot;;margin-bottom:20px;"><strong>Change Password</strong><br></h4>
        					<div class="form-group">
              					<label for="oldPassword" class="control-label"><b>Old Password</b></label>
              					<input type="password" class="form-control" name="old-password" placeholder="Enter Old Password">
        					</div>
        					<div class="form-group">
              					<label for="newPassword" class="control-label"><b>New Password</b></label>
              					<input type="password" class="form-control" name="new-password" id="new_password" placeholder="Enter New Password">
        					</div>
		                		<div class="col-sm-8 col-sm-offset-2 pt-3">
		                    		<div class="pwstrength_viewport_progress"></div>
		                		</div>
		                		<div id="messages" class="col-sm-12"></div>
        					<div class="form-group clearfix">
               					<input type="hidden" name="id" value="<?php echo (int)$user['id'];?>">
                					<button type="submit" name="update_pass" class="btn btn-primary">Change</button>
        					</div>
    					</form>
        </div>
    </div>
    <!-- End: 1 Row 1 Column -->
<?php require_once('layouts/footer.php');?>
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>