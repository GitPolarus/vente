<?php

use Models\Client;
use Models\Message as MessageEntity; //appel de l'espace de nom et utilisation d'un alias
use Models\notification\Message;//appel de l'espace de nom

require "Models/Client.php";
require "Models/model.php";
require "Models/notification/Message.php";
require "Models/Message.php";

if(isset($_GET['id'])){
    $requeste = "select * from client where id=$_GET[id]";
}else{
    $requeste = "select * from client";
}

// Notification
$message = new Message();
$message->getMessage();

// models
$messageEntity = new MessageEntity();
$messageEntity->getMessage();
$res = $bd->query($requeste);
$clientTable = array();
while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
    $client = new Client($row['id'], $row['nom']);
    array_push($clientTable, $client);
}
// var_dump($clientTable);
    
require "Views/ClientView.php";
?>