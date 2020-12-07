<?php
include_once('includes/load.php');

$all_circulations = find_all_circulations_history_report();
//die(print_r($all_circulations));

$headers = array(); 
$headers[] = "Circulations ID";
$headers[] = "Book ID";
$headers[] = "Book Name";
$headers[] = "Member ID";
$headers[] = "Member Name";
$headers[] = "Date Checked Out";
$headers[] = "Date Checked In";
$headers[] = "Status (0 = Requested, 1 =Issued, 2 = Returned)";

ob_clean();
$fp = fopen('/tmp/allCirculations.csv', 'w+');
fputcsv($fp, $headers);
    foreach ($all_circulations as $a_circ) {
	  $array = array("id"=>$a_circ['id'],
			     	"type"=>$a_circ['book_id'],
			     	"title"=>$a_circ['title'],
			     	"category"=>$a_circ['member_id'],
			     	"description"=>$a_circ['name'],
			     	"copy_no"=>$a_circ['date_checked_out'],
			     	"category_name"=>$a_circ['date_checked_in'],
				"type_name"=>$a_circ['status']);
        fputcsv($fp, $array);
    }
fclose($fp);

  header("Content-type: text/csv");
  header("Content-disposition: attachment; filename = allCirculations.csv");
  readfile("/tmp/allCirculations.csv");
?>