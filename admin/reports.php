<!DOCTYPE html>
<html lang="en">

<?php
    $page_name = "Reports";
    $reports_active = "active";
	require_once('layouts/head.php');
    page_require_level(0);
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
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-6 mb-4">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Catalog Reports</h6>
                </div>
                <div class="card-body">
		<div class="row">
            <div class="col-sm">
		<a href="#">
              <div class="card border-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Catalog Items</div>
<br>
                      <div class="text-xs font-weight-bold text-primary">Report on catalog items of your library.</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-book fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>

		</a>
            </div>
            <div class="col-sm">
		<a href="#">
              <div class="card border-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="h5 mb-0 font-weight-bold text-gray-800">All Copies</div>
<br>
                      <div class="text-xs font-weight-bold text-primary">Report on all the catalog items copies of<br>your library.</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-book fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>

		</a>
            </div>
		</div>
<br>
		<div class="row">
            <div class="col-sm">
		<a href="#">
              <div class="card border-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Booked Copies</div>
<br>
                      <div class="text-xs font-weight-bold text-primary">Report on those copies that has been booked<br>or reserved by your library members.</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-bookmark fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>

		</a>
            </div>
            <div class="col-sm">
		<a href="#">
              <div class="card border-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Export All Titles</div>
<br>
                      <div class="text-xs font-weight-bold text-primary">Export all the media titles of your library<br>catalog into a CSV file format.</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-download fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>

		</a>
            </div>
		</div>
<br>
		<div class="row">
            <div class="col-sm">
		<a href="#">
              <div class="card border-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Export All Copies</div>
<br>
                      <div class="text-xs font-weight-bold text-primary">Export all the media copies of your library<br>catalog into a CSV file format.</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-download fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>

		</a>
            </div>
            <div class="col-sm">

            </div>
		</div>
                </div>
              </div>
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Circulation Reports</h6>
                </div>
                <div class="card-body">
		<div class="row">
            <div class="col-sm">
		<a href="#">
              <div class="card border-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Current Circulations</div>
<br>
                      <div class="text-xs font-weight-bold text-primary">Report on all the current circulations of<br>your library.</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-book-open fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>

		</a>
            </div>
            <div class="col-sm">
		<a href="#">
              <div class="card border-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="h5 mb-0 font-weight-bold text-gray-800">All Circulations</div>
<br>
                      <div class="text-xs font-weight-bold text-primary">Report on all the circulations, current and past,<br>of your library.</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-book-open fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>

		</a>
            </div>
		</div>
<br>
		<div class="row">
            <div class="col-sm">
		<a href="#">
              <div class="card border-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Export All Circulations</div>
<br>
                      <div class="text-xs font-weight-bold text-primary">Export all the circulations, current and past,<br>of your library into a CSV file format.</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-download fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>

		</a>
            </div>
            <div class="col-sm">

            </div>
		</div>
                </div>
              </div>
</div>
            <div class="col-lg-6 mb-4">

              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Member Reports</h6>
                </div>
                <div class="card-body">
		<div class="row">
            <div class="col-sm">
		<a href="#">
              <div class="card border-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Current Members</div>
<br>
                      <div class="text-xs font-weight-bold text-primary">Report on all the current members of<br>your library. These are members who<br>are marked as active and a member<br>of either the Scouts or Adults groups. </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>

		</a>
            </div>
            <div class="col-sm">
		<a href="#">
              <div class="card border-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="h5 mb-0 font-weight-bold text-gray-800">All Members</div>
<br>
                      <div class="text-xs font-weight-bold text-primary">Report on all the members, current and past, of<br>your library.</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>

		</a>
            </div>
		</div>
<br>
		<div class="row">
            <div class="col-sm">
		<a href="#">
              <div class="card border-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Export Current Members</div>
<br>
                      <div class="text-xs font-weight-bold text-primary">Report on all the current members of<br>your library into a CSV file format.<br>These are members who are marked<br>as active and a member of either the<br>Scouts or Adults groups. </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-download fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>

		</a>
            </div>
            <div class="col-sm">
		<a href="#">
              <div class="card border-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Export All Members</div>
<br>
                      <div class="text-xs font-weight-bold text-primary">Report on all the members, current and past,<br>of your library into a CSV file format.</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-download fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>

		</a>
            </div>
		</div>
                </div>
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

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
