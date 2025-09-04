<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cinem@s</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../Utils/ej4.css">
</head>
<body class="bg-light">

  <div class="container mt-5">
    <div class="card shadow">
      <div class="card-header bg-white">
        <h4 class="mb-0"><i class="bi bi-film"></i> Cinem@s</h4>
      </div>
      <div class="card-body">
        <form action="./Action/ej4.php" method="POST">

          <div class="row mb-3">
            <div class="col">
              <label for="titulo" class="form-label">Título</label>
              <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Título">
            </div>
            <div class="col">
              <label for="actores" class="form-label">Actores</label>
              <input type="text" class="form-control" name="actores" id="actores" placeholder="Actores">
            </div>
          </div>

          <div class="row mb-3">
            <div class="col">
              <label for="director" class="form-label">Director</label>
              <input type="text" class="form-control" name="director" id="director" placeholder="Director">
            </div>
            <div class="col">
              <label for="guion" class="form-label">Guión</label>
              <input type="text" class="form-control" name="guion" id="guion" placeholder="Guión">
            </div>
          </div>

          <div class="row mb-3">
            <div class="col">
              <label for="produccion" class="form-label">Producción</label>
              <input type="text" class="form-control" name="produccion" id="produccion" placeholder="Producción">
            </div>
            <div class="col">
              <label for="anio" class="form-label">Año</label>
              <input type="text" class="form-control" name="anio" id="anio" placeholder="Año">
            </div>
          </div>

          <div class="row mb-3">
            <div class="col">
              <label for="nacionalidad" class="form-label">Nacionalidad</label>
              <input type="text" class="form-control" name="nacionalidad" id="nacionalidad" placeholder="Nacionalidad">
            </div>
            <div class="col">
              <label for="genero" class="form-label">Género</label>
              <select class="form-select" name="genero" id="genero">
                <option selected>Seleccionar...</option>
                <option value="comedia">Comedia</option>
                <option value="drama">Drama</option>
                <option value="romantica">Romántica</option>
                <option value="suspenso">Suspenso</option>
                <option value="accion">Acción</option>
              </select>
            </div>
          </div>

          <div class="row mb-3">
            <div class="col-4">
              <label for="duracion" class="form-label">Duración (minutos)</label>
              <input type="text" class="form-control" name="duracion" id="duracion">
            </div>
            <div class="col">
              <label class="form-label">Restricciones de edad</label>
              <div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="restriccion" id="todos" value="todos">
                  <label class="form-check-label" for="todos">Todo Público</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="restriccion" id="mayores7" value="7">
                  <label class="form-check-label" for="mayores7">Mayores de 7 años</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="restriccion" id="mayores18" value="18">
                  <label class="form-check-label" for="mayores18">Mayores de 18 años</label>
                </div>
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label for="sinopsis" class="form-label">Sinopsis</label>
            <textarea class="form-control" name="sinopsis" id="sinopsis" rows="4"></textarea>
          </div>

          <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary me-2">Enviar</button>
            <button type="reset" class="btn btn-secondary">Borrar</button>
          </div>

        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
