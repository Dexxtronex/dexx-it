<?php
    class MascotaDTO{

        private $mas_idMascota;
        private $mas_idRaza;
        private $mas_codigo;
        private $mas_nombre;
        private $mas_sexo;
        private $mas_fechaNacimiento;
        private $mas_estado;
        private $mas_fechaAlta;

    public function __construct(){

    }
        
	public function getMas_idMascota() {
		return $this->mas_idMascota;
	}

	public function setMas_idMascota( $mas_idMascota) {
		$this->mas_idMascota = $mas_idMascota;
	}

	public function getMas_idRaza() {
		return $this->mas_idRaza;
	}

	public function setMas_idRaza( $mas_idRaza) {
		$this->mas_idRaza = $mas_idRaza;
	}

	public function getMas_codigo() {
		return $this->mas_codigo;
	}

	public function setMas_codigo( $mas_codigo) {
		$this->mas_codigo = $mas_codigo;
	}

	public function getMas_nombre() {
		return $this->mas_nombre;
	}

	public function setMas_nombre( $mas_nombre) {
		$this->mas_nombre = $mas_nombre;
	}

	public function getMas_sexo() {
		return $this->mas_sexo;
	}

	public function setMas_sexo( $mas_sexo) {
		$this->mas_sexo = $mas_sexo;
	}

	public function getMas_fechaNacimiento() {
		return $this->mas_fechaNacimiento;
	}

	public function setMas_fechaNacimiento( $mas_fechaNacimiento) {
		$this->mas_fechaNacimiento = $mas_fechaNacimiento;
	}

	public function getMas_estado() {
		return $this->mas_estado;
	}

	public function setMas_estado( $mas_estado) {
		$this->mas_estado = $mas_estado;
	}

	public function getMas_fechaAlta() {
		return $this->mas_fechaAlta;
	}

	public function setMas_fechaAlta( $mas_fechaAlta) {
		$this->mas_fechaAlta = $mas_fechaAlta;
	}

    }
?>