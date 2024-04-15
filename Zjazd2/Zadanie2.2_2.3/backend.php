<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formularz rezerwacyjny</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php
    echo "<form action='final.php' method='post'>";
    echo "<fieldset style='display: inline-block'>";
    echo "<legend>Formularz rezerwacyjny</legend>";
    echo "<div style='display: inline-flex; gap: 5px; margin-bottom: 10px'>";

    echo "<fieldset class='block'>";
    echo "<legend>Rezerwujący</legend>";
    echo "<label for='name'>Imie:";
    echo "<input type='text' name='name' id='name' required>";
    echo "</label>";
    echo "<label for='surname'>Nazwisko:";
    echo "<input type='text' name='surname' id='surname' required>";
    echo "</label>";
    echo "<label for='email'>Adres email:";
    echo "<input type='email' name='email' id='email' required>";
    echo "</label>";
    echo "<label for='cardID'>Numer karty:";
    echo "<input type='text' name='cardID' id='cardID' minlength='15' maxlength='16' required>";
    echo "</label>";
    echo "<label for='cardExpDate'>Termin wygaśnięcia:";
    echo "<input type='date' name='cardExpDate' id='cardExpDate' required>";
    echo "</label>";
    echo "<label for='CVV'>Kod CVV:";
    echo "<input type='number' name='CVV' id='CVV' min='100' max='999' required>";
    echo "</label>";
    echo "<label for='arrival'>Data zakwaterowania:";
    echo "<input type='datetime-local' name='arrival' id='arrival' required>";
    echo "</label>";
    echo "<label for='departure'>Data wykwaterowania:";
    echo "<input type='datetime-local' name='departure' id='departure' required>";
    echo "</label>";
    echo "<label>Klimatyzacja";
    echo "<input type='checkbox' name='dodatki[]' value='Klimatyzacja'>";
    echo "</label>";
    echo "<label>Popielniczka dla palaczy";
    echo "<input type='checkbox' name='dodatki[]' value='Popielniczka'>";
    echo "</label>";
    echo "<label>Zimne napoje w lodówce";
    echo "<input type='checkbox' name='dodatki[]' value='Zimne napoje'>";
    echo "</label>";
    echo "<label>Sprzątanie pokoju";
    echo "<input type='checkbox' name='dodatki[]' value='Usługa sprzątania'>";
    echo "</label>";
    echo "<label>Łóżeczko dla dziecka";
    echo "<input type='checkbox' name='dodatki[]' value='Łóżeczko dziecięce'>";
    echo "</label>";
    echo "<input type='hidden' id='guests' name='guestNumber' value='$_POST[select]'>";
    echo "</fieldset>";

    for($i = 1; $i <= (int) $_POST['select']; $i++) {
        echo "<fieldset>";
        echo "<legend>Formularz gościa $i</legend>";
        echo "<p style='margin-right: 5px'>Imie: <input style='float: right' type='text' name='imie$i' placeholder='Wprowadz imie' required></p>";
        echo "<p style='margin-right: 5px'>Nazwisko: <input style='float: right' type='text' name='nazwisko$i' placeholder='Wprowadz nazwisko' required></p>";
        echo "<p style='margin-right: 5px'>Email:<input style='float: right' type='email' name='email$i' placeholder='Wprowadz email' required></p>";
        echo "</fieldset>";
    }

    echo "</div>";
    echo "<button type='submit' style='display: block; margin: auto; width: 100%;'>Wyślij</button>";
    echo "</fieldset>";
    echo "</form>";
?>
</body>
</html>