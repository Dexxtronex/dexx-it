<?php
require_once 'model/conexion.php';
require_once 'model/DTO/ClienteDTO.php';
class ClienteDAO {
	//Manejo de datos de actiidades
	private $conexion;

	public function __construct(){
		$this->conexion = Conexion :: getConexion();
	}

	public function consultarTodos($nombre){
		try{
        $sentencia=$this->conexion->prepare("select * from cliente where cli_cedula LIKE  CONCAT('%',?,'%') cli_estado = 'H' ");
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
        $sentencia=$this->conexion->prepare("select * from cliente  where cli_idCliente = ? and cli_estado = 'H'");
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
	public function insertar(ClienteDTO $cli){
		try{
     	$sentencia=$this->conexion->prepare("insert into cliente"
			."(cli_cedula,cli_nombres,cli_apellidos,cli_sexo,cli_fechaNacimiento) values(?,?,?,?,?)");
		$arrayParametros = array(
            $cli->getCli_cedula(),
            $cli->getCli_nombres(),
            $cli->getCli_apellidos(),
            $cli->getCli_sexo(),
			$cli->getCli_fechaNacimiento());

			$sentencia->execute($arrayParametros);
			return $sentencia->rowCount();
		}catch(Exception $e){
			die($e->getMessage());
			//die($e->getTrace());
		}
    }
    public function editar(ClienteDTO $cli){
		try{

			$sentencia=$this->conexion->prepare("update cliente set cli_cedula=?, cli_nombres=? , cli_apellidos=?, cli_sexo=?, cli_fechaNacimiento=? where cli_idCliente=?");
			$arrayParametros = array(
                $cli->getCli_cedula(),
                $cli->getCli_nombres(),
                $cli->getCli_apellidos(),
                $cli->getCli_sexo(),
                $cli->getCli_fechaNacimiento(),
                $cli->getCli_idCliente()
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
        $sentencia=$this->conexion->prepare("update cliente set "
			."cli_estado= 'D' where cli_idCliente=?");
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
