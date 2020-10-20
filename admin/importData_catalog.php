<?php
// Load the database configuration file
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
                $id   = $line[0];
                $copy_no  = $line[1];
                $title  = $line[2];
                $category = $line[3];
                $type = $line[4];
                $description = $line[5];

                    // Insert member data in the database
                    $db->query("INSERT INTO book_catalog (id, type, title, category, description, copy_no) VALUES ('".$id."', '".$type."', '".$title."',  '".$category."', '".$description."', '".$copy_no."')");
 
            }
            
            // Close opened CSV file
            fclose($csvFile);
                activityLog($user['name']." uploaded a CSV with catalog data.");
$session->msg('s',"Catalog data has been imported successfully.");
            redirect('catalog.php', false);
        }else{
		$session->msg('d',"Some problem occurred, please try again.");
            redirect('catalog.php', false);
        }
    }else{
	$session->msg('d',"Please upload a valid CSV file.");
      redirect('add_catalog_csv.php', false);
    }
}
?>