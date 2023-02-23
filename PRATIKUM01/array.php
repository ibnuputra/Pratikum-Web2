<?php

$animals = ["Kucing", "ayam", "ikan", "burung"];
echo $animals[3] . "<br>";
echo $animals[1];

foreach ($animals as $animal) {
    echo $animal . "<br>";
}

// Buat array asosiatif
$mahasiswa = ["nama"=>"ibnu", "jurusan"=>"SI", "Semester"=>2];
echo $mahasiswa["jurusan"] . "<br>";

foreach ($mahasiswa as $key=>$value) {
    echo "key nya adalah" . $key . " value: " . $value . "<br>";
}

// Buat Array multidimensi
$dosen = [
    ["Pak Rojul", "web"],
    ["Pak Nasrul", "DDP"],
    ["pal Lukman", "OS"]
];
// 00 01 10 11 20 21
echo $dosen[0][0];




?>