<?php


include_once "../../Utils/DataSubmited.php";
include_once "../../Control/6FormDeporte.php";


$datos = dataSubmitted();

$obj = new control();

$respuesta = $obj->retornarform($datos);
$respuesta2= $obj->darDeportes($datos);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo $respuesta;
    echo "Cantidad de deportes que hace: $respuesta2 "; 
    ?>  
</body>
</html>
