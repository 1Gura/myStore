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
    <title>О нас</title>
</head>
<body>
<?php
require('./header.php');
require('./up-menu.php');
require('../components/products.php');
?>

<div class="container">
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
</div>

<?php
require('./foot.php');
require('./scripts.php');
?>
</body>
</html>
