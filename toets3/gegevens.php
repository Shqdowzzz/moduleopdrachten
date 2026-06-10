<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="style.css?v=2">

</head>
<body>
  

</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dieren";

// Connectie maken
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connectie
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM dieren ORDER BY ras DESC";
$result = mysqli_query($conn, $sql);

echo "<table class='tableA'>";
echo "<tr><th>soort</th><th>ras</th><th>naam</th><th>gender</th><th>leeftijd</th><th>foto's</th></tr>";

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row["soort"] . "</td>";
    echo "<td>" . $row["ras"] . "</td>";
    echo "<td>" . $row["naam"] . "</td>";
    echo "<td>" . $row["gender"] . "</td>";
    echo "<td>" . $row["leeftijd"] . "</td>";
    echo "<td>" . $row["img"] . "</td>";
    echo "</tr>";
  }
} else {
  
}

echo "</table>";

mysqli_close($conn);
?>
</body>