<?php
session_start();
extract($_POST);
require"../Modelo/conexionBaseDatos.php";
require"../Modelo/Paciente.php";


$objMedico=New Paciente();
$objMedico->CrearPaciente($_POST['identificacion'],$_POST['nombres'],$_POST['apellidos'],$_POST['fechaNacimiento'],$_POST['sexo'],$_POST['idPaciente']);
$resultado=$objMedico->actualizarPaciente();
if($resultado)
header("location:../Vista/index2.php?pag=actualizarPaciente&msj=1"); //error
else
header("location:../Vista/index2.php?pag=actualizarPaciente&msj=2");