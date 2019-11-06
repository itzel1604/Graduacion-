<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/all.min.css">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script>
    $(function(){
        $boton = $("button");
        $spin=$(".fa-spinner");

        $boton.on("click",function(evento){
            evento.preventDefault();
            $boton.prop("disabled",true);
            $spin.fadeIn();
            var usuario = $('[name="usuario"]').val();
            var contrasena = $('[name="password"]').val();
            $.ajax({
                url: "resultado.php",
                method:"POST", 
                dataType:"json",
                data:{
                    usuario: usuario,
                    password: contrasena,
                }
            }).done(function(informacion){
                var json = informacion;

                console.log(json);
                $boton.prop("disabled",false);
                $spin.fadeOut();

                if(json.codigo == "0"){
                     $("#mensaje").html(json,mensaje);
                }
                else if(json.codigo == "1"){
                    window.location.href = "vip.php";
                }
                //$("#mensaje").html(informacion);
            });
        });
    });
    </script>
    <style>
    .fa-spinner{
        display:none;
    }
    </style>
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
        <i class="fa fa-spinner fa-pulse"></i>
        <div id="mensaje">
        
        </div>
        </form>
        </div>
    </section>
    </section>
</body>
</html>