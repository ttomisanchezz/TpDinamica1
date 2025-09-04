
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
    
    <form id="formEj8" action="./Action/Ej8Cine.php" method="post" novalidate>
        
    <label for="edad">Edad: </label>
    <input type="number" name="edad" id="edad">
    <br><br>
    <label for="Estudios">¿Cuenta con estudios?</label>
    <br>
    <label for="si">si</label>
    <input type="radio" name="estudios" value="si" >
    <label for="no">no</label>
    <input type="radio" name="estudios" value="no">
    <br>
    <input type="submit" value="Enviar">

    </form>


<script src="../Utils/ej8.js"></script>
</body>
</html>