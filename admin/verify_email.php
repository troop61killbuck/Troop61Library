<?php
require_once('includes/load.php');
// Checkin What level user has permission to view this page
?>
<?php
 //update user other info
  if(isset($_POST['verify_email'])){
    if(empty($errors)){
           $email = $_POST['email'];
           $verification_code = $_POST['verification_code'];
            $sql = "UPDATE user_emails SET verified = '1' WHERE id='{$verification_code}' AND email='{$email}'";
    		$result = $db->query($sql);
          if($result && $db->affected_rows() === 1){
    activityLog("A user with the email ".$email." verified their email.");

            $session->msg('s',"Acount updated");
            redirect('index.php', false);
          } else {
            $session->msg('d',' Sorry failed to update!');
            redirect('index.php', false);
          }
    } else {
      $session->msg("d", $errors);
      redirect('index.php',false);
    }
  }
    ?>
