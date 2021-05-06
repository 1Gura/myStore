<?php
session_start();
if (empty($_SESSION['user'])) {
    header('Location: ../index.php');
}
require('./header.php');
?>
<?php
$name = checkRegularName();
$surname = checkRegularSurName();
$phone = checkRegularPhone();
$email = checkRegularEmail();
$password = checkRegularPassword();
$password2 = comparisonOfPasswords();
$avatar = '../uploads/' . $_SESSION['user']['avatar'];
?>

<div class="container wow fadeInDown">
    <div class="links">
        <span class="link"><a href="../index.php">Главная</a></span>
        <span><img src="../img/strlka.png" alt="стрелка"></span>
        <span class="link"><a href="../components/personal-area.php">Вход в личный кабинет</a></span>
    </div>
<?php
var_dump($_SESSION);?>
    <form class="personal-area el-hover">
        <h1 class="title">Личный кабинет</h1>
        <img src="<?= $avatar ?>" class="personal-area-img" alt="">
        <label for="name">Имя</label>
        <input id="name" readonly name="name" placeholder="Введите Имя" maxlength="40" type="text"
               value="<?= $_SESSION['user']['name'] ?>"
        >
        <label for="name">Фамилия</label>
        <input id="name" readonly name="name" placeholder="Введите Имя" maxlength="40" type="text"
               value="<?= $_SESSION['user']['surname'] ?>"
        >
        <label class="" for="phone"><?= $phone ? 'Формат телефона +7(999)-999-99-99' : 'Телефон' ?></label>
        <input id="phone" name="phone" value='<?= !empty($_SESSION['user']['phone']) ? $_SESSION['user']['phone'] : '' ?>'
               placeholder="+7(999)-999-99-99" maxlength="40" type="tel">

        <a href="../index.php">Нажмите, чтобы вернуться на главную!</a>
        <a href="./logic/logout.php">Выход</a>
    </form>
</div>

<?php
require('./foot.php');
require('./scripts.php');
?>
