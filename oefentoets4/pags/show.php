<?php
// if (!isset($_GET['id'])) {
//     echo "Geen dier geselecteerd.";
//     exit;
// }

$id = $_GET['id'];

$conn = mysqli_connect("localhost", "root", "", "dieren");
if (!$conn) {
    die("Connectie mislukt: " . mysqli_connect_error());
}

$sql = "SELECT * FROM dieren WHERE id = $id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    $dier = mysqli_fetch_assoc($result);
    ?>
    
    <h2><?php echo $dier['naam']; ?></h2>

    <img src="img/<?php echo $dier['img']; ?>" width="300"><br><br>

    <p><strong>Soort:</strong> <?php echo $dier['soort']; ?></p>
    <p><strong>Ras:</strong> <?php echo $dier['ras']; ?></p>
    <p><strong>Gender:</strong> <?php echo $dier['gender']; ?></p>
    <p><strong>Leeftijd:</strong> <?php echo $dier['leeftijd']; ?></p>

    <a href="index.php">Terug</a>

    <?php
} else {
    echo "Dier niet gevonden.";
}

mysqli_close($conn);
?>