<?php
include_once("diere.php");

if ( !isset($_POST))
{
    $id = $_GET['id'];

    $item = getOneDier( $id);

    $_POST = $item;

}
else {
    updateDier($_POST);

}
?>

<form method="post">
    soort: <input type="text" name="soort" value="<?=$_POST['soort']?>">
    ras: <input type="text" name="ras" value="<?=$_POST['ras']?>">
    naam: <input type="text" name="naam" value="<?=$_POST['naam']?>">
    gender: <input type="text" name="gender" value="<?=$_POST['gender']?>">
    leeftijd: <input type="text" name="leeftijd" value="<?=$_POST['leeftijd']?>">
    <input type="submit">
</form>


