<?php
if((!isset($_GET["Nama"])) || !isset($_GET["Kota"]) || !isset($_GET["no_telp"])){header("Location: getpost.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><?php echo $_GET["Nama"];?></h3>
    <h3><?php echo $_GET["Kota"];?></h3>
    <a href="./getpost.php">Kembali</a>
</body>
</html>