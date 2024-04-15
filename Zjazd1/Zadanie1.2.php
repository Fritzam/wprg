<?php
$max_val = 1000;
$primes = ('Liczby pierwsze to: 2 ');
for ($i = 3; $i <= $max_val; $i++) {
    $prime = true;
    for ($j = 2; $j < $i; $j++) {
        if ($i % $j == 0) {
            $prime = false;
            break;
        }
    }
    if ($prime) {
        $primes .=", $i";
    }
}
echo ($primes);