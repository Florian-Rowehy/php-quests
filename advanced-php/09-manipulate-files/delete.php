<?php

if ($_SERVER['REQUEST_METHOD']==='POST') {
    $path = $_POST['path']?? '';
    var_dump($path);
    if(!empty($path)&&file_exists($path)){
        if(is_dir($path)) {
            deleteDirectory($path);
        } else {
            unlink($path);
        }
    }
}

function deleteDirectory($dir) {
    if (!file_exists($dir)) {
        return true;
    }

    if (!is_dir($dir)) {
        return unlink($dir);
    }

    foreach (scandir($dir) as $item) {
        if ($item == '.' || $item == '..') {
            continue;
        }

        if (!deleteDirectory($dir . DIRECTORY_SEPARATOR . $item)) {
            return false;
        }

    }

    return rmdir($dir);
}

header('Location: /');