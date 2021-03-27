<?php

function checkRegularName()
{
    if (!empty($_POST)) {
        if (!preg_match('/^[а-я]{2,}+$/iu', trim($_POST['name']))) {
            return 'Только символы кириллицы!';
        }
    }
}
function checkRegularSurName()
{
    if (!empty($_POST)) {
        if (!preg_match('/^[а-я]{2,}+$/iu', trim($_POST['surname']))) {
            return 'Только символы кириллицы!';
        }
    }
}

function checkRegularPhone()
{
    if (!empty($_POST)) {
        if (!preg_match('/^\+7 \([0-9][0-9][0-9]\) [0-9][0-9][0-9] [0-9][0-9] [0-9][0-9]/', $_POST['phone'])) {
            return 'Формат телефона +7(999)-999-99-99';
        }
    }
}

function checkRegularEmail()
{
    if (!empty($_POST)) {
        if (!preg_match('/^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i', $_POST['email'])) {
            return 'Формат email: gura.ilya2011@yandex.ru';
        }
    }
}

function checkRegularPassword() {
    if (!empty($_POST)) {
        if (!preg_match(    '/[0-9a-zA-Z!@#$%^&*]{6,}/', $_POST['password'])) {
            return 'Минимальная длина пароля 6 символов!';
        }
    }
}
function comparisonOfPasswords() {
    if (!empty($_POST)) {
        if ($_POST['password'] !== $_POST['password2']) {
            return 'Пароли не совпадают!';
        }
    }
}

function checkSubject() {
    if(!empty($_POST)) {
        if(strlen($_POST['subject']) < 5) {
            return 'Минимальная длина сообщения 5 символов!';
        }
    }
}

function checkTextBox() {
    if(!empty($_POST)) {
        if(strlen($_POST['message']) < 30) {
            return 'Минимальная длина сообщения 30 символов!';
        }
    }
}

?>