<?php

include 'init.php';

if (!is_logged()) {
    redirect('login.php');
} else {
    echo "Bem vindo, usuário " . $_SESSION['user-logged'];
}

?>


<button>
	
<a href="login.php">Sair</a> 
</button>

