<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/localization/messages_es.min.js"></script>

</head>
<body>

<form id="formEj7" action="./Action/Ej7Calcu.php" method="post" novalidate>

    <label for="operando1">Operando 1</label>
    <input type="text" name="operando1" id="operando1">
    <label for="operando2">Operando 2</label>
    <input type="text" name="operando2" id="operando2">
    
    <select name="instruccion" id="instruccion">
    <option value="sumar">SUMA</option>
    <option value="restar">RESTA</option>
    <option value="multiplicar">Multiplicar</option>
    </select>

    <input type="submit" value="enviar">


</form>

    <script src="../Utils/ej7.js"></script>
</body>
</html>