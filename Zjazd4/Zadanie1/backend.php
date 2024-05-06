<?php
$file = $_GET['file'];
$array = file($file, FILE_IGNORE_NEW_LINES);

$token = fopen($file, "w+");

if ($token) {
    for ($i = count($array) - 1; $i > 0; $i--) {
        fwrite($token, $array[$i] . "\n");
    }
    fwrite($token, $array[0]);
    echo "Successfully reworked Your file!";
} else {
    echo "Unable to open file.";
}
fclose($token);

