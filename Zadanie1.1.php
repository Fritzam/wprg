<?php
    $owoce[0] = 'jablko';
    $owoce[1] = 'mandarynka';
    $owoce[2] = 'winogrona';
    $owoce[3] = 'gruszka';
    $owoce[4] = 'wisnie';
    $owoce[5] = 'porzeczki';

    for ($i = 0; $i < 6; $i++) {
        $word = '';
        for ($j = strlen($owoce[$i]); $j >= 0; $j--) {
            $word .= substr($owoce[$i], $j, 1);
        }
        echo ("Owoc: $owoce[$i] - $word<br>");
    }