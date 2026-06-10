<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dieren</title>
</head>

<body>
    <h1>Dieren A</h1>
    <a href='../index.php' style="font-size: 0.7em;">Terug naar de overzicht</a><br><br>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dier";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM dier";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo $row["soort"]. ", ";
            echo $row["ras"]. ", ";
            echo $row["naam"]. ", ";
            echo $row["gender"]. ", ";
            echo $row["leeftijd"]. "<br>";  
        }
    } else {
        echo "Geen dieren gevonden";
    }

    mysqli_close($conn);
?>
</body>
</html> 