<?php
session_start();

$user = $_POST['usuario'];
$pw = $_POST['senha'];

//function autenticar ($a, $b){

    $grupo = file ('grupo.txt');
    $senha = file ('senha.txt');

    for ($i=0; $i <sizeof($grupo) ; $i++) { 
        $grupo[$i] = trim($grupo[$i]);
    }
    for ($i=0; $i <sizeof($senha) ; $i++) { 
        $senha[$i] = trim($senha[$i]);
    }

    $usu = array_search($user, $grupo);
    $sen = array_search($pw, $senha);

    if ($usu == $sen && in_array($user, $grupo)){
        $_SESSION['user'] = $user ;
        header("location:formulario.php");
    }

    else{
        header("location:login.php");
    }

/*function aunteticars ($a, $b){

    $grupo = file ('grupo.txt');
    $senha = file ('senha.txt');

    for ($i=0; $i <sizeof($grupo) ; $i++) { 
        $grupo[$i] = trim ($grupo[$i]);
    }
    for ($i=0; $i <sizeof($senha) ; $i++) { 
        $senha[$i] = trim($senha[$i]);
    }

    $usu = in_array($a, $grupo);
    $sen = in_array($b, $senha);

    if ($usu === $sen) {
        return true;
    }else{
        return false;
    }
}

$p = autenticar ($user, $)*/
?>