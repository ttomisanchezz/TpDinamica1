<?php

include "../../Utils/DataSubmited.php";
include "../../Control/ej3verificaPass.php";

$datos = dataSubmitted();

$obj= new control();

$verificar= $obj->verificarpass($datos);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="../Utils/ej3.css">
<body>
     <div class="card p-4" style="width: 350px;">
    <div class="card-body">
      <h4 class="card-title text-center mb-4"> <?php
    echo "<h1> $verificar </h1>";
    ?>
</h4>

</body>
</html>