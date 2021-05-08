<?php
session_start();
include_once $_SERVER['DOCUMENT_ROOT'] . './include/db.php';
include_once $_SERVER['DOCUMENT_ROOT'] . './components/logic/validate.php';
$name_check = checkRegularName($_POST['name']);
$surname_check = checkRegularSurName($_POST['surname']);
$phone_check = checkRegularPhone($_POST['phone']);
$email_check = checkRegularEmail($_POST['email']);
$password_check = checkRegularPassword($_POST['password']);
$oldPassword = checkRegularPassword($_POST['oldPassword']);
$password2_check = comparisonOfPasswords($_POST['password'], $_POST['password2']);
$comparisonOldPassword =  comparisonOfPasswords(md5($_POST['oldPassword']), $_SESSION['user']['password']);
if ($name_check || $surname_check || $phone_check || $email_check || $password_check || $password2_check || $oldPassword || $comparisonOldPassword) {
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['surname'] = $_POST['surname'];
    $_SESSION['phone'] = $_POST['phone'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['password'] = $_POST['password'];
    $_SESSION['oldPassword'] = $_POST['oldPassword'];
    $_SESSION['password2'] = $_POST['password2'];
    $_SESSION['edit'] = 'edit';

    header("Location: ./personal-office.php");
    exit();
} else {
    if (!empty($_FILES['avatar']['name'])) {
        $name = time() . $_FILES['avatar']['name'];
        $path = $_SERVER['DOCUMENT_ROOT'] . '/uploads/' . $name;
        move_uploaded_file($_FILES['avatar']['tmp_name'], $path);
    }
    editUser(
        $_SESSION['id'],
        $_POST['name'],
        $_POST['surname'],
        $_POST['phone'],
        $_POST['email'],
        empty($_POST['password']) ? $_SESSION['user']['password'] : $_POST['password'],
        $name);
    session_unset();
    $check = checkUser($_POST['email'], md5($_POST['password']));
    if (mysqli_num_rows($check) > 0) {
        session_unset();
        $user = mysqli_fetch_assoc($check);
        $_SESSION['user'] = [
            'id' => $user['Id'],
            'email' => $user['email'],
            'surname' => $user['surname'],
            'phone' => $user['phone'],
            'name' => $user['name'],
            'password' => $user['password'],
            'avatar' => $user['avatar']

        ];
        header("Location: ./personal-office.php");
        exit();
    } else {
        header("Location: ./personal-office.php?ok=no");
        exit();
    }
}
//    header("Location: ./personal-office.php");
//    exit();
//
//    $_SESSION['email'] = $_POST['email'];
//    $_SESSION['password'] = $_POST['password'];
//    header("Location: ./personal-area.php?ok=no");
//    exit();

