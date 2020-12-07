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

<body>
    <?php require_once('layouts/navbar.php');?>
    <main class="page product-page">
        <section class="clean-block clean-product dark" style="padding-top: 100px;">
            <div class="container">
                <div class="block-content"><a class="btn btn-primary" role="button" style="margin-bottom: 40px;" onclick="goBack()" data-toggle="tooltip" title="Go Back"><i class="fas fa-history"></i>&nbsp;Back</a>
                    <div class="product-info">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="gallery">
                                    <div class="sp-wrap"><a href="admin/uploads/books/<?php echo remove_junk($book_information['file_name']);?>"><img class="img-fluid d-block align-items-center align-content-center mx-auto" src="admin/uploads/books/<?php echo remove_junk($book_information['file_name']);?>"></a></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info">
                                    <h3 style="margin-bottom: 24px;"><?php echo remove_junk(ucwords($book_information['title']));?></h3><a class="btn btn-primary" role="button" style="margin-bottom: 40px;" href="request-book.php?catalogName=<?php echo remove_junk(urlencode($book_information['title']))?>"><i class="fas fa-clock"></i> Request Book</a>
                                    <div class="summary">
                                        <!-- Start: Catalog Item Description -->
                                        <p><?php echo remove_junk($book_information['description']);?></p><hr>
                                        <!-- End: Catalog Item Description -->
                                        <!-- Start: Catalog Item Description -->
                                        <p><strong>Type:</strong> <?php echo remove_junk($book_information['type_name']);?></p>
                                        <!-- End: Catalog Item Description -->
                                        <!-- Start: Catalog Item Description -->
                                        <p><strong>Category:</strong> <?php echo remove_junk($book_information['category_name']);?></p>
                                        <!-- End: Catalog Item Description -->
                                        <!-- Start: Catalog Item Description -->
                                        <p><strong>Number of Copies:</strong> <?php echo remove_junk($book_information['titlecount']);?></p>
                                        <!-- End: Catalog Item Description -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 40px;"><table class="table table-bordered" width="100%" cellspacing="0" style="font-family: -apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji'; background-color: #ffffff">
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
				</table></div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Start: Footer Dark -->
    <?php require_once('layouts/footer.php');?>
<script>
function goBack() {
  window.history.back();
}
</script>
</body>

</html>