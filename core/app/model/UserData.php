<?php
class UserData {
	public static $tablename = "user";//NOMBRE EN LA BASE DE DATOS 


	public function UserData(){
		$this->id = ""; 
		$this->nombre =null;
		$this->cc = null;
        $this->email = null; 
		$this->telefono =null;
		$this->rol = null;
		$this->user = null; 
		$this->pass = null;
       
	} 

  

	public function add(){
		$sql = "insert into user (nombre,cc,email,telefono,rol,user,pass) ";
		$sql .= "value (\"$this->nombre\",\"$this->cc\",\"$this->email\",\"$this->telefono\",\"$this->rol\",\"$this->user\",\"$this->pass\")";
		return Executor::doit($sql);
	}

	public function add2(){
		$sql = "insert into user (nombre)";
		$sql .= "value (".$this->nombre.")";
		return Executor::doit($sql);
	}

	public function add3(){
		$sql = "insert into user (nombre)";
		$sql .= "value (\"$this->nombre\")";
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
	public function update(){
		$sql = "update user set pass='".$this->pass."' where id='".$this->id."'";
		return	Executor::doit($sql);
	}




	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new UserData());

	}

	public static function getByIdCC($id){
		$sql = "select * from ".self::$tablename." where cc='".$id."'";
		$query = Executor::doit($sql);
		return Model::one($query[0],new UserData());

	}



	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new UserData());
	}

	
	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where nombre like '%$q%' or cc like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new UserData());

	}


}

?>