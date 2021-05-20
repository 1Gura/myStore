<?php
session_start();
$title = $_SESSION['pages'][7]['name'];
require('./header.php');
if (empty($_SESSION['user'])) {
    header('Location: ../index.php');
}
?>
<?php
$edit = false;
if (!empty($_SESSION['edit'])) {
    $edit = true;
} else {
    $edit = false;
    $_SESSION['id'] = $_SESSION['user']['id'];
    $_SESSION['name'] = $_SESSION['user']['name'];
    $_SESSION['surname'] = $_SESSION['user']['surname'];
    $_SESSION['phone'] = $_SESSION['user']['phone'];
    $_SESSION['email'] = $_SESSION['user']['email'];
}

$name = checkRegularName($_SESSION['name']);
$surname = checkRegularSurName($_SESSION['surname']);
$phone = checkRegularPhone($_SESSION['phone']);
$email = checkRegularEmail($_SESSION['email']);
$password = !empty($_SESSION['password']) && checkRegularPassword($_SESSION['password']);
$oldPassword = !empty($_SESSION['oldPassword']) && checkRegularPassword($_SESSION['oldPassword']);
$password2 = !empty($_SESSION['password2']) && comparisonOfPasswords($_SESSION['password'], $_SESSION['password2']);
?>

<div class="container">
    <div class="links">
        <span class="link"><a href="../index.php">Главная</a></span>
        <span><img src="../img/strlka.png" alt="стрелка"></span>
        <span class="link"><a href="../components/personal-area.php">Вход в личный кабинет</a></span>
    </div>
    <form class="personal-area el-hover" action="./editUser.php" method="post" enctype="multipart/form-data">
        <h1 class="title">Личный кабинет</h1>
        <?=$_SESSION['user']['role'] === '1' ? '<a href="admin.php">Страница Админа</a>' : '' ?>
        <img src="<?= !empty($_SESSION['user']['avatar']) ? '../uploads/' . $_SESSION['user']['avatar'] : '../img/icon-men.png' ?>"
             class="personal-area-img" alt="">
        <label class="<?= $name ? 'error' : '' ?>" for="name"><?= $name ? "Только символы кириллицы!" : 'Имя' ?></label>
        <input id="name" <?= $edit ? '' : 'readonly' ?> name="name" placeholder="Введите Имя" maxlength="40" type="text"
               value="<?= $_SESSION['name'] ?>"
        >
        <label class="<?= $surname ? 'error' : '' ?>"
               for="surname"><?= $surname ? "Только символы кириллицы!" : 'Фамилия' ?></label>
        <input id="name" <?= $edit ? '' : 'readonly' ?> name="surname" placeholder="Введите Имя" maxlength="40" type="text"
               value="<?= $_SESSION['surname'] ?>"
        >
        <label class="<?= $phone ? 'error' : '' ?>"
               for="phone"><?= $phone ? 'Формат телефона +7(999)-999-99-99' : 'Телефон' ?></label>
        <input id="phone" <?= $edit ? '' : 'readonly' ?> name="phone"
               value='<?= !empty($_SESSION['phone']) ? $_SESSION['phone'] : '' ?>'
               placeholder="+7(999)-999-99-99" maxlength="40" type="tel">
        <label class="<?= $email ? 'error' : '' ?>"
               for="email"><?= $email ? 'Формат email: gura.ilya2011@yandex.ru' : 'email' ?></label>
        <input id="email" <?= $edit ? '' : 'readonly' ?> name="email"
               value='<?= !empty($_SESSION['email']) ? $_SESSION['email'] : '' ?>'
               placeholder="gura.ilya2011@yandex.ru" maxlength="100" type="email">
        <label class="<?= $oldPassword ? 'error' : '' ?> <?= $edit ? '' : 'display-none' ?>"
               for="password"><?= $oldPassword ? 'Неккоректный пароль' : 'Старый пароль' ?></label>
        <input id="password" name="oldPassword" value="<?=!empty($_SESSION['oldPassword']) ? $_SESSION['oldPassword']:''?>"
               placeholder="Введите старый пароль" <?= $edit ? 'type="password"' : 'type="hidden"' ?> maxlength="40" title="Можно не менять">

        <label class="<?= $password ? 'error' : '' ?> <?= $edit ? '' : 'display-none' ?>"
               for="password"><?= $password ? 'Неккоректный пароль' : 'Пароль' ?></label>
        <input id="password" name="password" value="<?=!empty($_SESSION['password']) ? $_SESSION['password']:''?>"
               placeholder="Введите новый пароль" <?= $edit ? 'type="password"' : 'type="hidden"' ?> maxlength="40">

        <label class="<?= $password2 ? 'error' : '' ?> <?= $edit ? '' : 'display-none' ?>"
               for="password2"><?= $password2 ? 'Пароли не совпали' : 'Повторить пароль' ?></label>
        <input id="password2" name="password2" value="<?=!empty($_SESSION['password2']) ? $_SESSION['password2']:''?>"
               placeholder="Повторите пароль" <?= $edit ? 'type="password"' : 'type="hidden"' ?> maxlength="40">
        <label class="<?= $edit ? '' : 'display-none' ?>"
               for="">Изображение пользователя</label>
        <input class="<?= $edit ? '' : 'display-none' ?>" id="" type="file" name="avatar">

        <input type="submit" name='edit' class="edit" value="<?=$edit ? "Сохранить" : "Редактировать профиль"?>">
        <a class="<?= $edit ? '' : 'display-none' ?>" href="./logic/cancel.php">Отмена</a>
        <a href="./logic/logout.php">Выход</a>
    </form>
</div>

<?php
require('./foot.php');
require('./scripts.php');
?>
