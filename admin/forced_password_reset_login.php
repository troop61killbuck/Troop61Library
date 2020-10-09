<!DOCTYPE html>
<html lang="en">

<?php
$page_name = "Password Reset";
require_once('layouts/head.php');
// Checkin What level user has permission to view this page
page_require_level(1);
?>

<?php
if(isset($_POST['update'])){


    $req_fields = array('new-password','old-password','id' );
    validate_fields($req_fields);


    if(empty($errors)){


        if(sha1($_POST['old-password']) !== current_user()['password'] ){
            $session->msg('d', "Your old password does not match");
            redirect('forced_password_reset_login.php',false);
        }


        $id = (int)$_POST['id'];
        $new = remove_junk($db->escape(sha1($_POST['new-password'])));
        $sql = "UPDATE `users` SET `reset_password` = '0', `password` = '$new' WHERE `users`.`id` = $id;";
        $result = $db->query($sql);
        if($result && $db->affected_rows() === 1):
            $session->logout();
            $session->msg('s',"Please login with your new password.");
            redirect('index.php', false);
        else:
            $session->msg('d',' Sorry failed to update password.');
            redirect('force_password_reset_login.php', false);
        endif;
    } else {
        $session->msg("d", $errors);
        redirect('force_password_reset_login.php',false);
    }
}
?>

<body class="bg-gradient-primary">

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                </div>
                                <?php echo display_msg($msg); ?>
                                <form class="user" method="post" action="forced_password_reset_login.php" class="clearfix">
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" name="old-password" placeholder="Enter Old Password" id="oldPassword">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" name="new-password" placeholder="Enter New Password" id="newPassword">
                                    </div>

                                    <div class="form-group clearfix">
                                        <input type="hidden" name="id" value="<?php echo (int)$user['id'];?>">
                                        <button type="submit" name="update" class="btn btn-primary btn-user btn-block">Change</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

</body>

</html>
