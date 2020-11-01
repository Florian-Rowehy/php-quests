<?php

$allowedExtension = [".jpg", ".png", ".gif"];
$allowedMime = "#image/(jpeg|png|gif)#";
$sizeLimit = 10**6;
$uploadDire = 'uploads/';

$uploadErrors = array();
if (isset($_FILES['files'])) {
    foreach($_FILES['files']['name'] as $index=>$fileName){
        $uploadStatus = $_FILES['files']['error'][$index]; //1 == error
        if ($uploadStatus) {
            $uploadErrors[$fileName] = "Error $fileName: Something went terribly wrong.";
            continue;
        }

        $fileMime = $_FILES['files']['type'][$index];
        $fileMimeMatch = preg_match($allowedMime, $fileMime);
        $fileExtension = strrchr($fileName, '.');

        $tempName = $_FILES['files']['tmp_name'][$index];
        $fileSize = filesize($tempName);

        //analyse l'extension & le Mime
        if (!$fileMimeMatch || !in_array($fileExtension, $allowedExtension)) {
            $uploadErrors[$fileName] = "Error $fileName: The file should be an image. Only jpg, png, gif formats are allowed.";
        } elseif ($fileSize > $sizeLimit) {
            $uploadErrors[$fileName] = "Error $fileName: The file size should less than 1Mo. File size = ".round($fileSize/$sizeLimit, 2)."Mo.";
        }

        if (!isset($uploadErrors[$fileName])) {
            $hashId = md5(uniqid( "".rand().time(), true));
            move_uploaded_file($tempName, $uploadDire.$hashId.$fileExtension);
        }

    }
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["delete-file"])) {
    $fileName = cleanInput($_POST["delete-file"]);
    if ($fileName !== "") unlink(__DIR__.'/uploads/'.$fileName);
}


$uploadedFiles = new FilesystemIterator(__DIR__ . '/uploads');

require_once __DIR__ . '/form.php';

function getFileName(string $path): string
{
    return substr(strrchr($path, '/'), 1);
}

function cleanInput(string $str): string
{
    $str = stripslashes($str);
    $str = htmlspecialchars($str);
    $str = trim($str);
    return $str;
}
