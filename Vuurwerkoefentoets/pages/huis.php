
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vuurwerk";

// Connectie maken
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connectie
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM vuurwerk ORDER BY vuurwerkartikel DESC";
$result = mysqli_query($conn, $sql);

echo "<table class='tableA'>";
echo "<tr><th>Vuurwerkartikel</th><th>Land</th></tr>";

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row["vuurwerkartikel"] . "</td>";
    echo "<td>" . $row["land"] . "</td>";
    echo "</tr>";
  }
} else {
  
}

echo "</table>";

mysqli_close($conn);
?>