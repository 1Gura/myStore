<?php
function checkRegularName()
{
    if (!empty($_POST)) {
        if (!preg_match('/^[а-я]{2,}+$/iu', $_POST['name'])) {
            return 'Строка с полем для имнеи не соответствует паттерну!';
        }
    }
}

function checkRegularSurName()
{
    if (!empty($_POST)) {
        if (!preg_match('/^[а-я]{2,}+$/iu', $_POST['surname'])) {
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
?>