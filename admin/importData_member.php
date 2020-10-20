<?php
require_once('includes/load.php');

if(isset($_POST['importSubmit'])){
    
    // Allowed mime types
    $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
    
    // Validate whether selected file is a CSV file
    if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $csvMimes)){
        
        // If the file is uploaded
        if(is_uploaded_file($_FILES['file']['tmp_name'])){
            
            // Open uploaded CSV file with read-only mode
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
            
            // Skip the first line
            fgetcsv($csvFile);
            
            // Parse data from CSV file line by line
            while(($line = fgetcsv($csvFile)) !== FALSE){
                // Get row data
                $name  = $line[0];
                $login  = $line[1];
                $username = $line[2];
                $password = sha1($line[3]);
                $group = $line[4];
                $status = $line[5];

                    // Insert member data in the database
                    $db->query("INSERT INTO `members` (`name`, `login`, `username`, `password`, `group`, `status`) VALUES ('".$name."', '".$login."',  '".$username."', '".$password."', '".$group."', '".$status."')");
 
            }
            
            // Close opened CSV file
            fclose($csvFile);
                activityLog($user['name']." uploaded a CSV with member data.");

		$session->msg('s',"Member data has been imported successfully.");
            redirect('members.php', false);
        }else{
		$session->msg('d',"Some problem occurred, please try again.");
            redirect('members.php', false);
        }
    }else{
	$session->msg('d',"Please upload a valid CSV file.");
      redirect('add_member_csv.php', false);
    }
}
?>