<?php

function checkRegularName(): bool
{
    if (!empty($_SESSION)) {
        if (!preg_match('/^[а-я]{2,}+$/iu', trim($_SESSION['name']))) {
            return true;
        }
    }
    return false;

}
function checkRegularSurName(): bool
{
    if (!empty($_SESSION)) {
        if (!preg_match('/^[а-я]{2,}+$/iu', trim($_SESSION['surname']))) {
            return 'Только символы кириллицы!';
        }
    }
    return false;

}

function checkRegularPhone(): bool
{
    if (!empty($_SESSION)) {
        if (!preg_match('/^\+7 \([0-9][0-9][0-9]\) [0-9][0-9][0-9] [0-9][0-9] [0-9][0-9]/', $_SESSION['phone'])) {
            return true;
        }
    }
    return false;
}

function checkRegularEmail(): bool
{
    if (!empty($_SESSION)) {
        if (!preg_match('/^[a-z]([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i', $_SESSION['email'])) {
            return true;
        }
    }
    return false;
}

function checkRegularPassword(): bool
{
    if (!empty($_SESSION)) {
        if (!preg_match(    '/[0-9a-zA-Z!@#$%^&*]{6,}/', $_SESSION['password'])) {
            return true;
        }
    }
    return false;

}
function comparisonOfPasswords(): bool
{
    if (!empty($_SESSION)) {
        if ($_SESSION['password'] !== $_SESSION['password2']) {
            return true;
        }
    }
    return false;
}

function checkSubject(): bool
{
    if(!empty($_SESSION)) {
        if(strlen($_SESSION['subject']) < 5) {
            return true;
        }
    }
    return false;

}

function checkTextBox(): bool
{
    if(!empty($_SESSION)) {
        if(strlen($_SESSION['message']) < 30) {
            return true;
        }
    }
    return false;

}

function success(): bool
{
    foreach ($_SESSION as &$value) {
        $value = '';
    }
    return true;
}


