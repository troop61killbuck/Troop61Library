<!-- Nav Item - Alerts -->

<?php 
	$notifications = find_all_alerts_limited('contact_us_responses','book_requests'); 
	$notifications_count = count_notifications('contact_us_responses'); 
	$notifications_count2 = count_notifications('book_requests');
$notifications_count_all = $notifications_count['notifications'] + $notifications_count2['notifications'];
?>

    <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <!-- Counter - Alerts -->
            <span class="badge badge-danger badge-counter"><?php 
				if ($notifications_count_all <= "9" && $notifications_count_all >= "1") {
					echo $notifications_count_all;
				}
				elseif ($notifications_count_all > "9") {
					echo "9+";
				}
				elseif ($notifications_count_all == "0") {
				}
			?></span>
        </a>
        <!-- Dropdown - Alerts -->
        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">
                Alerts Center
            </h6>

		<?php foreach($notifications as $notification): ?>

		<?php if ($notification['location'] == "book_requests"):?>
            <div class="dropdown-item d-flex align-items-center">
                <div class="mr-3">
                    <a href="alert.php?id=<?php echo $notification['id'];?>&location=<?php echo $notification['location'];?>">
				<div class="icon-circle bg-primary">
                        		<i class="fas fa-book text-white"></i>
                    	</div>
			  </a>
                </div>
                <div style="width:167.391px">
                    <div class="small text-gray-500"><?php echo read_date($notification['datetime_submitted']); ?></div>
                    <?php if ($notification['status'] == "0"): ?>
				<a style="text-decoration: none; color: #3a3b45;" href="alert.php?id=<?php echo $notification['id'];?>&location=<?php echo $notification['location'];?>">
					<span class="font-weight-bold">New Book Request</span>
				</a>
			  <?php elseif ($notification['status'] == "1"): ?>
				<a style="text-decoration: none; color: #3a3b45;" href="alert.php?id=<?php echo $notification['id'];?>&location=<?php echo $notification['location'];?>">
					New Book Request
				</a>
			  <?php else: ?>
			  <?php endif;?>
                </div>
                <div class="topbar-divider d-none d-sm-block"></div>
		    <?php if ($notification['status'] == "0"): ?>
			<a style="text-decoration: none; color: #3a3b45;" href="mark_alert.php?id=<?php echo $notification['id'];?>&status=read&redirect=<?php echo base64_encode($redirect);?>&location=<?php echo $notification['location'];?>" data-toggle="tooltip" data-placement="left" title="Mark As Read">
				<div>
                    		<i class="fas fa-check-circle"></i>
                  	</div>
			</a>
		    <?php elseif ($notification['status'] == "1"): ?>
			<a style="text-decoration: none; color: #3a3b45;" href="mark_alert.php?id=<?php echo $notification['id'];?>&status=unread&redirect=<?php echo base64_encode($redirect);?>&location=<?php echo $notification['location'];?>" data-toggle="tooltip" data-placement="left" title="Mark As Unread">
				<div>
                     		<i class="fas fa-times-circle"></i>
                  	</div>
			</a>
		    <?php endif;?>
            </div>

		<?php elseif ($notification['location'] == "contact_us_responses"):?>
            <div class="dropdown-item d-flex align-items-center">
                <div class="mr-3">
                    <a href="alert.php?id=<?php echo $notification['id'];?>&location=<?php echo $notification['location'];?>">
				<div class="icon-circle bg-primary">
                        		<i class="fas fa-user text-white"></i>
                    	</div>
			  </a>
                </div>
                <div style="width:167.391px">
                    <div class="small text-gray-500"><?php echo read_date($notification['datetime_submitted']); ?></div>
                    <?php if ($notification['status'] == "0"): ?>
				<a style="text-decoration: none; color: #3a3b45;" href="alert.php?id=<?php echo $notification['id'];?>&location=<?php echo $notification['location'];?>">
					<span class="font-weight-bold">New Contact Us Response</span>
				</a>
			  <?php elseif ($notification['status'] == "1"): ?>
				<a style="text-decoration: none; color: #3a3b45;" href="alert.php?id=<?php echo $notification['id'];?>&location=<?php echo $notification['location'];?>">
					New Contact Us Response
				</a>
			  <?php else: ?>
			  <?php endif;?>
                </div>
                <div class="topbar-divider d-none d-sm-block"></div>
		    <?php if ($notification['status'] == "0"): ?>
			<a style="text-decoration: none; color: #3a3b45;" href="mark_alert.php?id=<?php echo $notification['id'];?>&status=read&redirect=<?php echo base64_encode($redirect);?>&location=<?php echo $notification['location'];?>" data-toggle="tooltip" data-placement="left" title="Mark As Read">
				<div>
                    		<i class="fas fa-check-circle"></i>
                  	</div>
			</a>
		    <?php elseif ($notification['status'] == "1"): ?>
			<a style="text-decoration: none; color: #3a3b45;" href="mark_alert.php?id=<?php echo $notification['id'];?>&status=unread&redirect=<?php echo base64_encode($redirect);?>&location=<?php echo $notification['location'];?>" data-toggle="tooltip" data-placement="left" title="Mark As Unread">
				<div>
                     		<i class="fas fa-times-circle"></i>
                  	</div>
			</a>
		    <?php endif;?>
            </div>
		<?php endif;?>

		<?php endforeach;?>

            <a class="dropdown-item text-center small text-gray-500" href="alert_all.php">Show All Alerts</a>
        </div>
    </li>
