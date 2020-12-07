<?php
date_default_timezone_set('America/New_York');
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   page_require_level(0);
$user = current_user();
$status = $_GET['status'];
$location = $_GET['location'];
$redirect = $_GET['redirect'];
$redirect = base64_decode($redirect);
$timestamp = date('Y-m-d H:i:s');
?>
<?php
if ($status == "read") {
    activityLog($user['name']." marked an alert as read.");

  $read_status = mark_read_status($location,(int)$_GET['id'],'1',$timestamp);
  redirect($redirect);
  }
elseif ($status == "unread") {
    activityLog($user['name']." marked an alert as unread.");

  $read_status = mark_read_status($location,(int)$_GET['id'],'0',$timestamp);
  redirect($redirect);
  }
?>
