<?php?>

<!doctype html>
<html lang="en">
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

    <div class="collection container">
        <div class="links">
            <span class="link"><a href="../index.php">Главная</a></span>
            <span><img src="../img/strlka.png" alt="стрелка"></span>
            <span class="link"><a href="collection.php">Каталог</a></span>
        </div>
        <ul class="collection__list">
            <li class="collection__item">
                <div class="collection__info">
                    <div class="collection__container">
                        <p>Брюки синие</p>
                        <p>2550.00 руб</p>
                        <a href="#">В корзину</a>
                    </div>
                </div>
                <img src="../img/photo1.jpg" alt="">
            </li>
            <li class="collection__item">
                <div class="collection__info">
                    <div class="collection__container">
                        <p>Брюки серые</p>
                        <p>2380.00 руб</p>
                        <a href="#">В корзину</a>
                    </div>
                </div>
                <img src="../img/photo2.jpg" alt="">
            </li>
            <li class="collection__item">
                <div class="collection__info">
                    <div class="collection__container">
                        <p>Брюки чёрные</p>
                        <p>3790.00 руб</p>
                        <a href="#">В корзину</a>
                    </div>
                </div>
                <img src="../img/photo3.jpg" alt="">
            </li>
            <li class="collection__item">
                <div class="collection__info">
                    <div class="collection__container">
                        <p>Кроссовки белые</p>
                        <p>3820.00 руб</p>
                        <a href="#">В корзину</a>
                    </div>
                </div>
                <img src="../img/photo4.jpg" alt="">
            </li>
            <li class="collection__item">
                <div class="collection__info">
                    <div class="collection__container">
                        <p>Кроссовки красные</p>
                        <p>2960.00 руб</p>
                        <a href="#">В корзину</a>
                    </div>
                </div>
                <img src="../img/photo5.jpg" alt="">
            </li>
            <li class="collection__item">
                <div class="collection__info">
                    <div class="collection__container">
                        <p>Кроссовки серые</p>
                        <p>2990.00 руб</p>
                        <a href="#">В корзину</a>
                    </div>
                </div>
                <img src="../img/photo6.jpg" alt="">
            </li>
            <li class="collection__item">
                <div class="collection__info">
                    <div class="collection__container">
                        <p>Брюки синие</p>
                        <p>2550.00 руб</p>
                        <a href="#">В корзину</a>
                    </div>
                </div>
                <img src="../img/photo1.jpg" alt="">
            </li>
            <li class="collection__item">
                <div class="collection__info">
                    <div class="collection__container">
                        <p>Брюки серые</p>
                        <p>2380.00 руб</p>
                        <a href="#">В корзину</a>
                    </div>
                </div>
                <img src="../img/photo2.jpg" alt="">
            </li>
            <li class="collection__item">
                <div class="collection__info">
                    <div class="collection__container">
                        <p>Брюки чёрные</p>
                        <p>2380.00 руб</p>
                        <a href="#">В корзину</a>
                    </div>
                </div>
                <img src="../img/photo3.jpg" alt="">
            </li>
        </ul>
    </div>

    <?php
        require('./foot.php');
        require('./scripts.php');
    ?>


</body>
</html>
