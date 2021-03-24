<?php
function getFilesSize($path = '')
{
  $root = $_SERVER['DOCUMENT_ROOT'];
  $fullPath = $root . $path;
  if(strlen($fullPath) > 0) {
    $fileSize = 0;
    $dir = scandir($fullPath);
    foreach($dir as $file)
    {
        if (($file!='.') && ($file!='..'))
            if(is_dir($fullPath . '/' . $file))
                $fileSize += getFilesSize($fullPath.'/'.$file);
            else
                $fileSize += filesize($fullPath . '/' . $file);
    }
    return $fileSize . ' байт';
  }
}
?>