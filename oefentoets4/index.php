<?php
    session_start();
// print_r($_SESSION);
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dieren";

    // Connectie maken
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }



?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dieren</title>
    <link rel="stylesheet" href="syle.css?v=2">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<nav>
      <div class="buttons"><a href="index.php?page=login">inloggen</a></div>
    </nav>

    <div id="container">

  <main id="main">
    <section class="content">

    <?php 

        
        if(isset($_GET["page"])) {
            include "pags/".$_GET['page'].".php";
        } else 
        {
            include 'pags/home.php';
        }
        
        ?>
   



<body>

<?php

$sql = "SELECT * FROM dieren ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

echo "<table border='1'>";
echo "<tr>
        <th>ID</th>
        <th>Soort</th>
        <th>Ras</th>
        <th>Naam</th>
        <th>Gender</th>
        <th>Leeftijd</th>
        <th>Foto</th>
        <th>
            // <a href='index.php?page=toevoegen'>
            //     <i class='fa fa-plus'></i>
            </a>
        </th>
      </tr>";

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["soort"] . "</td>";
        echo "<td>" . $row["ras"] . "</td>";
        echo "<td>" . $row["naam"] . "</td>";
        echo "<td>" . $row["gender"] . "</td>";
        echo "<td>" . $row["leeftijd"] . "</td>";
        echo "<td><img src='img/" . $row["img"] . "' alt='Foto van " . $row["naam"] . "' width='100'></td>";

        echo "<td><a href='index.php?page=delete&id=" . $row["id"] . "'>A<i class='fa fa-trash'></i></a></td>";
        // echo "<td><a href='index.php?page=toevoegen'><i class='fa fa-plus'></i></a></td>";
        echo "<td>
        <a href='index.php?page=show&id=" . $row["id"] . "'>
            A<i class='fa fa-eye'></i>
        </a>
      </td>";
      echo "<td><a href='index.php?page=bewerk&id=" . $row["id"] . "'>A<i class='fa fa-pencil'></i></a></td>";

        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='7'>Geen dieren gevonden</td></tr>";
}

echo "</table>";

mysqli_close($conn);
?>
</body>
</html>