<!DOCTYPE html>
 <?php require_once('layouts/variables.php');?> 
<html>

<?php
    $page_name = "Settings";
    $dropdown_active = "active";
    require_once('layouts/head.php');
    if(!$session->isMemberLoggedIn(true)){
        $session->msg("w", "You must be logged in to see that page.");
        redirect('index.php');
    }
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


    $req_fields = array('newPassword','confirmNewPassword','oldPassword','id' );
    validate_fields($req_fields);


    if(empty($errors)){


        if(sha1($_POST['oldPassword']) !== current_user()['password'] ){
            $session->msg('d', "Your old password does not match");
            redirect('settings.php',false);
        }

        if($_POST['newPassword'] !== $_POST['confirmNewPassword']){
            $session->msg('d', "Your new passwords do not match.");
            redirect('settings.php',false);
        }

        $id = $user['id'];
        $new = remove_junk($db->escape(sha1($_POST['newPassword'])));
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
<body>
    <?php require_once('layouts/navbar.php');?>
    <main class="page pricing-table-page">
        <section class="clean-block clean-pricing dark">
            <div class="container">
                <div class="block-heading">
                <div class="col-md-12">
                    <?php echo display_msg($msg); ?>
                </div>
                    <h2 class="text-info">Settings</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-5 col-lg-4">
                        <div class="clean-pricing-item" style="height: 430px;">

                            <div class="heading">
                                <h3>Account Settings</h3>
                            </div>
                            <form style="margin-top: 20px;" method="post" action="settings.php" class="clearfix">
                                <div class="form-group"><label for="name">Name</label><input class="form-control item" id="name" name="name" value="<?php echo remove_junk(ucwords($user['name'])); ?>"></div>
                                <div class="form-group"><label for="username">Username</label><input class="form-control" name="username" id="username" value="<?php echo remove_junk($user['username']); ?>"></div><button class="btn btn-primary btn-block" type="submit" name="update">Update</button></form>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-4">
                        <div class="clean-pricing-item">
                            <div class="heading">
                                <h3>Change Password</h3>
                            </div>
                            <form style="margin-top: 20px;" method="post" action="settings.php" class="clearfix">
        					<div class="form-group">
              					<label for="oldPassword" class="control-label"><b>Old Password</b></label>
              					<input type="password" class="form-control" name="oldPassword" id="oldPassword" placeholder="Enter Old Password">
        					</div>
        					<div class="form-group">
              					<label for="newPassword" class="control-label"><b>New Password</b></label>
              					<input type="password" class="form-control" name="newPassword" id="newPassword" placeholder="Enter New Password">
        					</div>
        					<div class="form-group">
              					<label for="confirmNewPassword" class="control-label"><b>Confirm New Password</b></label>
              					<input type="password" class="form-control" name="confirmNewPassword" id="confirmNewPassword" placeholder="Enter New Password">
        					</div>
        					<div class="form-group clearfix">
               					<input type="hidden" name="id" value="<?php echo (int)$user['id'];?>">
                					<button type="submit" name="update_pass" class="btn btn-primary btn-block">Change</button>
        					</div>
</form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Start: Footer Dark -->
    <?php require_once('layouts/footer.php');?>
</body>

</html>