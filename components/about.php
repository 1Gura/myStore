<?php
require('./header.php');
?>

<div class="container">
    <div class="links">
        <span class="link"><a href="../index.php">Главная</a></span>
        <span><img src="../img/strlka.png" alt="стрелка"></span>
        <span class="link"><a href="../components/about.php">О нас</a></span>
    </div>
    <div class="intro">
        <h1>
            Добро пожаловать на BrandLook
        </h1>
        <p>
            10 лет мы стремимся сделать для Вас шопинг удобным и доступным
        </p>
    </div>
    <div class="title">Наши преимущества</div>
    <div class="about display-flex-center">
        <ul class="about__list">
            <li class="about__item display-flex-center">
                <p class="display-flex-center">
                    <img src="https://static-sl.insales.ru/files/1/2649/12323417/original/Group_190.png" alt="">
                    <span>ЛУЧШЕЕ КАЧЕСТВО</span>
                </p>
            </li>

            <li class="about__item display-flex-center">
                <p class="display-flex-center">
                    <img src="https://static-sl.insales.ru/files/1/2651/12323419/original/Group_189.png" alt="">
                    <span>БЕСПЛАТНАЯ ДОСТАВКА</span>
                </p>
            </li>

            <li class="about__item display-flex-center">
                <p class="display-flex-center">
                    <img src="https://static-sl.insales.ru/files/1/2649/12323417/original/Group_190.png" alt="">
                    <span>НАТУРАЛЬНЫЕ ТКАНИ</span>
                </p>
            </li>

            <li class="about__item display-flex-center">
                <p class="display-flex-center">
                    <img src="https://static-sl.insales.ru/files/1/2651/12323419/original/Group_189.png" alt="">
                    <span>НАКОПИТЕЛЬНАЯ СИСТЕМА БОНУСОВ</span>
                </p>
            </li>
        </ul>
    </div>
    <div class="file-size">
        <h1>Подсчёт размера файла</h1>
        <form action="" method="GET">
            <label for="">Введите путь</label>
            <input type="text" value="<?= $_GET['path'] ?? '' ?>" name="path" placeholder="/от корня...">
            <input type="submit">
        </form>
        <div>
            <span>Результат: </span>
            <?= !empty($_GET) ? getRes($_GET['path'])  : '' ?>
        </div>

    </div>
</div>

<?php
require('./foot.php');
?>

