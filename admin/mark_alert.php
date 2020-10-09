<?php
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   page_require_level(0);

$status = $_GET['status'];
?>
<?php
if ($status == "read") {
  $read_status = mark_read_status('alerts',(int)$_GET['id'],'1');
	echo "read";
  }
elseif ($status == "unread") {
  $read_status = mark_read_status('alerts',(int)$_GET['id'],'0');
	echo "unread";
  }
?>
