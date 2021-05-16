<?php
session_start();
include_once $_SERVER['DOCUMENT_ROOT'] . './include/db.php';
include_once $_SERVER['DOCUMENT_ROOT'] . './components/logic/validate.php';
$name = check($_POST['name']);
$price = checkNumber($_POST['price']);
$count = checkNumber($_POST['count']);
if ($name || $price || $count){
    $_SESSION['clothes']['name'] = $_POST['name'];
    $_SESSION['clothes']['price'] = $_POST['price'];
    $_SESSION['clothes']['count'] = $_POST['count'];
    header("Location: ./editClothes.php");
    exit();
} else {
    if (!empty($_FILES['img_path']['name'])) {
        $name = time() . $_FILES['img_path']['name'];
        $path = $_SERVER['DOCUMENT_ROOT'] . '/img/' . $name;
        $oldPath = $_SERVER['DOCUMENT_ROOT'] . '/img/' . $_SESSION['clothes']['img_path'];
        if(file_exists($oldPath)) {
            unlink($oldPath);
        }
        move_uploaded_file($_FILES['img_path']['tmp_name'], $path);
    }
    if($_SESSION['clothes']['addClothes']) {

        header("Location: ./admin.php");
        exit();
    }
    editClothes(
        $_SESSION['clothes']['id'],
        $_POST['title'],
        $_POST['price'],
        $_POST['count'],
        $_POST['img_path']);
    header("Location: ./admin.php");
    exit();
}

