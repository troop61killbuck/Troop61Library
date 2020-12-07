<?php
include_once('includes/load.php');

$all_members = find_all_members();
//die(print_r($all_members));

$headers = array(); 
$headers[] = "ID";
$headers[] = "Name";
$headers[] = "Username";
$headers[] = "Login Privileges (0 = No, 1 = Yes)";
$headers[] = "Group Number";
$headers[] = "Group Name";
$headers[] = "Status (0 = Active, 1 = Inactive)";

ob_clean();
$fp = fopen('/tmp/allMembers.csv', 'w+');
fputcsv($fp, $headers);
    foreach ($all_members as $a_member) {
	  $array = array("id"=>$a_member['id'],
			     	"type"=>$a_member['name'],
			     	"title"=>$a_member['username'],
			     	"category"=>$a_member['login'],
			     	"description"=>$a_member['group'],
			     	"copy_no"=>$a_member['group_name'],
			     	"category_name"=>$a_member['status']);
        fputcsv($fp, $array);
    }
fclose($fp);

  header("Content-type: text/csv");
  header("Content-disposition: attachment; filename = allMembers.csv");
  readfile("/tmp/allMembers.csv");
?>