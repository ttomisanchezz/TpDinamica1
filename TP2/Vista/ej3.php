<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="../Utils/ej3.css">

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script src="../Utils/ej3.js"></script>


</head>
<body>
    


  <div class="card p-4" style="width: 350px;">
    <div class="card-body">
      <h4 class="card-title text-center mb-4">Member Login</h4>
      <form id="formLogin" action="./Action/ej3.php" method="POST" novalidate>
        
        <!-- Usuario -->
        <div class="mb-3">
          <div class="input-group">
            <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
            <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Username">
          </div>
        </div>

        <!-- Contraseña -->
        <div class="mb-3">
          <div class="input-group">
            <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
            <input type="password" class="form-control" name="contrasena" id="contrasena" placeholder="Password">
          </div>
        </div>

        <!-- Botón -->
        <div class="d-grid">
          <button type="submit" class="btn btn-login text-white">Login</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Bootstrap icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

</body>
</html>