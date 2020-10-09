<!DOCTYPE html>
<html lang="en">

<?php
        $page_name = "Book Media";
	  $book_media_active = "active";
        require_once('layouts/head.php');
    // Checkin What level user has permission to view this page
        page_require_level(0);
?>
<?php $media_files = find_all_photos('book_media');?>
<?php
  if(isset($_POST['submit'])) {
  $photo = new Media();
  $photo->upload($_FILES['file_upload']);
    if($photo->process_media()){
        $session->msg('s','photo has been uploaded.');
        redirect('book_media.php');
    } else{
      $session->msg('d',join($photo->errors));
      redirect('book_media.php');
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
                            <h6 class="m-0 font-weight-bold text-primary">Book Images Table</h6>
                            <form action="book_media.php" method="POST" enctype="multipart/form-data">
                  <span class="input-group-btn">
                    <input type="file" name="file_upload" multiple="multiple" class="btn btn-primary btn-file"/>
                 </span>
                 <button type="submit" name="submit" class="btn btn-primary">Upload Image</button>
             </form> 
                        </div>
                        </div>
                        <div class="card-body">
<div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                                         <thead>
                <tr>
                  <th class="text-center" style="width: 50px;">#</th>
                  <th class="text-center">Photo Name</th>
                  <th th class="text-center" style="width: 650px;">Photo</th>
                  <th class="text-center">File Name</th>
                  <th class="text-center" style="width: 20%;">Photo Type</th>
                  <th class="text-center" style="width: 100px;">Actions</th>
                </tr>
              </thead>
                <tbody>
                <?php foreach ($media_files as $media_file): ?>
                <tr class="list-inline">
                 <td class="text-center"><?php echo count_id();?></td>
<td class="text-center">
                  <?php echo $media_file['name'];?>
                </td>
                  <td class="text-center">
                      <img src="uploads/books/<?php echo $media_file['file_name'];?>" class="img-thumbnail" />
                  </td>
                <td class="text-center">
                  <?php echo $media_file['file_name'];?>
                </td>
                <td class="text-center">
                  <?php echo $media_file['file_type'];?>
                </td>
                <td class="text-center">
                                            <div class="btn-group">
                                                <a href="edit_media.php?id=<?php echo (int)$media_file['id'];?>" class="btn btn-xs btn-warning" data-toggle="tooltip" title="Edit">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>
                                                <a href="delete_media.php?id=<?php echo (int)$media_file['id'];?>" class="btn btn-xs btn-danger" data-toggle="tooltip" title="Remove">
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
