<?php
$num = $_POST["num"];

function faktorial(int $x)
{
    $result = 1;
    if ($x === 0) {
        $result = 0;
    } else {
        for ($i = 1; $i <= $x; $i++) {
            $result *= $i;
        }
    }
    return $result;
}

$faktorial = faktorial($num);
$arr = array($num, $faktorial, "185150400111005", "Devian Wahyu S");

session_start();

$_SESSION["data"] = $arr;

header("location:Lat3_3c.php");
