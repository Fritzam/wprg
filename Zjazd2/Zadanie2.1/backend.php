<?php
$first_value = $_GET['wartosc1'];
$second_value = $_GET['wartosc2'];
$znak = $_GET['znak'];

assessTheResult($first_value, $second_value, $znak);

function assessTheResult($first_value, $second_value, $znak) {
    $result = 0;
    switch ($znak) {
        case '+':
            $result = addition($first_value, $second_value);
            break;
        case '-':
            $result = subtraction($first_value, $second_value);
            break;
        case '*':
            $result = multiplication($first_value, $second_value);
            break;
        case '/':
            if (check0InDivision($first_value, $second_value, $znak)) {
                $result = "Błąd. Nie można dzielić przez 0";
                break;
            } else {
                $result = division($first_value, $second_value);
                break;
            }
    }

    echo "Wynikiem jest: $result";

}
function addition($first_value, $second_value) {
    return $first_value + $second_value;
}

function subtraction($first_value, $second_value) {
    return $first_value - $second_value;
}

function multiplication($first_value, $second_value) {
    return $first_value * $second_value;
}

function division($first_value, $second_value) {
    return $first_value / $second_value;
}

function check0InDivision($first_value, $second_value, $znak)
{
    if ($znak == '/') {
        if (floatval($first_value) == 0 || floatval($second_value) == 0) {
            return true;
        }
    }
    return false;
}

