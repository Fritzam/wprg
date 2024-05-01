<?php
$element = 30;
function Fibonacci($element) {
    $array[0] = 1;
    $array[1] = 1;
    for ($i = 2; $i < $element; $i++) {
        $array[$i] = $array[$i - 1] + $array[$i - 2];
    }
    return $array[$element - 1];
}



$time1 = microtime(true);
echo $element. " element ciągu Fibonacciego to: " . Fibonacci($element) . "<br>";
$time1end = microtime(true);
$duration = $time1end - $time1;
echo "Czas trwania zwykłej funkcji to: " . number_format($duration, 6) . "<br>";
function recurrentFibonacci($element) {
    if ($element <= 1) {
        return $element;
    }
    return recurrentFibonacci($element - 1) + recurrentFibonacci($element - 2);
}

$element = 30;
$time1 = microtime(true);
echo $element. " element ciągu Fibonacciego to: " . recurrentFibonacci($element);
$time1end = microtime(true);
$duration2 = $time1end - $time1;
echo "<br>Czas trwania funkcji rekurencyjnej to: " . number_format($duration, 6) . "<br>";
assessTime($duration, $duration2);

function assessTime($duration1, $duration2) {
    if ($duration1 < $duration2) {
        echo "Podejscie iteracyjne było " . round(($duration2/$duration1), 0) . " razy szybsze.<br>";
    }
    else if ($duration2 < $duration1) {
        echo "Podejscie rekurencyjne było " . round(($duration1/$duration2), 0) . " razy szybsze.<br>";
    }
    else if ($duration2 == $duration1) {
        echo "Podejscia są jednakowo szybkie. <br>";
    }
}