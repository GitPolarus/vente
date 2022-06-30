<?php
try {
    $bd = new PDO("mysql:host=localhost;dbname=vente", "root","");
    // echo "Connexion Success";
} catch (PDOException $e) {
    echo $e->getMessage();
}