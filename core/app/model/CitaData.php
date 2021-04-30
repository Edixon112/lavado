<?php
class CitaData
 {
	public static $tablename = "cita";


	public function CitaData(){
		$this->id = ""; 
        $this->idcliente = "";
        $this->fechapedida = "";
		$this->estado = "";
      
	} 
	
	public function update(){
		$sql = "update ".self::$tablename." set fechapedida=\"$this->fechapedida\",estado=\"$this->estado\" where id=$this->id";
		return Executor::doit($sql);
	}

	public function add(){
		$sql = "insert into cita (fechapedida,idcliente,estado) ";
		$sql .= "value (\"$this->fechapedida\",\"$this->idcliente\",\"$this->estado\")";
		return Executor::doit($sql);
	}



	public static function delById($id){
		$sql = "delete from ".self::$tablename." where id=$id";
		return	Executor::doit($sql);
	}
	public function del(){
		$sql = "delete from ".self::$tablename." where id=$this->id";
		return	Executor::doit($sql);
	}

// partiendo de que ya tenemos creado un objecto ClienteData previamente utilizamos el contexto
	

	public static function getById($id){
		$sql = "select * from cita where id='".$id."'";
		$query = Executor::doit($sql);
		return Model::one($query[0],new CitaData());

	}

	public static function getByIdVehiculo($id){
		$sql = "select * from cita where celular='".$id."'";
		$query = Executor::doit($sql);
		return Model::one($query[0],new CitaData());

	}


	public static function getAll(){
		$sql = "select * from ".self::$tablename." order by id desc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new CitaData());
	}

	
	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where id_empresa like '%$q%' or placa like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new CitaData());

	}


	public static function contadorFecha($init,$tope){
		$sql = "select count(fechadeentrada) as catidad_de_fechas_en_rango from lavado
		where fechadeentrada
		BETWEEN '".$init."' AND '".$tope."'AND estado NOT IN (0)";
		$query = Executor::doit($sql);
		return Model::one($query[0],new CitaData());

	}

	public static function contadorFechacita($init,$tope){
		$sql = "select count(fechapedida) as catidad_de_fechas_en_rango from cita
		where fechapedida
		BETWEEN '".$init."' AND '".$tope."'AND estado NOT IN (0)";
		$query = Executor::doit($sql);
		return Model::one($query[0],new CitaData());

	}
	

}

?>