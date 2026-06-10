<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      
</body>
</html>
<h1>Vuurwerkartikel toevoegen</h1>

<form method="post">
    <label for="vuurwerkartikel">Vuurwerkartikel: </label> <input type="text" id="vuurwerkartikel" name="vuurwerkartikel"><br>
    <label for="land">Land: </label> <input type="text" id="land" name= "land"><br>
<input type="submit">
</form>
<hr>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vuurwerk";

if(isset($_POST['vuurwerkartikel']) && isset($_POST['land']))
{



$con = mysqli_connect($servername, $username, $password, $dbname);
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

$vuurwerk = mysqli_real_escape_string($con, $_POST['vuurwerkartikel']);
$land = mysqli_real_escape_string($con, $_POST['land']);
    
$sql = "INSERT INTO `vuurwerk` (`vuurwerkartikel`, `land`) 
VALUES ('$vuurwerk', '$land')";

mysqli_query($con, $sql);

header("location: index.php");

}
else 
{
    echo "Vul gegevens eerst in en druk dan op verzenden";
}

?>