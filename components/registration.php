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
    <form id='personal-area-form' action="./registration.php" method="post" class="personal-area el-hover">
        <label class = "<?=checkRegularName() ? 'error' : '' ?>" for="name"><?=checkRegularName() ?? 'Имя' ?></label>
        <input id="name" name="name" placeholder="Введите Имя" maxlength="40" type="text"
               value="<?=!empty($_POST['name']) ? $_POST['name'] : '' ?>"
        >
        <label class = "<?=checkRegularSurname() ? 'error' : '' ?>" for="surname"><?=checkRegularSurname() ?? 'Фамилия' ?></label>
        <input id="surname" name='surname' value="<?=!empty($_POST['surname']) ? $_POST['surname'] : '' ?>" placeholder="Введите Фамилию" type="text" maxlength="40">
        <label class = "<?=checkRegularPhone() ? 'error' : '' ?>" for="phone"><?=checkRegularPhone() ?? 'Телефон' ?></label>
        <input id="phone" name="phone" value = '<?=!empty($_POST['phone']) ? $_POST['phone'] : '' ?>' placeholder="+7(999)-999-99-99" maxlength="40" type="tel">
        <label class = "<?=checkRegularEmail() ? 'error' : '' ?>" for="email"><?=checkRegularEmail() ?? 'email' ?></label>
        <input id="email" name="email" value="<?=!empty($_POST['email']) ? $_POST['email'] : '' ?>" placeholder="Введите @email" maxlength="40" type="text">
        <label class = "<?=checkRegularPassword() ? 'error' : '' ?>" for="password"><?=checkRegularPassword() ?? 'Пароль' ?></label>
        <input id="password" name="password" value="<?=!empty($_POST['password']) ? $_POST['password'] : '' ?>" placeholder="Введите пароль" type="password" maxlength="40">
        <label class = "<?=comparisonOfPasswords() ? 'error' : '' ?>" for="password2"><?=comparisonOfPasswords() ?? 'Подтвердите пароль' ?></label>
        <input id="password2" name="password2" value="<?=!empty($_POST['password2']) ? $_POST['password2'] : '' ?>" placeholder="Введите пароль" type="password" maxlength="40">
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
