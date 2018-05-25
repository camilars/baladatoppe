<?php
require_once 'init-login.php';
$filename = 'usuarios.csv';

$user = $_POST['user'];
$senha = $_POST['password'];
$balada = $_POST['balada'];

$users = file($filename);
$data = $user.','.$senha. ',' . $balada;
$new_users = '';

if (isset($_POST['delete'])) {

    foreach ($users as $usr) {
        $usr = trim($usr);
        if ($usr != $data) {
            $new_users .= $usr . "\n";
            logout();
            header('location: login.php');
        }
    }
} else {
    foreach ($users as $usr) {
        $arr = explode(',', $usr);
        if ($arr[0] == $user || $arr[0] == $_SESSION['user-logged']) {
            $usr = $data;
            $new_users .= $usr . "\n";
        } else {
            $usr = trim($usr);
            $new_users .= $usr . "\n";
        }
    }
    unset($_SESSION['user-logged']);
    if (!isset($_SESSION['user-logged'])) {
        $_SESSION['user-logged'] = $user;
    }
}
file_put_contents($filename, $new_users);
header('location: index-login.php');

?>