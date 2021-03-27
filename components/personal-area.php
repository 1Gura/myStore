<?php
require('./header.php');
?>
<?php
$email = checkRegularEmail();
$password = checkRegularPassword();
?>

<div class="container wow fadeInDown">
    <div class="links">
        <span class="link"><a href="../index.php">Главная</a></span>
        <span><img src="../img/strlka.png" alt="стрелка"></span>
        <span class="link"><a href="../components/personal-area.php">Вход в личный кабинет</a></span>
    </div>
    <h1 class="title">Вход в кабинет покупателя</h1>
    <form method="post" id='personal-area-form' class="personal-area el-hover">
        <label class="<?= $email ? 'error' : '' ?>"
               for="email"><?= $email ? 'Формат email: gura.ilya2011@yandex.ru' : 'email' ?></label>
        <input id="email" name="email" value="<?= !empty($_POST['email']) ? $_POST['email'] : '' ?>"
               placeholder="Введите @email" maxlength="40" type="text">
        <label class="<?= $password ? 'error' : '' ?>"
               for="password"><?= $password ? 'Неккоректный пароль' :'Пароль' ?></label>
        <input id="password" name="password" value="<?= !empty($_POST['password']) ? $_POST['password'] : '' ?>"
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
