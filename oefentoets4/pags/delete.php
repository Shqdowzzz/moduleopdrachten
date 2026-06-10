<?php
$con = mysqli_connect("localhost", "root", "", "dieren");

if (!$con) {
    die("Database fout");
}

$id = $_GET['id'];

$sql = "DELETE FROM dieren WHERE id = $id";
mysqli_query($con, $sql);

header("Location: index.php");
exit; 