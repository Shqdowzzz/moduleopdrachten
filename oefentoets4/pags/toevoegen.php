<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      
</body>
</html>

<h1>Dier toevoegen</h1>

<form method="post">
    Soort: <input type="text" name="soort"><br>
    Ras: <input type="text" name="ras"><br>
    Naam: <input type="text" name="naam"><br>

    Gender:
    <input type="radio" name="gender" value="mannelijk"> Mannelijk
    <input type="radio" name="gender" value="vrouwelijk"> Vrouwelijk<br>
    Leeftijd: <input type="text" name="leeftijd"><br>


    <input type="submit" value="Toevoegen">
</form>
<hr>

<?php
$con = mysqli_connect("localhost", "root", "", "dieren");

if (!$con) {
    die("Database fout");
}

if (isset($_POST['soort'])) {

    $soort = $_POST['soort'];
    $ras = $_POST['ras'];
    $naam = $_POST['naam'];
    $gender = $_POST['gender'];
    $leeftijd = $_POST['leeftijd'];

    $sql = "INSERT INTO dieren (soort, ras, naam, gender, leeftijd)
            VALUES ('$soort', '$ras', '$naam', '$gender', '$leeftijd')";

    mysqli_query($con, $sql);

    echo "Dier toegevoegd ✅";
}
?>