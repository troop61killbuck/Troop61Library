<?php
require_once('includes/load.php');
$user = current_user();

    activityLog($user['name']." (".$user['username'].") logged out.");
if(!$session->logout()) {redirect("index.php");}
?>