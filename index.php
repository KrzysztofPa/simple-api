<?php

require_once "config.php";

class API {

    function Select(){
        $db = new Connect;
        $users = array();
        $data = $db->prepare('SELECT * FROM users');
        $data->execute();

        while($OutputData = $data->fetch(PDO::FETCH_ASSOC)){
            $users[$OutputData['id']] = array(
                'id' => $OutputData['id'],
                'firstname' => $OutputData['firstname'],
                'lastname' => $OutputData['lastname'],
                'email' => $OutputData['email']
            );
        }
        return json_encode($users);
    }


}

$API = new API;
$data = $API->Select();

var_dump($data);