<?php
require_once('includes/load.php');
$user = current_user();
    activityLog($user['name']." logged out.");
if(!$session->logout()) {redirect("index.php");}
?>