<?php

$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "create database shoppinglist;
  
  use shoppinglist;
  
  create table item (
    id int primary key auto_increment,
    description varchar(255) not null,
    amount smallint unsigned not null
  );

  insert into item (description,amount) values ('Test item',1);
  insert into item (description,amount) values ('Toinen testi', 2)";


  
 

  $conn->exec($sql);
  
  
  
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}



?>