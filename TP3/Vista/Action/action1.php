<?php
include_once "../../Utils/datasubmited.php";
include_once "../../Control/form.php";


$datos = dataSubmitted();

$archivoSubir = new Archivo();
$rta = $archivoSubir->subirArchivo($datos);

if ($rta == 0) {
  $texto = "<p>ERROR: no se cargó el archivo </p>";
} elseif ($rta == 1) {
  $texto = "<p>El archivo " . $datos['miArchivo']["name"] . " se copió con Éxito </p>";
} elseif ($rta == -1) {
  $texto = "ss<p>ERROR: no se pudo cargar el archivo. No se pudo acceder al archivo Temporal</p>";
} else {
  $texto = "<p>ERROR: El archivo no es válido. Asegúrese de que el archivo sea .doc o .pdf y no exceda los 2MB.</p>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <title>Archivo</title>
</head>

<body class="text-light bg-dark d-flex align-items-center justify-content-center flex-column mt-5">
  <div>
    <h1><?php echo $texto; ?></h1>
  </div>
  <a class="p-1 pl-3 pr-3 bg-light border rounded border-secondary" href="../../form.php">Volver</a>
</body>

</html>