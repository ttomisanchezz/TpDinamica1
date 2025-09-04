<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/localization/messages_es.min.js"></script>

</head>
<body>


     <form id="formEdad" action="./Action/Ej4Edad.php" method="post" novalidate>

     <label for="nombre">Nombre: </label> 
    <input type="text" name="nombre" id="nombre"><br>
    <label for="apellido">Apellido: </label>
    <input type="text" name="apellido" id="apellido"><br>
    <label for="edad">Edad: </label>
    <input type="number" name="edad" id="edad"><br>
    <label for="direcion">Direccion: </label>
    <input type="text" name="direccion" id="direccion"><br>
    <input type="submit" value="enviar">

    </form>


    <script src="../Utils/ej4.js"></script>
</body>
</html>