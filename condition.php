<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // if else
    //if-else if-else
    // ternary
    //switch

    $umur = 20;
    // if($umur == 20){
    //     echo "Umur sama dengan 20";
    // }
    // else if($umur <= 30){
    //     echo "Umur kurang dari 30";
    // } 
    // else {
    //     echo "Umur lebih dari 30";
    // }

    // echo ($umur < 30 ? "Umur kurang dari 30" : "Umur lebih dari 30");
    
    switch($umur){
        case 15:
            echo "Umur 15";
        break;
        case 20:
            echo "Umur 20";
        break;
        default:
            echo "Umur tidak dapat di definisikan";
    }
    ?>
</body>
</html>