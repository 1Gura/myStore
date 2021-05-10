<?php
require('./header.php');

if (empty($_SESSION['user'])) {
    header('Location: ../index.php');
}
?>
<?php
//if($_SESSION['id']) {
//    clearSession($_SESSION);
//
//}
if (strpos($_SERVER['HTTP_REFERER'], 'admin')) {
    $user = getUser($_GET['id']);
    $user = mysqli_fetch_assoc($user);
    $_SESSION['id'] = $user['Id'];
    $_SESSION['name'] = $user['name'];
    $_SESSION['surname'] = $user['surname'];
    $_SESSION['phone'] = $user['phone'];
    $_SESSION['email'] = $user['email'];
    $_SESSION['oldPassword'] = $user['password'];
    $_SESSION['avatar'] = $user['avatar'];
}
$edit = true;
$name = checkRegularName($_SESSION['name']);
$surname = checkRegularSurName($_SESSION['surname']);
$phone = checkRegularPhone($_SESSION['phone']);
$email = checkRegularEmail($_SESSION['email']);
$password = !empty($_SESSION['password']) && checkRegularPassword($_SESSION['password']);
$password2 = !empty($_SESSION['password2']) && comparisonOfPasswords($_SESSION['password'], $_SESSION['password2']);
?>
    <div class="container">
        <div class="links">
            <span class="link"><a href="../index.php">Главная</a></span>
            <span><img src="../img/strlka.png" alt="стрелка"></span>
            <span class="link"><a href="../components/personal-area.php">Вход в личный кабинет</a></span>
        </div>
        <form class="personal-area el-hover" action="./changeUser.php" method="post" enctype="multipart/form-data">
            <h1 class="title">Редактирование пользователя</h1>
            <img src="<?= !empty($_SESSION['avatar']) ? '../uploads/' . $_SESSION['avatar'] : '../img/icon-men.png' ?>"
                 class="personal-area-img" alt="">
            <label class="<?= $name ? 'error' : '' ?>" for="name"><?= $name ? "Только символы кириллицы!" : 'Имя' ?></label>
            <input id="name" name="name" placeholder="Введите Имя"
                   value="<?= !empty($_SESSION['name']) ? $_SESSION['name']: ''?>"
                   maxlength="40" type="text"
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
            <input class="" id="" type="file" name="avatar">

            <input type="submit" name='edit' class="edit" value="Изменить">
        </form>
    </div>
<?php
require('./foot.php');
require('./scripts.php');
?>