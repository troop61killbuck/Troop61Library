<!DOCTYPE html>
<html lang="en">

<?php
        $page_name = "Catalog Item";
        require_once('layouts/head.php');
    // Checkin What level user has permission to view this page
        page_require_level(0);
    $categories = find_all('book_category');
    $types = find_all('book_types');
    $photos = find_all_photos('book_media');
?>
 
<?php
$title = urldecode($_GET['title']);
$book_information = find_book_grouped($_GET['title']);
$book_copies = find_book_by_name($_GET['title']);
?>

<?php
if(isset($_POST['edit_catalog_item'])){

    $req_fields = array('type','title','category','description','image');
    validate_fields($req_fields);

    if(empty($errors)){
	  $id = (int)$e_catalog['id'];
        $type   = remove_junk($db->escape($_POST['type']));
        $title   = remove_junk($db->escape($_POST['title']));
	
        $category   = remove_junk($db->escape($_POST['category']));
        $description   = remove_junk($db->escape($_POST['description']));
        $image   = remove_junk($db->escape($_POST['image']));

        $sql = "UPDATE book_catalog SET type ='{$type}', title ='{$title}', category='{$category}', description='{$description}', image_url='{$image}' WHERE title='{$db->escape($title)}'";
        $result = $db->query($sql);
        if($result){
            $session->msg('s',"Catalog Item Updated ");
            redirect('catalog_item.php?title='.$_GET['title'], false);
        } else {
            $session->msg('d',' Sorry failed to update!');
            redirect('catalog_item.php?title='.$_GET['title'], false);
        }
    } else {
        $session->msg("d", $errors);
        redirect('catalog_item.php?title='.$_GET['title'],false);
    }
}
?>


<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <?php require_once('layouts/sidebar.php'); ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <?php require_once('layouts/topbar.php'); ?>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <a href="catalog_grouped.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-arrow-circle-left fa-sm text-white-50"></i> Back</a>
                <br>
                <br>
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            
                    <h1 class="h3 mb-0 text-gray-800"><?php echo remove_junk($title); ?></h1>
                </div>

                <!-- Content Row -->
                <div class="col-md-12">
                    <?php echo display_msg($msg); ?>
                </div>
                    <div class="card shadow mb-4">
                        <div class="card-body">
				<?php foreach($book_information as $book_info): ?>
					<form method="post" action="catalog_item.php?title=<?php echo $_GET['title'] ;?>">

					<table class="table table-bordered" width="100%" cellspacing="0">
						<tbody>
  							<tr>
    								<td>
									<b>Title:</b> <?php echo remove_junk($book_info['title']); ?>
									<br><br>
									<div class="form-group">
                                    				<input type="text" class="form-control" name="title" value="<?php echo $book_info['title'];?>" readonly>
                                				</div>
								</td>
    								<td rowspan="5" style="width: 210px;">
									<img src="uploads/books/<?php echo remove_junk($book_info['file_name'])?>" height="50%" class="img-thumbnail">
									<br><br>
									<div class="form-group">
                                    				<select class="form-control" name="image">
                                        					<?php  foreach ($photos as $photo): ?>
                      									<option <?php if($photo['id'] === $book_info['image_url']) echo 'selected="selected"';?> value="<?php echo (int)$photo['id'] ?>"><?php echo $photo['name'] ?></option>
                    								<?php endforeach; ?>
                                   	 				</select>
                               			 	</div>
								</td>
  							</tr>
							<tr>
    								<td>
									<b>Description:</b> 
									<div class="form-group">
                                    				<textarea name="description" class="form-control" cols="30" rows="6"><?php echo $book_info['description'];?></textarea>
                                				</div>
								</td>
     							</tr>
  							<tr>
    								<td>
									<b>Type:</b> <?php echo remove_junk($book_info['type_name']); ?>
									<br><br>
									<div class="form-group">
                                    					<select class="form-control" name="type">
                                        						<option value=""></option>
                                        							<?php foreach ($types as $type ):?>
                                            							<option <?php if($type['type_level'] === $book_info['type']) echo 'selected="selected"';?> value="<?php echo $type['type_level'];?>"><?php echo ucwords($type['type_name']);?></option>
                                        							<?php endforeach;?>
                                    					</select>
                                				</div>

								</td>
 			 				</tr>
  							<tr>
     								<td>
									<b>Category:</b> <?php echo remove_junk($book_info['category_name']); ?>
									<br><br>
									<div class="form-group">
                                    				<select class="form-control" name="category">
                                        					<option value=""></option>
                                        					<?php foreach ($categories as $category ):?>
                                            					<option <?php if($category['category_level'] === $book_info['category']) echo 'selected="selected"';?> value="<?php echo $category['category_level'];?>"><?php echo ucwords($category['category_name']);?></option>
                                        					<?php endforeach;?>
                                    				</select>
                                				</div>

								</td>
 							</tr>
  							<tr>
    								<td><b>Number of Copies:</b> <?php echo remove_junk($book_info['titlecount']); ?></td>
  							</tr>
							<tr>
    								<td colspan="2" class="text-center">
                                    				<button type="submit" name="edit_catalog_item" class="btn btn-primary">Edit Catalog Item</button>
								</td>
  							</tr>
						</tbody>
					</table>
					</form>
				<?php endforeach;?>
				</div>
                </div>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="d-sm-flex align-items-center justify-content-right">
                            <a href="add_copy.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm float-right"><i class="fas fa-user-clock fa-sm text-white-50"></i> Add Copy</a>
                        </div>
                        </div>
                        <div class="card-body">
				
				<table class="table table-bordered" width="100%" cellspacing="0">
					<thead>
  						<tr>
    							<th class="text-center" style="width: 50px;">#</th>
    							<th class="text-center" style="width: 500px;">ID</th>
    							<th class="text-center">Copy Number</th>
    							<th class="text-center">Status</th>
    							<th class="text-center">Actions</th>
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
    							<td class="text-center">
								<?php if (remove_junk($b_copy['status']) == "0"): ?>
									<a href="reserve_id.php?catalogID=<?php echo remove_junk($b_copy['id'])?>&redirect=catalog_item.php?title=<?php echo $_GET['title'];?>" class="btn btn-xs btn-warning" data-toggle="tooltip" title="Reserve Item">
                                                    		<i class="fas fa-clock"></i>&nbsp<i class="fas fa-book-open"></i>
                                                	</a>
									<a href="check_out.php?catalogID=<?php echo remove_junk($b_copy['id'])?>&redirect=catalog_item.php?title=<?php echo $_GET['title'];?>" class="btn btn-xs btn-success" data-toggle="tooltip" title="Check Out">
                                                    		<i class="fas fa-arrow-circle-right"></i>&nbsp<i class="fas fa-book-open"></i>
                                                	</a>
								<?php elseif (remove_junk($b_copy['status']) == "1"): ?>
									<a href="cancel_reservation.php?associatedID=<?php echo remove_junk($b_copy['CirculationsAssociatedID'])?>&catalogID=<?php echo remove_junk($b_copy['id'])?>&redirect=catalog_item.php?title=<?php echo $_GET['title'];?>" class="btn btn-xs btn-danger" data-toggle="tooltip" title="Cancel Reservation">
                                                    		<i class="fas fa-times"></i>&nbsp<i class="fas fa-book-open"></i>
                                                	</a>
									<a href="circulations.php?catalogID=<?php echo remove_junk($b_copy['id'])?>&redirect=catalog_item.php?title=<?php echo $_GET['title'];?>" class="btn btn-xs btn-success" data-toggle="tooltip" title="Check Out">
                                                    		<i class="fas fa-arrow-circle-right"></i>&nbsp<i class="fas fa-book-open"></i>
                                                	</a>
								<?php elseif (remove_junk($b_copy['status']) == "2"): ?>
									<a href="check_in_id.php?associatedID=<?php echo remove_junk($b_copy['CirculationsAssociatedID'])?>&redirect=catalog_item.php?title=<?php echo $_GET['title'];?>" class="btn btn-xs btn-primary" data-toggle="tooltip" title="Check In Item">
                                                    		<i class="fas fa-arrow-circle-left"></i>&nbsp<i class="fas fa-book-open"></i>
                                                    	</a>
								<?php endif;?>
								<a href="circulations.php?catalogHistory=<?php echo (int)$b_copy['id'];?>&redirect=catalog_item.php?title=<?php echo $_GET['title'];?>" class="btn btn-xs btn-info" data-toggle="tooltip" title="View Copy Circulation History">
                                                    <i class="fas fa-eye"></i>
                                                </a>
								<a href="delete_copy.php?id=<?php echo (int)$b_copy['id'];?>" class="btn btn-xs btn-danger" data-toggle="tooltip" title="Delete Copy">
                                                    <i class="fas fa-trash-alt"></i>
                                                </a>
							</td>
  						</tr>
					<?php endforeach;?>
					</tbody>
				</table>
				</div>
                </div>

            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <?php require_once('layouts/footer.php'); ?>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<?php require_once('layouts/logout_page.php'); ?>

<!-- Scripts-->
<?php require_once('layouts/page_scripts.php'); ?>

</body>

</html>
