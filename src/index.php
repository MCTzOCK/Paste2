<?php
/* Include Config */
include 'config.php';

if(!isset($_POST['upload_text'])){
    echo file_get_contents('main.html');
}else {
    $text = base64_decode($_POST['upload_text']);
    if(strlen($text) > $maxLetterCount) {
        die("Error, your text is too long!");
    }
    $file = getRandomString(16);
    file_put_contents($baseDirectory . "/" . $file, $text);
    echo "Your URL is <a href='$baseUrl$file'>$baseUrl$file</a>";
}

function getRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}