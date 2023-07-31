<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio</title>
</head>
<body>
    <form action="#" method="post">
        <input type="decimal"  name="numero1" id="numero1" placeholder="Ingrese la nota 1">
        <input type="decimal"  name="numero2" id="numero2" placeholder="Ingrese la nota 2">
        <input type="decimal"  name="numero3" id="numero3" placeholder="Ingrese la nota 3">
        <button type="submit">Enviar</button>
    </form>
    <?php


//Determinar si un aprendiz aprobo la materia dadas 3 notas las materias 
//se aprueban con 3.5, el sistema debera mostrar un mensaje de aprobo, 
//reprobo y el promedio de la materia 


$nota1  = floatval($_POST["numero1"]); 
$nota2 = floatval($_POST["numero2"]);
$nota3 = floatval($_POST["numero3"]);

$promedio = ($nota1 + $nota2 + $nota3) / 3;


if ($promedio >= 3.5) {
    echo "Aprobado con un promedio de" . $promedio;
} elseif ($promedio < 3.5) {
    echo "Reprobado con un promedio de " . $promedio;
} else {
    echo "Valores invalidos";
}

?>