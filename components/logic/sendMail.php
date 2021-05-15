<?php
session_start();
include_once $_SERVER['DOCUMENT_ROOT'] . './components/logic/validate.php';
include_once $_SERVER['DOCUMENT_ROOT'] . './components/logic/email.php';

if (!empty($_POST)) {
    $name = checkRegularName($_POST['name']);
    $surname = checkRegularSurName($_POST['surname']);
    $phone = checkRegularPhone($_POST['phone']);
    $email = checkRegularEmail($_POST['email']);
    $subject = checkSubject($_POST['subject']);
    $message = checkTextBox($_POST['message']);
    if (!$name && !$surname && !$phone && !$email && !$subject && !$message) {
        $mail = new Email($_POST['name'], $_POST['surname'], $_POST['phone'], $_POST['email'], $_POST['subject'], $_POST['message']);
        unset($_SESSION['mail']);
        $mail->submit();
    } else {
        $_SESSION['mail']['name'] = $_POST['name'];
        $_SESSION['mail']['surname'] = $_POST['surname'];
        $_SESSION['mail']['phone'] = $_POST['phone'];
        $_SESSION['mail']['email'] = $_POST['email'];
        $_SESSION['mail']['subject'] = $_POST['subject'];
        $_SESSION['mail']['message'] = $_POST['message'];
        header("Location: http://{$_SERVER['HTTP_HOST']}/components/feedback.php");
        exit();
    }
}
