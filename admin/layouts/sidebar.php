<?php if($user['user_level'] === '0'): ?>
    <!-- admin menu -->
    <?php include_once('admin_sidebar.php');?>

<?php elseif($user['user_level'] < '0'): ?>
    <!-- superadmin menu -->
    <?php include_once('superadmin_sidebar.php');?>

<?php elseif($user['user_level'] === '1'): ?>
    <!-- librarian menu -->
    <?php include_once('default_sidebar.php');?>

<?php endif;?>