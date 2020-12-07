<?php
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(0);
?>
<?php
$delete_id = delete_by_id('barcode_generator',(int)$_GET['id']);
if($delete_id){
    activityLog($user['name']." deleted a library card.");

    $session->msg("s","Library Card Generation Deleted.");
    redirect('library_card.php');
} else {
    $session->msg("d","Library Card Generation Deletion Failed.");
    redirect('library_card.php');
}
?>