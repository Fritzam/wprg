<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zjazd 5 Zadanie 4</title>
</head>
<body>
<?php
    include "header.html";
    echo "<p>Aktualnie najtanszymi autami w naszym asortymencie sa: </p>";
    $connect = mysqli_connect("127.0.0.1", "root", "", "wprg_pd");
    $query = mysqli_query($connect,"SELECT * from samochody ORDER BY cena asc LIMIT 5");
    for ($i = 0; $i < mysqli_num_rows($query); $i++) {
        $row = mysqli_fetch_assoc($query);
        echo "<p><a href='inwentarz.php'>" . $row['id'] . "</a>" . ". " . $row['marka'] . " " . $row['model']
            . ", rocznik: " . $row['rok'] . ", cena: " . $row['cena'] . "</p><hr>";
    }
    mysqli_close($connect);
?>
</body>
</html>
