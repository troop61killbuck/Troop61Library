<!-- Nav Item - Alerts -->

<?php 
	$notifications = find_all_alerts_limited('alerts',$user['id']); 
	$notifications_count = count_notifications('alerts',$user['id']); 
?>

    <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <!-- Counter - Alerts -->
            <span class="badge badge-danger badge-counter"><?php 
				if ($notifications_count['notifications'] <= "9" && $notifications_count['notifications'] >= "1") {
					echo $notifications_count['notifications'];
				}
				elseif ($notifications_count['notifications'] > "9") {
					echo "9+";
				}
				elseif ($notifications_count['notifications'] == "0") {
				}
			?></span>
        </a>
        <!-- Dropdown - Alerts -->
        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">
                Alerts Center
            </h6>

		<?php foreach($notifications as $notification): ?>
            <div class="dropdown-item d-flex align-items-center">
                <div class="mr-3">
                    <a href="alert.php?id=<?php echo $notification['id'];?>">
				<div class="icon-circle bg-<?php echo $notification['color'];?>">
                        	<i class="<?php echo $notification['icon'];?>"></i>
                    	</div>
			  </a>
                </div>
                <div>
                    <div class="small text-gray-500"><?php echo read_date($notification['date']); ?></div>
                    <?php if ($notification['viewed'] == "0"): ?>
				<a style="text-decoration: none; color: #3a3b45;" href="alert.php?id=<?php echo $notification['id'];?>">
					<span class="font-weight-bold"><?php echo remove_junk($notification['title']); ?></span>
				</a>
			  <?php elseif ($notification['viewed'] == "1"): ?>
				<a style="text-decoration: none; color: #3a3b45;" href="alert.php?id=<?php echo $notification['id'];?>">
					<?php echo $notification['title']; ?>
				</a>
			  <?php else: ?>
			  <?php endif;?>
                </div>
                <div class="topbar-divider d-none d-sm-block"></div>
		    <?php if ($notification['viewed'] == "0"): ?>
			<a style="text-decoration: none; color: #3a3b45;" href="#" onclick="markRead('<?php echo $notification['id'];?>')" data-toggle="tooltip" data-placement="bottom" title="Mark As Read">
				<div>
                    		<i class="far fa-envelope-open"></i>
                  	</div>
			</a>
		    <?php elseif ($notification['viewed'] == "1"): ?>
			<a style="text-decoration: none; color: #3a3b45;" href="#" onclick="markUnread('<?php echo $notification['id'];?>')" data-toggle="tooltip" data-placement="bottom" title="Mark As Unread">
				<div>
                     		<i class="far fa-envelope"></i>
                  	</div>
			</a>
		    <?php endif;?>
            </div>
		<?php endforeach;?>

            <a class="dropdown-item text-center small text-gray-500" href="alert_all.php">Show All Alerts</a>
        </div>
    </li>
