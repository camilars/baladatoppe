<?php

include_once 'init-login.php';

logout();
unset($_SESSION['adm']);
unset($_SESSION['user_id']);
redirect('login.php');

?>



