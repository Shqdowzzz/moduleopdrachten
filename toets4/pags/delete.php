<?php
$con = mysqli_connect("localhost", "root", "", "ski_materials");

if (!$con) {
    die("Database fout");
}

$id = $_GET['id'];

$sql = "DELETE FROM ski_materials WHERE id = $id";
mysqli_query($con, $sql);

header("Location: index.php");
exit; 