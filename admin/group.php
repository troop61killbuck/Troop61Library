<!DOCTYPE html>
<html lang="en">

<?php
        $page_name = "Groups";
	  $users_active = "active";
	  $users_show = "show";
	  $groups_dropdown_active = "active";
        require_once('layouts/head.php');
    // Checkin What level user has permission to view this page
        page_require_level(0);
    //pull out all user form database
        $all_groups = find_all('user_groups');
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
                            <h6 class="m-0 font-weight-bold text-primary">Groups Table</h6>
                            <a href="add_group.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm float-right"><i class="fas fa-plus fa-sm text-white-50"></i> Add Group</a>
                        </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th class="text-center" style="width: 50px;">#</th>
                                        <th>Group Name</th>
                                        <th class="text-center" style="width: 20%;">Group Level</th>
                                        <th class="text-center" style="width: 100px;">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($all_groups as $a_group): ?>
                                        <tr>
                                            <td class="text-center"><?php echo count_id();?></td>
                                            <td><?php echo remove_junk(ucwords($a_group['group_name']))?></td>
                                            <td class="text-center">
                                                <?php echo remove_junk(ucwords($a_group['group_level']))?>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="edit_group.php?id=<?php echo (int)$a_group['id'];?>" class="btn btn-xs btn-warning" data-toggle="tooltip" title="Edit">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                    <a href="delete_group.php?id=<?php echo (int)$a_group['id'];?>" class="btn btn-xs btn-danger" data-toggle="tooltip" title="Remove">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </a>
                                                </div>
                                            </td>
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

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
