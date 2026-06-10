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
<h1>dieren toevoegen</h1>

<form method="post">
    <label for="soort">Soort: </label> <input type="text" id="soort" name="soort"><br>
    <label for="ras">Ras: </label> <input type="text" id="ras" name= "ras"><br>
    <label for="naam">Naam: </label> <input type="text" id="naam" name= "naam"><br>
 
<p>Gender</p>
    <input type="radio"id="gender" name="gender" value="mannelijk">
    <label for="gender">Mannelijk</label><br>
    <input type="radio" id="gender" name="gender" value="vrouwelijk">
     <label for="gender">Vrouwelijk</label><br>

     <label for="leeftijd">Leeftijd: </label> <input type="text" id="leeftijd" name= "leeftijd"><br>

     <br><input type="submit" value="Dier toevoegen"></br>
     
     
     
</form>
<hr>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dieren";

if(isset($_POST['soort']) && isset($_POST['ras']) && isset($_POST['naam']) && isset($_POST['gender']) && isset($_POST['leeftijd']) && isset($_POST['img']))
{



$con = mysqli_connect($servername, $username, $password, $dbname);
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

$dieren = mysqli_real_escape_string($con, $_POST['soort']);
$ras = mysqli_real_escape_string($con, $_POST['ras']);
$naam = mysqli_real_escape_string($con, $_POST['naam']);
$gender = mysqli_real_escape_string($con, $_POST['gender']);
$leeftijd = mysqli_real_escape_string($con, $_POST['leeftijd']);
$img = mysqli_real_escape_string($con, $_POST['img']);
    
$sql = "INSERT INTO `dieren` (`soort`, `ras`,`naam`, `gender`, `leeftijd`, `img`) 
VALUES ('$dieren', $dieren', $soort', '$ras', '$naam', '$gender', '$leeftijd', '$img')";

mysqli_query($con, $sql);

header("location: index.php");

}
else 
{
    echo "Vul gegevens eerst in en druk dan op verzenden";
}

?>