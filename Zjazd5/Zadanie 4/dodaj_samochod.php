<?php
    $connection = mysqli_connect("127.0.0.1", "root", "", "wprg_pd");
    $marka = $_POST['marka'];
    $model = $_POST['model'];
    $rok = $_POST['rok'];
    $cena = $_POST['cena'];
    $opis = $_POST['opis'];
    $query = mysqli_query($connection, "INSERT INTO samochody (marka, model, cena, rok, opis) VALUES ('$marka', '$model', $cena, $rok, '$opis')");
    echo "<p>Dziękujemy za dodanie ogłoszenia!</p>";
    echo "<br>";
    echo "<a href='index.php'>Powrot do strony glownej</a>";
    mysqli_close($connection);
