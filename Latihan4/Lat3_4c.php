<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p><u>Order Summary</u></p>
    <?php
    $num_cd_order = $_COOKIE['cd_order'];
    $num_dvd_order = $_COOKIE['dvd_order'];
    echo "Ordered CD: " . $num_cd_order . " pieces <br>";
    echo "Ordered DVD: " . $num_dvd_order . " pieces <br>";
    ?>
</body>

</html>