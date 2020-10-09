<?php
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(0);
?>
<?php
$delete_id = delete_by_id('book_catalog',(int)$_GET['id']);
if($delete_id){
    $session->msg("s","Catalog Item Deleted.");
    redirect('catalog_grouped.php');
} else {
    $session->msg("d","Catalog Item Deletion Failed.");
    redirect('catalog_grouped.php');
}
?>