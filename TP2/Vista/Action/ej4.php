<?php

include "../../Utils/DataSubmited.php";
include "../../Control/ej4cinema.php";

$datos = dataSubmitted();

$obj= new control();

$cinema= $obj->retornarpeli($datos);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="alert alert-success">
        <?= $cinema ?>
    </div>
</div>

</body>
</html>
