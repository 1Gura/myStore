<?php
session_start();
include_once $_SERVER['DOCUMENT_ROOT'] . './include/db.php';
include_once $_SERVER['DOCUMENT_ROOT'] . './components/signin.php';

$email = $_POST['email'];
$password = $_POST['password'];

$check = checkUser($email, md5($password));
if (mysqli_num_rows($check) > 0) {
    session_unset();
    $user = mysqli_fetch_assoc($check);
    $_SESSION['user'] = [
        'id'=> $user['id'],
        'email'=> $user['email'],
        'surname' => $user['surname'],
        'phone' => $user['phone'],
        'name' => $user['name'],
        'password' => $user['password'],
        'avatar' => $user['avatar']

    ];
    header("Location: ./personal-office.php");
    exit();
} else {
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['password'] = $_POST['password'];
    header("Location: ./personal-area.php?ok=no");
    exit();
}
