<!DOCTYPE html>
<html lang="en">

<?php
        $page_name = "Members";
	  $members_active = "active";
	  $members_show = "show";
	  $members_dropdown_active = "active";
        require_once('layouts/head.php');
    // Checkin What level user has permission to view this page
        page_require_level(0);
        $all_members = find_all_members();
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
                            <div class="d-sm-flex align-items-center justify-content-left">
                            <a href="add_member.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm "><i class="fas fa-plus fa-sm text-white-50"></i> Manual Add</a>
				    &nbsp&nbsp
                            <a href="add_member_csv.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Import Members</a>
                        </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th class="text-center" style="width: 50px;">#</th>
                                        <th>Member Number</th>
                                        <th>Name</th>
                                        <th class="text-center">Login?</th>
                                        <th class="text-center">Username</th>
                                        <th class="text-center">Group</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center" style="width: 250px;">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($all_members as $a_member): ?>
                                    <tr>
                                        <td class="text-center"><?php echo count_id();?></td>
                                        <td><?php echo remove_junk($a_member['id'])?></td>
                                        <td><?php echo remove_junk(ucwords($a_member['name']))?></td>
                                        <td class="text-center">
                                            <?php if($a_member['login'] === '0'): ?>
                                            <?php echo "No"; ?>
                                            <?php elseif($a_member['login'] === '1'): ?>
                                                <?php echo "Yes"; ?>
                                            <?php endif;?>
                                        </td>
                                        <td class="text-center"><?php echo remove_junk(ucwords($a_member['username']))?></td>
                                        <td class="text-center"><?php echo remove_junk(ucwords($a_member['group_name']))?></td>
                                        <td class="text-center"><?php if($a_member['status'] === '0'): ?>
                                                <?php echo "Active"; ?>
                                            <?php elseif($a_member['status'] === '1'): ?>
                                                <?php echo "Inactive"; ?>
                                            <?php endif;?>
                                        </td>
                                        <td class="text-center">
								<a href="circulations.php?memberHistory=<?php echo (int)$a_member['id'];?>&redirect=members.php" class="btn btn-xs btn-info" data-toggle="tooltip" title="View Member Circulation History">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a href="edit_member.php?id=<?php echo (int)$a_member['id'];?>" class="btn btn-xs btn-warning" data-toggle="tooltip" title="Edit">
                                                    <i class="fas fa-user-edit"></i>
                                                </a>
                                                <a href="delete_member.php?id=<?php echo (int)$a_member['id'];?>" class="btn btn-xs btn-danger" data-toggle="tooltip" title="Remove">
                                                    <i class="fas fa-user-times"></i>
                                                </a>
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


</body>

</html>
