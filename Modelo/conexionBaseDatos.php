<?php

function Conectarse(){
	$ObjConexion = new mysqli("localhost","root","","centro_medico_daVinci");
	if($ObjConexion->connect_errno){
		echo "Error de conexión a la base de datos".$ObjConexion->connect_error;
		exit();
	}
	else{
		return $ObjConexion;
	}
}