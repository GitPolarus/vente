<?php
$host = "localhost";
$db = "vente";
$user = "root";
$password= "";
try {
    $pdo = new PDO("mysql:host=$host; dbname=$db", $user, $password);
    echo "connexion établie";
} catch (PDOException $e) {
 print "Erreur !: " . $e->getMessage() . "<br/>";
 die();
}