<?php

require_once 'config/config.php';
require_once 'model/DAO/MascotaDAO.php';
require_once 'model/DAO/CategoriaDAO.php';
require_once 'model/DTO/MascotaDTO.php';
class MascotaController{
    private $mascotaDAO;
    public function __construct(){
        $this->mascotaDAO=new MascotaDAO();
    }
    
    public function consultarTodos(){
        $resultados=$this->mascotaDAO->consultarTodos('');
    }
    public function buscar(){
        $criterio = isset($_REQUEST['b'])?$_REQUEST['b']:'';
        $resultados = $this->mascotaDAO->consultarTodos($criterio);

        require_once HEADER;
        require_once 'view/mascota/mascotaView.php';
        require_once FOOTER;
    }
    public function mostrar(){
        //lectura de parametros
        $id = isset($_REQUEST['id']) ? $_REQUEST['id']:'';
        if(!empty($id)){
            $macota = $this->mascotaDAO->consultarPorId($id);
        }
        $cat=$this->mostrarRaza();
        require_once HEADER;
        require_once 'view/mascota/mascotaEditarView.php';
        require_once FOOTER;
    }
    public function guardar(){
        $mas= new MascotaDTO();
        $mas->setMas_raza($_REQUEST['mas_raza']);
        $mas->setMas_nombre($_REQUEST['mas_nombre']);
        $mas->setMas_sexo($_REQUEST['mas_sexo']);
        $mas->setMas_fechaNacimiento($_REQUEST['mas_fechaNacimiento']);
        $numFilasAfectadas=0;
        $mensaje='';
        if(isset($_REQUEST['id']) && !empty($_REQUEST['id'])){
            $mas->setMas_idMascota($_REQUEST['id']);
            $numFilasAfectadas=$this->mascotaDAO->editar($mas);
            if($numFilasAfectadas > 0)
                $mensaje='editado exitosamente';
        }else{
            $numFilasAfectadas = $this->mascotaDAO->insertar($mas);
            if($numFilasAfectadas > 0)
                $mensaje='Guardado exitosamente';
        }
        if(!isset($_SESSION)){
            session_start();
        }
        if($numFilasAfectadas > 0)  $_SESSION['mensaje'] =$mensaje;
        else    $_SESSION['error'] = 'No se pudo guardar los datos';
        $this->buscar();
    }

    public function mostrarRaza(){
        $cat=new CategoriaDAO();
        return $cat->consultar();
    }

    public function eliminar(){
        $id = isset($_REQUEST['id']) ? $_REQUEST['id']:'';
        if(!empty($id)){
            $this->mascotaDAO->eliminar($id);
            //$actividad = $this->mascotaDAO->consultarPorId($id);
        }
        $this->buscar();   
    }
}