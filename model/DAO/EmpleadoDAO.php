<?php
require_once 'model/conexion.php';
require_once 'model/DTO/MascotaDTO.php';
class EmpleadoDAO {
	//Manejo de datos de actiidades
	private $conexion;

	public function __construct(){
		$this->conexion = Conexion :: getConexion();
	}

	public function consultarTodos($nombre){
		try{
        $sentencia=$this->conexion->prepare("select * from empleado where emp_cedula LIKE  CONCAT('%',?,'%') emp_estado = 'H' ");
		$arrayParametros = array($nombre);
		$sentencia->execute($arrayParametros);
		$resultSet = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $resultSet;
        }catch(Exception $e){
        die($e->getMessage());
        die($e->getTrace());
        }
	}

	public function consultarPorId($id){
        try{
        $sentencia=$this->conexion->prepare("select * from empleado  where emp_idEmpleado = ? and emp_estado = 'H'");
		$arrayParametros = array($id);
		$sentencia->execute($arrayParametros);
		$resultSet = $sentencia->fetchAll(PDO::FETCH_OBJ);
		if(count($resultSet)>0)
			return $resultSet[0];
		else
            return $resultSet;
        }catch(Exception $e){
			die($e->getMessage());
			die($e->getTrace());
		}
	}
	public function insertar(EmpleadoDTO $emp){
		try{
     	$sentencia=$this->conexion->prepare("insert into empleado"
			."(emp_idCargo,emp_cedula,emp_nombres,emp_apellidos,emp_sexo,emp_fechaNacimiento) values(?,?,?,?,?,?)");
		$arrayParametros = array(
            $emp->getEmp_idCargo(),
            $emp->getEmp_cedula(),
            $emp->getEmp_nombres(),
			$emp->getEmp_apellidos(),
			$emp->getEmp_sexo(),
			$emp->getEmp_fechaNacimiento());

			$sentencia->execute($arrayParametros);
			return $sentencia->rowCount();
		}catch(Exception $e){
			die($e->getMessage());
			//die($e->getTrace());
		}
    }
    public function editar(EmpleadoDTO $emp){
		try{

			$sentencia=$this->conexion->prepare("update mascota set emp_idCargo=?, emp_cedula=? , emp_nombres=?, emp_apellidos=?, emp_sexo=? ,emp_fechaNacimiento=?  where emp_idEmpleado=?");
			$arrayParametros = array(
				$emp->getEmp_idCargo(),
				$emp->getEmp_cedula(),
				$emp->getEmp_nombres(),
				$emp->getEmp_apellidos(),
				$emp->getEmp_sexo(),
				$emp->getEmp_fechaNacimiento(),
                $emp->getEmp_idEmpleado()
            );
			$sentencia->execute($arrayParametros);
			return $sentencia->rowCount();
		}catch(Exception $e){
			die($e->getMessage());
			die($e->getTrace());
		}
	}
	public function eliminar($id){
        try{
        $sentencia=$this->conexion->prepare("update empleado set "
			."emp_estado= 'D' where emp_idEmpleado=?");
		$arrayParametros = array(
			$id
		);
        $sentencia->execute($arrayParametros);
        return $sentencia->rowCount();
	}catch(Exception $e){
        die($e->getMessage());
        die($e->getTrace());
    }
}
}
