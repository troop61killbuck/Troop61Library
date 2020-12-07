<!DOCTYPE html>
 <?php require_once('layouts/variables.php');?> 
<html>

<?php
    $page_name = "Account";
    $dropdown_active = "active";
    require_once('layouts/head.php');
    if(!$session->isMemberLoggedIn(true)){
        $session->msg("w", "You must be logged in to see that page.");
        redirect('index.php');
    }
$all_circulations_c = find_all_circulations_current('member_id',$user['id']);
$all_circulations_h = find_all_circulations_history('member_id',$user['id']);
?>

<body>
    <?php require_once('layouts/navbar.php');?>
    <main class="page faq-page">
        <section class="clean-block clean-faq dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Account</h2>
                </div>
                <div class="block-content"><div class="container">
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#currentBookings">Current Books Checked Out</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#pastBookings">Previous Books Checked Out</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="currentBookings" class="container tab-pane active">
      <div class="table-responsive" style="padding-top: 16px">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th class="text-center" style="width: 50px;">#</th>
                                        <th class="text-center" style="width: 33%;">Book Title / ID</th>
						    <th class="text-center" style="width: 150px;">Date Requested / Checked Out</th>
                                        <th class="text-center" style="width: 100px;">Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
						<?php foreach($all_circulations_c as $a_circulations_c):?>
                                    <tr>
                                        <td class="text-center"><?php echo count_id();?></td>
                                        <td class="text-center"><?php echo remove_junk(ucwords($a_circulations_c['title']))?><br><?php echo remove_junk($a_circulations_c['book_id'])?></td>
                                        <td class="text-center"><?php echo remove_junk(read_date($a_circulations_c['date_checked_out']))?></td>
                                        <td class="text-center">
								<?php if ($a_circulations_c['status'] == '0'): ?>
									<b>Requested</b>
								<?php elseif ($a_circulations_c['status'] == '1'): ?>
									<b>Issued</b>
								<?php elseif ($a_circulations_c['status'] == '2'): ?>
									<b>Returned</b>
									<br>
									<?php echo remove_junk(read_date($a_circulations_c['date_checked_in']));?>
								<?php endif; ?>
						    </td>
                                    </tr>
                                    <?php endforeach;?>
                                    </tbody>
                                </table>
<div class="text-center"> 
	 <a role="button" class="btn btn-primary" href="report_currentBookingsPDF.php" target="_blank"><i class="fas fa-print"></i>&nbsp&nbspPrint Current Circulations&nbsp&nbsp<i class="fas fa-print"></i></a>
</div>
                </div>

    </div>
    <div id="pastBookings" class="container tab-pane fade">
      <div class="table-responsive" style="padding-top: 16px">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th class="text-center" style="width: 50px;">#</th>
                                        <th class="text-center" style="width: 33%;">Book Title / ID</th>
						    <th class="text-center" style="width: 150px;">Date Requested / Checked Out</th>
                                        <th class="text-center" style="width: 100px;">Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
						<?php foreach($all_circulations_h as $a_circulations_h):?>
                                    <tr>
                                        <td class="text-center"><?php echo count_id_2();?></td>
                                        <td class="text-center"><?php echo remove_junk(ucwords($a_circulations_h['title']))?><br><?php echo remove_junk($a_circulations_h['book_id'])?></td>
                                        <td class="text-center"><?php echo remove_junk(read_date($a_circulations_h['date_checked_out']))?></td>
                                        <td class="text-center">
								<?php if ($a_circulations_h['status'] == '0'): ?>
									<b>Requested</b>
								<?php elseif ($a_circulations_h['status'] == '1'): ?>
									<b>Issued</b>
								<?php elseif ($a_circulations_h['status'] == '2'): ?>
									<b>Returned</b>
									<br>
									<?php echo remove_junk(read_date($a_circulations_h['date_checked_in']));?>
								<?php endif; ?>
						    </td>
                                    </tr>
                                    <?php endforeach;?>
                                    </tbody>
                                </table>
<div class="text-center"> 
	 <a role="button" class="btn btn-primary" href="report_historicalBookingsPDF.php" target="_blank"><i class="fas fa-print"></i>&nbsp&nbspPrint Historical Circulations&nbsp&nbsp<i class="fas fa-print"></i></a>
</div>
                </div>
    </div>
  </div>
</div></div>
            </div>
        </section>
    </main>
    <!-- Start: Footer Dark -->
    <?php require_once('layouts/footer.php');?>
</body>

</html>