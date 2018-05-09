<?php

session_start();
define('USERS_FILE', 'usuarios.csv');
// define('DATA_FILE', 'data.txt');
define('DATA_SEPARATOR', ';;;');

function login($user, $pw) {
    $logins = file('usuarios.csv');
    for ($i = 0; $i < sizeof($logins); $i++) {
        $logins[$i] = trim($logins[$i]);
        $balad = explode(",", $logins[$i]);
        if ($user == $balad [0] && $pw == $balad[1]) {
        $_SESSION['user-logged'] =  $user;
         if ($balad[2] == "sim") {
             $_SESSION['balada'] = true; 
             return true;
         }
         return true;
        }

    }
    return false;
  
} 

function is_logged() {
    return isset($_SESSION['user-logged']);
}
function balada() {
    return isset($_SESSION['balada']);
}
function logout() {
    unset($_SESSION['user-logged']);
}

function redirect($page) {
    header('location: ' . $page);
}
function getUsers() {
    $fileData = file(USERS_FILE);
    $users = array_map(function($el) {
        return explode(',', $el)[0];
    }, $fileData);
    return $users;
}
function addUser($user, $pw) {
    $data = $user . ',' . $pw;
    addRegister(USERS_FILE, $data);
}
function flash($msg) {
    $_SESSION['flash'] = $msg;
    $_SESSION['setFlash'] = true;
}
function addRegister($fileName, $data) {
    if (!file_exists($fileName)) {
        touch($fileName);
    }

    $fileData = file($fileName);
    $fileData[] = $data . "\n";
    file_put_contents($fileName, implode('', $fileData));
}
?>