<?php

function handleRequest($method, $uri){
    try{
        $routes = include_once 'configs/routes.php';
        $routeKey = "$method $uri";
        if (!isset($routes[$routeKey])) {
            return jsonResponse(404, 'not found', [], 404);
        } 
        $route = $routes[$routeKey];
        $controllerAndMethod = explode('::', $route[0]);
        $controllerName      = $controllerAndMethod[0];
        $methodName          = $controllerAndMethod[1];
        require_once "controllers/$controllerName.php";
        $controllerInstance = new $controllerName();
        $controllerInstance->$methodName();
    }catch(Exception $e){
        return jsonResponse(500, $e->getMessage(), [], 500);
    }
}
