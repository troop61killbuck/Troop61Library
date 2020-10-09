<!DOCTYPE html>
<html lang="en">

<?php
        $page_name = "Book Catalog";
	  $catalog_active = "active";
	  $catalog_show = "show";
	  $catalog_dropdown_active = "active";
        require_once('layouts/head.php');
    // Checkin What level user has permission to view this page
        page_require_level(0);
        $all_books = find_all_books_grouped();
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
                            <h6 class="m-0 font-weight-bold text-primary">Book Catalog Table</h6>
				    </div>
				</div>
                        <div class="card-header py-3">
                            <div class="d-sm-flex align-items-center justify-content-left">
                            <a href="add_catalog.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm "><i class="fas fa-plus fa-sm text-white-50"></i> Manual Add</a>
				    &nbsp&nbsp
                            <a href="add_catalog_csv.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Import Items</a>
                        </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th class="text-center" style="width: 50px;">#</th>
                                        <th style="width: 15%;">Type</th>
						    <th>Title</th>
                                        <th style="width: 15%;">Category</th>
                                        <th class="text-center" style="width: 110px;">Number of Copies</th>
                                        <th class="text-center" style="width: 110px;">Image</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($all_books as $a_book): ?>
                                    <tr>
                                        <td class="text-center"><?php echo count_id();?></td>
                                        <td><?php echo remove_junk($a_book['type_name'])?></td>
                                        <td><a href="catalog_item.php?title=<?php echo remove_junk(urlencode($a_book['title']))?>"><?php echo remove_junk(ucwords($a_book['title']))?></a></td>
                                        <td><?php echo remove_junk(ucwords($a_book['category_name']))?></td>
                                        <td class="text-center"><?php echo remove_junk(ucwords($a_book['titlecount']))?></td>
                                        <td class="text-center"><img src="uploads/books/<?php echo remove_junk($a_book['file_name'])?>" height="50%" class="img-thumbnail"></td>
						</tr>
                                    <?php endforeach;?>
                                    </tbody>
                                </table>
                </div>
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

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
