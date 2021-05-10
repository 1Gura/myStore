<?php
session_start();
if (empty($_SESSION['user'])) {
    header('Location: ../index.php');
    exit();
}
if ($_SESSION['user']['role'] !== '1') {
    header('Location: ../index.php');
    exit();
}
require('./header.php');
?>
<div class="container">
    <div class="links">
        <span class="link"><a href="../index.php">Главная</a></span>
        <span><img src="../img/strlka.png" alt="стрелка"></span>
        <span class="link"><a href="../components/personal-area.php">Вход в личный кабинет</a></span>
    </div>
    <?php
    //    var_dump($_SESSION);
//    echo '<pre>';
//    var_dump($_GET);
//    echo '</pre>';
    ?>
    <div class="personal-area el-hover">
        <h1>Админка</h1>
        <a href="./admin.php?users=ok">Пользователи</a>
        <a href="./admin.php?clothes=ok">Одежда</a>
        <a href="./admin.php?content=ok">Контент</a>
    </div>
    <?php
    switch ($_GET) {
        case ($_GET['users'] === 'ok'):
            $users = getAllUsers();
            ?>
            <a class="add" href="./addNewUser.php">Добавить пользователя.</a>
            <div class="admin-list">
                <?php
            while ($row = mysqli_fetch_assoc($users)) {
                ?>

                    <div class="admin__item el-hover">
                        <div class="img-container"><img
                                    src="<?= !empty($row['avatar']) ? '../uploads/' . $row['avatar'] : '../img/icon-men.png' ?>"
                                    alt="аватарка"></div>
                        <p><?= $row['name'] ?></p>
                        <p><?= $row['surname'] ?></p>
                        <p><?= $row['phone'] ?></p>
                        <p><?= $row['email'] ?></p>
                        <a href="./edit.php?id=<?=$row['Id']?>">Редактировать</a>
                        <a href="./delete.php?id=<?=$row['Id']?>">Удалить</a>
                    </div>
                <?php } ?>
                </div>
            <?php
            break;
        case !empty($_GET['clothes']):
            $clothes = getAllCatalog();
            while ($row = mysqli_fetch_assoc($clothes)) {
                ?>
                <div class="admin-list">
                    <div class="admin__item">
                        <div class='img-container'><img
                                    src="<?= !empty($row['img_path']) ? '../img/' . $row['img_path'] : '../img/icon-men.png' ?>"
                                    alt="аватарка"></div>
                        <p>Наименование:<?= $row['name'] ?></p>
                        <p>Цена: <?= $row['price'] ?></p>
                        <p>Количество на складе:<?= $row['count'] ?></p>
                    </div>
                </div>
            <?php }
            break;
        case !empty($_GET['content']):

            break;
        default:
            ?>
            <div class="admin-list"></div>
        <?php
    }
    ?>
</div>


<?php
require('./foot.php');
require('./scripts.php');
?>
