<html>
<body>

<?php
if(isset($_GET["naam"])) {
    echo "de naam is: ". $_GET["naam"];
}

?>

<form action="" method="GET">
    Name: <input type="text" name="naam"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit">
</form>

</body>
</html>