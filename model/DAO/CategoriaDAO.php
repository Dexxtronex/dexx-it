<?php
require_once 'model/conexion.php';
require_once 'model/DTO/CategoriaDTO.php';
class CategoriaDAO {
	//Manejo de datos de actiidades
	private $conexion;

	public function __construct(){
		$this->conexion = Conexion :: getConexion();
	}
	public function consultar(){
		try{
			$sentencia = $this->conexion->prepare(
				"select * from categoria where cat_estado='H' ");
			$parametros = array();
			$sentencia->execute($parametros);
			$resultSet = $sentencia->fetchAll(PDO::FETCH_OBJ);
			return $resultSet;
		} catch (Exception $e) {
			die($e->getMessage());
			die($e->trace());
		}
	}
	public function consultarTodos($descripcion,$tipo){
		try{
        $sentencia=$this->conexion->prepare("select * from categoria where cat_descripcion LIKE  CONCAT('%',?,'%') and  cat_tipo = ? and cat_estado = 'H' ");
		$arrayParametros = array($descripcion,$tipo);
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
        $sentencia=$this->conexion->prepare("select * from categoria  where cat_idCategoria = ? and cat_estado = 'H'");
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
	public function insertar(CategoriaDTO $cat){
		try{
     	$sentencia=$this->conexion->prepare("insert into categoria"
			."(cat_descripcion,cat_tipo) values(?,?)");
		$arrayParametros = array(
			$cat->getCat_cat_descripcion(),
			$cat->getCat_cat_tipo());

			$sentencia->execute($arrayParametros);
			return $sentencia->rowCount();
		}catch(Exception $e){
			die($e->getMessage());
			//die($e->getTrace());
		}
    }
    public function editar(Actividad $act){
		try{

			$sentencia=$this->conexion->prepare("update categoria set cat_descripcion=?, cat_tipo=? where cat_idCategoria=?");
			$arrayParametros = array(
				$act->getCat_cat_descripcion(),
				$act->getCat_cat_tipo(),
				$act->getCat_idCategoria()
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
        $sentencia=$this->conexion->prepare("update categoria set "
			."cat_estado= 'D' where cat_idCategoria=?");
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
