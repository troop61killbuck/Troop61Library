<?php
include_once('includes/load.php');

$all_books = find_all_books_grouped_no_media();

$headers = array(); 
$headers[] = "Type Number";
$headers[] = "Title";
$headers[] = "Category Number";
$headers[] = "Description";
$headers[] = "Number of Copies";
$headers[] = "Category Name";
$headers[] = "Type Name";

ob_clean();
$fp = fopen('/tmp/allTitles.csv', 'w+');
fputcsv($fp, $headers);
    foreach ($all_books as $a_book) {
	  $array = array("type"=>$a_book['type'],
			     "title"=>$a_book['title'],
			     "category"=>$a_book['category'],
			     "description"=>$a_book['description'],
			     "copy_no"=>$a_book['titlecount'],
			     "category_name"=>$a_book['category_name'],
			     "type_name"=>$a_book['type_name']);
        fputcsv($fp, $array);
    }
fclose($fp);

  header("Content-type: text/csv");
  header("Content-disposition: attachment; filename = allTitles.csv");
  readfile("/tmp/allTitles.csv");
?>