<!DOCTYPE html> 
 <?php require_once('layouts/variables.php');?> 

<html lang="en">

<?php
        $page_name = "Users";
	  $users_active = "active";
	  $users_show = "show";
	  $users_dropdown_active = "active";
        require_once('layouts/head.php');
    // Checkin What level user has permission to view this page
        page_require_level(0);
    //pull out all user form database
        $all_users = find_all_user();
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
                            <h6 class="m-0 font-weight-bold text-primary">Users Table</h6>
                            <a href="add_user.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm float-right"><i class="fas fa-user-plus fa-sm text-white-50"></i> Add User</a>
                        </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th class="text-center" style="width: 50px;">#</th>
                                        <th>Name </th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th class="text-center">User Role</th>
                                        <th class="text-center" >Status</th>
                                        <th>Last Login</th>
                                        <th class="text-center" style="width: 100px;">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($all_users as $a_user): ?>
                                        <tr>
                                            <td class="text-center"><?php echo count_id();?></td>
                                            <td><?php echo remove_junk(ucwords($a_user['name']))?><?php if($a_user['tester'] === "1"){ echo '&nbsp&nbsp<i class="fas fa-bug"></i>';}?></td>
                                            <td><?php echo remove_junk($a_user['username'])?></td>
                                            <td><?php echo remove_junk($a_user['email'])?></td>
                                            <td class="text-center"><?php echo remove_junk(ucwords($a_user['group_name']))?></td> 
           						  <td class="text-center">
           							<?php if($a_user['status'] === '1'): ?>
            							<span class="label label-success"><?php echo "Active"; ?></span>
									<br>
          <div class="btn-group">
                <a href="deactivate_user.php?id=<?php echo (int)$a_user['id'];?>" class="btn btn-xs btn-danger" data-toggle="tooltip" title="Deactivate User">Deactivate 
               </a>
		</div>
          							<?php else: ?>
            							<span class="label label-danger"><?php echo "Deactive"; ?></span>
									<br>
           <div class="btn-group">
                <a href="activate_user.php?id=<?php echo (int)$a_user['id'];?>" class="btn btn-xs btn-success" data-toggle="tooltip" title="Activate User">Activate 
               </a>
		</div>
          							<?php endif;?>
           						  </td>
                                            <td><?php echo read_date($a_user['last_login'])?></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="edit_user.php?id=<?php echo (int)$a_user['id'];?>" class="btn btn-xs btn-warning" data-toggle="tooltip" title="Edit">
                                                        <i class="fas fa-user-edit"></i>
                                                    </a>
                                                    <a href="delete_user.php?id=<?php echo (int)$a_user['id'];?>" class="btn btn-xs btn-danger" data-toggle="tooltip" title="Remove">
                                                        <i class="fas fa-user-times"></i>
                                                    </a>
                                                    <?php if($a_user['reset_password'] === '0'): ?>
                                                        <a href="force_password_reset.php?id=<?php echo (int)$a_user['id'];?>" class="btn btn-xs btn-primary" data-toggle="tooltip" title="Force Password Reset On Next Login">
                                                            <i class="fas fa-user-lock"></i>
                                                        </a>
                                                    <?php else: ?>
                                                    <?php endif;?>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach;?>
                                    </tbody>
                                </table>
                </div>
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
