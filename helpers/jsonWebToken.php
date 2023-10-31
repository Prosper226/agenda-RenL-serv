<?php

use Firebase\JWT\JWT;

function generate_jwt($uuid){
    try{
        $secret_key = jwt_secret_key();
        if ($secret_key !== null) {
            // La variable $secret_key a une valeur, vous pouvez générer le JWT
            $token = [
                "sub" => $uuid, // Sujet (identifiant unique de l'utilisateur)
                "iat" => time(), // Date de création du JWT (timestamp)
                "exp" => time() + 3600, // Date d'expiration du JWT (1 heure plus tard)
            ];
            $jwt = JWT::encode($token, $secret_key, 'HS256');
            return $jwt;
        } else {
            throw new Exception("Clé secrète non définie");
        }
    }catch(Exception $e){
        throw new Exception($e->getMessage());
    }
}

function verified_jwt($jwt = null){
    try{
        $secret_key = jwt_secret_key();
        if ($jwt === null) {
            throw new Exception("Le JWT est nul");
        }
        // Vérifiez la signature et obtenez les réclamations (claims)
        $decoded = JWT::decode($jwt, $secret_key, array('HS256'));
        return $decoded;
    }catch (Exception $e) {
        echo 'Erreur : ' . $e->getMessage();
    }

}

function jwt_secret_key(){
    return 'votre_clé_secrète';
}