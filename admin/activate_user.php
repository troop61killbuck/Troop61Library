<?php
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(0);
$user = current_user();
?>
<?php
$status = edit_status_by_id('users',(int)$_GET['id'],'1');
if($status){
$e_user = find_by_id('users',(int)$_GET['id']);
        $name = $e_user['name'];
        $username = $e_user['username'];
        $level = $e_user['user_level'];
        $status   = $e_user['status'];
	  $u_level = find_name_by_groupLevel($level);
	  $levela = $u_level['0']['group_name'];
	     if ($status === "1") {
			$statusa = "Active";
	     } elseif ($status === "0") {
			$statusa = "Deactive";
	     }
        $email = $e_user['email'];
	  require_once('sendgrid/user_info_change.php');
    activityLog($user['name']." activated a user.");
    $session->msg("s","User Activated.");
    redirect('users.php');
} else {
    $session->msg("d","User activation failed");
    redirect('users.php');
}
?>