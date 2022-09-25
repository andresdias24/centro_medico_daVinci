<?php
session_start();
extract($_POST);
require"../Modelo/ConexionBaseDatos.php";
require"../Modelo/usuario.php";

$objMedico=New Usuario();
// validate usuario exist
$resultado=$objMedico->validarUsuario($_REQUEST['usuario']);
if($resultado->num_rows > 0){
    ?>
    <script type="text/javascript">
    alert("El usuario ya existe");
    window.location.href='http://localhost/Vista/index2.php?pag=actualizarUsuario';
    </script>
    <?php
}else{

$objMedico->crearUsuario($_POST['usuario'],$_POST['password'],$_POST['estado'],$_POST['rol']);
$resultado=$objMedico->agregarUsuario();
if($resultado)
header("location:../Vista/index2.php?pag=insertarUsuario&msj=1");
else
header("location:../Vista/index2.php?pag=insertarUsuario&msj=2");
}