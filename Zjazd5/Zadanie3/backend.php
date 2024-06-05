<?php
session_start();
if(!isset($_COOKIE['Visited'])) {
    setcookie("Visited", "yes", 0);
    if (file_exists("./licznik.txt")) {
        $line = file("./licznik.txt");
        $exploded_array = explode("=", $line[0]);
        $token = fopen("./licznik.txt", "w+");
        fwrite($token, "licznik=" . ($exploded_array[1] + 1));
    } else {
        $token = fopen("./licznik.txt", "w+");
        fwrite($token, "licznik=1");
    }
    fclose($token);
} else {
    echo "Nie można zwiększyć licznika więcej niż raz w trakcie jednej sesji.";
}

