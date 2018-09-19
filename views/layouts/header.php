<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="/template/css/styles.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <title>Панель администратора</title>
  </head>
<body>
 
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <a class="navbar-brand" href="/" target = "_blank">
    <img src="/template/images/home/logo.png" width="120" height="30" alt="">    
  </a>
   
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <!--Левая сторона --> 
    <ul class="navbar-nav mr-auto">
      <!--Она пустая, но она обязательно. В противном случае меню съедет влево -->
    </ul>
    
    <!--Правая сторона --> 
    <ul class="nav justify-content-end">
     <li class="nav-item">

<?php
                                        if(User::isGuest()){ ?>
                                         <li><a href="/user/login"><i class="fa fa-lock"></i> Вход</a></li>
                                    <?php
                                    }     
                                    else { ?>
                                         
                                          <li><a href="/user/logout"> Выход</a></li>
                                    <?php
                                    }
                                    ?>


     </li>
</ul>
  </div>
</nav>
 