<?php
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(0);
?>
<?php
$delete_id = delete_by_id('users',(int)$_GET['id']);
if($delete_id){
    activityLog($user['name']." deleted a user.");

    $session->msg("s","User deleted.");
    redirect('users.php');
} else {
    $session->msg("d","User deletion failed Or Missing Prm.");
    redirect('users.php');
}
?>