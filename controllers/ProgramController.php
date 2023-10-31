<?php

class ProgramController{

    public function show(){
        error_log('je suis la ');
        $response = $this->programList(); 
        error_log(print_r($response, true));
        return jsonResponse(200, 'sucess', $response);
    }


    private function programList(){
        return $this->duplicateArray([
            [
                'id' => 'p001',
                'Intitule' => 'Test',
                'Nature' => 'Important',
                'Date' => '07/08/2023',
                'Lieu' => 'Kaya',
                'Responsable' => 'Moustapha',
                'Adjoint' => 'Joseph',
                'Participants' => '10',
                'Status' => 'Planifié',
                'pdf' => 'storage/pdf/result.pdf'
            ],
            [
                'id' => 'p002',
                'Intitule' => 'Activité 2',
                'Nature' => 'Important',
                'Date' => '07/08/2023',
                'Lieu' => 'Kaya',
                'Responsable' => 'Moustapha',
                'Adjoint' => 'Joseph',
                'Participants' => '10',
                'Status' => 'Planifié',
                'pdf' => 'storage/pdf/result.pdf'
            ],
            [
                'id' => 'p003',
                'Intitule' => 'Activité 3',
                'Nature' => 'Important',
                'Date' => '07/08/2023',
                'Lieu' => 'Kaya',
                'Responsable' => 'Moustapha',
                'Adjoint' => 'Joseph',
                'Participants' => '10',
                'Status' => 'Planifié',
                'pdf' => 'storage/pdf/result.pdf'
            ],
            [
                'id' => 'p004',
                'Intitule' => 'Activité 4',
                'Nature' => 'Important',
                'Date' => '07/08/2023',
                'Lieu' => 'Kaya',
                'Responsable' => 'Moustapha',
                'Adjoint' => 'Joseph',
                'Participants' => '10',
                'Status' => 'Planifié',
                'pdf' => 'storage/pdf/result.pdf'
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