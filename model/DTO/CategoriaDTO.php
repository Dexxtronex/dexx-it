<?php
    class CategoriaDTO{
        private $cat_idCategoria;
        private $cat_descripcion;
        private $cat_tipo;
        private $cat_estado;
        private $cat_fechaAlta;

    public function __construct(){

    }
    
	public function getCat_idCategoria() {
		return $this->cat_idCategoria;
	}

	public function setCat_idCategoria( $cat_idCategoria) {
		$this->cat_idCategoria = $cat_idCategoria;
	}

	public function getCat_descripcion() {
		return $this->cat_descripcion;
	}

	public function setCat_descripcion( $cat_descripcion) {
		$this->cat_descripcion = $cat_descripcion;
	}

	public function getCat_tipo() {
		return $this->cat_tipo;
	}

	public function setCat_tipo( $cat_tipo) {
		$this->cat_tipo = $cat_tipo;
	}

	public function getCat_estado() {
		return $this->cat_estado;
	}

	public function setCat_estado( $cat_estado) {
		$this->cat_estado = $cat_estado;
	}

	public function getCat_fechaAlta() {
		return $this->cat_fechaAlta;
	}

	public function setCat_fechaAlta( $cat_fechaAlta) {
		$this->cat_fechaAlta = $cat_fechaAlta;
	}

    }
?>