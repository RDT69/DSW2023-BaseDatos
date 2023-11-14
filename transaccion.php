<?php 
require 'conection.php';

$result = $link->query('SELECT * FROM client WHERE vip=1');
$msqli-> autocommit(FALSE);

$stmt_insert = $link->stmt_init();
$stmt_insert->prepare("INSERT INTO clientVip (name, cars) VALUES (?, ?)");
$stmt_insert->bind_param("si", $name, $cars);

$stmt_delete = $link->stmt_init();
$stmt_delete -> prepare("DELETE FROM clients WHERE id=?");
$stmt_delete -> bind_param("i", $id);
while ($client = $result ->fetch_object()) {
  if ($client->cars == 0) {
    $mysqli -> rollback;
    exit();
  }
  $name = $client->firts_name;
  
}