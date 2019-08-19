<?php
    class ClienteDTO{
        private $cli_idCliente;
        private $cli_cedula;
        private $cli_nombres;
        private $cli_apellidos;
        private $cli_sexo;
        private $cli_fechaNacimiento;
        private $cli_estado;
        private $cli_fechaAlta;

           
    public function __construct(){

    }

	public function getCli_idCliente() {
		return $this->cli_idCliente;
	}

	public function setCli_idCliente($cli_idCliente) {
		$this->cli_idCliente = $cli_idCliente;
	}

	public function getCli_cedula() {
		return $this->cli_cedula;
	}

	public function setCli_cedula( $cli_cedula) {
		$this->cli_cedula = $cli_cedula;
	}

	public function getCli_nombres() {
		return $this->cli_nombres;
	}

	public function setCli_nombres( $cli_nombres) {
		$this->cli_nombres = $cli_nombres;
	}

	public function getCli_apellidos() {
		return $this->cli_apellidos;
	}

	public function setCli_apellidos( $cli_apellidos) {
		$this->cli_apellidos = $cli_apellidos;
	}

	public function getCli_sexo() {
		return $this->cli_sexo;
	}

	public function setCli_sexo( $cli_sexo) {
		$this->cli_sexo = $cli_sexo;
	}

	public function getCli_fechaNacimiento() {
		return $this->cli_fechaNacimiento;
	}

	public function setCli_fechaNacimiento( $cli_fechaNacimiento) {
		$this->cli_fechaNacimiento = $cli_fechaNacimiento;
	}

	public function getCli_estado() {
		return $this->cli_estado;
	}

	public function setCli_estado( $cli_estado) {
		$this->cli_estado = $cli_estado;
	}

	public function getCli_fechaAlta() {
		return $this->cli_fechaAlta;
	}

	public function setCli_fechaAlta( $cli_fechaAlta) {
		$this->cli_fechaAlta = $cli_fechaAlta;
	}


     

    }

?>