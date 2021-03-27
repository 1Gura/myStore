<?php
function redirect()
{
    header("Location: http://{$_SERVER['DOCUMENT_ROOT']}/{$_SERVER['SERVER_NAME']}/components/feedback.php");
    exit;
}

