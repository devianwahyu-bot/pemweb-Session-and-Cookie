<?php
session_start();
if (empty($_SESSION["nama"])) {
    echo "Maaf, anda belum memasukkan nama";
} else {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hello, <?php echo $_SESSION["nama"]; ?> </title>
    </head>

    <body>
        Selamat datang <?php echo $_SESSION["nama"]; ?>, <br>
        Anda bisa masuk halaman ini karena telah menulis nama.
        <form action="Lat3_2d.php" method="post" id="form1" name="form1">
            <input type="submit" value="Keluar" name="button" id="button">
        </form>
    </body>

    </html>

<?php } ?>