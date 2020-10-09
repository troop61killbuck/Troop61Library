<!DOCTYPE html>
<html lang="en">

<?php
        $page_name = "Reserve Item";
        require_once('layouts/head.php');
    // Checkin What level user has permission to view this page
        page_require_level(0);
?>

<?php
	if(isset($_GET['catalogID'])) {
    		$catalogID = $_GET['catalogID'];
		$session->msg('s','Catalog ID Detected, Redirected To ID Locked Reserve');
            redirect('reserve_id.php?catalogID='.$catalogID, false);
	}
?>

<?php
	  $num = randString(11);

	  $check = $db->query("SELECT COUNT(1) FROM book_circulations WHERE randomID = '$num'");
	  $row = $check->fetch_row();
	  
	  if($row[0] >= 1) {
		$num = randString(11);
  	  } elseif($row[0] == 0) {
	  }

echo $num;
?>

