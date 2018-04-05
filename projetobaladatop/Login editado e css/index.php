<?php

include 'init.php';

if (!is_logged()) {
    redirect('login.php');
} else {
    echo "Bem vindo, usuário " . $_SESSION['user-logged'];
}

?>


<button>
	
sair  <a href="logout.php"></a> 
</button>

