

<?php
class ClienteData
 {
	public static $tablename = "cliente";


	public function ClienteData(){
		$this->id = "";
		$this->nombre = "";
        $this->apellido = "";
        $this->cc = "";
		$this->celular = "";
		$this->activo = 0;
		$this->idempresa = ""; 
	} 

   
	public function add(){
		$sql = "insert into cliente (nombre,apellido,cc,celular,activo,idempresa) ";
		$sql .= "value (\"$this->nombre\",\"$this->apellido\",\"$this->cc\",\"$this->celular\",\"$this->activo\",\"$this->idempresa\")";
		return Executor::doit($sql);
	}


	public function update(){
		$sql = "update cliente set 
		nombre='".$this->nombre."',
		apellido='".$this->apellido."',
		cc='".$this->cc."',
		celular'".$this->celular."',
		idempresa'".$this->idempresa."'
		where id='".$this->id."'";
		return	Executor::doit($sql);
	}

	public function update2(){
		$sql = "update ".self::$tablename." set nombre=\"$this->nombre\",apellido=\"$this->apellido\"
		,cc=\"$this->cc\",celular=\"$this->celular\",activo=\"$this->activo\" where id=$this->id";
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

	public static function getByCC($cedula){
		$sql = "select * from cliente where cc='".$cedula."'";
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