<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- jQuery + jQuery Validate -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/localization/messages_es.min.js"></script>


</head>
<body>



<form id="registroForm" action="./Action/Ej1VerNumero.php" method="POST" novalidate>

    <label for="numero">Ingrese un numero:</label>
    <input type="text" name="numero"> <br>
    <input type="submit" value="Enviar">



</form>
<script src="../Utils/ej1.js"></script>
</body>
</html>