<!DOCTYPE html>
<html lang="en">

<?php
$page_name = "Profile";
require_once('layouts/head.php');
page_require_level(0);
$user_information = find_by_id('library_information',1);
?>
<?php
//update user image
  if(isset($_POST['change_photo'])) {
  $photo = new Media();
  $user_id = (int)$_POST['user_id'];
  $photo->upload($_FILES['file_upload']);
  if($photo->process_user($user_id)){
    activityLog($user['name']." changed their profile photo.");

    $session->msg('s','Photo has been uploaded.');
    redirect('profile.php');
    } else{
      $session->msg('d',join($photo->errors));
      redirect('profile.php');
    }
  }
?>

<?php
 //update user other info
  if(isset($_POST['update_profile_info'])){
    $req_fields = array('name','username' );
    validate_fields($req_fields);
    if(empty($errors)){
           $id = (int)$_POST['user_id'];
           $name = remove_junk($db->escape($_POST['name']));
       $username = remove_junk($db->escape($_POST['username']));
            $sql = "UPDATE users SET name ='{$name}', username ='{$username}' WHERE id='{$id}'";
    $result = $db->query($sql);
          if($result && $db->affected_rows() === 1){
    activityLog($user['name']." uodated their profile.");

            $session->msg('s',"Acount updated ");
            redirect('profile.php', false);
          } else {
            $session->msg('d',' Sorry failed to updated!');
            redirect('profile.php', false);
          }
    } else {
      $session->msg("d", $errors);
      redirect('profile.php',false);
    }
  }
?>

<?php
  if(isset($_POST['update_password'])){

    $req_fields = array('new-password','old-password','id' );
    validate_fields($req_fields);

    if(empty($errors)){

             if(sha1($_POST['old-password']) !== $user['password'] ){
               $session->msg('d', "Your old password not match");
               redirect('profile.php',false);
             }

            $id = (int)$_POST['id'];
            $new = remove_junk($db->escape(sha1($_POST['new-password'])));
            $sql = "UPDATE users SET password ='{$new}' WHERE id='{$db->escape($id)}'";
            $result = $db->query($sql);
                if($result && $db->affected_rows() === 1):
    activityLog($user['name']." changed their password.");

                  $session->logout();
                  $session->msg('s',"Login with your new password.");
                  redirect('index.php', false);
                else:
                  $session->msg('d',' Sorry failed to updated!');
                  redirect('profile.php', false);
                endif;
    } else {
      $session->msg("d", $errors);
      redirect('profile.php',false);
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
<div class="row">
		    <div class="col-lg-6 mb-4">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Change Profile Picture</h6>
                        </div>
                        <div class="card-body">
                    		<div class="row">
            				<div class="col-md-4">
                					<img src="uploads/users/<?php echo $user['image'];?>" width="100%" alt="">
            				</div>
            				<div class="col-md-8">
              					<form class="form" action="profile.php" method="POST" enctype="multipart/form-data">
              						<div class="form-group">
                							<input type="file" name="file_upload" multiple="multiple" class="btn btn-default btn-file"/>
                							<input type="hidden" name="user_id" value="<?php echo $user['id'];?>">
                 							<button type="submit" name="change_photo" class="btn btn-warning">Change</button>
              						</div>
             					</form>
            				</div>
          				</div>
               	 	</div>
                    </div>
			</div>
			<div class="col-lg-6 mb-4">
			  <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Edit Account Details</h6>
                </div>
                <div class="card-body">
                  <form method="post" action="profile.php" class="clearfix">
            		<div class="form-group">
                  		<label for="name" class="control-label">Name</label>
                  		<input type="name" class="form-control" name="name" value="<?php echo remove_junk(ucwords($user['name'])); ?>">
            		</div>
            		<div class="form-group">
                  		<label for="username" class="control-label">Username</label>
                  		<input type="text" class="form-control" name="username" value="<?php echo remove_junk(ucwords($user['username'])); ?>">
            		</div>
            		<div class="form-group clearfix">
					<input type="hidden" name="user_id" value="<?php echo $user['id'];?>">
                    		<button type="submit" name="update_profile_info" class="btn btn-primary">Update</button>
            		</div>
        		</form>
              </div>
		</div>
                </div>
		  </div>
<div class="row">
		    <div class="col-lg-6 mb-4">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Change Profile Picture</h6>
                        </div>
                        <div class="card-body">
				  <div id="pwd-container">
      				<form method="post" action="change_password.php" class="clearfix">
        					<div class="form-group">
              					<label for="oldPassword" class="control-label">Old Password</label>
              					<input type="password" class="form-control" name="old-password" placeholder="Enter Old Password">
        					</div>
        					<div class="form-group">
              					<label for="newPassword" class="control-label">New Password</label>
              					<input type="password" class="form-control" name="new-password" id="new_password" placeholder="Enter New Password">
        					</div>
		                		<div class="col-sm-8 col-sm-offset-2 pt-3">
		                    		<div class="pwstrength_viewport_progress"></div>
		                		</div>
		                		<div id="messages" class="col-sm-12"></div>
        					<div class="form-group clearfix">
               					<input type="hidden" name="id" value="<?php echo (int)$user['id'];?>">
                					<button type="submit" name="update_password" class="btn btn-primary">Change</button>
        					</div>
    					</form>
				  </div>
               	 	</div>
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
