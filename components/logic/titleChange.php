<?php
function titleChange($namePage = '')
{
    return strlen($namePage) === 0 ? $_SESSION['pages']['0']['name'] : $namePage;
}


