<?php

$N = 144;
$Fibonacci[] = 1;
$Fibonacci[] = 1;


while($Fibonacci[count($Fibonacci) - 1] < $N) {
    $Fibonacci[] = $Fibonacci[count($Fibonacci) - 1] + $Fibonacci[count($Fibonacci) - 2];
}
$result = "Wszystkie nieparzyste elementy ciągu poprzedzające $N to: ";
$lineCounter = 1;
for ($i = 0; $i < count($Fibonacci) - 1; $i++) {
 if ($Fibonacci[$i] % 2) {
     echo("$lineCounter. $Fibonacci[$i]<br>");
     $lineCounter += 1;
 }
}
