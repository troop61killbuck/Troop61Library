<!DOCTYPE html>
<html lang="en">

<?php
        $page_name = "Library Card Generator";
	  $members_active = "active";
	  $members_show = "show";
	  $library_cards_dropdown_active = "active";
        require_once('layouts/head.php');
    // Checkin What level user has permission to view this page
        page_require_level(0);
        $all_cards = find_all_cards();
        $all_members = find_all_members();

?>

<?php
if(isset($_POST['add_card'])){

    $req_fields = array('add-card');
    validate_fields($req_fields);

    if(find_by_card_number($_POST['add-card']) === false ){
        $session->msg('d','<b>Sorry!</b> Barcode Already Ready To Be Printed');
        redirect('library_card.php', false);
    }

    if(empty($errors)){

$member = find_by_id('members',(int)$_POST['add-card']);

$barcode_url = remove_junk($member['id']);
$content = file_get_contents("http://troop61library.ml/admin/barcode_generator/barcode.php?s=code-128&d={$barcode_url}&ts=50&w=252&h=84&p=15&th=15");

$myfile = fopen("barcode_generator/generated_barcodes/{$barcode_url}.png", "w+") or die("/generated_barcodes/{$barcode_url}.png Failed");
$txt = $content;
fwrite($myfile, $txt);
fclose($myfile);

        $member_no = remove_junk($member['id']);
        $member_name = remove_junk($member['name']);
        $member_group = remove_junk($member['group']);
        $query  = "INSERT INTO barcode_generator (";
        $query .="member_no, member_name, member_group, barcode_url";
        $query .=") VALUES (";
        $query .=" '{$member_no}', '{$member_name}', '{$member_group}', 'barcode_generator/generated_barcodes/{$barcode_url}.png'";
        $query .=")";
        if($db->query($query)){
            //sucess
    activityLog($user['name']." added a library card to be generated.");

            $session->msg('s',"Library Card Generation Added!");
            redirect('library_card.php', false);
        } else {
            //failed
            $session->msg('d',' Sorry failed to add card for generation!');
            redirect('library_card.php', false);
        }
    } else {
        $session->msg("d", $errors);
        redirect('library_card.php',false);
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
			  <a href="library_card_label_selector.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Barcodes</a>
                </div>

                <!-- Content Row -->
                <div class="col-md-12">
                    <?php echo display_msg($msg); ?>
                </div>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="d-sm-flex align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Library Card Generation Table</h6>
                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm float-right" data-toggle="modal" data-target="#addcardModal"><i class="fas fa-user-plus fa-sm text-white-50"></i> Add Card To Generate</a>
                        </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th class="text-center" style="width: 50px;">#</th>
                                        <th style="width: 125px;">Member Number</th>
                                        <th>Name</th>
                                        <th class="text-center">Group</th>
                                        <th class="text-center" style="width: 400px;">Barcode Image</th>
                                        <th class="text-center" style="width: 100px;">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($all_cards as $a_card): ?>
                                    <tr>
                                        <td class="text-center"><?php echo count_id();?></td>
                                        <td><?php echo remove_junk($a_card['member_no'])?></td>
                                        <td><?php echo remove_junk(ucwords($a_card['member_name']))?></td>
                                        <td class="text-center"><?php echo remove_junk(ucwords($a_card['group_name']))?></td>
                                        <td class="text-center"><img src="<?php echo remove_junk($a_card['barcode_url'])?>" class="img-thumbnail"></td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a href="delete_card.php?id=<?php echo (int)$a_card['id'];?>" class="btn btn-xs btn-danger" data-toggle="tooltip" title="Remove">
                                                    <i class="fas fa-user-times"></i>
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

<!-- Add Card Modal-->
<div class="modal fade" id="addcardModal" tabindex="-1" role="dialog" aria-labelledby="addcardModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addcardModalLabel">Add Card To Generate:</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body"><form method="post" action="library_card.php">
                                <div class="form-group">
                                    <label for="add-card"><b>Member's Group</b></label>
                                    <select class="form-control" name="add-card">
                                        <option value="">Select Member's Card Number and Name</option>
                                        <?php foreach ($all_members as $a_member ):?>
                                            <option value="<?php echo $a_member['id'];?>"><?php echo ucwords($a_member['id']);?> - <?php echo ucwords($a_member['name']);?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
					</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <button class="btn btn-primary" type="submit" name="add_card">Submit</button>
            </div>
        </div>
    </div>
</div>

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
