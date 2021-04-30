<?php
class VehiculoData
 {
	public static $tablename = "vehiculo";


	public function VehiculoData(){
		$this->id = ""; 
		$this->placa = "";
        $this->marca = "";
		$this->id_tipo = "";
	} 

	public function update2(){
		$sql = "update ".self::$tablename." set placa=\"$this->placa\",marca=\"$this->marca\"
		,id_tipo=\"$this->id_tipo\" where id=$this->id";
		return Executor::doit($sql);
	}


	public function add(){
		$sql = "insert into vehiculo (placa,marca,id_tipo) ";
		$sql .= "value (\"$this->placa\",\"$this->marca\",\"$this->id_tipo\")";
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
		$sql = "select * from vehiculo where id='".$id."'";
		$query = Executor::doit($sql);
		return Model::one($query[0],new VehiculoData());

	}


	public static function getAll(){
		$sql = "select * from ".self::$tablename." order by id desc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new VehiculoData());
	}

	
	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where id_empresa like '%$q%' or placa like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new VehiculoData());

	}

}

?>