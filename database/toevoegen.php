
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
<h1>Land toevoegen</h1>

<form method="post">
    <label for="werelddeelcode">Werelddeel: </label> <input type="text" id="werelddeelcode" name="werelddeelcode"><br>
    <label for="landcode">Landcode: </label> <input type="text" id="landcode" name= "landcode"><br>
    <label for="landnaam">Land: </label> <input type="text" id="landnaam" name= "landnaam"><br>
<input type="submit">
</form>
<hr>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wereld";

if(isset($_POST['landnaam']))
{



$con = mysqli_connect($servername, $username, $password, $dbname);
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

$land = mysqli_real_escape_string($con, $_POST['landnaam']);
$lcode = mysqli_real_escape_string($con, $_POST['landcode']);
$werelddeel = mysqli_real_escape_string($con, $_POST['werelddeelcode']);
    
$sql = "INSERT INTO `land` (`werelddeelcode`, `landcode`, `landnaam`) 
VALUES ('$werelddeel', '$lcode', '$land')";

mysqli_query($con, $sql);

header("location: dbtable/index.php");

}
else 
{
    echo "Vul gegevens eerst in en druk dan op verzenden";
}

?>
    



