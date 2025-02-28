<?php

function connect() {
    $host = 'localhost'; 
    $dbname = 'users1'; 
    $username = 'root'; 
    $password = ''; 
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }  catch (PDOException $e) {
        error_log("Erreur de connexion : " . $e->getMessage()); 
        die("Une erreur est survenue. Veuillez réessayer plus tard."); 
    }
}

    function sanitize($data){
        return htmlentities(strip_tags(stripslashes(trim($data))));
    }





?>