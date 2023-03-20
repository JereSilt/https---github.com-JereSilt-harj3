<?php

$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=shoppinglist", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "select * from item";
  $query = $conn->query($sql);
  $result = $query->fetchAll(PDO::FETCH_ASSOC);

  
 

  $conn->exec($sql);
  echo json_encode($result);
  
  
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}



?>