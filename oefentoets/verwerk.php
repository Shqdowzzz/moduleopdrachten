<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
echo "Bedankt voor je bericht ". $_POST['naam'].", we hebben de volgende gegevens van je ontvangen:" . "<br>";

echo "Naam:" . $_POST['naam'] . "<br>";

echo "E-mail:" . $_POST['e-mail'] . "<br>";

echo "Geboortedatum:" . $_POST['geboortedatum'] . "<br>";

echo "Bericht:" . $_POST['bericht'] . "<br>";

echo "Ik kan een formulier versturen!" . "<br>";

?>

</body>
</html>