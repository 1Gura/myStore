<?php
session_start();
$title = $_SESSION['pages'][4]['name'];
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
