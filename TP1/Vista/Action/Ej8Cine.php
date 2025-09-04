<?php


include_once "../../Utils/DataSubmited.php";
include_once "../../Control/8Cine.php";


$datos = dataSubmitted();

$obj = new control();

$respuesta = $obj->precioentrada($datos);

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
    echo "El precio de la entrada es $". $respuesta;
    ?>  
</body>
</html>
