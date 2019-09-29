<<<<<<< HEAD
<?php

$Forma_oreja = $_POST["ER"];
$Tamaño_glandula_m = $_POST["RE"];
$Formacion_pezon = $_POST["FC"];
$Textura_piel = $_POST["TM"];
$Coloracion = $_POST["col"];

if ($Forma_oreja == 1) {
    $Forma_oreja = 0;
}else if ($Forma_oreja == 2) {
    $Forma_oreja = 1;
} else {
    $Forma_oreja = 2;
}

if ($Tamaño_glandula_m == 1) {
    $Tamaño_glandula_m = 0;
}else if ($Tamaño_glandula_m == 2) {
    $Tamaño_glandula_m = 1;
} else {
    $Tamaño_glandula_m = 2;
}

if ($Formacion_pezon == 1) {
    $Formacion_pezon = 0;
}else if ($Formacion_pezon == 2) {
    $Formacion_pezon = 1;
}else {
    $Formacion_pezon = 2;
}

if ($Textura_piel == 1) {
    $Textura_piel = 0;
}else if ($Textura_piel == 2) {
    $Textura_piel = 1;
}else {
    $Textura_piel = 2;
}

if ($Coloracion == 1) {
    $Coloracion = 0;
}else if ($Coloracion == 2) {
    $Coloracion = 1;
}else{
    $Coloracion = 2;
}

$total = $Forma_oreja + $Tamaño_glandula_m + $Formacion_pezon + $Textura_piel + $Coloracion;

if ($total >= 7 && $total <= 10) {
    $t1 = " Normal: No requiere procedimientos especiales";
} else if ($total >= 5 && $total <= 7) {
    $t2 = " Dificultad cardiorespiratoria o depresion moderada:"
            . " Requiere algunas medidas, oxigeno, estimulacion.";
}else{
    $t3 = " Depresion cardiorespiratoria grave o asfixia neonatal grave: "
            . "requiere atencion inmediata de reanimacion, presion positiva de oxigeno, drogas.";
}
header("Location: ../views/test_Apgar.php?total=$total&ti=$t1&t2=$t2&t3=$t3");

exit();
=======
<?php

$Forma_oreja = $_POST["ER"];
$Tamaño_glandula_m = $_POST["RE"];
$Formacion_pezon = $_POST["FC"];
$Textura_piel = $_POST["TM"];
$Coloracion = $_POST["col"];

if ($Forma_oreja == 1) {
    $Forma_oreja = 0;
}else if ($Forma_oreja == 2) {
    $Forma_oreja = 1;
} else {
    $Forma_oreja = 2;
}

if ($Tamaño_glandula_m == 1) {
    $Tamaño_glandula_m = 0;
}else if ($Tamaño_glandula_m == 2) {
    $Tamaño_glandula_m = 1;
} else {
    $Tamaño_glandula_m = 2;
}

if ($Formacion_pezon == 1) {
    $Formacion_pezon = 0;
}else if ($Formacion_pezon == 2) {
    $Formacion_pezon = 1;
}else {
    $Formacion_pezon = 2;
}

if ($Textura_piel == 1) {
    $Textura_piel = 0;
}else if ($Textura_piel == 2) {
    $Textura_piel = 1;
}else {
    $Textura_piel = 2;
}

if ($Coloracion == 1) {
    $Coloracion = 0;
}else if ($Coloracion == 2) {
    $Coloracion = 1;
}else{
    $Coloracion = 2;
}

$total = $Forma_oreja + $Tamaño_glandula_m + $Formacion_pezon + $Textura_piel + $Coloracion;

if ($total >= 7 && $total <= 10) {
    $t1 = " Normal: No requiere procedimientos especiales";
} else if ($total >= 5 && $total <= 7) {
    $t2 = " Dificultad cardiorespiratoria o depresion moderada:"
            . " Requiere algunas medidas, oxigeno, estimulacion.";
}else{
    $t3 = " Depresion cardiorespiratoria grave o asfixia neonatal grave: "
            . "requiere atencion inmediata de reanimacion, presion positiva de oxigeno, drogas.";
}
header("Location: ../views/test_Apgar.php?total=$total&ti=$t1&t2=$t2&t3=$t3");

exit();
>>>>>>> ceec5e77e70b95d02190492b7db6faaf1b007520
?>