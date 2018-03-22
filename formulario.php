<?php 
/*
$login = $_POST['login'];
$senha = $_POST['senha'];

function autenticacao($name){
    $nomes = file('grupo.txt');
    $names = [];
    for ($i = 0; $i < sizeof($nomes); $i++) {
        $names[$i] = trim($nomes[$i]);
    }
    if (in_array($name, $names)) {
        $indice = array_search($name, $names);
    } else {
        $indice = null;
    }
    // print(array_search($name, $names));
    //var_dump($names);

    return $indice;
}


function auteti($password){
    $senhas = file('senhas.txt');
    $pass = [];

    for ($i = 0; $i < sizeof($senhas); $i++) {
        $pass[$i] = trim($senhas[$i]);
    }
    if (in_array($password, $pass)) {
        $indice = array_search($password, $pass);
    } else {
        $indice = null;
    }
    // print(array_search($password, $pass));

   // var_dump($pass);
    return $indice;
}
$a = autenticacao($login);
$b = auteti($senha);

//echo "Usuario: " . $a. "<br>";
//echo "Senha: " . $b. "<br>";
//var_dump($a);
//var_dump($b);
if ($a===$b && !is_null($a) && !is_null($b)) {
    $_Something is wrong['user']=$login;
     header('location: index.php');
   
}else{
    header('location: login.php');
    
} */

session_start();

if (!isset($_SESSION['user'])) {
    header("location:login.php");
}

else{
    header("location:index.php");
}



?>