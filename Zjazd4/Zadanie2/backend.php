<?php

if (file_exists("./licznik.txt")) {
    $line = file("./licznik.txt");
    $exploded_array = explode( "=", $line[0]);
    $token = fopen("./licznik.txt", "w+");
    fwrite($token, "licznik=".($exploded_array[1] + 1));
} else {
    $token = fopen("./licznik.txt", "w+");
    fwrite($token, "licznik=1");
}
fclose($token);


