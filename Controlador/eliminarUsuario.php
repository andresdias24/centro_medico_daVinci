<?php
session_start();
extract($_POST);
require"../Modelo/conexionBaseDatos.php";
require"../Modelo/Usuario.php";

$objMedico= new Usuario();
$resultado=$objMedico-> deleteUsuario($_REQUEST['usuario']);
if($resultado) {
    ?>
    <script type="text/javascript">
    alert("el usuario fue eliminado correctamente");
    window.location.href='http://localhost/Vista/index2.php?pag=actualizarUsuario';
    </script>
    <?php
} else {
    ?>
    <script type="text/javascript">
    alert("No se pudo eliminar el usuario");
    window.location.href='http://localhost/Vista/index2.php?pag=contenido#';
    </script>
    <?php
}