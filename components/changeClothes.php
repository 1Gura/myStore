<?php
session_start();
include_once $_SERVER['DOCUMENT_ROOT'] . './include/db.php';
include_once $_SERVER['DOCUMENT_ROOT'] . './components/logic/validate.php';
$name = check($_POST['title']);
$price = checkNumber($_POST['price']);
$count = checkNumber($_POST['count']);
if ($name || $price || $count) {
    $_SESSION['clothes']['title'] = $_POST['title'];
    $_SESSION['clothes']['price'] = $_POST['price'];
    $_SESSION['clothes']['count'] = $_POST['count'];
    header("Location: ./editClothes.php");
    exit();
} else {
    if (!empty($_FILES['img_path']['name'])) {
        $name = time() . $_FILES['img_path']['name'];
        $path = $_SERVER['DOCUMENT_ROOT'] . '/clothes/' . $name;
        $oldPath = $_SERVER['DOCUMENT_ROOT'] . '/clothes/' . $_SESSION['clothes']['img_path'];
        if (file_exists($oldPath) && !empty($_SESSION['clothes']['img_path'])) {
            unlink($oldPath);
        }
        move_uploaded_file($_FILES['img_path']['tmp_name'], $path);
    }
    if ($_SESSION['clothes']['addClothes']) {
        addClothes(
            $_POST['title'],
            $_POST['price'],
            $_POST['count'],
            !empty($_FILES['img_path']['name']) ? $name : $_SESSION['clothes']['img_path']
        );
        unset($_SESSION['clothes']);
        header("Location: ./admin.php");
        exit();
    }
    editClothes(
        $_SESSION['clothes']['id'],
        $_POST['title'],
        $_POST['price'],
        $_POST['count'],
        !empty($_FILES['img_path']['name']) ? $name : $_SESSION['clothes']['img_path']);
    unset($_SESSION['clothes']);
    header("Location: ./admin.php");
    exit();
}

