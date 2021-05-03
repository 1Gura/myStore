<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'mystore');
function connect() {
    $mysql = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
    if($mysql->connect_errno) exit('Ошибка подключения к бд!');
    $mysql->set_charset('utf-8');
}

//$mysql->query("INSERT into clothes (name,img_path, price) value ('Костюм', 'clothes2.jpg', 3000)");

//
function getAllSlidePost() {
    $mysql = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
    if($mysql->connect_errno) exit('Ошибка подключения к бд!');
    $mysql->set_charset('utf-8');
    $result =  $mysql->query("
    select name, img_path
    from content
    Where (content.id_clothes is null or id_clothes = '')");
    $mysql->close();
    return $result;
}




