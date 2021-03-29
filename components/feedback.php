<?php
require('./header.php');
?>

<h1 class="title">Форма обратной связи</h1>

<?php
if (!empty($_GET)) {
    if($_GET['ok']==="ok") {?>
    <div class="form-success">Форма успешно отправлена!</div>
    <?php
}}
?>
<form id='personal-area-form' action="./feedback.php" method="post" class="personal-area el-hover">
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
    <label class="<?= $subject ? 'error' : '' ?>"
           for=""><?= $subject ? 'Минимальная длина темы 5 символов' : 'Введите тему сообщения' ?></label>
    <input type="text" name="subject" placeholder="Введите тему сообщения"
           value="<?= !empty($_POST['subject']) ? $_POST['subject'] : '' ?>">
    <label class="<?= $message ? 'error' : '' ?>"
    ><?= $message ? 'Минимальная длина сообщения 30 символов!' : 'Введите сообщение' ?></label>
    <textarea id='message' name="message"><?= !empty($_POST['message']) ? $_POST['message'] : '' ?></textarea>
    <button name="feed" type="submit" class="personal-area__btn">
        Отправить
    </button>
</form>

<?php
require('./foot.php');
?>
