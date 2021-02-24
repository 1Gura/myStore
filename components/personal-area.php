<?php?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
        require('./links.php');
    ?>
    <title>Личный кабинет</title>
</head>
<body>
    <?php
        require('./header.php');
    ?>

    <div class="container wow fadeInDown">
        <div class="links">
            <span class="link"><a href="../index.php">Главная</a></span>
            <span><img src="../img/strlka.png" alt="стрелка"></span>
            <span class="link"><a href="../components/personal-area.php">Вход в личный кабинет</a></span>
        </div>
        <h1 class="title">Вход в кабинет покупателя</h1>
        <form id='personal-area-form' class="personal-area el-hover">
            <label  for="email">Email</label>
            <input id="email" placeholder="Введите @email" onkeyup="validation()" onkeydown="validation()" required maxlength="40" type="text">
            <label for="password">Пароль</label>
            <input id="password" placeholder="Введите пароль" type = "password"  required maxlength="40" type="text">
            <button class="personal-area__btn">
                Войти
            </button>
            <a href="#">
                Зарегистрироваться
            </a>
        </form>
    </div>

    <?php
        require('./foot.php');
        require('./scripts.php');
    ?>
</body>
</html>
