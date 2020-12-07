<!DOCTYPE html> 
 <?php require_once('layouts/variables.php');?> 

<html lang="en">
    <?php
        $page_name = "All Alerts";
        require_once('layouts/head.php');
        // Checkin What level user has permission to view this page
        page_require_level(0);
        
        $alerts = find_all_alerts('contact_us_responses','book_requests');
        
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

		<?php if ($alert['location'] == "book_requests"):?>
                                    <tr>
                                        <td rowspan="2" class="text-center" style="width: 50px; vertical-align:middle;">
                                            <a href="alert.php?id=<?php echo $alert['id'];?>&location=<?php echo $alert['location'];?>&redirect=<?php echo $redirect;?>">
                                                <div class="icon-circle bg-primary">
                                                    <i class="fas fa-book text-white"></i>
                                                </div>
                                            </a>
                                        </td>
                                        <td colspan="2" style="vertical-align:middle;">
                                            <div class="small text-gray-500">SUBMITTED: <?php echo read_date($alert['datetime_submitted']); ?><br>UPDATED: <?php echo read_date($alert['status_updated']); ?></div>
                                        </td>
                                        <td rowspan="2" class="text-center" style="width: 50px; vertical-align:middle;">
                                            <?php if ($alert['status'] == "0"): ?>
                                            <a style="text-decoration: none; color: #3a3b45;" href="mark_alert.php?id=<?php echo $alert['id'];?>&status=read&location=<?php echo $alert['location'];?>&redirect=<?php echo base64_encode($redirect);?>" data-toggle="tooltip" data-placement="top" title="Mark As Read">
                                                <div>
                                                    <i class="fas fa-check-circle fa-3x"></i>
                                                </div>
                                            </a>
                                            <?php elseif ($alert['status'] == "1"): ?>
                                            <a style="text-decoration: none; color: #3a3b45;" href="mark_alert.php?id=<?php echo $alert['id'];?>&status=unread&location=<?php echo $alert['location'];?>&redirect=<?php echo base64_encode($redirect);?>" data-toggle="tooltip" data-placement="top" title="Mark As Unread">
                                                <div>
                                                    <i class="fas fa-times-circle fa-3x"></i>
                                                </div>
                                            </a>
                                            <?php endif;?>
                                        </td>
                                        <td rowspan="2" class="text-center" style="width: 50px; vertical-align:middle;">
                                            <a style="text-decoration: none; color: #3a3b45;" href="delete_alert.php?id=<?php echo $alert['id'];?>&location=<?php echo $alert['location'];?>&redirect=<?php echo base64_encode($redirect);?>" data-toggle="tooltip" data-placement="top" title="Delete">
                                                <div>
                                                    <i class="fas fa-trash fa-3x"></i>
                                                </div>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="vertical-align:middle;"><?php if ($alert['status'] == "0"): ?>
                                            <a style="text-decoration: none; color: #3a3b45;" href="alert.php?id=<?php echo $alert['id'];?>&location=<?php echo $alert['location'];?>&redirect=<?php echo $redirect;?>">
                                            <span class="font-weight-bold">[Book Request] - <?php echo remove_junk($alert['message']); ?></span> ( <?php echo remove_junk($alert['name']); ?> )
                                            </a>
                                            <?php elseif ($alert['status'] == "1"): ?>
                                            <a style="text-decoration: none; color: #3a3b45;" href="alert.php?id=<?php echo $alert['id'];?>&location=<?php echo $alert['location'];?>&redirect=<?php echo $redirect;?>">
                                            [Book Request] - <?php echo remove_junk($alert['message']); ?> ( <?php echo remove_junk($alert['name']); ?> )
                                            </a>
                                            <?php else: ?>
                                            <?php endif;?>
                                        </td>
                                    </tr>
		<?php elseif ($alert['location'] == "contact_us_responses"):?>
                                    <tr>
                                        <td rowspan="2" class="text-center" style="width: 50px; vertical-align:middle;">
                                            <a href="alert.php?id=<?php echo $alert['id'];?>&location=<?php echo $alert['location'];?>&redirect=<?php echo $redirect;?>">
                                                <div class="icon-circle bg-primary">
                                                    <i class="fas fa-user text-white"></i>
                                                </div>
                                            </a>
                                        </td>
                                        <td colspan="2" style="vertical-align:middle;">
                                            <div class="small text-gray-500">SUBMITTED: <?php echo read_date($alert['datetime_submitted']); ?><br>UPDATED: <?php echo read_date($alert['status_updated']); ?></div>
                                        </td>
                                        <td rowspan="2" class="text-center" style="width: 50px; vertical-align:middle;">
                                            <?php if ($alert['status'] == "0"): ?>
                                            <a style="text-decoration: none; color: #3a3b45;" href="mark_alert.php?id=<?php echo $alert['id'];?>&status=read&location=<?php echo $alert['location'];?>&redirect=<?php echo base64_encode($redirect);?>" data-toggle="tooltip" data-placement="top" title="Mark As Read">
                                                <div>
                                                    <i class="fas fa-check-circle fa-3x"></i>
                                                </div>
                                            </a>
                                            <?php elseif ($alert['status'] == "1"): ?>
                                            <a style="text-decoration: none; color: #3a3b45;" href="mark_alert.php?id=<?php echo $alert['id'];?>&status=unread&location=<?php echo $alert['location'];?>&redirect=<?php echo base64_encode($redirect);?>" data-toggle="tooltip" data-placement="top" title="Mark As Unread">
                                                <div>
                                                    <i class="fas fa-times-circle fa-3x"></i>
                                                </div>
                                            </a>
                                            <?php endif;?>
                                        </td>
                                        <td rowspan="2" class="text-center" style="width: 50px; vertical-align:middle;">
                                            <a style="text-decoration: none; color: #3a3b45;" href="delete_alert.php?id=<?php echo $alert['id'];?>&location=<?php echo $alert['location'];?>&redirect=<?php echo base64_encode($redirect);?>" data-toggle="tooltip" data-placement="top" title="Delete">
                                                <div>
                                                    <i class="fas fa-trash fa-3x"></i>
                                                </div>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="vertical-align:middle;"><?php if ($alert['status'] == "0"): ?>
                                            <a style="text-decoration: none; color: #3a3b45;" href="alert.php?id=<?php echo $alert['id'];?>&location=<?php echo $alert['location'];?>&redirect=<?php echo $redirect;?>">
                                            <span class="font-weight-bold">[Contact Us Message] - <?php echo remove_junk($alert['name']); ?></span>
                                            </a>
                                            <?php elseif ($alert['status'] == "1"): ?>
                                            <a style="text-decoration: none; color: #3a3b45;" href="alert.php?id=<?php echo $alert['id'];?>&location=<?php echo $alert['location'];?>&redirect=<?php echo $redirect;?>">
                                            [Contact Us Message] - <?php echo remove_junk($alert['name']); ?>
                                            </a>
                                            <?php else: ?>
                                            <?php endif;?>
                                        </td>
                                    </tr>
		<?php endif;?>

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