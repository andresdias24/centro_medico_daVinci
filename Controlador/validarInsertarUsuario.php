<?php
session_start();
extract($_POST);
require"../Modelo/ConexionBaseDatos.php";
require"../Modelo/usuario.php";

$objMedico=New Usuario();
$objMedico->crearUsuario($_POST['usuario'],$_POST['password'],$_POST['estado'],$_POST['rol']);
$resultado=$objMedico->agregarUsuario();
if($resultado)
header("location:../Vista/index2.php?pag=insertarUsuario&msj=1");
else
header("location:../Vista/index2.php?pag=insertarUsuario&msj=2");