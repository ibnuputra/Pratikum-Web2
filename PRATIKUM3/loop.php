<?php 

for ($i = 1; $i<= 10; $i++){
    echo $i . "<br>";
}


// buat looping pertama

echo "<h3> Looping Pertama </h3>";

for ($i = 2; $i <= 20; $i += 2){
    echo $i . " - I LOVE PHP <br>";
}

// buat looping kedua

echo "<h3> Looping kedua </h3>";

for ($i = 20; $i >= 2; $i -= 2){
    echo $i . " - I LOVE PHP <br>";
}

//buat array
$buah = ["anggur", "mangga", "melon"];

foreach ($buah as $b){
    echo $b . "<br>";
}



?>