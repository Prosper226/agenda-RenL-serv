<?php

class AuthController{

    public function Login(){

        $data = $_POST;
        $login       = $data['login'] ?? null;
        $password    = $data['password'] ?? null;
        $device_name = $data['device_name'] ?? null;

        if( ($login !== 'Prosper' || $password !== 'Password1234') && 
        ($login !== 'Testeur' || $password !== 'Testeur1234') ){
            return jsonResponse(401, "Échec de l'authentification.", [], 401);
        }

        if($login == 'Prosper'){
            $user = [
                "avatar" => "storage/image/prosper.jpeg",
                "lastname" => "SEDGO",
                "firstname" => "Prosper Windinmalgda",
                "phonenumber" => "22657474578",
                "email" => "psedgo@gmail.com"
            ];
        }else{
            $user = [
                "avatar" => "storage/image/princess.jpeg",
                "lastname" => "Testeur",
                "firstname" => "Tester admin",
                "phonenumber" => "22660565103",
                "email" => "tester@gmail.com"
            ];
        }

        $uuid = $user['phonenumber'];
        $response = [
                'jwt'   => generate_jwt($uuid),
                'user'  => $user
            ];
            
        return jsonResponse(200, 'sucess', $response);
    }

}