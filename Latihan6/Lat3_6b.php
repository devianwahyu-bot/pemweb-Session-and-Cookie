<?php
$username = 'admin';
$password = 'admin';
if ($_POST['username'] === $username && $_POST['password'] === $password) {
    session_start();
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
    header('Location:Lat3_6c.php');
} else {
    echo "Login gagal<br>";
    echo '<a href="Lat3_6c.php">lanjutkan gan!</a>';
}
