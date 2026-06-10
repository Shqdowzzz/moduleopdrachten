<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>database</title>
    <style>
        .tbl {
            width: 70%;

        }

        .tbl td, .tbl th {
         
            border:1px solid red;
        }
    </style>
</head>
<body>
    <table class="tbl">
        <tr>
            <th>land naam</th>
            <th>wereld deel code</th> 
            <th>land code</th>
        </tr>
        
        
        

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wereld";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM land ORDER BY landnaam DESC";
$result = mysqli_query($conn, $sql);

// echo "<table>";
// echo "<tr><th>werelddeelcode</th><th>werelddeel</th></tr>";

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    // echo "land: " . $row["landnaam"]. "<br>";
    echo "<tr>
            <td>".$row["landnaam"]."</td>
            <td>".$row["werelddeelcode"]."</td>
            <td>".$row["landcode"]."</td>
        </tr>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>
        </table>
</body>
</html>
