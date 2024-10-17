<?php
 $arr = [
    ["Senin", "Selasa", "Rabu"],
    ["Januari", "Februari", "Maret"],
    ["2020","2021","2022"],
 ];

// foreach ($arr as $data){
//     var_dump($data);
// }
$dataPerson = [
    [
        "Nama"=> "Rosa Noviasari",
        "Kota"=> "Bandung",
        "Baju"=> "Merah",
        "Makanan_fav" => ["Sate", "Soto", "Kopi"]
    ],
    [
        "Nama"=> "Nida Khairunnisa",
        "Kota"=> "Bandung",
        "Baju"=> "Pink",
        "Makanan_fav" => ["Daging", "Eskrim", "Tahu"]
    ],
    [
        "Nama"=> "Jajuli Maruf",
        "Kota"=> "Bandung",
        "Baju"=> "Hijau",
        "Makanan_fav" => ["Rendang", "Soto", "Susu"]
    ]
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
    <?php //foreach($arr as $data): ?>
        <!-- <ul> -->
            <!-- <li>Index 0: <?=$data[0]?> </li> -->
            <!-- <li>Index 1: <?=$data[1]?></li> -->
            <!-- <li>Index 2: <?=$data[2]?></li> -->
        <!-- </ul> -->
    <?php //endforeach;?>
<?php //echo $dataPerson[0]["Nama"]; ?>
<?php foreach($dataPerson as $data): ?>
    <ul style="margin-bottom: 24px;">
        <li>Nama: <?=$data ["Nama"]?></li>
        <li>Kota: <?=$data ["Kota"]?></li>
        <li>Baju: <?=$data ["Baju"]?></li>
        <li>Makanan favorit:
        <?php foreach($data["Makanan_fav"] as $makanan): ?>
            <li><?php echo $makanan; ?></li>
        <?php endforeach; ?>
        </li>
    </ul>
<?php endforeach; ?>
</body>
</html>