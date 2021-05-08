<?php

function checkRegularName($name): bool
{
    if (!empty($name)) {
        if (!preg_match('/^[а-я]{2,}+$/iu', trim($name))) {
            return true;
        }
    }
    return false;

}

function checkRegularSurName($surname): bool
{
    if (!empty($surname)) {
        if (!preg_match('/^[а-я]{2,}+$/iu', trim($surname))) {
            return 'Только символы кириллицы!';
        }
    }
    return false;

}

function checkRegularPhone($phone): bool
{
    if (!empty($phone)) {
        if (!preg_match('/^\+7 \([0-9][0-9][0-9]\) [0-9][0-9][0-9] [0-9][0-9] [0-9][0-9]/', $phone)) {
            return true;
        }
    }
    return false;
}

function checkRegularEmail($email): bool
{
    if (!empty($email)) {
        if (!preg_match('/^[a-z]([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i', $email)) {
            return true;
        }
    }
    return false;
}

function checkRegularPassword($password): bool
{
    if (!empty($password)) {
        if (!preg_match('/[0-9a-zA-Z!@#$%^&*]{6,}/', $password)) {
            return true;
        }
    }
    return false;

}

function comparisonOfPasswords($password, $password2): bool
{
    if (!empty($password) && !empty($password2)) {
        if ($password !== $password2) {
            return true;
        }
    }
    return false;
}

function checkSubject(): bool
{
    if (!empty($_SESSION)) {
        if (strlen($_SESSION['subject']) < 5) {
            return true;
        }
    }
    return false;

}

function checkTextBox(): bool
{
    if (!empty($_SESSION)) {
        if (strlen($_SESSION['message']) < 30) {
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


