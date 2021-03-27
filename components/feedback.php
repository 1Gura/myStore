<?php
require('./header.php');
?>
<?php
 if(!empty($_POST)) {
     $mail = new Email($_POST['name'], $_POST['surname'], $_POST['phone'], $_POST['email'], $_POST['subject'], $_POST['message']);
     $mail->submit();
 }
?>
<form id='personal-area-form' action="./feedback.php" method="post" class="personal-area el-hover">
    <label class="<?= checkRegularName() ? 'error' : '' ?>" for="name"><?= checkRegularName() ?? 'Имя' ?></label>
    <input id="name" name="name" placeholder="Введите Имя" maxlength="40" type="text"
           value="<?= !empty($_POST['name']) ? $_POST['name'] : '' ?>"
    >
    <label class="<?= checkRegularSurname() ? 'error' : '' ?>"
           for="surname"><?= checkRegularSurname() ?? 'Фамилия' ?></label>
    <input id="surname" name='surname' value="<?= !empty($_POST['surname']) ? $_POST['surname'] : '' ?>"
           placeholder="Введите Фамилию" type="text" maxlength="40">
    <label class="<?= checkRegularPhone() ? 'error' : '' ?>"
           for="phone"><?= checkRegularPhone() ?? 'Телефон' ?></label>
    <input id="phone" name="phone" value='<?= !empty($_POST['phone']) ? $_POST['phone'] : '' ?>'
           placeholder="+7(999)-999-99-99" maxlength="40" type="tel">
    <label class="<?= checkRegularEmail() ? 'error' : '' ?>"
           for="email"><?= checkRegularEmail() ?? 'email' ?></label>
    <input id="email" name="email" value="<?= !empty($_POST['email']) ? $_POST['email'] : '' ?>"
           placeholder="Введите @email" maxlength="40" type="text">
    <label class="<?= checkSubject() ? 'error' : '' ?>" for=""><?= checkSubject() ?? 'Введите тему сообщения' ?></label>
    <input type="text" name="subject" placeholder="Введите тему сообщения" value="<?= !empty($_POST['subject']) ? $_POST['subject'] : '' ?>">
    <label class="<?= checkTextBox() ? 'error' : '' ?>"
    ><?= checkTextBox() ?? 'Введите сообщение' ?></label>
    <textarea id='message' name="message"><?= !empty($_POST['message']) ? $_POST['message'] : '' ?></textarea>
    <button name="feed" type="submit" class="personal-area__btn">
        Отправить
    </button>
</form>

<?php
require('./foot.php');
?>
