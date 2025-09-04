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
    
    <form id="formHoras" action="./Action/Ej2Array.php" method="post" novalidate>

    <label for="lunes">Horario Lunes</label>
    <input type="number" name="lunes"> <br>
    <label for="martes">Horario martes</label>
    <input type="number" name="martes"><br>
    <label for="miercoles">Horario miercoles</label>
    <input type="number" name="miercoles"><br>
    <label for="jueves">Horario juevesjueves</label>
    <input type="number" name="jueves"><br>
    <label for="viernes">Horario viernes
    </label>
    <input type="number" name="viernes">
    <br>

    <input type="submit" value="calcular horas totales">




    </form>

<script src="../Utils/ej2.js"></script>
</body>
</html>