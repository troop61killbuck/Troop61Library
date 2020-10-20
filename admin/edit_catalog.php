<!DOCTYPE html>
<html lang="en">

<?php
        $page_name = "Edit Catalog Item";
        require_once('layouts/head.php');
    // Checkin What level user has permission to view this page
        page_require_level(0);
    $categories = find_all('book_category');
    $types = find_all('book_types');
    $photos = find_all_photos('book_media');
?>
 
<?php
$e_catalog = find_by_id('book_catalog',(int)$_GET['id']);
if(!$e_catalog){
    $session->msg("d","Missing user id.");
    redirect('catalog.php');
}
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

        $sql = "UPDATE book_catalog SET type ='{$type}', title ='{$title}', category='{$category}', description='{$description}', image_url='{$image}', WHERE id='{$db->escape($id)}'";
        $result = $db->query($sql);
        if($result && $db->affected_rows() === 1){
    activityLog($user['name']." updated a catalog item.");

            $session->msg('s',"Catalog Item Updated ");
            redirect('catalog.php', false);
        } else {
            $session->msg('d',' Sorry failed to update!');
            redirect('edit_catalog.php?id='.(int)$e_catalog['id'], false);
        }
    } else {
        $session->msg("d", $errors);
        redirect('edit_catalog.php'.(int)$e_catalog['id'],false);
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
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800"><?php echo $page_name; ?></h1>
                </div>

                <!-- Content Row -->
                <div class="col-md-12">
                    <?php echo display_msg($msg); ?>
                </div>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="d-sm-flex align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Edit Catalog Item Form</h6>
                        </div>
                        </div>
                        <div class="card-body">
                            <form method="post" action="edit_catalog.php?id=<?php echo (int)$e_catalog['id'];?>">
					  <div class="form-group">
                                    <label for="type"><b>Catalog Item Type</b></label>
                                    <select class="form-control" name="type">
                                        <option value=""></option>
                                        <?php foreach ($types as $type ):?>
                                            <option <?php if($type['type_level'] === $e_catalog['type']) echo 'selected="selected"';?> value="<?php echo $type['type_level'];?>"><?php echo ucwords($type['type_name']);?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="title"><b>Catalog Item Title</b></label>
                                    <input type="text" class="form-control" name="title" value="<?php echo $e_catalog['title'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="category"><b>Catalog Item Category</b></label>
                                    <select class="form-control" name="category">
                                        <option value=""></option>
                                        <?php foreach ($categories as $category ):?>
                                            <option <?php if($category['category_level'] === $e_catalog['category']) echo 'selected="selected"';?> value="<?php echo $category['category_level'];?>"><?php echo ucwords($category['category_name']);?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                                <div class="form-group">
                            <label for="description"><b>Catalog Item Description</b></label>
                            <textarea name="description" class="form-control" cols="30" rows="6"><?php echo $e_catalog['description'];?></textarea>
                        </div>
                                <div class="form-group">
                                    <label for="image"><b>Catalog Item Image</b></label>
                                    <select class="form-control" name="image">
                                        <?php  foreach ($photos as $photo): ?>
                      <option <?php if($photo['id'] === $e_catalog['image_url']) echo 'selected="selected"';?> value="<?php echo (int)$photo['id'] ?>"><?php echo $photo['name'] ?></option>
                    <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group clearfix">
                                    <button type="submit" name="edit_catalog_item" class="btn btn-primary">Edit Catalog Item</button>
                                </div>
                            </form>
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
