<?php
    session_start();
// print_r($_SESSION);
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ski_materials";

    // Connectie maken
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<!-- <h1>Nick</h1> -->
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="syle.css?v=2">

</head>
<body>

     <nav>
      <div class="buttons"><a href="index.php?page=huis">Home</a></div>
      <div><a href="index.php?page=ski">Ski-materials</a></div>
      <div class="buttons"><a href="index.php?page=login">inloggen</a></div>
    </nav>

  <div id="container">

  <main id="main">
    <section class="content">
 <?php 

        
        if(isset($_GET["page"])) {
            include "pags/".$_GET['page'].".php";
        } 
        ?>

</body>
<?php

$sql = "SELECT * FROM ski_materials ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

echo "<table border='1'>";
echo "<tr>
        <th>ID</th>
        <th>Name</th>
        <th>Type</th>
        <th>Price</th>
        <th>Materials</th>
        // <th>Image</th>
        <th>
            <a href='index.php?page=toevoegen'>
                toevoegen<i class='fa fa-plus'></i>
            </a>
        </th>
      </tr>";

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["type"] . "</td>";
        echo "<td>" . $row["price"] . "</td>";
        echo "<td>" . $row["materials"] . "</td>";
        // echo "<td><img src='img/" . $row["img"] . "' alt='Foto van " . $row["naam"] . "' width='100'></td>";

        echo "<td><a href='index.php?page=delet&id=" . $row["id"] . "'><i class=''></i></a></td>";
        // echo "<td><a href='index.php?page=toevoegen'><i class='fa fa-plus'></i></a></td>";
        echo "<td>
        <a href='index.php?page=delete&id=" . $row["id"] . "'>
            delete<i class='fa fa-trash'></i>
        </a>
      </td>";
      echo "<td><a href='index.php?page=bewerk&id=" . $row["id"] . "'>bewerk<i class='fa fa-pencil'></i></a></td>";

        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='7'>fout</td></tr>";
}

echo "</table>";

mysqli_close($conn);
?>


</html>