<?php 

include 'includes/app.php';

templates("header");
?>
<?php 
$Sid = $_GET['info'];
$ClaveVenta = $_GET['venta'];
$ClaveVenta = filter_var($ClaveVenta,FILTER_VALIDATE_INT);
$total = $_GET['total'];
$total = filter_var($total,FILTER_VALIDATE_FLOAT);
$respuestaVenta = "Existoso";

$mensajePaypal = '';
 if($_GET['status'] === 'aprobado'){
     $mensajePaypal="<h3>Pago aprobado</h3>";
     $sentencia = $pdo->prepare("UPDATE tblVenta 
     SET PaypalDatos = :PaypalDatos, status = 'aprobado'
     WHERE id = :id
      ");
      $sentencia->bindParam(":id",$ClaveVenta);
    $sentencia->bindParam(":PaypalDatos",$respuestaVenta);
      $sentencia->execute();

     $sentencia = $pdo->prepare("UPDATE tblVenta
   SET status = 'completo'
     WHERE ClaveTransaccion = :ClaveTransaccion and total = :total and id=:id
      ");
     $sentencia->bindParam(":id",$ClaveVenta);
    $sentencia->bindParam(":total",$total);
    $sentencia->bindParam(":ClaveTransaccion",$Sid);
    $sentencia->execute();
     session_destroy();
 }else{
     $mensajePaypal="<h3>Hay un problema con el pago de paypal</h3>";
}
?>
<header id="header" class="ex-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Pago</h1>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</header> <!-- end of ex-header -->
<div class="jumbotron m-5">
    <h1 class="display-4">¡ Listo !</h1>

    <div class="row">

            <div class="card">
                <div class="card-body text-center">
                    <?php echo $mensajePaypal ?>
                    <a href="/index.php" class="d-block btn btn-success">Volver a Inicio</a>
                </div>
            </div>
            
    </div>
    </p>
</div>

<?php 
templates("footer");
?>