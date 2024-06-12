<?php
include("header.html");
$connection = mysqli_connect("127.0.0.1", "root", "", "wprg_pd");
$query = "SELECT * FROM samochody ORDER BY rok DESC";

$queryResult = mysqli_query($connection, $query);

if (mysqli_num_rows($queryResult) > 0) {
    echo "<p>W naszej ofercie są następujące samochody: </p>";
    for ($i = 0; $i < mysqli_num_rows($queryResult); $i++) {
        $row = mysqli_fetch_assoc($queryResult);
        echo '<p>' . $row['marka'] . ' '.$row['model']. ' z roku '
            . $row['rok'].', o cenie '. $row['cena'] . '<p/>';
    }
    mysqli_close($connection);
}
