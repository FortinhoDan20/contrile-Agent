<?php

$servername = "localhost";
$username = "root";
$password = "root";

try {

  $bdd = new PDO("mysql:host=$servername;dbname=db-control-Pers", $username, $password);
  	

  $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
} catch(PDOException $e) {

  echo "Connection failed: " . $e->getMessage();
}

