<?php
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(-1);
$user = current_user();
?>
<?php
$status = truncate('activityLog');
if($status){
    activityLog($user['name']." truncated the activity log.");
    $session->msg("s","Truncated");
    redirect('activity_log.php');
} else {
    $session->msg("d","Truncation failed");
    redirect('activity_log.php');
}
?>