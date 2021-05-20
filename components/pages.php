<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/db.php';
session_start();
changePage($_POST['id'],$_POST['pageName']);
unset($_SESSION['pages']);
header('Location: /components/admin.php');
exit();

