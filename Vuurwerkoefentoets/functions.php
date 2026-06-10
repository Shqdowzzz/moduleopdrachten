/functions/db.php
<?php

function getConnection() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "vuurwerk";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Database connectiefout: " . mysqli_connect_error());
    }

    return $conn;
}
?>

huis.php
<?php
include "functions/db.php";
$conn = getConnection();

$sql = "SELECT * FROM vuurwerk ORDER BY vuurwerkartikel DESC";
$result = mysqli_query($conn, $sql);

echo "<table class='tableA'>";
echo "<tr><th>Vuurwerkartikel</th><th>Land</th></tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row["vuurwerkartikel"] . "</td>";
    echo "<td>" . $row["land"] . "</td>";
    echo "</tr>";
}

echo "</table>";

mysqli_close($conn);
?>

insert.php
<?php
include "functions/db.php";
$conn = getConnection();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $vuurwerk = mysqli_real_escape_string($conn, $_POST['vuurwerkartikel']);
    $land = mysqli_real_escape_string($conn, $_POST['land']);

    $sql = "INSERT INTO vuurwerk (vuurwerkartikel, land)
            VALUES ('$vuurwerk', '$land')";

    mysqli_query($conn, $sql);

    header("Location: index.php");
    exit;
}
?>

<h1>Vuurwerkartikel toevoegen</h1>

<form method="post">
    <label>Vuurwerkartikel: </label>
    <input type="text" name="vuurwerkartikel"><br>

    <label>Land: </label>
    <input type="text" name="land"><br>

    <input type="submit">
</form>