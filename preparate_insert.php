<?php
require 'conection.php';
$stmt = $link->stmt_init();

$stmt->prepare("INSERT INTO client (firts_name, birthday, cars, vip) VALUES (?,?,?,?,)");
$stmt-> bind_param("ssis", $name, $birthday, $cars, $vip);

$name = "Jose";
$birthday = "2001-03-13";
$cars = 3;
$vip = 1;

$stmt->execute();
echo "AGREGADO";
$stmt->close();