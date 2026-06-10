<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dieren</title>
    <link rel="stylesheet" href="style.css?v=2">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<nav>
  <!-- <div class="buttons">
      <div><a href="insert.php">Dieren toevoegen</a></div> -->
  </div>
</nav>


<!-- <td><img src='img/" . $row["img"] . "'></td> -->


<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dieren";

// Connectie maken
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

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
        echo "<td><img src='img/img/" . $row["img"] . "' alt='Foto van " . $row["naam"] . "' width='100'></td>";
        // echo "<td><a href='delete.php?id=". $row["id"] . "'> <i class=\"fa fa-trash\"></ style=/i></a></td>";
        // echo "<td><a href='toevoegen.php?id=". $row["id"] . "'> <i class=\"fa fa-spinner fa-spin fa-3x fa-fw\"></ style=/i></a></td>";
        
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