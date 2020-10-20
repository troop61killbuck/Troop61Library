<!DOCTYPE html>
<html lang="en">
<?php
$page_name = "Settings";
require_once('layouts/head.php');
page_require_level(0);
$user_email = find_email($user['verification_code'], $user['email']);
$user_email_preferences = find_email_preferences($user['id']);
    ?>
<?php
 //update user other info
  if(isset($_POST['sidebar_toggle_submit'])){
    if(empty($errors)){
           $id = (int)$_POST['id'];
           $sidebar_toggle = remove_junk($db->escape($_POST['sidebar_toggle']));
	     if ($sidebar_toggle === "1") {
			$toggle = "toggled";
	     } else {
			$toggle = "";
	     }
            $sql = "UPDATE users SET sidebar = '{$toggle}' WHERE id='{$id}'";
    $result = $db->query($sql);
          if($result && $db->affected_rows() === 1){
    activityLog($user['name']." changed their default sidebar position.");

            $session->msg('s',"Acount updated ");
            redirect('settings.php', false);
          } else {
            $session->msg('d',' Sorry failed to updated!');
            redirect('settings.php', false);
          }
    } else {
      $session->msg("d", $errors);
      redirect('settings.php',false);
    }
  }
    ?>
<?php
 //update user other info
  if(isset($_POST['email_preferences_submit'])){
    if(empty($errors)){
           $id = (int)$_POST['id'];
           $contactUs = remove_junk($db->escape($_POST['contactUs']));
           $bookRequests = remove_junk($db->escape($_POST['bookRequests']));
           $userInfoChange = remove_junk($db->escape($_POST['userInfoChange']));
           $libraryInfoChange = remove_junk($db->escape($_POST['libraryInfoChange']));
	     if ($contactUs === "1") {
			$contactUs = "1";
	     } else {
			$contactUs = "0";
	     }
	     if ($bookRequests === "1") {
			$bookRequests = "1";
	     } else {
			$bookRequests = "0";
	     }
	     if ($userInfoChange === "1") {
			$userInfoChange = "1";
	     } else {
			$userInfoChange = "0";
	     }
	     if ($libraryInfoChange === "1") {
			$libraryInfoChange = "1";
	     } else {
			$libraryInfoChange = "0";
	     }
            $sql = "UPDATE user_email_preferences SET contactUs = '{$contactUs}', bookRequests = '{$bookRequests}', userInfoChange = '{$userInfoChange}', libraryInfoChange = '{$libraryInfoChange}'  WHERE id='{$id}'";
    $result = $db->query($sql);
          if($result && $db->affected_rows() === 1){
    activityLog($user['name']." updated their email preferences.");

            $session->msg('s',"Preferences updated ");
            redirect('settings.php', false);
          } else {
            $session->msg('d',' Sorry failed to updated!');
            redirect('settings.php', false);
          }
    } else {
      $session->msg("d", $errors);
      redirect('settings.php',false);
    }
  }
    ?>
<?php
 //update user other info
  if(isset($_POST['email_submit'])){
    if(empty($errors)){
           $id = (int)$_POST['id'];
               $email = $_POST['email'];
		$code = base64_encode($email);
					if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $sql = "UPDATE users SET email = '{$email}', verification_code = '{$code}' WHERE id='{$id}'";
    		$result = $db->query($sql);
          if($result && $db->affected_rows() === 1){
		$id = $user['id'];
		$name = $user['name'];
            $sql2 = "INSERT INTO user_emails (email,id) VALUES ('{$email}','{$code}')";
    		$result2 = $db->query($sql2);
            $sql3 = "INSERT INTO user_email_preferences (id) VALUES ('{$id}')";
    		$result3 = $db->query($sql3);
		require_once('sendgrid/verify_email.php');
    activityLog($user['name']." added their email.");

            $session->msg('s',"Acount updated");
            redirect('settings.php', false);
          } else {
            $session->msg('d',' Sorry failed to updated!');
            redirect('settings.php', false);
          }
	} else {
            $session->msg('d','Invalid Email Address');
            redirect('settings.php', false);
	}
    } else {
      $session->msg("d", $errors);
      redirect('settings.php',false);
    }
  }
    ?>
<?php
 //update user other info
  if(isset($_POST['email_delete'])){
    if(empty($errors)){
           $id = (int)$_POST['id'];
           $email = $_POST['email'];
           $code = $_POST['verification_code'];
		include_once('sendgrid/email_delete.php');

            $sql = "UPDATE users SET email = NULL, verification_code = NULL WHERE id='{$id}'";
    		$result = $db->query($sql);
          if($result && $db->affected_rows() === 1){
            $sql = "DELETE FROM user_emails WHERE id='{$code}' AND email='{$email}'";
    		$result = $db->query($sql);
            $sql2 = "DELETE FROM user_email_preferences WHERE id='{$id}'";
    		$result2 = $db->query($sql2);
            $session->msg('s',"Email Deleted");
            redirect('settings.php', false);
          } else {
            $session->msg('d',' Sorry failed to delete!');
            redirect('settings.php', false);
          }
    } else {
      $session->msg("d", $errors);
      redirect('settings.php',false);
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
                            <h1 class="h3 mb-0 text-gray-800">
                                <?php echo $page_name; ?></h1>                
                        </div>                
                        <!-- Content Row -->                
                        <div class="col-md-12">                    
                            <?php echo display_msg($msg); ?>                
                        </div>
                        <div class="row">		    
                            <div class="col-lg-6 mb-4">                    
                                <div class="card shadow mb-4">                        
                                    <div class="card-header py-3">                            
                                        <h6 class="m-0 font-weight-bold text-primary">Look and Feel Settings
                                        </h6>                        
                                    </div>                        
                                    <div class="card-body">					
                                        <form method="post" action="settings.php" class="clearfix">						
                                            <div class="form-group inline">							
                                                <input type="checkbox" id="sidebar_toggle" name="sidebar_toggle" data-onlabel="Shut" data-offlabel="Open" value="1" data-toggle="switchbutton" <?php if ($user['sidebar'] === 'toggled') { echo "checked"; }?> data-size="md">							
                                                <label for="sidebar_toggle" style="font-size: 1rem;">&nbsp &nbsp &nbsp &nbspSidebar Default Position
                                                </label>               					
                                                <input type="hidden" name="id" value="<?php echo (int)$user['id'];?>">                					
                                                <button type="submit" name="sidebar_toggle_submit" class="btn btn-primary float-right">Change
                                                </button>        					
                                            </div>					
                                        </form>               	 	
                                    </div>                    
                                </div>			
                                <div class="card shadow mb-4">                        
                                    <div class="card-header py-3">                            
                                        <h6 class="m-0 font-weight-bold text-primary">Email Address
                                        </h6>                        
                                    </div>                        
                                    <div class="card-body">                        	
                                        <?php if($user['emailCOUNT'] == 1) :?>
                                            <form method="post" action="settings.php" class="clearfix">
                                        	<div class="input-group inline">
                                        		<input type="email" class="form-control" name="email" id="email" value="<?php echo $user['email'];?>" disabled>
<?php if($user_email['verified'] == "0"):?>
  <div class="input-group-append">
    <span class="input-group-text" id="basic-addon2" data-toggle="tooltip" title="Email Not Verified"><i class="fas fa-question-circle" ></i></span>
  </div>
<?php elseif($user_email['verified'] == "1"):?>
  <div class="input-group-append">
    <span class="input-group-text" id="basic-addon2" data-toggle="tooltip" title="Email Verified"><i class="fas fa-check-circle" ></i></span>
  </div>
<?php endif;?>
                                        	</div>
<br>
                                        	<div class="form-group clearfix">
                                                <input type="hidden" name="id" value="<?php echo (int)$user['id'];?>">                					
                                        		<input type="hidden" name="verification_code" value="<?php echo $user['verification_code'];?>">
								<input type="hidden" name="email" value="<?php echo $user['email'];?>">
                                        		<button type="submit" name="email_delete" class="btn btn-danger float-right">Delete
                                                </button>
                                        	</div>
                                        </form>
                                        <?php elseif($user['emailCOUNT'] == 0) :?>					
                                        <form method="post" action="settings.php" class="clearfix">            				
                                            <div class="form-group">                  				
                                                <label for="email" class="control-label">Add New Email Address
                                                </label>                  				
                                                <input type="email" class="form-control" name="email" id="email">            				
                                            </div>						
                                            <div class="form-group clearfix">               					
                                                <input type="hidden" name="id" value="<?php echo (int)$user['id'];?>">                					
                                                <button type="submit" name="email_submit" class="btn btn-primary float-right">Submit
                                                </button>        					
                                            </div>					
                                        </form>                        	
                                        <?php endif; ?>               	 	
                                    </div>                    
                                </div>			

                            </div>			
                            <div class="col-lg-6 mb-4">			  
                                <div class="card shadow mb-4">                
                                    <div class="card-header py-3">                  
                                        <h6 class="m-0 font-weight-bold text-primary">Email Preferences
                                        </h6>                
                                    </div>                
                                    <div class="card-body">
                                        <form method="post" action="settings.php" class="clearfix">						
                                            <div class="form-group inline">							
                                                <input type="checkbox" id="contactUs" name="contactUs" data-onlabel="Yes" data-offlabel="No&nbsp" value="1" data-toggle="switchbutton" <?php if ($user_email_preferences['contactUs'] === '1') { echo "checked"; }?> data-size="md">							
                                                <label for="contactUs" style="font-size: 1rem;">&nbsp &nbsp &nbsp &nbspContact Us Responses
                                                </label>
							  </div>
							  <div class="form-group inline">
                                                <input type="checkbox" id="bookRequests" name="bookRequests" data-onlabel="Yes" data-offlabel="No&nbsp" value="1" data-toggle="switchbutton" <?php if ($user_email_preferences['bookRequests'] === '1') { echo "checked"; }?> data-size="md">							
                                                <label for="bookRequests" style="font-size: 1rem;">&nbsp &nbsp &nbsp &nbspBook Requests
                                                </label>               					
							  </div>
							  <div class="form-group inline">
                                                <input type="checkbox" id="userInfoChange" name="userInfoChange" data-onlabel="Yes" data-offlabel="No&nbsp" value="1" data-toggle="switchbutton" <?php if ($user_email_preferences['userInfoChange'] === '1') { echo "checked"; }?> data-size="md">							
                                                <label for="userInfoChange" style="font-size: 1rem;">&nbsp &nbsp &nbsp &nbspChange of User Information
                                                </label>               					
							  </div>
							  <div class="form-group inline">
                                                <input type="checkbox" id="libraryInfoChange" name="libraryInfoChange" data-onlabel="Yes" data-offlabel="No&nbsp" value="1" data-toggle="switchbutton" <?php if ($user_email_preferences['libraryInfoChange'] === '1') { echo "checked"; }?> data-size="md">							
                                                <label for="libraryInfoChange" style="font-size: 1rem;">&nbsp &nbsp &nbsp &nbspChange of Library Information
                                                </label>               					
							  </div>
							  <div class="form-group inline">
                                                <input type="hidden" name="id" value="<?php echo (int)$user['id'];?>">                					
                                                <button type="submit" name="email_preferences_submit" class="btn btn-primary float-right">Save</button>        					
                                            </div>					
                                        </form>               	 	

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
            <i class="fas fa-angle-up"></i></a>
        <!-- Logout Modal-->
        <?php require_once('layouts/logout_page.php'); ?>
        <!-- Scripts-->
        <?php require_once('layouts/page_scripts.php'); ?>
    </body>
</html>