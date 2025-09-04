<?php


include_once "../../Utils/DataSubmited.php";
include_once "../../Control/1verNumero.php";

$datos = dataSubmitted();

$obj = new control();

$respuesta = $obj->darRespuesta($datos);
$numero = $datos ['numero'];
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
    echo "El numero ingresado: " .$numero. " es ". $respuesta;
    ?>

</body>
</html>