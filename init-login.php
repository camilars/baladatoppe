<?php

session_start();
require_once 'conexao.php';

function login($user, $pw) {
	$sql = "SELECT * FROM usuarios WHERE usuario = '$user' AND senha = '$pw'";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$rows = $stmt->rowCount();
	$result = $stmt->fetchAll();

	if ($rows > 0) {
		$balada = $result['balada'];
		$_SESSION['user-logged'] =  $user;
		$_SESSION['user_id'] =  $result['id'];

		if ($balada == "sim") {
			$_SESSION['balada'] = true; 
			return true;
		}
		return true;
	}
	return false;
} 

function is_logged() {
	return isset($_SESSION['user-logged']);
}

function balada() {
	return isset($_SESSION['balada']);
}
function is_admin(){
	return isset($_SESSION['adm']);
}
function logout() {
	unset($_SESSION['user-logged']);
	if (isset($_SESSION['balada'])) {
		unset($_SESSION['balada']);
	}
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
function addPub ($fileName, $data){
	if(!file_exists($fileName)){
		file($fileName);
	}
	file_put_contents($fileName, $data);
}
?>