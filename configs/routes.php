<?php
 /** Protoype is 'route' => ['controller::method', middlwareList] */
return  [

    'POST /api/login' => ['AuthController::Login'],
    'GET /api/program' => ['ProgramController::show'],
    'GET /api/notifications' => ['NotificationController::show'],
    'POST /api/react' => ['NotificationController::react'],
    








































];