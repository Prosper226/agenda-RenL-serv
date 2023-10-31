<?php
function start_app(){
    // SERVER
    $server_name = $_SERVER['SERVER_NAME'];
    $server_port = $_SERVER['SERVER_PORT'];
    $host        = $_SERVER['HTTP_HOST'];
    // REQUEST
    $method = $_SERVER['REQUEST_METHOD'];
    $uri    = $_SERVER['PATH_INFO'];
    handleRequest($method, $uri);
}