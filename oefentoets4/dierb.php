<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dieren</title>
    <style>
        body {
            font-family: verdana;
        }
        .tblA {
            border-collapse: collapse;
        }
        .tblA th, .tblA td {
            border: 1px solid darkgreen;
            padding: 2px 5px;
        }
    </style>
</head>

<h1>Dieren B</h1>
<a href='../index.php' style="font-size: 0.7em;">Terug naar de overzicht</a><br><br>
<table class="tblA">
    <tr>
        <th>soort</th>
        <th>ras</th>
        <th>naam</th>
        <th>gender</th>
        <th>leeftijd</th>
    </tr>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dier";
    include '../update.php'; // is alleen nodig op deze voorbeeld server
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM dier";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
                echo "<td>" . $row["soort"]. "</td>";
                echo "<td>" . $row["ras"]. "</td>";
                echo "<td>" . $row["naam"]. "</td>";
                echo "<td>" . $row["gender"]. "</td>";
                echo "<td>" . $row["leeftijd"]. "</td>";
                echo "</tr>";
        }
    } else {
        echo "0 results";
    }

    mysqli_close($conn);
?>
</table>