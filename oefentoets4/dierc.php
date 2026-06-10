<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css?v=2">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
</head>

<h1>Dieren C</h1>
<!-- <a href='../index.php' style="font-size: 0.7em;">Terug naar de overzicht</a><br><br> -->
<a href='pags/insert.php'>Nieuw dier toevoegen</a><br><br>

<table class="tblA">
    <tr>
        <th>soort</th>
        <th>ras</th>
        <th>naam</th>
        <th>gender</th>
        <th>leeftijd</th>
        <th>foto</th>
    </tr>

<?php
    // include 'db.php';
    $dier = alleDieren();
    
    foreach($dier as $dieren) {
        echo "<tr>";
            echo "<td>" . $dieren["soort"]. "</td>";
            echo "<td>" . $dieren["ras"]. "</td>";
            echo "<td>" . $dieren["naam"]. "</td>";
            echo "<td>" . $dieren["gender"]. "</td>";
            echo "<td>" . $dieren["leeftijd"]. "</td>";
            echo "<td>
                    <img class='img-thumbnail' src='../img/" . $dieren["img"]. "'>
                  </td>";
        echo "</tr>";
    }
?>
</table>    

</body>
</html>