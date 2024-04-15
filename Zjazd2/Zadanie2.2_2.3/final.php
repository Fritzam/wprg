<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formularz rezerwacyjny</title>
    <link rel="stylesheet" href="final.css">
</head>
<body>
<?php
    echo "<fieldset style='display: inline-block'>";
        echo "<legend>Podsumowanie rezerwacji</legend>";
        echo "<div style='display: flex>";
            echo "<div class='div_flex'>";
                echo "<fieldset>";
                echo "<legend>Dane na fakturze</legend>";
                    echo "<p>Ilość osób:<span>" . $_POST['guestNumber'] . "</span></p>";
                    echo "<p>Imie:<span>" . $_POST['name']. "</span></p>";
                    echo "<p>Nazwisko:<span>" . $_POST['surname']. "</span></p>";
                    echo "<p>Adres email:<span>" . $_POST['email'] . "</span></p>";
                    echo "<p>Termin zakwaterowania:<span>" . parseDate($_POST['arrival']) . "</span></p>";
                    echo "<p>Termin wykwaterowania:<span>" . parseDate($_POST['departure']) . "</span></p>";
                    if (isset($_POST['dodatki'])) {
                    echo "<p>Wybrane opcje dodatkowe:</p><br>";
                        for ($i = 0; $i < sizeof($_POST['dodatki']); $i++) {
                            echo "<p>" .$_POST['dodatki'][$i] . "</p>";
                        }
                    } else {
                        echo "<p>Nie wybrano opcji dodatkowych</p>";
                    }
                echo "</fieldset>";
            echo "</div>";
            for ($i = 1; $i <= (int) $_POST['guestNumber']; $i++) {
                echo "<div class='div_flex'>";
                    echo "<fieldset class='fieldset'>";
                    echo "<legend>Dane gościa $i</legend>";
                    echo "<p>Imie: <span>" . $_POST["imie$i"] ."</span></p>";
                    echo "<p>Nazwisko: <span>" . $_POST["nazwisko$i"]. "</span></p>";
                    echo "<p>Adres email: <span>" . $_POST["email$i"]. "</span>";
                    echo "<p style='position: relative; padding-top: 30px; margin: auto'>Dziękujemy za rezerwację!</p>";
                    echo "</fieldset>";
                echo "</div>";
            }
        echo "</div>";
    echo "</fieldset>";

function parseDate($date) {
    $separatedDate = explode('T', $date);
    $calendarDate = $separatedDate[0];
    $dateParts = explode('-', $calendarDate);
    $reversedDateParts = array_reverse($dateParts);
    return implode('-', $reversedDateParts) . " " .$separatedDate[1];
} ?>

</body>