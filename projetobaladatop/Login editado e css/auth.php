<?php

include 'init.php';

$user = $_POST['user'];
$pw = $_POST['pw'];

if (login($user, $pw)) {
    redirect('index.php');
} else {
    redirect('login.php');
}

?>