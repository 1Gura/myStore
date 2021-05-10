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
$name_check = checkRegularName($_POST['name']);
$surname_check = checkRegularSurName($_POST['surname']);
$phone_check = checkRegularPhone($_POST['phone']);
$email_check = checkRegularEmail($_POST['email']);
$password_check = checkRegularPassword($_POST['password']);
$password2_check = comparisonOfPasswords($_POST['password'],$_POST['password2']);
if ($name_check || $surname_check || $phone_check || $email_check || $password_check || $password2_check) {
    if(strpos($_SERVER['HTTP_REFERER'], 'addNewUser')) {
        header("Location: ./addNewUser.php");
        exit();
    }
    header("Location: ./registration.php");
    exit();

} else {
    $checkEmail = checkEmail($_POST['email']);
    if (mysqli_num_rows($checkEmail) > 0) {
        if(strpos($_SERVER['HTTP_REFERER'], 'addNewUser')) {
            header("Location: ./addNewUser.php?ok=email");
            exit();
        }
        header("Location: ./registration.php?ok=email");
        exit();
    }
    if(!empty($_FILES['avatar']['name'])) {
        $name = time() . $_FILES['avatar']['name'];
        $path = $_SERVER['DOCUMENT_ROOT'] . '/uploads/' . $name;
        move_uploaded_file($_FILES['avatar']['tmp_name'], $path);
    }
    addNewUser($_POST['name'], $_POST['surname'], $_POST['phone'], $_POST['email'], $_POST['password'], $name);
    if(strpos($_SERVER['HTTP_REFERER'], 'addNewUser')) {
        header("Location: ./admin.php");
        exit();
    }
    session_destroy();
    header("Location: ./registration.php?ok=ok");
    exit();
  ?>
    <?php
}


