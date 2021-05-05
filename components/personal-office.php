<?php
session_start();
require('./header.php');
?>
<?php
$email = checkRegularEmail();
$password = checkRegularPassword();
$avatar = '../uploads/' . $_SESSION['user']['avatar'];
?>

<div class="container wow fadeInDown">
    <div class="links">
        <span class="link"><a href="../index.php">Главная</a></span>
        <span><img src="../img/strlka.png" alt="стрелка"></span>
        <span class="link"><a href="../components/personal-area.php">Вход в личный кабинет</a></span>
    </div>

    <div class="personal-area el-hover">
        <h1 class="title">Личный кабинет</h1>
        <div><span>Владелец: </span><span><?= $_SESSION['name'] ?></span></div>
        <img src="<?= $avatar ?>" width="50" height="50" alt="">
        <a href="../index.php">Нажмите, чтобы вернуться на главную!</a>
    </div>
</div>

<?php
require('./foot.php');
require('./scripts.php');
?>
