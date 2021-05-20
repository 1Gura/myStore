<?php
session_start();
$title = $_SESSION['pages'][3]['name'];
require('./header.php');
?>
<?php
require('./table.php');
?>
<div class="collection container wow fadeInDown">
    <div class="links">
        <span class="link"><a href="../index.php">Главная</a></span>
        <span><img src="../img/strlka.png" alt="стрелка"></span>
        <span class="link"><a href="collection.php">Каталог</a></span>
    </div>
    <ul class="collection__list">
        <?php
        $result = getAllCatalog();
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <li class="collection__item">
                <div class="collection__info">
                    <div class="collection__container">
                        <p><?= $row['title'] ?></p>
                        <p><?= $row['price'] ?></p>
                        <a href="#">В корзину</a>
                    </div>
                </div>
                <img src="../clothes/<?= $row['img_path'] ?>" alt="">
            </li>
        <?php } ?>
    </ul>
</div>

<?php
require('./foot.php');
?>
