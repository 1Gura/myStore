<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'mystore');
//function connect()
//{
//    $mysql = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
//    if ($mysql->connect_errno) exit('Ошибка подключения к бд!');
//    $mysql->set_charset('utf-8');
//}

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
        select cl.*, c.img_path
        from clothes cl
        inner join content c on cl.Id = c.id_clothes;");
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

function getIcons()
{
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

function getIconSocial()
{
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

function getSocial()
{
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

function addNewUser($name = null, $surname = null, $phone = null, $email = null, $password = null, $avatar = null, $role = 0)
{
    $password = md5($password);
    $mysql = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if ($mysql->connect_errno) exit('Ошибка подключения к бд!');
    $mysql->set_charset('utf-8');
    $result = $mysql->query("INSERT INTO `users` (`surname`, `name`, `phone`,`email`, `password`, `avatar`, `role`) VALUES ('$surname', '$name', '$phone', '$email', '$password', '$avatar', '$role')");
    $mysql->close();
    return $result;
}

function checkEmail($email = ''){
    $mysql = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if ($mysql->connect_errno) exit('Ошибка подключения к бд!');
    $mysql->set_charset('utf-8');
    $result = $mysql->query("
        select email
        from users
        where email like '$email'
        ");
    $mysql->close();
    return $result;
}


function checkUser($email, $password)
{
    $mysql = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if ($mysql->connect_errno) exit('Ошибка подключения к бд!');
    $mysql->set_charset('utf-8');
    $result = $mysql->query("
        SELECT *
        FROM `users`
        WHERE `email` = '$email'
        AND `password` = '$password'");
    $mysql->close();
    return $result;
}

function editUser($id = null, $name = null, $surname = null, $phone = null, $email = null, $password = null, $avatar = null)
{
    $mysql = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if ($mysql->connect_errno) exit('Ошибка подключения к бд!');
    $mysql->set_charset('utf-8');
    $result = $mysql->query("
    REPLACE INTO `users` (`Id`,`surname`, `name`, `phone`, `email`, `password`, `avatar`)
    VALUES ('$id','$surname', '$name', '$phone', '$email', '$password', '$avatar')
    ");
    $mysql->close();
    return $result;
}

//Логика авторизации


