<?php
function checkRegularName()
{
    if (!empty($_POST)) {
        if (!preg_match('/^[а-я]{2,}+$/iu', trim($_POST['name']))) {
            return 'Строка с полем для имнеи не соответствует паттерну!';
        }
    }
}

function checkRegularSurName()
{
    if (!empty($_POST)) {
        if (!preg_match('/^[а-я]{2,}+$/iu', trim($_POST['surname']))) {
            return 'Строка с полем для фамили не соответствует паттерну!';
        }
    }
}

function checkRegularPhone()
{
    if (!empty($_POST)) {
        if (!preg_match('/^\+7 \([0-9][0-9][0-9]\) [0-9][0-9][0-9] [0-9][0-9] [0-9][0-9]/', $_POST['phone'])) {
            return 'Строка с полем для телефона не соответствует паттерну!';
        }
    }
}

function checkRegularEmail()
{
    if (!empty($_POST)) {
        if (!preg_match('/^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i', $_POST['email'])) {
            return 'Строка с полем для email не соответствует паттерну!';
        }
    }
}

function checkRegularPassword() {
    if (!empty($_POST)) {
        if (!preg_match(    '/[0-9a-zA-Z!@#$%^&*]{6,}/', $_POST['password'])) {
            return 'Строка с полем для пароля не соответствует паттерну!';
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
?>