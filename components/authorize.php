<?php
session_start();
include_once $_SERVER['DOCUMENT_ROOT'] . './components/logic/validate.php';
include_once $_SERVER['DOCUMENT_ROOT'] . './include/db.php';
$_SESSION['name'] = $_POST['name'];
$_SESSION['surname'] = $_POST['surname'];
$_SESSION['phone'] = $_POST['phone'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['password'] = $_POST['password'];
$_SESSION['password2'] = $_POST['password2'];
$name_check = checkRegularName();
$surname_check = checkRegularSurName();
$phone_check = checkRegularPhone();
$email_check = checkRegularEmail();
$password_check = checkRegularPassword();
$password2_check = comparisonOfPasswords();
if ($name_check || $surname_check || $phone_check || $email_check || $password_check || $password2_check) {
    header("Location: ./registration.php");
    exit();

} else {
    if(!empty($_FILES['avatar']['name'])) {
        $name = time() . $_FILES['avatar']['name'];
        $path = $_SERVER['DOCUMENT_ROOT'] . '/uploads/' . $name;
        move_uploaded_file($_FILES['avatar']['tmp_name'], $path);
    }
    addNewUser($_POST['name'], $_POST['surname'], $_POST['phone'], $_POST['email'], $_POST['password'], $name);
//    include_once $_SERVER['DOCUMENT_ROOT'] . './components/header.php';
    session_destroy();
//    include_once $_SERVER['DOCUMENT_ROOT'] . './components/header.php';
    header("Location: ./registration.php?ok=ok");
    exit();
////    ?>
    <!---->
    <!--    <div class="personal-area el-hover">-->
    <!--        <h1 class="title">Авторизация прошла успешно!</h1>-->
    <!--        <img src="../img/ok.png" width="50" height="50" alt="">-->
    <!--        <a href="../index.php">Нажмите, чтобы вернуться на главную!</a>-->
    <!--    </div>-->
    <!--    --><?php
//    include_once $_SERVER['DOCUMENT_ROOT'] . './components/foot.php';
}


