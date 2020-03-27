<?php
session_start();
if (empty($_SESSION['username']) && empty($_SESSION['password'])) {
    header("Location: Lat3_6a.php");
} else {
    if (isset($_POST['cd_order']) && isset($_POST['dvd_order'])) {
        setcookie("cd_order", $_POST['cd_order']);
        setcookie("dvd_order", $_POST['dvd_order']);
        header("Location: Lat3_6e.php");
    } else {
        header("Location: Lat3_6a.php");
    }
}
