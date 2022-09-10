<?php
session_start();
extract($_POST);
require"../Modelo/conexionBaseDatos.php";
require"../Modelo/Usuario.php";

$objMedico=New Usuario();
$objMedico->crearUsuario($_POST['usuario'],$_POST['password'],$_POST['estado'],$_POST['rol']);
$resultado=$objMedico-> updateUsuario($_REQUEST['usuario']);
if($resultado)
header("location:../Vista/index2.php?pag=actualizarUsuario&msj=3");
else
header("location:../Vista/index2.php?pag=actualizarUsuario&msj=4");