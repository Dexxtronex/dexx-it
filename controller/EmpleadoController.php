<?php

require_once 'config/config.php';
require_once 'model/DAO/EmpleadoDAO.php';
require_once 'model/DTO/EmpleadoDTO.php';
class EmpleadoController{
    private $empleadoDAO;
    public function __construct(){
        $this->empleadoDAO=new EmpleadoDAO();
    }
    
    public function consultarTodos(){
        $resultados=$this->empleadoDAO->consultarTodos('');
    }
    public function buscar(){
        $criterio = isset($_REQUEST['b'])?$_REQUEST['b']:'';
        $resultados = $this->empleadoDAO->consultarTodos($criterio);

        require_once HEADER;
        require_once 'view/empleado/empleadoView.php';
        require_once FOOTER;
    }
    public function mostrar(){
        //lectura de parametros
        $id = isset($_REQUEST['id']) ? $_REQUEST['id']:'';
        if(!empty($id)){
            $empleado = $this->empleadoDAO->consultarPorId($id);
        }
    //    $tiposAct=$this->mostrarTipoActividad();
        require_once HEADER;
        require_once 'view/empleado/empleadoEditarView.php';
        require_once FOOTER;
    }
    public function guardar(){
        $emp= new EmpleadoDTO();
        $emp->setEmp_raza($_REQUEST['emp_idCargo']);
        $emp->setEmp_cedula($_REQUEST['emp_cedula']);
        $emp->setEmp_nombre($_REQUEST['emp_nombres']);
        $emp->setEmp_apellidos($_REQUEST['emp_apellidos']);
        $emp->setEmp_sexo($_REQUEST['emp_sexo']);
        $emp->setEmp_fechaNacimiento($_REQUEST['emp_fechaNacimiento']);
        $numFilasAfectadas=0;
        $mensaje='';
        if(isset($_REQUEST['id']) && !empty($_REQUEST['id'])){
            $emp->setEmp_idEmpleado($_REQUEST['id']);
            $numFilasAfectadas=$this->empleadoDAO->editar($emp);
            if($numFilasAfectadas > 0)
                $mensaje='editado exitosamente';
        }else{
            $numFilasAfectadas = $this->empleadoDAO->insertar($emp);
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
        $tipo=new TipoempleadoDAO();
        return $tipo->consultar();
    }
*/
    public function eliminar(){
        $id = isset($_REQUEST['id']) ? $_REQUEST['id']:'';
        if(!empty($id)){
            $this->empleadoDAO->eliminar($id);
            //$actividad = $this->empleadoDAO->consultarPorId($id);
        }
        $this->buscar();   
    }
}