<?php 

$grade = "A";
$predikat = "";
switch ($grade) {
    case 'A':
       $prdikat = "Sangat Memuaskan";
        break;
    case 'B':
       $prdikat = "Memuaskan";
        break;
    case 'C':
       $prdikat = "Cukup";
        break;
    case 'D':
       $prdikat = "Kurang";
        break;
    case 'E':
       $prdikat = "Sangat kurang";
        break;
    
    default:
       $prdikat = "tidak ada";
        break;
}



?>