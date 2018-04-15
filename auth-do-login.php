<?php

include 'init-login.php';

$user = $_POST['user'];
$pw = $_POST['password'];

if (login($user, $pw)) {
    redirect('index-login.php');
} else {
    redirect('login.php');
}

?>