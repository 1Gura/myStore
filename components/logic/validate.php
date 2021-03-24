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

?>