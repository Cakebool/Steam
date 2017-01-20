<?php

$host = "localhost";
$dbName = "mydb";
$user = "root";
$password = ""; 


try {
    $db = new PDO ('mysql:host='.$host.';dbname='.$dbName.';charset=utf8', $user, $password);
}

catch (Exception $e){
    die('Erreur : '.$e -> getMessage());
}
?>