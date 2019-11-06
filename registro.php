<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <section class="row">
        <div class="col-md-6">
            <form action="registroProceso.php" method="POST">
            <div class="form-group">
              <label for="">Usuario</label>
              <input type="text" class="form-control" name="usuario">
            </div>
            <div class="form-group">
              <label for="">Contraseña</label>
              <input type="password" class="form-control" name="contrasena">
            </div>
            <div class="form-group">
              <label for="">Email</label>
              <input type="email" class="form-control" name="email">
            </div>
            <button class="btn btn-primary">Registrarse</button>
            </form>

        </div>
    </section>
</body>
</html>
