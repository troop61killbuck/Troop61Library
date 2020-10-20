<!DOCTYPE html>
<html lang="en">
    <?php
        $page_name = "All Alerts";
        require_once('layouts/head.php');
        // Checkin What level user has permission to view this page
        page_require_level(0);
        
        $alerts = find_all_alerts('alerts',$user['id']);
        
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
                    <!-- Content Row -->
                    <div class="col-md-12">
                        <?php echo display_msg($msg); ?>
                    </div>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="d-sm-flex align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">All Alerts</h6>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered" width="100%" cellspacing="0">
                                <tbody>
                                    <?php foreach($alerts as $alert): ?>
                                    <tr>
                                        <td rowspan="2" class="text-center" style="width: 50px; vertical-align:middle;">
                                            <a href="alert.php?id=<?php echo $alert['id'];?>">
                                                <div class="icon-circle bg-<?php echo $alert['color'];?>">
                                                    <i class="<?php echo $alert['icon'];?>"></i>
                                                </div>
                                            </a>
                                        </td>
                                        <td colspan="2" style="vertical-align:middle;">
                                            <div class="small text-gray-500"><?php echo read_date($alert['date']); ?></div>
                                        </td>
                                        <td rowspan="2" class="text-center" style="width: 50px; vertical-align:middle;">
                                            <?php if ($alert['viewed'] == "0"): ?>
                                            <a style="text-decoration: none; color: #3a3b45;" href="mark_alert.php?id=<?php echo $notification['id'];?>&status=read&redirect=<?php echo $redirect;?>" data-toggle="tooltip" data-placement="bottom" title="Mark As Read">
                                                <div>
                                                    <i class="far fa-envelope-open fa-3x"></i>
                                                </div>
                                            </a>
                                            <?php elseif ($alert['viewed'] == "1"): ?>
                                            <a style="text-decoration: none; color: #3a3b45;" href="mark_alert.php?id=<?php echo $notification['id'];?>&status=unread&redirect=<?php echo $redirect;?>" data-toggle="tooltip" data-placement="bottom" title="Mark As Unread">
                                                <div>
                                                    <i class="far fa-envelope fa-3x"></i>
                                                </div>
                                            </a>
                                            <?php endif;?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="vertical-align:middle;"><?php if ($alert['viewed'] == "0"): ?>
                                            <a style="text-decoration: none; color: #3a3b45;" href="alert.php?id=<?php echo $alert['id'];?>">
                                            <span class="font-weight-bold"><?php echo remove_junk($alert['title']); ?></span>
                                            </a>
                                            <?php elseif ($alert['viewed'] == "1"): ?>
                                            <a style="text-decoration: none; color: #3a3b45;" href="alert.php?id=<?php echo $alert['id'];?>">
                                            <?php echo $alert['title']; ?>
                                            </a>
                                            <?php else: ?>
                                            <?php endif;?>
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
        <!-- Page level plugins -->
        <script src="vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Page level custom scripts -->
        <script src="js/demo/datatables-demo.js"></script>
    </body>
</html>