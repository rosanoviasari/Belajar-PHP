<?php
$arr1 = array("senin", "Selasa", "Rabu"); //cara lama

$arr2 = ["Senin", "Selasa", "Rabu"]; // cara baru
//echo hanya untuk string

// var_dump($arr1); //untuk memunculkan array khusus debugging atau developer
// echo "<br/>";
// print_r($arr2);
// echo "<br/>";
// echo $arr1[1]; 

//cara1
for ($i =0; $i < count($arr2); $i++){
    echo $arr2[$i] . "<br/>";
}
    
//cara2
foreach($arr2 as $hari){
    echo $hari . "<br/>";
}
?>