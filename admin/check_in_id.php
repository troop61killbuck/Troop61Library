<?php
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(0);
?>
<?php
	if(isset($_GET['redirect'])) {
    		$redirect = $_GET['redirect'];
	}

	if(isset($_GET['id'])) {
    		$circID = $_GET['id'];
		$circ_information = find_by_id('book_circulations',$circID);
		$date = make_date();
	  
	  $sql = "UPDATE book_circulations SET status = '2', date_checked_in = '$date' WHERE id = '$circID'";
        $result = $db->query($sql);
	  $sql2 = "UPDATE book_catalog SET status = '0' WHERE id = '{$circ_information['book_id']}'";
        $result2 = $db->query($sql2);
        if($result && $result2){
    activityLog($user['name']." checked in an item.");

            $session->msg('s',"Checked In");
            redirect($redirect, false);
        } else {
            $session->msg('d',' Check In failed!');
            redirect($redirect, false);
        }

	} elseif(isset($_GET['associatedID'])) {
    		$associatedID = $_GET['associatedID'];
		$circ_information = find_by_associated_id('book_circulations',$associatedID);
		$date = make_date();
	  
	  $sql = "UPDATE book_circulations SET status = '2', date_checked_in = '$date' WHERE randomID = '$associatedID'";
        $result = $db->query($sql);
	  $sql2 = "UPDATE book_catalog SET status = '0' WHERE id = '{$circ_information['book_id']}'";
        $result2 = $db->query($sql2);
        if($result && $result2){
            $session->msg('s',"Checked In");
            redirect($redirect, false);
        } else {
            $session->msg('d',' Check In failed!');
            redirect($redirect, false);
        }

	} else {
		redirect($redirect, false);
	}

?>