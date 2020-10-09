<!DOCTYPE html>
<html>

<?php
    $page_name = "Catalog";
    $catalog_active = "active";
	require_once('layouts/head.php');
?>

<body style="background: rgb(241,247,252);">
<?php require_once('layouts/navbar.php');?>
    <!-- Start: 1 Row 1 Column -->
    <div class="contact-clean" style="margin-top: 80px;margin-right: 20px;margin-left: 20px;">
        <div class="container border rounded" style="background: #ffffff;">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width: 64px;max-width: 64px;">Image</th>
                                    <th class="text-center">Title</th>
                                    <th class="text-center">Type</th>
                                    <th class="text-center">Copies</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center"><img src="/assets/img/Troop61.png" width="100%"></td>
                                    <td class="text-center"><a href="/catalog_item.php?title=2016%20Boy%20Scout%20Requirements">2016 Boy Scout Requirements</a><br></td>
                                    <td class="text-center">Handbooks / Other<br></td>
                                    <td class="text-center">1<br></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End: 1 Row 1 Column -->
<?php require_once('layouts/footer.php');?>
</body>

</html>