
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['name']) && !empty($_POST['type'])) {

        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $price = mysqli_real_escape_string($conn, $_POST['price']);
        $materials = mysqli_real_escape_string($conn, $_POST['materials']);
        $type = mysqli_real_escape_string($conn, $_POST['type']);

        $sql = "INSERT INTO ski_materials (name, price, materials, type)
                VALUES ('$name', '$price', '$materials', '$type')";

        mysqli_query($conn, $sql);

        header("Location: index.php");
        exit;
    }
}

?>

<h1>Ski toevoegen</h1>

<form method="post">
    Name: <input type="text" name="name"><br>
    Price: <input type="text" name="price"><br>
    Materials: <input type="text" name="materials"><br>

    Type:<br>
    <input type="radio" name="type" value="ski bindings"> Ski bindings<br>
    <input type="radio" name="type" value="snowboard bindings"> Snowboard bindings<br>
    <input type="radio" name="type" value="ski boots"> Ski boots<br>
    <input type="radio" name="type" value="snowboard"> Snowboard<br>

    <input type="submit" value="Toevoegen">
</form>

