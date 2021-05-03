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
            <?php
            $result = getIcons();
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <li class="about__item display-flex-center">
                    <p class="display-flex-center">
                        <img src="<?= $row['img_path'] ?>" alt="">
                    <p><?= $row['paragraph'] ?></p>
                    </p>
                </li>
            <?php } ?>
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
            <?= !empty($_GET) ? getRes($_GET['path']) : '' ?>
        </div>

    </div>
</div>

<?php
require('./foot.php');
?>

