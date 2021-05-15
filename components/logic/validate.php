<?php

function checkRegularName($name): bool
{
    if (isset($name)) {
        if (!preg_match('/^[а-я]{2,}+$/iu', trim($name))) {
            return true;
        }
    }
    return false;
}

function checkRegularSurName($surname): bool
{
    if (isset($surname)) {
        if (!preg_match('/^[а-я]{2,}+$/iu', trim($surname))) {
            return 'Только символы кириллицы!';
        }
    }
    return false;

}

function checkRegularPhone($phone): bool
{
    if (isset($phone)) {
        if (!preg_match('/^\+7 \([0-9][0-9][0-9]\) [0-9][0-9][0-9] [0-9][0-9] [0-9][0-9]/', $phone)) {
            return true;
        }
    }
    return false;
}

function checkRegularEmail($email): bool
{
    if (isset($email)) {
        if (!preg_match('/^[a-z]([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i', $email)) {
            return true;
        }
    }
    return false;
}

function checkRegularPassword($password): bool
{
    if (isset($password)) {
        if (!preg_match('/[0-9a-zA-Z!@#$%^&*]{6,}/', $password)) {
            return true;
        }
    }
    return false;

}

function comparisonOfPasswords($password, $password2): bool
{
    if ($password !== $password2) {
        return true;
    }

    return false;
}

function checkSubject($subject): bool
{
    if (isset($subject)) {
        if (strlen($subject) < 5) {
            return true;
        }
    }
    return false;

}

function checkTextBox($message): bool
{
    if (isset($message)) {
        if (strlen($message) < 30) {
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

function checkNumber($text) {
    if(strlen($text) > 0 && is_numeric($text)) {
        return false;
    } else {
        return true;
    }
}

function check($text) {
    if(strlen($text) > 0) {
        return false;
    } else {
        return true;
    }
}


