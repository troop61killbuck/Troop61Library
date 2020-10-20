<!DOCTYPE html>
<html lang="en">

<?php
        $page_name = "Library Card Generator";
        require_once('layouts/head.php');
    // Checkin What level user has permission to view this page
        page_require_level(0);
?>

<?php
if(isset($_POST['cards'])){
            //sucess
    activityLog($user['name']." sent library cards to be printed.");

            $session->msg('s',"Library Cards Sent For Printing");
            redirect('library_card.php', false);
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
                            
                            <h6 class="m-0 font-weight-bold text-primary"><a href="library_card.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm float-left"><i class="fas fa-arrow-circle-left fa-sm text-white-50"></i> Back</a><br><br>Select Locations For Labels To Be Printed</h6>
                        </div>
                        </div>
                        <div class="card-body">
					Only select the exact number of cards to be geneated, as it will break the generation otherwise.<br><br>
                            <form method="post" action="barcode_printout.php" target="_blank" id="barcode_print">
                            <div class="table-responsive">
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <td class="text-center table-dark"></td>
                                        <td class="text-center table-dark"><b>Column 1</b></td>
                                        <td class="text-center table-dark"><b>Column 2</b></td>
                                        <td class="text-center table-dark"><b>Column 3</b></td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="text-center table-dark"><b>Row 1</b></td>
                                        <td class="text-center"><input type="checkbox" id="c1r1" name="c1r1" value="1"></td>
                                        <td class="text-center"><input type="checkbox" id="c2r1" name="c2r1" value="1"></td>
                                        <td class="text-center"><input type="checkbox" id="c3r1" name="c3r1" value="1"></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center table-dark"><b>Row 2</b></td>
                                        <td class="text-center"><input type="checkbox" id="c1r2" name="c1r2" value="1"></td>
                                        <td class="text-center"><input type="checkbox" id="c2r2" name="c2r2" value="1"></td>
                                        <td class="text-center"><input type="checkbox" id="c3r2" name="c3r2" value="1"></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center table-dark"><b>Row 3</b></td>
                                        <td class="text-center"><input type="checkbox" id="c1r3" name="c1r3" value="1"></td>
                                        <td class="text-center"><input type="checkbox" id="c2r3" name="c2r3" value="1"></td>
                                        <td class="text-center"><input type="checkbox" id="c3r3" name="c3r3" value="1"></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center table-dark"><b>Row 4</b></td>
                                        <td class="text-center"><input type="checkbox" id="c1r4" name="c1r4" value="1"></td>
                                        <td class="text-center"><input type="checkbox" id="c2r4" name="c2r4" value="1"></td>
                                        <td class="text-center"><input type="checkbox" id="c3r4" name="c3r4" value="1"></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center table-dark"><b>Row 5</b></td>
                                        <td class="text-center"><input type="checkbox" id="c1r5" name="c1r5" value="1"></td>
                                        <td class="text-center"><input type="checkbox" id="c2r5" name="c2r5" value="1"></td>
                                        <td class="text-center"><input type="checkbox" id="c3r5" name="c3r5" value="1"></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center table-dark"><b>Row 6</b></td>
                                        <td class="text-center"><input type="checkbox" id="c1r6" name="c1r6" value="1"></td>
                                        <td class="text-center"><input type="checkbox" id="c2r6" name="c2r6" value="1"></td>
                                        <td class="text-center"><input type="checkbox" id="c3r6" name="c3r6" value="1"></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center table-dark"><b>Row 7</b></td>
                                        <td class="text-center"><input type="checkbox" id="c1r7" name="c1r7" value="1"></td>
                                        <td class="text-center"><input type="checkbox" id="c2r7" name="c2r7" value="1"></td>
                                        <td class="text-center"><input type="checkbox" id="c3r7" name="c3r7" value="1"></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center table-dark"><b>Row 8</b></td>
                                        <td class="text-center"><input type="checkbox" id="c1r8" name="c1r8" value="1"></td>
                                        <td class="text-center"><input type="checkbox" id="c2r8" name="c2r8" value="1"></td>
                                        <td class="text-center"><input type="checkbox" id="c3r8" name="c3r8" value="1"></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center table-dark"><b>Row 9</b></td>
                                        <td class="text-center"><input type="checkbox" id="c1r9" name="c1r9" value="1"></td>
                                        <td class="text-center"><input type="checkbox" id="c2r9" name="c2r9" value="1"></td>
                                        <td class="text-center"><input type="checkbox" id="c3r9" name="c3r9" value="1"></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center table-dark"><b>Row 10</b></td>
                                        <td class="text-center"><input type="checkbox" id="c1r10" name="c1r10" value="1"></td>
                                        <td class="text-center"><input type="checkbox" id="c2r10" name="c2r10" value="1"></td>
                                        <td class="text-center"><input type="checkbox" id="c3r10" name="c3r10" value="1"></td>
                                    </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td class="text-center table-dark"></td>
                                            <td class="text-center table-dark">
                                                <label for="col1"><b>Check All In Column 1</b></label><br>
                                                <input type="checkbox" id="col1" name="col1">
                                            </td>
                                            <td class="text-center table-dark">
                                                <label for="col2"><b>Check All In Column 2</b></label><br>
                                                <input type="checkbox" id="col2" name="col2">
                                            </td>
                                            <td class="text-center table-dark">
                                                <label for="col3"><b>Check All In Column 3</b></label><br>
                                                <input type="checkbox" id="col3" name="col3">
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                </div>
                                <div class="form-group clearfix">
                                    <button type="submit" name="cards" class="btn btn-primary">Submit</button>
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

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

    <script>
        // Listen for click on toggle checkbox
        $('#col1').click(function(event) {
            if(this.checked) {
                // Iterate each checkbox
                $(':checkbox[name^="c1r"]').each(function() {
                    this.checked = true;
                });
            } else {
                $(':checkbox[name^="c1r"]').each(function() {
                    this.checked = false;
                });
            }
        });
        $('#col2').click(function(event) {
            if(this.checked) {
                // Iterate each checkbox
                $(':checkbox[name^="c2r"]').each(function() {
                    this.checked = true;
                });
            } else {
                $(':checkbox[name^="c2r"]').each(function() {
                    this.checked = false;
                });
            }
        });
        $('#col3').click(function(event) {
            if(this.checked) {
                // Iterate each checkbox
                $(':checkbox[name^="c3r"]').each(function() {
                    this.checked = true;
                });
            } else {
                $(':checkbox[name^="c3r"]').each(function() {
                    this.checked = false;
                });
            }
        });

document.getElementById("barcode_print").onsubmit = function() {
setTimeout(() => {  window.location.href = "library_card.php";
    return false;
 }, 2000);
    };

    </script>

</body>

</html>
