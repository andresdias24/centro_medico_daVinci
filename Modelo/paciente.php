<?php
class Paciente
{
	private $identificacion;
	private $nombres;
	private $apellidos;
	private $sexo;
	private $fechaNacimiento;
	private $Conexion;
	
	public function setIdentificacion($identificacion)
	{
		$this->identificacion=$identificacion;
	}
	
	public function getIdentificacion()
	{
		return ($this->identificacion);
	}
	
	public function setNombres($nombres)
	{
		$this->nombres=$nombres;
	}
	
	public function getNombres()
	{
		return ($this->nombres);
	}
	
	public function setApellidos($apellidos)
	{
		$this->apellidos=$apellidos;
	}
	
	public function getApellidos()
	{
		return ($this->apellidos);
	}
	
	public function setSexo($sexo)
	{
		$this->sexo=$sexo;
	}
	
	public function getSexo()
	{
		return ($this->sexo);
	}
	
	public function setFechaNacimiento($fechaNacimiento)
	{
		$this->fechaNacimiento=$fechaNacimiento;
	}
	
	public function getFechaNacimiento()
	{
		return ($this->fechaNacimiento);
	}
	
	
	public function crearPaciente($identificacion,$nombres,$apellidos,$fechaNacimiento,$sexo)
	{
		$this->identificacion=$identificacion;
		$this->nombres=$nombres;
		$this->apellidos=$apellidos;
		$this->fechaNacimiento=$fechaNacimiento;
		$this->sexo=$sexo;
	}
	
	public function agregarPaciente()
	{	
		$this->Conexion=Conectarse();
		$sql="insert into pacientes(pacIdentificacion,pacNombres,pacApellidos,pacFechaNacimiento,pacSexo)
			values ('$this->identificacion','$this->nombres','$this->apellidos','$this->fechaNacimiento','$this->sexo')";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}

	public function consultarPaciente($identificacion)
	{
		$this->Conexion=Conectarse();
		$sql="select * from pacientes where pacIdentificacion='$identificacion'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
		public function ConsultarIdPaciente($idPaciente)
	{
		$this->Conexion=Conectarse();
		$sql="select * from pacientes where idPaciente='$idPaciente'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}

	public function actualizarPaciente()
	{	
		$this->Conexion=Conectarse();
		$sql="update pacientes set pacIdentificacion='$this->identificacion',pacNombres='$this->nombres',pacApellidos='$this->apellidos',pacFechaNacimiento='$this->fechaNacimiento',pacSexo='$this->sexo' where idPaciente = '$_POST[idPaciente]'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}

	public function ListarPacientes(){
		$this->Conexion=Conectarse();
		$sql="SELECT * from pacientes";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}	
		// delete medico
	public function eliminarPacientes($idPaciente){
		$this->Conexion=Conectarse();
		// deletee cita
		$sql1="delete  from citas WHERE `citPaciente` = $idPaciente;";
		$resultado=$this->Conexion->query($sql1);
		// deletee paciente
		$sql="delete from pacientes where idPaciente='$idPaciente'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	// validate  a foreign key constraint
	public function validarPaciente($idPaciente){
		$this->Conexion=Conectarse();
		$sql="select * from citas where citPaciente='$idPaciente' and citEstado='Asignado'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
}

?>