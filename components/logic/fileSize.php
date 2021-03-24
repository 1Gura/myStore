<?php

function getRes($path = '')
{
    $res = getFilesSize($path);
    return $res > 0 ? "${res} байт" : "Путь неверный!";
}

function getFilesSize($path = '')
{
    $root = $_SERVER['DOCUMENT_ROOT'];
    $fullPath = $root . $path;
    if (file_exists($fullPath)) {
        if (strlen($fullPath) > 0) {
            $fileSize = 0;
            $dir = scandir($fullPath);
            foreach ($dir as $file) {
                if (($file != '.') && ($file != '..'))
                    if (is_dir($fullPath . '/' . $file))
                        /*Файл в данном случае будет являться директорией*/
                        $fileSize += getFilesSize($path . '/' . $file);
                    else
                        $fileSize += filesize($fullPath . '/' . $file);
            }
            return $fileSize;
        }
    }
}

?>