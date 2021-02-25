<?php?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    require('./links.php');
    ?>
    <title>Регистрация</title>
</head>
<body>
<?php
require('./header.php');
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
    <form id='personal-area-form' class="personal-area el-hover">
        <label  for="name">Имя</label>
        <input id="name" placeholder="Введите Имя" data-validate-field="name" onkeyup="validationName(event)" onkeydown="validationName(event)"  maxlength="40" type="text">
        <label for="surname">Фамилия</label>
        <input id="surname" placeholder="Введите Фамилию" data-validate-field="surname" onkeyup="validationName(event)" onkeydown="validationName(event)" type = "text"   maxlength="40">
        <label  for="phone">Телефон</label>
        <input id="phone" placeholder="+7(999)-999-99-99" data-validate-field="tel"  onkeyup="validationTel(event)" onkeydown="validationTel(event)" maxlength="40" type="tel">
        <label  for="email">Email</label>
        <input id="email" placeholder="Введите @email" data-validate-field="email" onkeyup="validationEmail(event)" onkeydown="validationEmail(event)"  maxlength="40" type="text">
        <label for="password">Пароль</label>
        <input id="password" placeholder="Введите пароль" data-validate-field="password" onkeyup="validationPassword(event)" onkeydown="validationPassword(event)" type = "password"   maxlength="40">
        <label for="password2">Подтвердите пароль</label>
        <input id="password2" placeholder="Введите пароль" data-validate-field="repeatPassword" onkeyup="validationPassword(event)" onkeydown="validationPassword(event)" type = "password"   maxlength="40">

        <button class="personal-area__btn" onclick="comparisonPasswords()">
            Регистрация
        </button>
    </form>
</div>

<?php
require('./foot.php');
require('./scripts.php');
?>
</body>
</html>
