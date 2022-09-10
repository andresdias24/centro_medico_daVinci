<?php
session_start();
extract($_POST);
require"../Modelo/conexionBaseDatos.php";
require"../Modelo/Medico.php";

$objMedico= new Medico();
$resultado=$objMedico-> eliminarMedico($_REQUEST['idMedico']);
if($resultado) {
    ?>
    <script type="text/javascript">
    alert("el usuario fue eliminado correctamente");
    window.location.href='http://localhost/Vista/index2.php?pag=actualizarMedico';
    </script>
    <?php
} else {
    ?>
    <script type="text/javascript">
    alert("No se pudo eliminar el usuario");
    window.location.href='http://localhost/Vista/index2.php?pag#';
    </script>
    <?php
}