<?php


$Forma_oreja = $_POST["FO"];
$Tamaño_glandula_m = $_POST["TGM"];
$Formacion_pezon = $_POST["FP"];
$Textura_piel = $_POST["TP"];
$Pliegues_plantares = $_POST["PP"];

if ($Forma_oreja == 1) {
    $Forma_oreja = 0;
}else if ($Forma_oreja == 2) {
    $Forma_oreja = 8;
} else if ($Forma_oreja==3){
    $Forma_oreja = 16;
}else{
    $Forma_oreja = 24;
}

if ($Tamaño_glandula_m == 1) {
    $Tamaño_glandula_m = 0;
}else if ($Tamaño_glandula_m == 2) {
    $Tamaño_glandula_m = 5;
} else if ($Tamaño_glandula_m == 3){
    $Tamaño_glandula_m = 10;
}else{
    $Tamaño_glandula_m = 15;
}

if ($Formacion_pezon == 1) {
    $Formacion_pezon = 0;
}else if ($Formacion_pezon == 2) {
    $Formacion_pezon = 5;
}else if ($Formacion_pezon == 3){
    $Formacion_pezon = 10;
} else {
    $Formacion_pezon = 15;
}

if ($Textura_piel == 1) {
    $Textura_piel = 0;
}else if ($Textura_piel == 2) {
    $Textura_piel = 5;
}else if ($Textura_piel == 3){
    $Textura_piel = 10;
} else if($Textura_piel == 4){
    $Textura_piel = 15;
}else{
    $Textura_piel = 20;
}

if ($Pliegues_plantares == 1) {
    $Pliegues_plantares  = 0;
}else if ($Pliegues_plantares  == 2) {
    $Pliegues_plantares  = 5;
}else if ($Pliegues_plantares  == 3){
    $Pliegues_plantares  = 10;
} else if($Pliegues_plantares  == 4){
    $Pliegues_plantares  = 15;
}else{
    $Pliegues_plantares  = 20;
}

$total = $Forma_oreja + $Tamaño_glandula_m + $Formacion_pezon + $Textura_piel + $Pliegues_plantares;

$semanas = (204 + $total)/ 7;
$semanas=intval($semanas*100); 
$semanas=$semanas/100; 

if ($semanas>=42) {
    $s1 = "Postmaduro";
}
if ($semanas >37 && $semanas <=41 && $semanas=38 && $semanas=39 && $semanas=40) {
    $s2 = "Atermino";

}
if($semanas >=35 && $semanas <37){
    $s3 = "Prematuro leve";
}
if($semanas >=32 && $semanas <=34 && $semanas=33){
    $s4 = "Prematuro moderado";
}
if($semanas < 32){
    $s5 = "Prematuro extremo";
}
    
header("Location: ../views/test_capurro.php?total=$total&sen=$semanas&s1=$s1&s2=$s2&s3=$s3&s4=$s4&s5=$s5");

exit();

24+5+5+5+0
?>

