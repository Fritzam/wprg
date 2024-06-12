<?php

include("header.html");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dodaj samochód</title>
</head>
<body>
<form action="dodaj_samochod.php" method="post">
    <fieldset>
        <legend>Proszę dodać samochód</legend>
        <label for="marka">Marka: </label>
        <br>
        <input type="text" name="marka" id="marka" required>
        <br>
        <label for="model">Model: </label>
        <br>
        <input type="text" name="model" id="model" required>
        <br>
        <label for="rok">Rok</label>
        <br>
        <input type="number" name="rok" id="rok" required>
        <br>
        <label for="opis">Opis</label>
        <br>
        <input type="text" name="opis" id="opis" required>
        <br>
        <label for="cena">Cena</label>
        <br>
        <input type="number" name="cena" id="cena" required>
        <br>
        <button type="submit">Wyslij</button>
    </fieldset>
</form>
</body>
</html>