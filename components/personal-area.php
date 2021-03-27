<?php
require('./header.php');
?>

<div class="container wow fadeInDown">
    <div class="links">
        <span class="link"><a href="../index.php">Главная</a></span>
        <span><img src="../img/strlka.png" alt="стрелка"></span>
        <span class="link"><a href="../components/personal-area.php">Вход в личный кабинет</a></span>
    </div>
    <h1 class="title">Вход в кабинет покупателя</h1>
    <form id='personal-area-form' class="personal-area el-hover">
        <label for="email">Email</label>
        <input id="email" placeholder="Введите @email" data-validate-field="email" onkeyup="validationEmail(event)"
               onkeydown="validationEmail(event)" required maxlength="40" type="text">
        <label for="password">Пароль</label>
        <input id="password" placeholder="Введите пароль" data-validate-field="password" type="password" required
               maxlength="40" type="text">
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
