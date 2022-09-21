<?php
    class Citas {
        private $idCita;
        private $fecha;
        private $hora;
        private $idPaciente;
        private $idMedico;
        private $idConsultorio;
        private $estado;
        private $observaciones;
        private $Conexion;

        public function crearCita($idCita,$fecha,$hora,$idPaciente,$idMedico,$idConsultorio,$estado,$observaciones) {
            $this->idCita=$idCita;
            $this->fecha=$fecha;
            $this->hora=$hora;
            $this->idPaciente=$idPaciente;
            $this->idMedico=$idMedico;
            $this->idConsultorio=$idConsultorio;
            $this->estado=$estado;
            $this->observaciones=$observaciones;
        }

        public function setIdCita($idCita) {
            $this->idCita=$idCita;
        }

        public function getIdCita() {
            return ($this->idCita);
        }

        public function setFecha($fecha) {
            $this->fecha=$fecha;
        }

        public function getFecha() {
            return ($this->fecha);
        }

        public function setHora($hora) {
            $this->hora=$hora;
        }

        public function getHora() {
            return ($this->hora);
        }

        public function getIdPaciente() {
            return ($this->idPaciente);
        }
        
        public function setIdPaciente($idPaciente) {
            $this->idPaciente=$idPaciente;
        }

        public function getIdMedico() {
            return ($this->idMedico);
        }

        public function setIdMedico($idMedico) {
            $this->idMedico=$idMedico;
        }

        public function getIdConsultorio() {
            return ($this->idConsultorio);
        }

        public function setIdConsultorio($idConsultorio) {
            $this->idConsultorio=$idConsultorio;
        }

        public function getEstado() {
            return ($this->estado);
        }

        public function setEstado($estado) {
            $this->estado=$estado;
        }

        public function getObservaciones() {
            return ($this->observaciones);
        }
        
        public function setObservaciones($observaciones) {
            $this->observaciones=$observaciones;
        }

        
	public function ListarCitas(){
		$this->Conexion=Conectarse();
		$sql="SELECT * from citas";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}


    }