<?php
class ApiData
{

	public static $tablename = "api";


	public function ApiData(){
		$this->id = ""; 
        $this->token = "";
        $this->idinstance = "";
		$this->telefono = "";
        $this->idempresa ="";
	} 


    public function add(){
		$sql = "insert into  ".self::$tablename." (token,idinstance,telefono,idempresa) ";
		$sql .= "value (\"$this->token\",\"$this->idinstance\",\"$this->telefono\",\"$this->idempresa\")";
        return Executor::doit($sql);
	}


    public function update(){
		$sql = "update ".self::$tablename." set 
        token=\"$this->token\", 
        idinstance=\"$this->idinstance\",
        idempresa=\"$this->telefono\", 
        idempresa=\"$this->idempresa\"
        where id=$this->id";
		return Executor::doit($sql);
	}


    public static function getAll(){
		$sql = "select * from ".self::$tablename." order by id desc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ApiData());
	}


    public static function getById($id){
		$sql = "select * from ".self::$tablename." where id='".$id."'";
		$query = Executor::doit($sql);
		return Model::one($query[0],new ApiData());
	}


    public static function getByIdEmpresa($id){
		$sql = "select * from ".self::$tablename." where idemresa='".$id."'";
		$query = Executor::doit($sql);
		return Model::one($query[0],new ApiData());
	}


    public static function delById($id){
		$sql = "delete from ".self::$tablename." where id=$id";
		return	Executor::doit($sql);
	}


    public function enviarMensajeAdmin($texto)
    {
        $admins = UserData::getAll();

        foreach ($admins as $admin) :
            $data = [
                'phone' => "57" . $admin->telefono . "", // Receivers phone

                'body' => $texto, // Message
            ];
            $json = json_encode($data); // Encode data to JSON
            // URL for request POST /message
            $token = $this->token;
            $instanceId = $this->instanceId;
            $url = 'https://api.chat-api.com/instance' . $instanceId . '/message?token=' . $token;
            // Make a POST request
            $options = stream_context_create([
                'http' => [
                    'method'  => 'POST',
                    'header'  => 'Content-type: application/json',
                    'content' => $json
                ]
            ]);

            // Send a request
            $result = file_get_contents($url, false, $options);

        endforeach;
    }


    public function enviarMensajeGeneral($texto, $telefono)
    {
        $admins = UserData::getAll();


        $data = [
            'phone' => "57" . $telefono . "", // Receivers phone

            'body' => $texto, // Message
        ];
        $json = json_encode($data); // Encode data to JSON
        // URL for request POST /message
        $token = $this->token;
        $instanceId = $this->instanceId;
        $url = 'https://api.chat-api.com/instance' . $instanceId . '/message?token=' . $token;
        // Make a POST request
        $options = stream_context_create([
            'http' => [
                'method'  => 'POST',
                'header'  => 'Content-type: application/json',
                'content' => $json
            ]
        ]);

        // Send a request
        $result = file_get_contents($url, false, $options);
    }
}
