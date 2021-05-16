<?php
session_start();
include_once $_SERVER['DOCUMENT_ROOT'] . './include/db.php';
include_once $_SERVER['DOCUMENT_ROOT'] . './components/logic/validate.php';
$name_check = checkRegularName($_POST['name']);
$surname_check = checkRegularSurName($_POST['surname']);
$phone_check = checkRegularPhone($_POST['phone']);
$email_check = checkRegularEmail($_POST['email']);
$empty = !empty($_POST['password'])  || !empty($_POST['password2']);
$password_check = $empty && checkRegularPassword($_POST['password']);
$password2_check = $empty && comparisonOfPasswords($_POST['password'], $_POST['password2']);
//var_dump($_POST);
if ($name_check || $surname_check || $phone_check || $email_check || $password_check || $password2_check ){
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['surname'] = $_POST['surname'];
    $_SESSION['phone'] = $_POST['phone'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['password'] = $_POST['password'];
    $_SESSION['password2'] = $_POST['password2'];
    header("Location: ./admin.php");
    exit();
} else {
    if (!empty($_FILES['avatar']['name'])) {
        $name = time() . $_FILES['avatar']['name'];
        $path = $_SERVER['DOCUMENT_ROOT'] . '/uploads/' . $name;
        $oldPath = $_SERVER['DOCUMENT_ROOT'] . '/uploads/' . $_SESSION['avatar'];
        if(file_exists($oldPath) && !empty($_SESSION['avatar'])) {
            unlink($oldPath);
        }
        move_uploaded_file($_FILES['avatar']['tmp_name'], $path);
    }
    editUser(
        $_SESSION['id'],
        $_POST['name'],
        $_POST['surname'],
        $_POST['phone'],
        $_POST['email'],
        empty($_POST['password']) ? $_SESSION['oldPassword'] : md5($_POST['password']),
        !empty($_FILES['avatar']['name']) ? $name : $_SESSION['avatar'],
        $_POST['admin'] ? 1 : 0);
    header("Location: ./admin.php");
    exit();
}

