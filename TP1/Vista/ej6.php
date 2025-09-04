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


   <form id="formEj6" action="./Action/Ej6Deporte.php" method="post" novalidate>

     <label for="nombre">Nombre: </label> 
    <input type="text" name="nombre" id="nombre"><br>
    <label for="apellido">Apellido: </label>
    <input type="text" name="apellido" id="apellido"><br>
    <label for="edad">Edad: </label>
    <input type="number" name="edad" id="edad"><br>
    <label for="direcion">Direccion: </label>
    <input type="text" name="direccion" id="direccion"><br>

<br>
    <label for="sinestudios">no estudio</label>
    <input type="radio" name="estudios" id="sinestudios" value="sinestudio">
    <label for="conestudios">primario nomas</label>
    <input type="radio" name="estudios" id="primario" value="primario">
    <label for="secundario">secundario nomas</label>
    <input type="radio" name="estudios" id="secundario" value="secundario">
<br>
<br>
    <label for="mujer">mujer</label>
    <input type="radio" name="sexo" id="mujer" value= "mujer">
    <label for="hombre">hombre</label>
    <input type="radio" name="sexo" id="hombre"value="hombre">
<br>
<br>
    <input type="checkbox" name="deporte[]" id="basquet" name ="basquet">
    <label for="basquet">Basquet</label>
    <input type="checkbox" name="deporte[]" id="voley" name ="voley">
    <label for="voley">voley</label>    
    <input type="checkbox" name="deporte[]" id="futbol" name ="futbol">
    <label for="futbol  ">Futbol</label>
    <input type="checkbox" name="deporte[]" id="tenis" name ="tenis">
    <label for="tenis">Tenis</label>



<br>
<br>

    <input type="submit" value="enviar">

    </form>


      <script src="../Utils/ej6.js"></script>
</body>
</html>