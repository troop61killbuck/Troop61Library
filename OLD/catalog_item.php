<!DOCTYPE html> 
 <?php require_once('layouts/variables.php');?> 
<html>

<?php
    $page_name = "Catalog";
	require_once('layouts/head.php');
    $categories = find_all('book_category');
    $types = find_all('book_types');
    $photos = find_all_photos('book_media');
?>
 
<?php
$title = urldecode($_GET['title']);
$book_information = find_book_grouped($_GET['title']);
$book_copies = find_book_by_name($_GET['title']);
?>

<body style="background: rgb(241,247,252);">
<?php require_once('layouts/navbar.php');?>
    <!-- Start: 1 Row 1 Column -->
    <div class="article-clean" style="margin-top: 80px;margin-right: 20px;margin-left: 20px;background: rgb(241,247,252);">
        <div class="container" style="background: #f1f7fc;">
            <div class="row">
                <div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2">
				<?php foreach($book_information as $book_info): ?>
                    <!-- Start: Intro -->
                    <div class="intro">
                        <h1 class="text-center" style="font-family: -apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Roboto,&quot;Helvetica Neue&quot;,Arial,&quot;Noto Sans&quot;,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;,&quot;Segoe UI Symbol&quot;,&quot;Noto Color Emoji&quot;;"><strong><?php echo $book_info['title'];?></strong><br></h1>
                    </div>
                    <!-- End: Intro -->
<table class="table table-bordered" width="100%" cellspacing="0" style="font-family: -apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji'; background-color: #ffffff">
						<tbody>
  							<tr>
    								<td>
									<b>Title:</b> <?php echo remove_junk(ucwords($book_info['title']));?>
								</td>
    								<td rowspan="5" style="width: 25%; vertical-align: middle;">
									<img src="admin/uploads/books/<?php echo remove_junk($book_info['file_name']);?>" width="100%" class="img-thumbnail">
								</td>
  							</tr>
							<tr>
    								<td>
									<b>Description:</b> <?php echo remove_junk($book_info['description']);?>
								</td>
     							</tr>
  							<tr>
    								<td>
									<b>Type:</b> <?php echo remove_junk($book_info['type_name']);?>
								</td>
 			 				</tr>
  							<tr>
     								<td>
									<b>Category:</b> <?php echo remove_junk($book_info['category_name']);?>
								</td>
 							</tr>
  							<tr>
    								<td><b>Number of Copies:</b> <?php echo remove_junk($book_info['titlecount']); ?></td>
  							</tr>
						</tbody>
					</table>
				<?php endforeach;?>
<table class="table table-bordered" width="100%" cellspacing="0" style="font-family: -apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji'; background-color: #ffffff">
					<thead>
  						<tr>
    							<th class="text-center" style="width: 50px;">#</th>
    							<th class="text-center">ID</th>
    							<th class="text-center">Copy Number</th>
    							<th class="text-center">Status</th>
                        </tr>
					</thead>
					<tbody>
<?php foreach($book_copies as $b_copy): ?>
					  		<tr>
<td class="text-center"><?php echo count_id();?></td>
    							<td class="text-center"><?php echo remove_junk($b_copy['id'])?></td>
    							<td class="text-center"><?php echo remove_junk($b_copy['copy_no'])?></td>
    							<td class="text-center">
								<?php if (remove_junk($b_copy['status']) == "0"): ?>
									Available
								<?php elseif (remove_junk($b_copy['status']) == "1"): ?>
									Reserved
								<?php elseif (remove_junk($b_copy['status']) == "2"): ?>
									Checked Out
								<?php endif;?>
							</td>

                        </tr>
<?php endforeach;?>
										</tbody>
				</table>
</div>
            </div>
        </div>
    </div>
    <!-- End: 1 Row 1 Column -->
<?php require_once('layouts/footer.php');?>
</body>

</html>