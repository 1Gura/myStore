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
    <title>Document</title>
</head>
<body>
    <?php
        require('./header.php');
        require('./up-menu.php');
        require('../components/products.php');
    ?>

    <div class="container">
        <div class="links">
            <span class="link"><a href="../index.php">Главная</a></span>
            <span><img src="../img/strlka.png" alt="стрелка"></span>
            <span class="link"><a href="../components/personal-area.php">Вход в личный кабинет</a></span>
        </div>
        <h1 class="title">Вход в кабинет покупателя</h1>
        <form class="personal-area">
            <table class="personal-area__table">
                <tr class="personal-area__tr">
                    <td class="label" style="width: 40px" ><label for="">Email:</label></td>
                    <td class="input"><input required maxlength="40" type="text"></td>

                </tr>
                <tr class="personal-area__tr">
                    <td class="label" ><label for="">Пароль:</label></td>
                    <td class="input"><input required maxlength="40" type="text"></td>
                </tr>

                <tr class="personal-area__tr">
                    <td>
                        <button class="personal-area__btn">
                            Войти
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="#">
                            Зарегистрироваться
                        </a>
                    </td>
                </tr>
            </table>



        </form>

    </div>

    <?php
        require('./foot.php');
        require('./scripts.php');
    ?>
</body>
</html>
