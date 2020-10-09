<?php
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(0);
?>
<?php
$delete_id = delete_by_id('book_types',(int)$_GET['id']);
if($delete_id){
    $session->msg("s","Type has been deleted.");
    redirect('types.php');
} else {
    $session->msg("d","Type deletion failed Or Missing Prm.");
    redirect('types.php');
}
?>