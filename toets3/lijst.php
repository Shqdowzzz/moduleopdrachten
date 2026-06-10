
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
echo "<tr><th>soort</th><th>ras</th><th>naam</th></tr>";

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row["soort"] . "</td>";
    echo "<td>" . $row["ras"] . "</td>";
    echo "<td>" . $row["naam"] . "</td>";
    echo "</tr>";
  }
} else {
  
}

echo "</table>";

mysqli_close($conn);
?>