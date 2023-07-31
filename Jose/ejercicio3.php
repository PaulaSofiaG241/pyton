<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio</title>
</head>
<body>
    <form action="#" method="post">
        <input type="decimal" name="cateto1" id="cateto1" placeholder="Ingrese el valor del primer cateto: ">
        <input type="decimal" name="cateto2" id="cateto2" placeholder="Ingrese el valor del segundo cateto: ">
        
        <button type="submit">Enviar</button>
    </form>
<?php

//Hallar el valor de la hipotenusa dados dos catetos

$c1  = floatval($_POST['cateto1']);
$c2  = floatval($_POST['cateto2']);


$c1Cuadrado = pow($c1, 2);
$c2Cuadrado = pow($c2, 2);
$suma = $c1Cuadrado + $c2Cuadrado;
$hipotenusa = sqrt($suma);


if ($hipotenusa > 0) {
    echo "La hipotenusa es:". $hipotenusa ;
} elseif ($hipotenusa == 0) {
    echo "Los catetos deben ser mayores a cero.";
} else {
    echo "Valores invalidos.";
}

?>