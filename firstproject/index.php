<?php
session_start();

$hostname = "localhost";
$username = "root";
$password = "";
$db = "login";

$conn = mysqli_connect($hostname, $username, $password, $db);

$error = "";

if (!empty($_POST['email']) && !empty($_POST['pass'])) {

    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM `login`
            WHERE `email`='$email'
            AND `pass`='$pass'";

    $user = mysqli_query($conn, $sql);

    if ($user && mysqli_num_rows($user) == 1) {

        $userData = mysqli_fetch_assoc($user);
        $_SESSION['login'] = $userData['email'];

        header("Location: index.php?page=home");
        exit();

    } else {
        $error = "Email of wachtwoord is fout!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php

if (isset($_SESSION['login']) && $_SESSION['login'] !== '') {

    $page = $_GET['page'] ?? 'home';

    include "pages/" . $page . ".php";

} else {
?>

<img src="img/0x0.webp" class="center" alt="">
<form method="post">
    <input type="text" name="email" placeholder="email"><br>
    <input type="password" name="pass" placeholder="pass"><br>
    <button type="submit">Inloggen</button>
</form>
<?php if ($error) echo "<p style='color:red'>$error</p>"; ?>

<?php } ?>

</body>
</html>
