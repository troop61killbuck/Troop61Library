<?php
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(0);
?>
<?php
  $find_media = find_by_id('book_media',(int)$_GET['id']);
  $photo = new Media();
  if($photo->media_destroy($find_media['id'],$find_media['file_name'])){
      $session->msg("s","Photo has been deleted.");
      redirect('book_media.php');
  } else {
      $session->msg("d","Photo deletion failed Or Missing Prm.");
      redirect('book_media.php');
  }
?>