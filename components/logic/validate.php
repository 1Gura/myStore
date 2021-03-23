<?php
function checkRegularName()
{
    if (!empty($_POST)) {
        if (!preg_match('/^[a-z]/', $_POST['name'])) {
            return 'Строка с полем для имнеи не соответствует паттерну!';
        }
    }
}

?>