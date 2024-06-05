<?php
if (!isset($_COOKIE['numberOfVisits'])) {
    setcookie("numberOfVisits", 1, time()+60*5);
}
if ($_COOKIE['numberOfVisits'] >= 5) {
    $visits = $_COOKIE['numberOfVisits'];
    setcookie("numberOfVisits", 1, time()+60*5);
    echo "Gratuluje, to Twoja " . $visits . " wizyta!<br>Dziękuję za odwiedziny! :)";
} else {
    setcookie("numberOfVisits", ++$_COOKIE['numberOfVisits'], time()+60*5);
    echo "Wizyta numer " . ($_COOKIE['numberOfVisits'] - 1);
}


