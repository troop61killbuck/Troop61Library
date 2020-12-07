<?php
require_once('includes/load.php');
	$notifications = find_all_alerts_limited('contact_us_responses','book_requests'); 
	$notifications_count = count_notifications('contact_us_responses'); 
	$notifications_count2 = count_notifications('book_requests');
die(print_r($notifications));
?>