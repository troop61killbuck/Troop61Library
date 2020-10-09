<?php
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(0);
?>
<?php

	if(isset($_GET['redirect'])) {
    		$redirect = $_GET['redirect'];
	}
	if(isset($_GET['catalogID'])) {
    		$catalogID = $_GET['catalogID'];
	} else {
		redirect($redirect, false);
	}
	if(isset($_GET['ID'])) {
		$ID = $_GET['ID'];
        	$sql = "DELETE FROM book_circulations WHERE id = '{$ID}'";
        	$result = $db->query($sql);
	  	$sql2 = "UPDATE book_catalog SET status = '0' WHERE id = '{$catalogID}'";
        	$result2 = $db->query($sql2);
        	if($result && $result2){
            	$session->msg('s',"Reservation Cancelled");
            	redirect($redirect, false);
        	} else {
            	$session->msg('d',' Reservation Cancelled failed!');
            	redirect($redirect, false);
        	}
	} elseif(isset($_GET['associatedID'])) {
		$randomID = $_GET['associatedID'];
        	$sql = "DELETE FROM book_circulations WHERE randomID = '{$randomID}'";
        	$result = $db->query($sql);
	  	$sql2 = "UPDATE book_catalog SET status = '0' WHERE id = '{$catalogID}'";
        	$result2 = $db->query($sql2);
        	if($result && $result2){
            	$session->msg('s',"Reservation Cancelled");
            	redirect($redirect, false);
        	} else {
            	$session->msg('d',' Reservation Cancelled failed!');
            	redirect($redirect, false);
        	}
	}

?>