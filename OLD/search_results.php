<!DOCTYPE html> 
 <?php require_once('layouts/variables.php');?> 
<html>

<?php
    $page_name = "Search Results";
    $search_active = "active";
	require_once('layouts/head.php');
?>

<body style="background: rgb(241,247,252);">
<?php require_once('layouts/navbar.php');?>
    <!-- Start: 1 Row 1 Column -->
    <div class="contact-clean" style="margin-top: 80px;margin-right: 20px;margin-left: 20px;">
<div class="intro">
                        <h1 class="text-center" style="font-family: -apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Roboto,&quot;Helvetica Neue&quot;,Arial,&quot;Noto Sans&quot;,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;,&quot;Segoe UI Symbol&quot;,&quot;Noto Color Emoji&quot;;margin-bottom:20px;"><strong>Search Results</strong><br></h1>
                    </div>
        <div class="container border rounded" style="background: #ffffff;padding-top: 15px;padding-bottom: 15px;">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width: 128px;max-width: 128px;">Image</th>
                                    <th class="text-center">Title</th>
                                    <th class="text-center">Type</th>
                                    <th class="text-center">Copies</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <?php foreach($all_books as $a_book): ?>
                                    <tr>
                                        <td class="text-center"><img src="admin/uploads/books/<?php echo remove_junk($a_book['file_name'])?>"  width="100%" class="img-thumbnail"></td>
                                        <td class="text-center"><a href="catalog_item.php?title=<?php echo remove_junk(urlencode($a_book['title']))?>"><?php echo remove_junk(ucwords($a_book['title']))?></a></td>
                                        <td class="text-center"><?php echo remove_junk(ucwords($a_book['type_name']))?></td>
                                        <td class="text-center"><?php echo remove_junk(ucwords($a_book['titlecount']))?></td>
						</tr>
                                    <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End: 1 Row 1 Column -->
<?php require_once('layouts/footer.php');?>
</body>

</html>