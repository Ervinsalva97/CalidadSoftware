<?php
include '../../includes/app.php';
include '../../classes/Paquete.php';
include '../../classes/vendedor.php';
estaAutenticado();
use App\Paquete;
use App\Vendedor;
    $paquetes = Paquete::all();

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $id= $_POST['id'];
        $id = filter_var($id,FILTER_VALIDATE_INT);

        if($id){
            $paquete = Paquete::find($id);
            $resultado = $paquete->eliminar();
            if($resultado){
                redireccionar('paquetes/index');
            }
        }
    }

$id = $_SESSION['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);
    $vendedor1 = Vendedor::find($id);

    include '../../includes/templates/header_admin.php';
?>
    <div>
        <h2>Lista de Paquetes</h2>
    </div>
    <div>
        <a class="btn btn-primary" href="/admin/paquetes/crear.php">
        Registrar Paquete
        </a>
    </div>
    <div class="table-responsive">
        <table class="table table-striped" style="width:100%"  id='example'>
            <thead>
                <tr>
                    <th>Codigo de Paquete</th>
                    <th>contenido</th>
                    <th>Precio</th>
                    <th>Descuento</th>
                    <th>Cantidad</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($paquetes as $paquete): ?>
                    <tr>
                        <td>
                            <?php echo $paquete->codpaquete ?>
                        </td>
                        <td>
                            <?php echo $paquete->contenido ?>
                        </td>
                        <td>
                            <?php echo $paquete->precio ?>
                        </td>
                        <td>
                            <?php echo round($paquete->descuento*100,2).'%' ?>
                        </td>
                        <td>
                            <?php echo $paquete->cantidad ?>
                        </td>
                        <td>
                            <a class="btn btn-warning mb-2" href="/admin/paquetes/actualizar.php?id=<?php echo $paquete->id?>">Editar</a>
                            <form method="POST">
                                <input type="hidden" name="id" value="<?php echo $paquete->id ?>">
                                <input type="submit" class="btn btn-danger" value="Eliminar">
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?php
    templates('footer_admin')
?>