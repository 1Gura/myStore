<?php
session_start();
if(!empty($_SESSION['user'])) {
    header('Location: ./personal-office.php');
}
require('./header.php');
?>
<?php
if(!strpos($_SERVER['HTTP_REFERER'],'personal-area')) {
    session_unset();
}
$email = checkRegularEmail($_SESSION['email']);
$password = checkRegularPassword($_SESSION['password']);
?>

<div class="container wow fadeInDown">
    <div class="links">
        <span class="link"><a href="../index.php">Главная</a></span>
        <span><img src="../img/strlka.png" alt="стрелка"></span>
        <span class="link"><a href="../components/personal-area.php">Вход в личный кабинет</a></span>
    </div>
    <h1 class="title">Вход в кабинет покупателя</h1>
    <?php
    if (!empty($_GET)) {
        if ($_GET['ok'] === "ok") { ?>
            <div class="form-success">Авторизация прошла успешно!</div>
            <?php
        } else if ($_GET['ok'] === "no") { ?>
            <div class="form-not-success">Неверный логин или пароль!</div>
        <?php }
    }
    ?>
    <form method="post" action="./signin.php" id='personal-area-form' class="personal-area el-hover">
        <label class="<?= $email ? 'error' : '' ?>"
               for="email"><?= $email ? 'Формат email: gura.ilya2011@yandex.ru' : 'email' ?></label>
        <input id="email" name="email" value="<?= !empty($_SESSION['email']) ? $_SESSION['email'] : '' ?>"
               placeholder="Введите @email" maxlength="40" type="text">
        <label class="<?= $password ? 'error' : '' ?>"
               for="password"><?= $password ? 'Неккоректный пароль' : 'Пароль' ?></label>
        <input id="password" name="password" value="<?= !empty($_SESSION['password']) ? $_SESSION['password'] : '' ?>"
               placeholder="Введите пароль" type="password" maxlength="40">
        <button type="submit" class="personal-area__btn">
            Войти
        </button>
        <a href="./registration.php">
            Зарегистрироваться
        </a>
    </form>
</div>

<?php
require('./foot.php');
require('./scripts.php');
?>
