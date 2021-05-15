<?php
session_start();
require('./header.php');
?>

<h1 class="title">Форма обратной связи</h1>

<?php
if (!empty($_GET)) {
    if ($_GET['ok'] === "ok") { ?>
        <div class="form-success">Форма успешно отправлена!</div>
        <?php
    }
}

$name = checkRegularName($_SESSION['mail']['name']);
$surname = checkRegularSurName($_SESSION['mail']['surname']);
$phone = checkRegularPhone($_SESSION['mail']['phone']);
$email = checkRegularEmail($_SESSION['mail']['email']);
$subject = checkSubject($_SESSION['mail']['subject']);
$message = checkTextBox($_SESSION['mail']['message']);

?>

<form id='personal-area-form' action="./logic/sendMail.php" method="post" class="personal-area el-hover">
    <label class="<?= $name ? 'error' : '' ?>" for="name"><?= $name ? "Только символы кириллицы!" : 'Имя' ?></label>
    <input id="name" name="name" placeholder="Введите Имя" maxlength="40" type="text"
           value="<?= !empty($_SESSION['mail']['name']) ? $_SESSION['mail']['name'] : '' ?>"
    >
    <label class="<?= $surname ? 'error' : '' ?>"
           for="surname"><?= $surname ? "Только символы кириллицы!" : 'Фамилия' ?></label>
    <input id="surname" name='surname'
           value="<?= !empty($_SESSION['mail']['surname']) ? $_SESSION['mail']['surname'] : '' ?>"
           placeholder="Введите Фамилию" type="text" maxlength="40">
    <label class="<?= $phone ? 'error' : '' ?>"
           for="phone"><?= $phone ? 'Формат телефона +7(999)-999-99-99' : 'Телефон' ?></label>
    <input id="phone" name="phone" value='<?= !empty($_SESSION['mail']['phone']) ? $_SESSION['mail']['phone'] : '' ?>'
           placeholder="+7(999)-999-99-99" maxlength="40" type="tel">
    <label class="<?= $email ? 'error' : '' ?>"
           for="email"><?= $email ? 'Формат email: gura.ilya2011@yandex.ru' : 'email' ?></label>
    <input id="email" name="email" value="<?= !empty($_SESSION['mail']['email']) ? $_SESSION['mail']['email'] : '' ?>"
           placeholder="Введите @email" maxlength="40" type="text">
    <label class="<?= $subject ? 'error' : '' ?>"
           for=""><?= $subject ? 'Минимальная длина темы 5 символов' : 'Введите тему сообщения' ?></label>
    <input type="text" name="subject" placeholder="Введите тему сообщения"
           value="<?= !empty($_SESSION['mail']['subject']) ? $_SESSION['mail']['subject'] : '' ?>">
    <label class="<?= $message ? 'error' : '' ?>"
    ><?= $message ? 'Минимальная длина сообщения 30 символов!' : 'Введите сообщение' ?></label>
    <textarea id='message'
              name="message"><?= !empty($_SESSION['mail']['message']) ? $_SESSION['mail']['message'] : '' ?></textarea>
    <?php
    if (!empty($_SESSION['user'])) { ?>
        <button name="feed" type="submit" class="personal-area__btn">
            Отправить
        </button>
    <?php }
    else { ?>
    <button name="feed" type="reset" class="personal-area__btn-disable">
        Авторизуйтесь!
    </button>
   <?php } ?>

</form>

<?php
require('./foot.php');
?>
