<?php
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(0);
?>
<?php
$delete_id = delete_by_id('members',(int)$_GET['id']);
if($delete_id){
    $session->msg("s","Member deleted.");
    redirect('members.php');
} else {
    $session->msg("d","Member deletion failed Or Missing Prm.");
    redirect('members.php');
}
?>