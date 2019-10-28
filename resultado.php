<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <p class="text-info">
    <?php
      $usuario= $_POST["usuario"];
      echo $usuario;
    ?>
    </p>
    <p class="text-info">
    <?php
      $password= $_POST["password"];
      echo $password;
    ?>
    </p>
</body>
</html>