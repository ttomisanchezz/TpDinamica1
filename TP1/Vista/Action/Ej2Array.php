<?php


include_once "../../Utils/DataSubmited.php";
include_once "../../Control/2array.php";


$datos = dataSubmitted();

$obj = new control($datos);

$respuesta = $obj->cantidadHoras($datos);

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
echo "La cantidad de horas cursadas semanalmente es de $respuesta";
?>

    
</body>
</html>