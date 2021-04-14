

<?php
class ClienteData
 {
	public static $tablename = "cliente";


	public function ClienteData(){
		$this->id = ""; 
		$this->nombre = "";
        $this->apellido = "";
        $this->cc = "";
	} 

   


	public function add(){
		$sql = "insert into cliente (nombre,apellido,cc) ";
		$sql .= "value (\"$this->nombre\",\"$this->apellido\",\"$this->cc\")";
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
		$sql = "select * from cliente where id='".$id."'";
		$query = Executor::doit($sql);
		return Model::one($query[0],new ClienteData());

	}


	public static function getAll(){
		$sql = "select * from ".self::$tablename." order by id desc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ClienteData());
	}

	
	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where id_empresa like '%$q%' or placa like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ClienteData());

	}

}

?>