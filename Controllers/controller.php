<?php
require_once "Models/connexion.php";
$request = "select * from client";
$res = $pdo->query($request);
require "Views/listView.php";

 