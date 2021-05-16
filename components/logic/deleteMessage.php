<?php
session_start();
include_once $_SERVER['DOCUMENT_ROOT'] . './components/logic/validate.php';
include_once $_SERVER['DOCUMENT_ROOT'] . './components/logic/email.php';
if(!empty($_GET['id'])) {
    deleteMessage($_GET['id']);
}
header("Location: http://{$_SERVER['HTTP_HOST']}/components/admin.php");
exit();

