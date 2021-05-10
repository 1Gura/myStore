<?php
session_start();
include_once $_SERVER['DOCUMENT_ROOT'] . './include/db.php';
if(!empty($_GET)) {
    deleteUser($_GET['id']);
}
header("Location: ./admin.php");
exit();
