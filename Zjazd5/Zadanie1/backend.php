<?php
echo "<form method='post' action='final.php'>"; // Start form here

for($i = 1; $i <= (int) $_POST['select']; $i++) {
    echo "<fieldset>";
    echo "<legend>Formularz gościa $i</legend>";
    echo "<p style='margin-right: 5px'>Imie: <input style='float: right' type='text' name='imie$i' placeholder='Wprowadz imie' required></p>";
    echo "<p style='margin-right: 5px'>Nazwisko: <input style='float: right' type='text' name='nazwisko$i' placeholder='Wprowadz nazwisko' required></p>";
    echo "<p style='margin-right: 5px'>Email:<input style='float: right' type='email' name='email$i' placeholder='Wprowadz email' required></p>";
    echo "</fieldset>";
}

echo "<button type='submit' style='display: block; margin: auto; width: 100%;'>Wyślij</button>";
echo "</form>"; // Close form here