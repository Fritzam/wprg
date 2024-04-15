<?php

$string = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
galley of type and scrambled it to make a type specimen book. It has survived not only five
centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
and more recently with desktop publishing software like Aldus PageMaker including versions of
Lorem Ipsum.";
$array = explode(" ", $string);

for ($i = 0; $i < count($array); $i++) {
    for ($k = 0; $k < strlen($array[$i]); $k++) {
        if ($array[$i][$k] == "." || $array[$i][$k] == ',') {
            for ($j = $i; $j < count($array) - 1; $j++) {
                $array[$i] = $array[$i + 1];
            }
        }
    }
}

$hashtable = [];
for ($i = 0; $i < count($array) - 1; $i+=2) {
    $hashtable[$array[$i]] = $array[$i+1];
}

foreach($hashtable as $klucz => $wartosc) {
    echo ("Klucz to: $klucz; wartosc to: $wartosc<br>");
}