<?php
function salam($nama, $pembelajaran){
    return "Selamat datang di " .$pembelajaran. ", " .$nama ;
}
function hitungUang ($nominal, $jumlah){
    $num = $nominal * $jumlah;
    $string_return = "Rp" .number_format($num,0,",");
    return $string_return;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <h1><?php echo salam("Rosa Noviasari", "Belajar Programming");?></h1>
    <h3><?php echo hitungUang(5000, 10000);?></h3>
</body>
</html>