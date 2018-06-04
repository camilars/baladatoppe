<?php require_once 'init-login.php' ?>
<?php   var_dump($_SERVER['SERVER_NAME']) ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Balada Top </title>
  <?php if (  $_SERVER['SERVER_NAME'] == 'localhost'): ?>
    <base href="http://localhost/baladatoppe/">
  <?php endif ?>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="index.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="fontawesome/web-fonts-with-css/css/fontawesome-all.min.css"></script>
  <script src="fontawesome/svg-with-js/js/fontawesome-all.min.js"></script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="#myPage">Balada Top</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.php"><i class="fas fa-home"></i> HOME</a></li>


          <li class="dropdown">


            <ul class="dropdown-menu">

            </ul>
          </li>
          <!--  tag li para ir no mapa -->
          <li><a href="mapa.php">MAPA<i class="fas fa-map-marker-alt"></i></span></a></li>
          <li><a href="crud/form_cadastro.php">CADASTRE-SE<i class= "fas fa-user-circle"></i></a></li>
          <?php if (is_logged()): ?>
            <li><a href="index-login.php"><?= strtoupper($_SESSION['user-logged'])?></a></li>
            <li><a href="crud/logout.php">LOGOUT <i class="fas fa-sign-out-alt"></i></a></li>
          <?php else: ?>
            <li><a href="crud/login.php">LOGIN <i class="fas fa-user"></i></a></li>
          <?php endif ?> 
          <li></li>
        </ul>
      </div>
    </div
>  </nav>
