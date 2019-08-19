<?php

require_once 'config/config.php';
require_once 'model/DAO/ClienteDAO.php';
require_once 'model/DTO/ClienteDTO.php';
class ClienteController{
    private $clienteDAO;
    public function __construct(){
        $this->clienteDAO=new ClienteDAO();
    }
    
    public function consultarTodos(){
        $resultados=$this->clienteDAO->consultarTodos('');
    }
    public function buscar(){
        $criterio = isset($_REQUEST['b'])?$_REQUEST['b']:'';
        $resultados = $this->clienteDAO->consultarTodos($criterio);

        require_once HEADER;
        require_once 'view/cliente/clienteView.php';
        require_once FOOTER;
    }
    public function mostrar(){
        //lectura de parametros
        $id = isset($_REQUEST['id']) ? $_REQUEST['id']:'';
        if(!empty($id)){
            $cliente = $this->clienteDAO->consultarPorId($id);
        }
    //    $tiposAct=$this->mostrarTipoActividad();
        require_once HEADER;
        require_once 'view/cliente/clienteEditarView.php';
        require_once FOOTER;
    }
    public function guardar(){
        $cli= new ClienteDTO();
        $cli->setCli_cedula($_REQUEST['cli_cedula']);
        $cli->setCli_nombres($_REQUEST['cli_nombres']);
        $cli->setCli_apellidos($_REQUEST['cli_apellidos']);
        $cli->setCli_sexo($_REQUEST['cli_sexo']);
        $cli->setCli_fechaNacimiento($_REQUEST['cli_fechaNacimiento']);
        $numFilasAfectadas=0;
        $mensaje='';
        if(isset($_REQUEST['id']) && !empty($_REQUEST['id'])){
            $cli->setCli_idCliente($_REQUEST['id']);
            $numFilasAfectadas=$this->clienteDAO->editar($cli);
            if($numFilasAfectadas > 0)
                $mensaje='editado exitosamente';
        }else{
            $numFilasAfectadas = $this->clienteDAO->insertar($cli);
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
/*
    public function mostrarTipoActividad(){
        $tipo=new TipoclienteDAO();
        return $tipo->consultar();
    }
*/
    public function eliminar(){
        $id = isset($_REQUEST['id']) ? $_REQUEST['id']:'';
        if(!empty($id)){
            $this->clienteDAO->eliminar($id);
            //$actividad = $this->clienteDAO->consultarPorId($id);
        }
        $this->buscar();   
    }
}