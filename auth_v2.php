<?php include_once('includes/load.php'); ?>
<?php
$req_fields = array('username','password' );
validate_fields($req_fields);
$username = remove_junk($_POST['username']);
$password = remove_junk($_POST['password']);

if (empty($errors)) {

    $user = authenticate_v2($username, $password);

    if ($user) {
        if ($user['status'] === '0') {

            if ($user['reset_password'] === '1') {
                //create session with id
                $session->login($user['id']);
                redirect('forced_password_reset_login.php',false);
            }

            else {
                //create session with id
                $session->login($user['id']);
                    redirect('index.php',false); }

        }
        elseif ($user['status'] === '1') {
            $session->msg("d", "You cannot login at this time, you have been deactivated. If you feel that this is an error, please contact the system administrator.");
            redirect('index.php',true);
        }
    }
    else {
        $session->msg("d", "Sorry Username/Password incorrect.");
        redirect('index.php',false);
    }

} else {

    $session->msg("d", $errors);
    redirect('index.php',false);
}

?>