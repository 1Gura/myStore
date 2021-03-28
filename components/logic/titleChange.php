<?php
function titleChange(): string
{
    if (stripos($_SERVER['REQUEST_URI'], 'index')) {
        return 'Интернет магазин';
    } else if (stripos($_SERVER['REQUEST_URI'], 'personal-area')) {
        return 'Личный кабинет';
    } else if (stripos($_SERVER['REQUEST_URI'], 'registration')) {
        return 'Регистрация';
    } else if (stripos($_SERVER['REQUEST_URI'], 'collection')) {
        return 'Каталог';
    } else if (stripos($_SERVER['REQUEST_URI'], 'feedback')) {
        return 'Обратная связь';
    } else if (stripos($_SERVER['REQUEST_URI'], 'about')) {
        return 'О нас';
    } else {
        return 'Интернет магазин';
    }

}


