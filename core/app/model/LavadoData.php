

<?php
class LavadoData
 {
	public static $tablename = "lavado";


	public function LavadoData(){
		$this->id = ""; 
        $this->fechadeentrada = "";
        $this->fechadesalida = "";
		$this->idcliente = "";
        $this->idvehiculo = "";
		$this->estado = "";

	} 

	public function update1(){
		$sql = "update ".self::$tablename."set idcliente=\"$this->idcliente\",idvehiculo=\"$this->idvehiculo\" where id=$this->id";
		return Executor::doit($sql);
	}

	public function update2(){
		$sql = "update lavado set idvehiculo='".$this->idvehiculo."',idcliente='".$this->idcliente."',estado='".$this->estado."' where id='".$this->id."'";
		return Executor::doit($sql);
	}


	public function update(){
		$sql = "update lavado set estado='".$this->estado."',fechadesalida='".$this->fechadesalida."' where id='".$this->id."'";
		return Executor::doit($sql);
	}


	public function add(){
		$sql = "insert into lavado (fechadeentrada,idcliente,idvehiculo) ";
		$sql .= "value (\"$this->fechadeentrada\",\"$this->idcliente\",\"$this->idvehiculo\")";
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
	
	public static function getByIdCliente($id){
		$sql = "select * from lavado where idcliente='".$id."'";
		$query = Executor::doit($sql);
		return Model::one($query[0],new LavadoData());

	}

	public static function getById($id){
		$sql = "select * from lavado where id='".$id."'";
		$query = Executor::doit($sql);
		return Model::one($query[0],new LavadoData());

	}

	public static function getByIdVehiculo($id){
		$sql = "select * from lavado where idvehiculo='".$id."'";
		$query = Executor::doit($sql);
		return Model::one($query[0],new LavadoData());

	}


	public static function getAll(){
		$sql = "select * from ".self::$tablename." order by id desc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new LavadoData());
	}

	
	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where id_empresa like '%$q%' or placa like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new LavadoData());

	}

	public static function getValidationId($id){
		$sql = "SELECT CASE
		WHEN EXISTS (SELECT @Result = 1
					 FROM   lavado
					 WHERE  id = '".$id."') THEN 1
		ELSE @Result = 0
	    END ";
		$query = Executor::doit($sql);
		return Model::one($query[0],new LavadoData());

	}


}

?>