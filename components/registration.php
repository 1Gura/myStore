<? php ?>

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
    <?var_dump($_POST)?>
    <form id='personal-area-form' action="./registration.php" method="post" class="personal-area el-hover">
        <?php
        $nameStr = checkRegularName();
        if (strlen($nameStr) > 0) { ?>
            <label class="error" for="name"><?= $nameStr ?></label>
        <?php } else { ?>
            <label for="name">Имя</label>
        <?php } ?>


        <input id="name" name="name" placeholder="Введите Имя" maxlength="40" type="text"
               value="<?=!empty($_POST['name']) ? $_POST['name'] : '' ?>"
        >
        <label for="surname">Фамилия</label>
        <input id="surname" name='surname' placeholder="Введите Фамилию" type="text" maxlength="40">
        <label for="phone">Телефон</label>
        <input id="phone" name="phone" placeholder="+7(999)-999-99-99" maxlength="40" type="tel">
        <label for="email">Email</label>
        <input id="email" name="email" placeholder="Введите @email" maxlength="40" type="text">
        <label for="password">Пароль</label>
        <input id="password" name="password" placeholder="Введите пароль" type="password" maxlength="40">
        <label for="password2">Подтвердите пароль</label>
        <input id="password2" name="password2" placeholder="Введите пароль" type="password" maxlength="40">

        <button class="personal-area__btn">
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
