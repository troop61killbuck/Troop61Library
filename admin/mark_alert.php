<?php
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   page_require_level(0);
$user = current_user();
$status = $_GET['status'];
$redirect = $_GET['redirect'];
?>
<?php
if ($status == "read") {
    activityLog($user['name']." marked an alert as read.");

  $read_status = mark_read_status('alerts',(int)$_GET['id'],'1');
  redirect($redirect);
  }
elseif ($status == "unread") {
    activityLog($user['name']." marked an alert as unread.");

  $read_status = mark_read_status('alerts',(int)$_GET['id'],'0');
  redirect($redirect);
  }
?>
