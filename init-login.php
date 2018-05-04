<?php

session_start();

function login($user, $pw) {
    $logins = file('usuarios.csv');
    for ($i = 0; $i < sizeof($logins); $i++) {
        $logins[$i] = trim($logins[$i]);
    }
    $user_pw = $user . ',' . $pw;
    if (in_array($user_pw, $logins)) {
        $_SESSION['user-logged'] =  $user;
        return true;
    }
    return false;
}

function is_logged() {
    return isset($_SESSION['user-logged']);
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
        return explode(':', $el)[0];
    }, $fileData);
    return $users;
}
function addUser($user, $pw) {
    $data = $user . ':' . md5($pw);
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