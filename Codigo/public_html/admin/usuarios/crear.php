<?php
include '../../includes/app.php';

include '../../classes/usuario.php';
include '../../classes/vendedor.php';
estaAutenticado();
use App\Usuario;
use App\Vendedor;

    $errores = [];
    $usuario = new Usuario();

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $usuario = new Usuario($_POST['usuarios']);
        $errores = $usuario->getErroresForm();
        if(empty($errores)){
            $resultado = $usuario->crear();
            
            if($resultado){
                redireccionar('usuarios/index');
            }
        }
    }
    $id = $_SESSION['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);
    $vendedor1 = Vendedor::find($id);

    include '../../includes/templates/header_admin.php';
?>
<h2>Registro de clientes</h2>
<div class="text-center flex-center" id="alert">
    <?php foreach($errores as $error): ?>
        <div class="alert alert-danger w-50 ">
            <?php echo $error; ?>
        </div>
    <?php endforeach;?>
</div>
<form action="" method="post" class="p-4">
    <?php include '../../includes/templates/formulario_usuario.php' ?>
    <div class="flex-1">
        <div class="mb-3">
            <a href="/admin/usuarios/" class="btn btn-secondary mb-3">Volver</a>
            <input type="submit" class="btn btn-primary w-150 mb-3" value="Guardar Cambios">
        </div>
    </div>
</form>
<?php
    templates('footer_admin')
?>