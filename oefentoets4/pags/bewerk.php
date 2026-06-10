<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dieren";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$id = $_GET['id'];

// Dier ophalen
$sql = "SELECT * FROM dieren WHERE id = $id";
$result = mysqli_query($conn, $sql);
$dier = mysqli_fetch_assoc($result);

// Formulier verwerkt?
if (isset($_POST['update'])) {
    $naam = $_POST['naam'];
    $soort = $_POST['soort'];
    $ras = $_POST['ras'];
    $gender = $_POST['gender'];
    $leeftijd = $_POST['leeftijd'];

    $update = "UPDATE dieren SET
        naam='$naam',
        soort='$soort',
        ras='$ras',
        gender='$gender',
        leeftijd='$leeftijd'
        WHERE id=$id";

    if (mysqli_query($conn, $update)) {
        header("Location: index.php");
        exit;
    } else {
        echo "Fout bij updaten";
    }
}
?>

<h2>Dier bewerken</h2>

<form method="post">
    <label>Naam</label><br>
    <input type="text" name="naam" value="<?= $dier['naam'] ?>" required><br><br>

    <label>Soort</label><br>
    <input type="text" name="soort" value="<?= $dier['soort'] ?>" required><br><br>

    <label>Ras</label><br>
    <input type="text" name="ras" value="<?= $dier['ras'] ?>" required><br><br>

    <label>Gender</label><br>
    <select name="gender">
        <option value="man" <?= ($dier['gender'] == 'man') ? 'selected' : '' ?>>Man</option>
        <option value="vrouw" <?= ($dier['gender'] == 'vrouw') ? 'selected' : '' ?>>Vrouw</option>
    </select><br><br>

    <label>Leeftijd</label><br>
    <input type="number" name="leeftijd" value="<?= $dier['leeftijd'] ?>" required><br><br>

    <button type="submit" name="update">Opslaan</button>
</form>

<?php mysqli_close($conn); ?>