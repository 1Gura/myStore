<?php
session_start();
session_unset();
header('Location: ../personal-area.php');
exit();