<?php
session_start();
unset($_SESSION['edit']);
header("Location: http://{$_SERVER['HTTP_HOST']}/components/personal-office.php");
exit();