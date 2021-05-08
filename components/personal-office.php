<?php
session_start();
if (empty($_SESSION['user'])) {
    header('Location: ../index.php');
}
require('./header.php');
?>
<?php
$edit = false;
if (!empty($_POST['edit'])) {
    $edit = !$edit;
    $_SESSION['user']['oldPassword'] = $_SESSION['user']['password'];
    $name = checkRegularName($_SESSION['user']['name']);
    $surname = checkRegularSurName($_SESSION['user']['surname']);
    $phone = checkRegularPhone($_SESSION['user']['phone']);
    $email = checkRegularEmail($_SESSION['user']['email']);
    $oldPassword = checkRegularPassword($_SESSION['user']['oldPassword']);
    $password = checkRegularPassword($_SESSION['user']['password']);
    $password2 = comparisonOfPasswords($_SESSION['user']['password'], $_SESSION['user']['password2']);
}
?>

<div class="container">
    <div class="links">
        <span class="link"><a href="../index.php">Главная</a></span>
        <span><img src="../img/strlka.png" alt="стрелка"></span>
        <span class="link"><a href="../components/personal-area.php">Вход в личный кабинет</a></span>
    </div>
    <?php
    var_dump($_POST);
//    var_dump($edit);
    echo '<pre>';
    var_dump($_SESSION);?>
    echo '/<pre>';

    <form class="personal-area el-hover" action="./personal-office.php" method="post">
        <h1 class="title">Личный кабинет</h1>
        <img src="<?= !empty($_SESSION['user']['avatar']) ? '../uploads/' . $_SESSION['user']['avatar'] : '../img/icon-men.png' ?>"
             class="personal-area-img" alt="">
        <label for="name">Имя</label>
        <input id="name" <?= $edit ? '' : 'readonly' ?> name="name" placeholder="Введите Имя" maxlength="40" type="text"
               value="<?= $_SESSION['user']['name'] ?>"
        >
        <label for="name">Фамилия</label>
        <input id="name" <?= $edit ? '' : 'readonly' ?> name="name" placeholder="Введите Имя" maxlength="40" type="text"
               value="<?= $_SESSION['user']['surname'] ?>"
        >
        <label class="" for="phone"><?= $phone ? 'Формат телефона +7(999)-999-99-99' : 'Телефон' ?></label>
        <input id="phone" <?= $edit ? '' : 'readonly' ?> name="phone"
               value='<?= !empty($_SESSION['user']['phone']) ? $_SESSION['user']['phone'] : '' ?>'
               placeholder="+7(999)-999-99-99" maxlength="40" type="tel">
        <label class=""
               for="email"><?= $email ? 'Формат email: gura.ilya2011@yandex.ru' : 'email' ?></label>
        <input id="email" <?= $edit ? '' : 'readonly' ?> name="email"
               value='<?= !empty($_SESSION['user']['email']) ? $_SESSION['user']['email'] : '' ?>'
               placeholder="gura.ilya2011@yandex.ru" maxlength="100" type="email">
        <label class="<?= $oldPassword ? 'error' : '' ?> <?= $edit ? '' : 'display-none' ?>"
               for="password"><?= $oldPassword ? 'Неккоректный пароль' : 'Старый пароль' ?></label>
        <input id="password" name="oldPassword"
               placeholder="Введите старый пароль" <?= $edit ? 'type="password"' : 'type="hidden"' ?> maxlength="40">

        <label class="<?= $password ? 'error' : '' ?> <?= $edit ? '' : 'display-none' ?>"
               for="password"><?= $password ? 'Неккоректный пароль' : 'Пароль' ?></label>
        <input id="password" name="oldPassword"
               placeholder="Введите новый пароль" <?= $edit ? 'type="password"' : 'type="hidden"' ?> maxlength="40">

        <label class="<?= $password2 ? 'error' : '' ?> <?= $edit ? '' : 'display-none' ?>"
               for="password2"><?= $password2 ? 'Неккоректный пароль' : 'Пароль' ?></label>
        <input id="password2" name="oldPassword"
               placeholder="Повторите пароль" <?= $edit ? 'type="password"' : 'type="hidden"' ?> maxlength="40">

        <input type="submit" name='edit' class="edit" value="<?=$edit ? "Сохранить" : "Редактировать профиль"?>">
        <a class="<?= $edit ? '' : 'display-none' ?>" href="./personal-office.php">Отмена</a>
        <a href="./logic/logout.php">Выход</a>
    </form>
</div>

<?php
require('./foot.php');
require('./scripts.php');
?>
