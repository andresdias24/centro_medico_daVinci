<?php
session_start();
extract($_POST);
require"../Modelo/conexionBaseDatos.php";
require"../Modelo/Paciente.php";

$objPaciente= new Paciente();
$resultado=$objPaciente-> eliminarPacientes($_REQUEST['idPaciente']);
if($resultado) {
    ?>
    <script type="text/javascript">
    alert("el paciente fue eliminado correctamente");
    window.location.href='http://localhost/Vista/index2.php?pag=actualizarPaciente';
    </script>
    <?php
} else {
    ?>
    <script type="text/javascript">
    alert("No se pudo eliminar  el paciente");
    window.location.href='http://localhost/Vista/index2.php?pag#';
    </script>
    <?php
}