<?php
session_start();

$sesion = $_SESSION["usuario"];

if(!isset($sesion)){
    header("Location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VIP</title>
    <link rel="stylesheet" href="css/main.css">
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js" ></script>
    <script>
    $(function(){
        $paquetes = $("#paquete1, #paquete2, #paquete3");
        $paquetes.on("change",function(){
          var numero = $(this).val();
          var $precioCaja = $(this).next("h4");
          var precio = "$" + ($precioCaja.attr("data-precio")*numero);
          $precioCaja.text(precio);
        });

        $("#modalConfirmar").modal({
         show:false
        });
        
        $("#btnConfirmar").on("click",function(){
            $("#modalConfirmar").modal("show")
        });
    });
    </script>
    <style>
    img{
        width: 50%;
    }
    </style>
</head>
<body>

    <section class="container-fluid">
    <section class="row">
     <h3>Selecciona el paquete para la cena</h3>
     <div class="col-md-4">
     <h4>Básico</h4>
     <img src="img/100.png" alt="platillo1">
     <input type="number" id="paquete1" value="0" min="0" max="10">
     <h4 data-precio="100">$100</h4>
     </div>
     <div class="col-md-4">
     <h4>Medio</h4>
     <img src="img/500.png" alt="platillo2">
     <input type="number" id="paquete2" value="0" min="0" max="10">
     <h4 data-precio="500">$500</h4>
     </div>
     <div class="col-md-4">
     <h4>Premium</h4>
     <img src="img/1000.png" alt="platillo3">
     <input type="number" id="paquete3" value="0" min="0" max="10">
     <h4 data-precio="1000">$1000</h4>
     </div>
     <div class="col-md-12">
         <button id="btnConfirmar" class="btn btn-primary">
             Confirmar
         </button>
     </div>
    </section>
    </section>

    <div class="modal" tabindex="-1" role="dialog" id="modalConfirmar">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>¿Desea confirmar su selección?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Aceptar</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>