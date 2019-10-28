<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <section class="container">
    <section class="row">
        <div class="col-md-6">
        <form action="resultado.php" method="POST">
        <div class="form-group">
        <label for="">usuario</label>
         <input type="text" class="form-control" name="usuario">
        </div>
        <div class="form-group">
         <label for="">contraseña</label>
        <input type="password" class="form-control" name="password">
        </div>
        <button class="btn btn-primary">Enviar datos</button>
        </form>
        </div>
    </section>
    </section>
</body>
</html>