<?php
// $ Get dan $ Post adalah variabel super global yng membawa banyak data di aplikasi

// passing data melalui url
// $_GET["Nama"] = "Rosa Noviasari";
// $_GET["Alamat"] = "Bandung";
// var_dump($_GET);

$arr = [
    [
        "Nama" => "Rosa Noviasari",
        "Kota" => "Bandung",
    ],
    [
        "Nama" => "Jajuli Maruf",
        "Kota" => "Lampung",
    ],
    [
        "Nama" => "Ilham Nur",
        "Kota" => "Pangkep",
    ],
]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
    <?php foreach($arr as $person): ?>
    <li>
        <a href="./get.php?Nama=<?= $person["Nama"];?>&Kota=<?= $person["Kota"]; ?>"> 
            <?=$person["Nama"]; ?> 
        </a>
    </li>
    <?php endforeach;?>
    </ul>

    <br/>

    <form method="POST">
        <input type="text" placeholder="username" name="txt_username" >
        <input type="password" placeholder="password" name="txt_password">
        <button type="submit">Submit</button>
    </form>
    <?php if(isset($_POST['txt_username'])):?>
        <h3>Hallo, <?php echo $_POST['txt_username'];?></h3>
    <?php endif; ?>
</body>
</html>