<?php

include_once 'init-login.php';

logout();
unset($_SESSION['adm']);
redirect('login.php');

?>



