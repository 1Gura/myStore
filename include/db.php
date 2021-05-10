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
    return $mysql;
}

function clearSession()
{
    foreach ($_SESSION as $key => $value) {
        if ($key != 'user') {
            unset($_SESSION[$key]);
        }
    }
}

function getAllSlidePost()
{
    $mysql = connect();
    $result = $mysql->query("
    select *
    from content
    where Id>0 and Id<6");
    $mysql->close();
    return $result;
}

function getAllCatalog()
{
    $mysql = connect();
    $result = $mysql->query("
        select cl.*, c.img_path
        from clothes cl
        inner join content c on cl.Id = c.id_clothes;");
    $mysql->close();
    return $result;
}

function getCatalogItem($id = null)
{
    $mysql = connect();
    $result = $mysql->query("
        select cl.*, c.img_path
        from clothes cl
        inner join content c on cl.Id = c.id_clothes
        where cl.Id = '$id'");
    $mysql->close();
    return $result;
}

function getNews()
{
    $mysql = connect();
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
    $mysql = connect();
    $result = $mysql->query("
    select *
    from content
    where name like 'Иконка'");
    $mysql->close();
    return $result;
}

function getIconSocial()
{
    $mysql = connect();
    $result = $mysql->query("
    select *
    from content
    where name = 'icon-social-network'");
    $mysql->close();
    return $result;
}

function getSocial()
{
    $mysql = connect();
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
    $mysql = connect();
    $result = $mysql->query("INSERT INTO `users` (`surname`, `name`, `phone`,`email`, `password`, `avatar`, `role`) VALUES ('$surname', '$name', '$phone', '$email', '$password', '$avatar', '$role')");
    $mysql->close();
    return $result;
}

function checkEmail($email = '')
{
    $mysql = connect();
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
    $mysql = connect();
    $result = $mysql->query("
        SELECT *
        FROM `users`
        WHERE `email` = '$email'
        AND `password` = '$password'");
    $mysql->close();
    return $result;
}

function editUser($id = null, $name = null, $surname = null, $phone = null, $email = null, $password = null, $avatar = null, $role = null)
{
    $mysql = connect();
    $result = $mysql->query("
    REPLACE INTO `users` (`Id`,`surname`, `name`, `phone`, `email`, `password`, `avatar`, `role`)
    VALUES ('$id','$surname', '$name', '$phone', '$email', '$password', '$avatar', '$role')
    ");
    $mysql->close();
    return $result;
}

function editClothes(
    $id = null,
    $title = null,
    $price = null,
    $count = null,
    $img_path = null)
{
    $mysql = connect();
    $result = $mysql->query("
    update clothes
    set title = '$title',
        price = '$price',
        count = '$count'
    where Id = '$id';
");
    $mysql->query("
    update content
    set img_path = '$img_path'
    where id_clothes = $id ;");
    $mysql->close();
    return $result;
}

function addClothes(
    $id = null,
    $title = null,
    $price = null,
    $count = null,
    $img_path = null)
{
    $mysql = connect();
    $result = $mysql->query("
    update clothes
    set title = '$title',
        price = '$price',
        count = '$count'
    where Id = '$id'
");
    $mysql->close();
    return $result;
}


function getAllUsers()
{
    $mysql = connect();
    $result = $mysql->query("
        select *
        from users");
    $mysql->close();
    return $result;
}

function getAllClothes()
{
    $mysql = connect();
    $result = $mysql->query("
        select *
        from clothes");
    $mysql->close();
    return $result;
}

function deleteUser($idUser = 0)
{
    $mysql = connect();
    $result = $mysql->query("
        delete from users
        where Id = '$idUser'");
    $mysql->close();
    return $result;
}


function getUser($idUser = null)
{
    $mysql = connect();
    $result = $mysql->query("
        select *
        from users
        where id='$idUser'");
    $mysql->close();
    return $result;
}
//Логика авторизации


