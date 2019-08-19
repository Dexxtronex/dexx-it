<?php
require_once 'model/conexion.php';
require_once 'model/DTO/MascotaDTO.php';
class MascotaDAO {
	//Manejo de datos de actiidades
	private $conexion;

	public function __construct(){
		$this->conexion = Conexion :: getConexion();
	}

	public function consultarTodos($nombre){
		try{
        $sentencia=$this->conexion->prepare("select * from mascota join categoria on cat_idCategoria = mas_raza where mas_nombre LIKE  CONCAT('%',?,'%') and mas_estado = 'H' ");

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
        $sentencia=$this->conexion->prepare("select * from mascota  where mas_idMascota = ? and mas_estado = 'H'");
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
	public function insertar(MascotaDTO $mas){
		try{
     	$sentencia=$this->conexion->prepare("insert into mascota"
			."(mas_idRaza,mas_codigo,mas_nombre,mas_sexo,mas_fechaNacimiento) values(?,?,?,?,?)");
		$arrayParametros = array(
            $mas->getMas_idRaza(),
            $mas->getMas_codigo(),
            $mas->getMas_nombre(),
            $mas->getMas_sexo(),
			$mas->getMas_fechaNacimiento());

			$sentencia->execute($arrayParametros);
			return $sentencia->rowCount();
		}catch(Exception $e){
			die($e->getMessage());
			//die($e->getTrace());
		}
    }
    public function editar(MascotaDTO $mas){
		try{

			$sentencia=$this->conexion->prepare("update mascota set mas_idRaza=?, mas_codigo=? , mas_nombre=?, mas_sexo=?, mas_fechaNacimiento=? where mas_idMascota=?");
			$arrayParametros = array(
                $mas->getMas_idRaza(),
                $mas->getMas_codigo(),
                $mas->getMas_nombre(),
                $mas->getMas_sexo(),
                $mas->getMas_fechaNacimiento(),
                $mas->getMas_idMascota()
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
        $sentencia=$this->conexion->prepare("update mascota set "
			."mas_estado= 'D' where mas_idMascota=?");
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
