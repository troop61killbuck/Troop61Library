<?php
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   page_require_level(0);
$user = current_user();
$location = $_GET['location'];
$redirect = $_GET['redirect'];
$redirect = base64_decode($redirect);
?>
<?php
    activityLog($user['name']." deleted an alert.");

  $read_status = delete_by_id($location,(int)$_GET['id']);
  redirect($redirect);
?>
