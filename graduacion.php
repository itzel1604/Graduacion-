<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/all.min.css">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script>
     $(document).ready(function(){
        $("#btnIniciar").on("click", function(){
        var $usuario = $("#usuario");
        var $password = $("#password");
    
        if($usuario.val().length==0){
            $usuario.addClass("alert-danger");
            setTimeout(function(){
                $usuario.removeClass("alert-danger");
            },3000);
    
            $("#error").fadeIn(2000).delay(4000).fadeOut(2000);
        }
    
        if($password.val().length==0){
            $password.addClass("alert-danger");
            setTimeout(function(){
                $password.removeClass("alert-danger");
            },3000);
    
            $("#error").fadeIn(2000).delay(4000).fadeOut(2000);
        }
    });
        });
    </script>
    
    <script>
        $(function(){
            $boton = $("#btnIniciar");
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
                        window.location.href = "reservaciones.php";
                    }
                    //$("#mensaje").html(informacion);
                });
            });
        });

        </script>

 <!--modaal-->
      <script>
        $(document).ready(function(){
        $("#btnregistrar").on("click", function(){
        var $usuario = $("#usuario");
        var $password = $("#contrasena");
        var $email = $("#email");

        if($usuario.val().length==0){
            $usuario.addClass("alert-danger");
            setTimeout(function(){
                $usuario.removeClass("alert-danger");
            },3000);
    
            $("#error").fadeIn(2000).delay(4000).fadeOut(2000);
        }
    
        if($password.val().length==0){
            $password.addClass("alert-danger");
            setTimeout(function(){
                $password.removeClass("alert-danger");
            },3000);
    
            $("#error").fadeIn(2000).delay(4000).fadeOut(2000);
        }

        if($email.val().length==0){
            $email.addClass("alert-danger");
            setTimeout(function(){
                $email.removeClass("alert-danger");
            },3000);
    
            $("#error").fadeIn(2000).delay(4000).fadeOut(2000);
        }

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
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><i class="fa fa-home"></i> inicio</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            
            </div>
          </nav>
    </header>
                                         <!--modal-->
    <div class="modal fade" id="mimodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-primary" id="exampleModalLabel">Registarte</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
         <form action="registroProceso.php" method="POST">
         <div class="form-group">
                  <label>Nombre</label>
                  <input type="text" class="form-control" name="user" placeholder="Ingresa tu nombre de usuario">
              </div>
              <div class="form-group">
                <label>Contraseña</label>
                <input type="password" class="form-control" name="contrasena" placeholder="Contraseña">
              </div>
              <div class="form-group">
                <label>Correo electronico</label>
                <input type="email" class="form-control" name="email" placeholder="correo electronico">
              </div>
              <button class="btn btn-primary" id="brnRegistrar" >Registrarse</button>
         </form>
          </div>
        </div>
      </div>
    </div>

    <!--contenido-->
    <div class="row">
      <div class="col-8">
        <div class="jumbotron">
          <h1 class="display-4">Graduacion Unipoli</h1>
          <p class="lead">Generación 2018-2021</p>
          <hr class="my-4">
          <div class="col-8">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="img/logo.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="img/Durango.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="img/gorritos.jpg" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
          <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        </div>
      </div>
      <div class="col-4">
        <form>
            <section class="row container-fluid">
                <div class="col-md-12 col-lg-12 col-sm-12">
                    <form action="resultado.php" method="POST">
                <div class="form-group">
                    <label for="usuario">Usuario</label>
                    <div class="input-group">
                    <div class="input-group-prepend">
                      <i class="fa fa-user input-group-text"></i>
                    </div>
                    <input type="text" class="form-control" name="usuario" id="usuario">
                  </div>

                    <small class="form-text text-muted">Ingresa tu usuario</small>
                </div>

                <div class="form-group">
                        <label for="contrasena">Contraseña</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                              <i class="fas fa-lock input-group-text"></i>
                          </div>
                          <input type="password" class="form-control" name="password" id="password">
                        </div>

                        <small class="form-text text-muted">Ingresa tu contraseña</small>
                    </div>
          <p class="text-danger" id="error" style="display: none">Revisa tu nombre o contraseña</p>
          <div>
              
              <button class="btn btn-primary" id="btnIniciar">Iniciar Sesión</button>
              <i class="fa fa-spinner fa-pulse"></i>
              <div id="mensaje">
              
              </div>
            </form>
            
                <a class="btn btn-outline-primary" data-target="#mimodal" data-role="modal" data-toggle="modal" id=registrar> 
                  Registrate
              </a>
                  </div>
          
        </div>
      </section>
</div>
    </div>


      <!-- Footer -->
<footer class="page-footer font-small indigo">

  <!-- Footer Links -->
  <div class="container">

    <!-- Grid row-->
    <div class="row text-center d-flex justify-content-center pt-5 mb-3">


    </div>
    <!-- Grid row-->
    <hr class="rgba-white-light" style="margin: 0 15%;">

    <!-- Grid row-->
    <div class="row d-flex text-center justify-content-center mb-md-0 mb-4">

      <!-- Grid column -->
      <div class="col-md-8 col-12 mt-5">
        <p style="line-height: 1.7rem">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
          accusantium doloremque laudantium, totam rem
          aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
          explicabo.
          Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->
    <hr class="clearfix d-md-none rgba-white-light" style="margin: 10% 15% 5%;">

    <!-- Grid row-->
    <div class="row pb-3">

      <!-- Grid column -->
      <div class="col-md-12">

        <div class="mb-5 flex-center">

          <!-- Facebook -->
          <a class="fb-ic">
            <i class="fab fa-facebook-f fa-lg white-text mr-4"> </i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic">
            <i class="fab fa-twitter fa-lg white-text mr-4"> </i>
          </a>
          <!-- Google +-->
          <a class="gplus-ic">
            <i class="fab fa-google-plus-g fa-lg white-text mr-4"> </i>
          </a>
          <!--Linkedin -->
          <a class="li-ic">
            <i class="fab fa-linkedin-in fa-lg white-text mr-4"> </i>
          </a>
          <!--Instagram-->
          <a class="ins-ic">
            <i class="fab fa-instagram fa-lg white-text mr-4"> </i>
          </a>
          <!--Pinterest-->
          <a class="pin-ic">
            <i class="fab fa-pinterest fa-lg white-text"> </i>
          </a>

        </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019 Copyright:
    <a href="http://www.unipolidgo.edu.mx/sitio/"> UNIPOLI</a>
  </div>
  <!-- Copyright -->

</footer>
</body>
</html>