<?php
include('inc/head.php');

if ($_SERVER['REQUEST_METHOD']==='POST') {
    $path = $_POST['path']?? '';
    $path = cleanInput($path);
    $fileContent = $_POST['file-content']?? '';
    if(!empty($path)&&!empty($fileContent)&&file_exists($path)){
        $file = fopen($path, 'w');
        fwrite($file, $fileContent);
        fclose($file);
    }
}

echo printDir('files');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $path = $_GET['path']?? '';
    $path = cleanInput($path);
    if(!empty($path)){
        $fileContent = file_get_contents($path);
        include '_edit-form.php';
    }
}

include('inc/foot.php');

function printDir( string $path): string
{
    $dir = opendir($path);
    $display = '<ul>';

    while (($nextElement = readdir($dir))){
        if ($nextElement === '.' || $nextElement === '..')
            continue;
        $fullPath = $path.'/'.$nextElement;

        //directory
        if (is_dir($path.'/'.$nextElement)) {
            $display.= "<li>";
            $display.= strtoupper($nextElement).'/';
            $display.= createDeleteForm($fullPath);
            $display.= printDir($fullPath);

        //file
        } else {
            $display.= "<li style='color: yellow'>";
            $extension = strrchr($nextElement, '.');

            //writable
            if ($extension === '.html' || $extension === '.txt') {
                $display.='<a href="?path='.$fullPath.'">'.$nextElement.'</a>';
                $display.= createDeleteForm($fullPath);

            //not writable
            } else {
                $display.= $nextElement;
                $display.= createDeleteForm($fullPath);
            }
        }
        $display.= "</li>";
    }

    $display.= '</ul>';
    closedir($dir);
    return $display;
}

function createDeleteForm($path): string
{
    return <<<EOL
<form method="post" action="delete.php" style="width: 100%; display: inline">
    <input type="hidden" name="path" value="$path">
    <button style="background-color: grey; color: white">Delete</button>
</form>
EOL;
}

function cleanInput(string $str): string
{
    $str = htmlspecialchars($str);
    $str = trim($str);
    return $str;
}