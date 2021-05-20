<?php
session_start();
$title = $_SESSION['pages'][0]['name'];
require('./components/header.php');
require('./components/slider.php');
require('./components/catalog.php');
require('./components/news.php');
require('./components/advertising.php');
require('./components/foot.php');
