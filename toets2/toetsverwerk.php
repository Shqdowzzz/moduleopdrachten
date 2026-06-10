<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
echo $_POST['name'] . " heeft zich met het e-mailadres " . $_POST['emailadres'] . " aangemeld en dit zijn de antwoorden:<br>";

echo "Met " . $_POST['emailadres'] . " heeft      zich aangemeld voor het feestje.<br>";

echo "Wat voor soort cadeautje is gevraagd? " . $_POST['cadeau'] . "<br>";

echo "Heeft " . $_POST['name'] . " zich aangemeld om mee te helpen? " . $_POST['help'] . "<br>";

?>
<br><div class="buttons"><a href="http://localhost/moduleopdrachten/toets2/menu.php?page=huistoets">Terug naar homepage</a></div></br>





</body>
</html>