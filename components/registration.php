<?php
session_start();
if (!empty($_SESSION['user'])) {
    header('Location: ./personal-office.php');
}
$title = $_SESSION['pages'][2]['name'];
require('./header.php');
?>

<?php
if (!strpos($_SERVER['HTTP_REFERER'], 'registration')) {
    session_unset();
}
$name = checkRegularName($_SESSION['name']);
$surname = checkRegularSurName($_SESSION['surname']);
$phone = checkRegularPhone($_SESSION['phone']);
$email = checkRegularEmail($_SESSION['email']);
$password = checkRegularPassword($_SESSION['password']);
$password2 = comparisonOfPasswords($_SESSION['password'], $_SESSION['password2']);
?>

<div class="container wow fadeInDown">
    <div class="links">
        <span class="link"><a href="../index.php">Главная</a></span>
        <span><img src="../img/strlka.png" alt="стрелка"></span>
        <span class="link"><a href="../components/personal-area.php">Вход в личный кабинет</a></span>
        <span><img src="../img/strlka.png" alt="стрелка"></span>
        <span class="link"><a href="./registration.php">Регистрация</a></span>
    </div>
    <h1 class="title">Регистрация</h1>
    <?php
    if (!empty($_GET)) {
        if ($_GET['ok'] === "ok") { ?>
            <div class="form-success">Регистрация прошла успешно!</div>
            <?php
        } else if ($_GET['ok'] === 'email') { ?>
            <div class="form-not-success">Пользователь с таким email уже есть!</div>

        <?php }
    }
    ?>
    <form id='personal-area-form'
          action="./authorize.php" method="post"
          class="personal-area el-hover" enctype="multipart/form-data">
        <label class="<?= $name ? 'error' : '' ?>" for="name"><?= $name ? "Только символы кириллицы!" : 'Имя' ?></label>
        <input id="name" name="name" placeholder="Введите Имя" maxlength="40" type="text"
               value="<?= !empty($_SESSION['name']) ? $_SESSION['name'] : '' ?>"
        >
        <label class="<?= $surname ? 'error' : '' ?>"
               for="surname"><?= $surname ? "Только символы кириллицы!" : 'Фамилия' ?></label>
        <input id="surname" name='surname' value="<?= !empty($_SESSION['surname']) ? $_SESSION['surname'] : '' ?>"
               placeholder="Введите Фамилию" type="text" maxlength="40">
        <label class="<?= $phone ? 'error' : '' ?>"
               for="phone"><?= $phone ? 'Формат телефона +7(999)-999-99-99' : 'Телефон' ?></label>
        <input id="phone" name="phone" value='<?= !empty($_SESSION['phone']) ? $_SESSION['phone'] : '' ?>'
               placeholder="+7(999)-999-99-99" maxlength="40" type="tel">
        <label class="<?= $email ? 'error' : '' ?>"
               for="email"><?= $email ? 'Формат email: gura.ilya2011@yandex.ru' : 'email' ?></label>
        <input id="email" name="email" value="<?= !empty($_SESSION['email']) ? $_SESSION['email'] : '' ?>"
               placeholder="Введите @email" maxlength="40" type="text">
        <label class="<?= $password ? 'error' : '' ?>"
               for="password"><?= $password ? 'Неккоректный пароль' : 'Пароль' ?></label>
        <input id="password" name="password" value="<?= !empty($_SESSION['password']) ? $_SESSION['password'] : '' ?>"
               placeholder="Введите пароль" type="password" maxlength="40">
        <label class="<?= $password2 ? 'error' : '' ?>"
               for="password2"><?= $password2 ? 'Пароли не совпали!' : 'Подтвердите пароль' ?></label>
        <input id="password2" name="password2"
               value="<?= !empty($_SESSION['password2']) ? $_SESSION['password2'] : '' ?>"
               placeholder="Введите пароль" type="password" maxlength="40">
        <label class=""
               for="">Изображение пользователя</label>
        <input id="" type="file" name="avatar">
        <button type="submit" class="personal-area__btn">
            Регистрация
        </button>
    </form>
</div>

<?php
require('./foot.php');
?>

