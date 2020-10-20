<!DOCTYPE html>
<html lang="en">

<?php
$page_name = "Add Category";
require_once('layouts/head.php');
// Checkin What level user has permission to view this page
page_require_level(0);
?>

<?php
if(isset($_POST['add'])){

    $req_fields = array('category-name','category-level');
    validate_fields($req_fields);

    if(find_by_categoryName($_POST['category-name']) === false ){
        $session->msg('d','<b>Sorry!</b> Entered Category Name already in database!');
        redirect('categories.php', false);
    }elseif(find_by_categoryLevel($_POST['category-level']) === false) {
        $session->msg('d','<b>Sorry!</b> Entered Category Level already in database!');
        redirect('categories.php', false);
    }
    if(empty($errors)){
        $name = remove_junk($db->escape($_POST['category-name']));
        $level = remove_junk($db->escape($_POST['category-level']));


        $query  = "INSERT INTO book_category (";
        $query .="category_name,category_level";
        $query .=") VALUES (";
        $query .=" '{$name}', '{$level}'";
        $query .=")";
        if($db->query($query)){
            //sucess
    activityLog($user['name']." added a category.");
            $session->msg('s',"Category has been created! ");
            redirect('categories.php', false);
        } else {
            //failed
            $session->msg('d',' Sorry failed to create Category!');
            redirect('categories.php', false);
        }
    } else {
        $session->msg("d", $errors);
        redirect('categories.php',false);
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
                            <h6 class="m-0 font-weight-bold text-primary">Add Category Form</h6>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="add_category.php" class="clearfix">
                            <div class="form-group">
                                <label for="name" class="control-label">Category Name</label>
                                <input type="name" class="form-control" name="category-name">
                            </div>
                            <div class="form-group">
                                <label for="level" class="control-label">Category Level</label>
                                <input type="number" class="form-control" name="category-level">
                            </div>
                            <div class="form-group clearfix">
                                <button type="submit" name="add" class="btn btn-info">Submit</button>
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
