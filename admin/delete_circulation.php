<?php
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(0);
?>
<?php
$delete_id = delete_by_id('book_circulations',(int)$_GET['id']);
if($delete_id){
    activityLog($user['name']." deleted a circulation.");

    $session->msg("s","Circulation has been deleted.");
    redirect('circulations.php');
} else {
    $session->msg("d","Circulation deletion failed Or Missing Prm.");
    redirect('circulations.php');
}
?>