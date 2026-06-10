<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ski_materials";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$id = $_GET['id'];


$sql = "SELECT * FROM ski_materials WHERE id = $id";
$result = mysqli_query($conn, $sql);
$ski_materials = mysqli_fetch_assoc($result);


if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $type = $_POST['type'];
    $price = $_POST['price'];
    $materials = $_POST['materials'];

    $update = "UPDATE ski_materials SET
    name='$name',
    type='$type',
    price='$price',
    materials='$materials'
    WHERE id=$id";

    if (mysqli_query($conn, $update)) {
        header("Location: index.php");
        exit;
    } else {
        echo "Fout bij updaten";
    }
}

?>
<h2>Ski bewerken</h2>

<form method="post">
    <label>Naam</label><br>
    <input type="text" name="name" value="<?= $ski_materials['name'] ?>" required><br><br>

    <label>materials</label><br>
    <input type="text" name="materials" value="<?= $ski_materials['materials'] ?>" required><br><br>

    <label>price</label><br>
    <input type="text" name="price" value="<?= $ski_materials['price'] ?>" required><br><br>

    <label>type</label><br>
    <select name="type">
        <option value="ski bindings" <?= ($ski_materials['type'] == 'ski bindings') ? 'selected' : '' ?>>ski bindings</option>
        <option value="snowboard bindings" <?= ($ski_materials['type'] == 'snowboard bindings') ? 'selected' : '' ?>>snowboard bindings</option>
        <option value="ski boots" <?= ($ski_materials['type'] == 'ski boots') ? 'selected' : '' ?>>ski boots</option>
        <option value="snowboard" <?= ($ski_materials['type'] == 'snowboard') ? 'selected' : '' ?>>snowboard</option>
    </select><br><br>


    <button type="submit" name="update">Opslaan</button>
</form>

<?php mysqli_close($conn); ?>