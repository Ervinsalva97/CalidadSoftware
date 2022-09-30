<?php

include '../../includes/app.php';
include '../../classes/Lugar.php';
include '../../classes/vendedor.php';
estaAutenticado();
use App\Lugar;
use App\Vendedor;

    $lugares = Lugar::all();

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $id = $_POST['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);
        if($id){
            $lugar = Lugar::find($id);
            $resultado=$lugar->eliminar();
            if($resultado){
                redireccionar("lugares/index");
            }
        }
    }
    $id = $_SESSION['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);
    $vendedor1 = Vendedor::find($id);

    include '../../includes/templates/header_admin.php';
?>
<h2>Lista de lugares turistico</h2>

<div>
    <a class="btn btn-primary" href="/admin/lugares/crear.php">
        Registrar Lugar turistico
    </a>
</div>
<div class="table-responsive">
    <table class="table table-striped" style="width:100%"  id='example'>
        <thead>
            <tr>
                <th>Lugar</th>
                <th>descripcion</th>
                <th>Departamento</th>
                <th>Provincia</th>
                <th>Precio</th>
                <th>Descuento</th>
                <th>Total</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($lugares as $lugar): ?>
            <tr>
                <td><?php echo $lugar->nombre ?></td>
                <td><?php echo $lugar->descripcion ?></td>
                <td><?php echo $lugar->departamento?></td>
                <td><?php echo $lugar->provincia ?></td>
                <td><?php echo $lugar->precio ?></td>
                <td><?php echo $lugar->descuento ?></td>
                <td><?php 
                    $precio = $lugar->precio;
                    $descuento = $lugar->precio*$lugar->descuento;
                    $subtotal = round($precio - $descuento,2);
                    echo $subtotal;
                ?></td>
                <td>
                    <a class="btn btn-warning mb-2" href="/admin/lugares/actualizar.php?id=<?php echo $lugar->id?>">Editar</a>
                    <form method="POST">
                        <input type="hidden" name="id" value="<?php echo $lugar->id ?>">
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