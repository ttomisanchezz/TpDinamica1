<?php

include_once "../../Utils/DataSubmited.php";
include_once "../../Control/3HolaYo.php";

$datos = dataSubmitted();

$yo = new control();

$respuesta = $yo->decirquiensos($datos);


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
?>
    
</body>
</html>