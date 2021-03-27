<?php
require('./header.php');
?>

<?php
$name = checkRegularName();
$surname = checkRegularSurName();
$phone = checkRegularPhone();
$email = checkRegularEmail();
$password = checkRegularPassword();
$password2 = comparisonOfPasswords();
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
    <form id='personal-area-form' action="./registration.php" method="post" class="personal-area el-hover">
        <label class="<?= $name ? 'error' : '' ?>" for="name"><?= $name ? "Только символы кириллицы!" : 'Имя' ?></label>
        <input id="name" name="name" placeholder="Введите Имя" maxlength="40" type="text"
               value="<?= !empty($_POST['name']) ? $_POST['name'] : '' ?>"
        >
        <label class="<?= $surname ? 'error' : '' ?>"
               for="surname"><?= $surname ? "Только символы кириллицы!" : 'Фамилия' ?></label>
        <input id="surname" name='surname' value="<?= !empty($_POST['surname']) ? $_POST['surname'] : '' ?>"
               placeholder="Введите Фамилию" type="text" maxlength="40">
        <label class="<?= $phone ? 'error' : '' ?>"
               for="phone"><?= $phone ? 'Формат телефона +7(999)-999-99-99' : 'Телефон' ?></label>
        <input id="phone" name="phone" value='<?= !empty($_POST['phone']) ? $_POST['phone'] : '' ?>'
               placeholder="+7(999)-999-99-99" maxlength="40" type="tel">
        <label class="<?= $email ? 'error' : '' ?>"
               for="email"><?= $email ? 'Формат email: gura.ilya2011@yandex.ru' : 'email' ?></label>
        <input id="email" name="email" value="<?= !empty($_POST['email']) ? $_POST['email'] : '' ?>"
               placeholder="Введите @email" maxlength="40" type="text">
        <label class="<?= $password ? 'error' : '' ?>"
               for="password"><?= $password ? 'Неккоректный пароль' :'Пароль' ?></label>
        <input id="password" name="password" value="<?= !empty($_POST['password']) ? $_POST['password'] : '' ?>"
               placeholder="Введите пароль" type="password" maxlength="40">
        <label class="<?= $password2 ? 'error' : '' ?>"
               for="password2"><?= $password2 ? 'Пароли не совпали!' : 'Подтвердите пароль' ?></label>
        <input id="password2" name="password2" value="<?= !empty($_POST['password2']) ? $_POST['password2'] : '' ?>"
               placeholder="Введите пароль" type="password" maxlength="40">
        <button type="submit" class="personal-area__btn">
            Регистрация
        </button>
    </form>
</div>

<?php
require('./foot.php');
?>
</body>
</html>
