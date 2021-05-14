<?php
class ApiData{


	public function ApiData(){


		$this->instanceId = "269789"; 
        $this->token = "gvh24awfsxai19bk";
      
	} 
	

	public function enviarMensajeAdmin($texto){
	
                
        $admins=UserData::getAll();

        foreach($admins as $admin):
            $data = [
            'phone' => "57".$admin->telefono."", // Receivers phone
        
            'body' => $texto, // Message
            ];
            $json = json_encode($data); // Encode data to JSON
            // URL for request POST /message
            $token = $this->token;
            $instanceId = $this->instanceId;
            $url = 'https://api.chat-api.com/instance'.$instanceId.'/message?token='.$token;
            // Make a POST request
            $options = stream_context_create(['http' => [
                'method'  => 'POST',
                'header'  => 'Content-type: application/json',
                'content' => $json
            ]
            ]);
        
            // Send a request
            $result = file_get_contents($url, false, $options);
            
        endforeach;

	}


    public function enviarMensajeGeneral($texto,$telefono){

                
        $admins=UserData::getAll();

    
        $data = [
        'phone' => "57".$telefono."", // Receivers phone
        
        'body' => $texto, // Message
        ];
        $json = json_encode($data); // Encode data to JSON
        // URL for request POST /message
        $token = $this->token;
        $instanceId = $this->instanceId;
        $url = 'https://api.chat-api.com/instance'.$instanceId.'/message?token='.$token;
        // Make a POST request
        $options = stream_context_create(['http' => [
            'method'  => 'POST',
            'header'  => 'Content-type: application/json',
            'content' => $json
        ]
        ]);
        
        // Send a request
        $result = file_get_contents($url, false, $options);
    }


}

?>