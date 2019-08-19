<?php
    class EmpleadoDTO{
        private $emp_idEmpleado;
        private $emp_idCargo;
        private $emp_cedula;
        private $emp_nombres;
        private $emp_apellidos;
        private $emp_sexo;
        private $emp_fechaNacimiento;
        private $emp_estado;
        private $emp_fechaAlta;


	public function getEmp_idEmpleado() {
		return $this->emp_idEmpleado;
	}

	public function setEmp_idEmpleado( $emp_idEmpleado) {
		$this->emp_idEmpleado = $emp_idEmpleado;
	}

	public function getEmp_idCargo() {
		return $this->emp_idCargo;
	}

	public function setEmp_idCargo( $emp_idCargo) {
		$this->emp_idCargo = $emp_idCargo;
	}

	public function getEmp_cedula() {
		return $this->emp_cedula;
	}

	public function setEmp_cedula( $emp_cedula) {
		$this->emp_cedula = $emp_cedula;
	}

	public function getEmp_nombres() {
		return $this->emp_nombres;
	}

	public function setEmp_nombres( $emp_nombres) {
		$this->emp_nombres = $emp_nombres;
	}

	public function getEmp_apellidos() {
		return $this->emp_apellidos;
	}

	public function setEmp_apellidos( $emp_apellidos) {
		$this->emp_apellidos = $emp_apellidos;
	}

	public function getEmp_sexo() {
		return $this->emp_sexo;
	}

	public function setEmp_sexo( $emp_sexo) {
		$this->emp_sexo = $emp_sexo;
	}

	public function getEmp_fechaNacimiento() {
		return $this->emp_fechaNacimiento;
	}

	public function setEmp_fechaNacimiento( $emp_fechaNacimiento) {
		$this->emp_fechaNacimiento = $emp_fechaNacimiento;
	}

	public function getEmp_estado() {
		return $this->emp_estado;
	}

	public function setEmp_estado( $emp_estado) {
		$this->emp_estado = $emp_estado;
	}

	public function getEmp_fechaAlta() {
		return $this->emp_fechaAlta;
	}

	public function setEmp_fechaAlta( $emp_fechaAlta) {
		$this->emp_fechaAlta = $emp_fechaAlta;
	}

        public function __construct(){

        }
    }
?>