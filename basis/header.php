<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="img/logo/logo.png" type="image/x-icon">
    <title>CopterTime</title>
    <link href="css/main.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="main_div">
<header>
    <img type="image/webp" src="img/main/header.webp">
    <nav class="nav header__nav">
    <ul class="nav__list">
        <li class="nav__item">
          <a class="nav__link" href="index">О нас</a>
        </li>
        <li class="nav__item">
          <a class="nav__link" href="catalog">Каталог</a>
        </li>
        <li class="nav__item">
          <a class="nav__link" href="local">Где нас найти?</a>
        </li>
        <li class="nav__item">
        <?php
          if($_SESSION['id_us']){
            print '<a class="nav__link" href="basket">Корзина</a>';    
          }
        ?>
        </li>
        <li class="nav__item">
        <?php
          if($_SESSION['role_us'] == 'admin'){
            print '<a class="nav__link" href="admin">Список заказов</a>';    
          }
        ?>
        </li>
        <li class="nav__item">
          <?php if(!$_SESSION['id_us']){ 
            print '<a class="nav__link" href="authorization">Войти</a>';
           } else{ 
            print '<a class="nav__link" href="logout">Выйти</a>';
           } ?>
        </li>
    </ul>
    </nav>
</header>