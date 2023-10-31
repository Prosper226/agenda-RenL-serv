<?php

class NotificationController{

    public function show(){
        error_log('je suis la ');
        $response = $this->notificationList(); 
        error_log(print_r($response, true));
        return jsonResponse(200, 'sucess', $response);
    }

    public function react(){
        try{
            
            $headers = getallheaders();
            // throw new Exception('TestException');
            $data = $_POST;
            $id = $data['id'] ?? null;
            $decision = $data['decision'] ?? null;
            $user = $headers['Authorization'] ?? null;
            // $user = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiIyMjY1NzQ3NDU3OCIsImlhdCI6MTY5ODczOTE4OCwiZXhwIjoxNjk4NzQyNzg4fQ.joKwRX5ximzMXtzFDSmq8w3kpQ8yjEYfnlXS_rYhp2U";
            // $user = verified_jwt($user);

            $response = [
                'id' => $id,
                'decision' => $decision,
                'user' => $user,
            ]; 
            error_log(print_r($response, true));
            return jsonResponse(200, 'sucess', $response);
        }catch(Exception $e){
            return jsonResponse(500, $e->getMessage(), [], 500);
        }
    }


    private function notificationList(){
        return $this->duplicateArray([
            [
                'id' => 'n001',
                'Titre' => 'Presentation Projet',
                'Contenu' => 'Rappel de la presentation de l\'app a 10h30',
            ],
            [
                'id' => 'n002',
                'Titre' => 'Notification 2',
                'Contenu' => 'Lorem ipsum dolor sit amet, consecteur adipiscing elit 2',
            ],
            [
                'id' => 'n003',
                'Titre' => 'Notification 3',
                'Contenu' => 'Lorem ipsum dolor sit amet, consecteur adipiscing elit 3',
            ],
        ], 1);
    }

    private function duplicateArray($array, $times) {
        if ($times <= 0) {
            return [];
        } else {
            return array_merge($array, $this->duplicateArray($array, $times - 1));
        }
    }
}