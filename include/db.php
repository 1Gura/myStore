<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'mystore');
function connect()
{
    $mysql = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if ($mysql->connect_errno) exit('Ошибка подключения к бд!');
    $mysql->set_charset('utf-8');
}

//$mysql->query("INSERT into clothes (name,img_path, price) value ('Костюм', 'clothes2.jpg', 3000)");

//
function getAllSlidePost()
{
    $mysql = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if ($mysql->connect_errno) exit('Ошибка подключения к бд!');
    $mysql->set_charset('utf-8');
    $result = $mysql->query("
    select *
    from content
    where Id>0 and Id<6");
    $mysql->close();
    return $result;
}

function getAllCatalog()
{
    $mysql = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if ($mysql->connect_errno) exit('Ошибка подключения к бд!');
    $mysql->set_charset('utf-8');
    $result = $mysql->query("
        select price,name,img_path
        from clothes
        inner join content c on clothes.Id = c.id_clothes");
    $mysql->close();
    return $result;
}

function getNews()
{
    $mysql = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if ($mysql->connect_errno) exit('Ошибка подключения к бд!');
    $mysql->set_charset('utf-8');
    $result = $mysql->query("
    select *
    from content
    where name = 'Совет1'
    or name = 'Совет2'");
    $mysql->close();
    return $result;
}

function getIcons() {
    $mysql = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if ($mysql->connect_errno) exit('Ошибка подключения к бд!');
    $mysql->set_charset('utf-8');
    $result = $mysql->query("
    select *
    from content
    where name like 'Иконка'");
    $mysql->close();
    return $result;
}

function getIconSocial() {
    $mysql = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if ($mysql->connect_errno) exit('Ошибка подключения к бд!');
    $mysql->set_charset('utf-8');
    $result = $mysql->query("
    select *
    from content
    where name = 'icon-social-network'");
    $mysql->close();
    return $result;
}

function getSocial() {
    $mysql = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if ($mysql->connect_errno) exit('Ошибка подключения к бд!');
    $mysql->set_charset('utf-8');
    $result = $mysql->query("
    select *
    from  content
    where name ='social'");
    $mysql->close();
    return $result;
}

