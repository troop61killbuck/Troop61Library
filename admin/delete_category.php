<?php
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(0);
?>
<?php
$delete_id = delete_by_id('book_category',(int)$_GET['id']);
if($delete_id){
    activityLog($user['name']." deleted a category.");

    $session->msg("s","Category has been deleted.");
    redirect('categories.php');
} else {
    $session->msg("d","Category deletion failed Or Missing Prm.");
    redirect('categories.php');
}
?>