<?php 
require_once 'init-login.php';

if (!isset($_SESSION['admin'])){
  $_SESSION['admin'] = true;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Balada Top </title>
  <?php if (  $_SERVER['SERVER_NAME'] == 'localhost'): ?>
    <base href="http://localhost/baladatoppe/">
  <?php endif ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="index.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="rodape.css"> -->
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="fontawesome/web-fonts-with-css/css/fontawesome-all.min.css" type="text/css">
  <link rel="stylesheet" type="text/css" href="rodape.css">
  <link rel="stylesheet" type="text/css" href="css/header.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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


          <!-- <li class="dropdown">


            <ul class="dropdown-menu">

            </ul>
          </li> -->
          <!--  tag li para ir no mapa -->
          
          

          <li><a href="crud/form_cadastro.php">CADASTRE-SE<i class= "fas fa-user-circle"></i></a></li>
       
          <?php if (is_logged()): ?>
                <li class="dropdown">
        <a href="javascript:void(0)" aria-hidden="true" class="dropbtn"><?= strtoupper($_SESSION['user-logged'])?></a>
        <div class="dropdown-content" style="margin-left: 12px;">
        <a href="index-login.php">Home page</a>
          
             <?php if (balada()): ?>
                    <a href="perfil.php">Perfil</a>
                   <a href="carregar.php">Cadastrar folder</a> 
                   <a href="crud/form_balada.php">Cadastrar baladas</a>
                 <?php endif ?>
                  <?php if (is_admin()): ?>
                 <a href="listar-user.php">listar usuarios</a>
                 <?php endif ?>
                  <a href="crud/logout.php">Sair</a>

          
        </div>
        </li>
      

            <li><a href="crud/logout.php">LOGOUT <i class="fas fa-sign-out-alt"></i></a></li>
          <?php else: ?>
            <li><a href="crud/login.php">LOGIN <i class="fas fa-user"></i></a></li>
          <?php endif ?> 
          <meta name="viewport" content="width=device-width, initial-scale=1">
                     <style>
                     body {
                      font-family: "Lato", sans-serif;
                    }

                    .sidenav {
                      height: 100%;
                      width: 0;
                    /*  position: absolute;*/
                      z-index: 1;
                      top: 0;
                      right: 0;
                      background-color: #111;
                      overflow-x: hidden;
                      transition: 0.5s;
                      padding-top: 60px;
                      
                    }

                    .sidenav a {
                      padding: 8px 8px 8px 32px;
                      text-decoration: none;
                      font-size: 25px;
                      color: #818181;
                      display: block;
                      transition: 0.3s;
                    }

                    .sidenav a:hover {
                      color: #f1f1f1;
                    }

                    .sidenav .closebtn {
                     /* position: absolute;*/
                      top: 0;
                      right: 25px;
                      font-size: 36px;
                      margin-left: 50px;
                    }

                    @media screen and (max-height: 450px) {
                      .sidenav {padding-top: 15px;}
                      .sidenav a {font-size: 18px;}
                    }
                  </style>
                </head>
                <!-- <link rel="stylesheet" type="text/css" href="cssteste.css"> -->


               :

         
        </ul>
      </div>
    </div>
  </nav>
