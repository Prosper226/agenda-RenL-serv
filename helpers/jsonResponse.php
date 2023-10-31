<?php

function jsonResponse($code, $message, $data = [], $status = null){
    header('Content-Type: application/json');
    http_response_code($status ?? 200);
    $response = ['code' => $code, "message" => $message];
    if($data) $response['data'] = $data;
    echo json_encode($response);
    exit;
}