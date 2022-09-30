<?php
include 'includes/app.php';

templates("header");
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $correo = $_POST['email'];
    $Sid = session_id();
    $total=0;
    foreach($_SESSION['carrito'] as $producto){
        $subtotal = $producto['cantidad'] * $producto['precio'];
        $descuento = ($subtotal*$producto['descuento']);
        $total = $total + ($subtotal - $descuento);
    }
    $sentencia = $pdo->prepare("INSERT INTO tblVenta(id, ClaveTransaccion,PaypalDatos,fecha,correo,total,status)
    values(NULL,:claveTransaccion,'',NOW(),:correo,:total,'pendiente')");
    $sentencia->bindParam(":claveTransaccion",$Sid);
    $sentencia->bindParam(":correo",$correo);
    $sentencia->bindParam(":total",$total);
    $sentencia->execute();
    $idVenta=$pdo->lastInsertId();

    $total=0;
    foreach($_SESSION['carrito'] as $indice=>$producto){
        $subtotal = $producto['cantidad'] * $producto['precio'];
        $descuento = ($subtotal*$producto['descuento']);
        $total = $total + ($subtotal - $descuento);
        $sentencia= $pdo->prepare("INSERT INTO tblDetalleVenta(id,idVenta,nombreProducto,precioUnitario,cantidad,descuento)
        values(null,:idVenta,:nombreProducto,:precioUnitario,:cantidad,:descuento)");
        $sentencia->bindParam(":idVenta",$idVenta);
        $sentencia->bindParam(":nombreProducto",$producto['nombre']);
        $sentencia->bindParam(":precioUnitario",$producto['precio']);
        $sentencia->bindParam(":cantidad",$producto['cantidad']);
        $sentencia->bindParam(":descuento",$producto['descuento']);
        $sentencia->execute();
    
    }

}

?>
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
    <!--Header-->
    <header id="header" class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Pago</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->
    <div class="container p-2">
        <div class="jumbotron text-center">
            <h1 class="display-4">¡Paso Final!</h1>
            <hr class="my-4">
            <p class="lead">Estas a punto de pagar con paypal la cantidad de: 
                <h4>$ <?php echo number_format($total,2); ?></h4>
            </p>
                <div id="paypal-button-container"></div>
                <p>Los productos podran ser descargados una vez que se procede el password_get_info
                <strong>(Para aclaraciones: turismo.dcs3@gmail.com)</strong>
                </p>
        </div>    
    </div>
    
    <script>
        paypal.Button.render({
        env: 'production', // Optional: specify 'sandbox'||production environment
        style : {
            label:'checkout',
            size: 'responsive',
            shape: 'pill',
            color:'gold'
        },
        client: {
            sandbox:    'Ad210rhCei-ENgj6wZWSkFtY2SQukkKqQleTvt1gNjHhcI2zjcif91kojMKgyhXlkxEK342uiT9-2QX_',
            production: 'AQd4wMJP2MVhIplG7MjMQg6-_NeFZvGaTPowIKRKyCvQCQACqlQVgRRqyD0el847LaEFLCqakBOa8NJb'
        },
        commit: true, // Optional: show a 'Pay Now' button in the checkout flow
        payment: function (data, actions) {
            return actions.payment.create({
            payment: {
                transactions: [
                {
                    amount: {
                        total: <?php echo $total?>,
                        currency: 'USD'
                    },
                    description: "Compras de productos develoteca: $<?php echo number_format($total,2); ?>"
                }
                ]
            }
            });
        },
        onAuthorize: function (data, actions) {
            return actions.payment.execute().then(function(){
                window.location=
                "verificador.php?info=<?php echo $Sid; ?>&total=<?php echo $total ?>&venta=<?php echo $idVenta ?>&status=aprobado";
            });
            }
        }, '#paypal-button-container');
</script>

<?php 
templates("footer");
?>