<?php
session_start();
include_once $_SERVER['DOCUMENT_ROOT'] . './components/logic/validate.php';
include_once $_SERVER['DOCUMENT_ROOT'] . './components/logic/email.php';

if (!empty($_POST)) {
    $subject = checkSubject($_POST['subject']);
    $message = checkTextBox($_POST['message']);
    if (!$subject && !$message) {
        $mail = new Email($_SESSION['user']['name'], $_SESSION['user']['surname'], $_SESSION['user']['phone'], $_SESSION['user']['email'], $_POST['subject'], $_POST['message']);
        unset($_SESSION['mail']);
        $mail->submit($_SESSION['user']['id']);
        header("Location: http://{$_SERVER['HTTP_HOST']}/components/feedback.php?ok=ok");
        exit;
    } else {
        $_SESSION['mail']['subject'] = $_POST['subject'];
        $_SESSION['mail']['message'] = $_POST['message'];
        header("Location: http://{$_SERVER['HTTP_HOST']}/components/feedback.php");
        exit();
    }
} else {
    $message = getMessage($_GET['id']);
    $message = mysqli_fetch_assoc($message);
    $mail = new Email($message['name'], $message['surname'], $message['phone'], $message['email'], $message['subject'], $message['message']);
    $mail->submit($message['userId']);
    header("Location: http://{$_SERVER['HTTP_HOST']}/components/admin.php");
    exit();
}
