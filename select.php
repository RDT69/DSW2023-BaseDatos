<?php

use LDAP\Result;

@$link = new mysqli('localhost', 'root', '', 'pruebas');

$result = $link->query('SELECT * FROM client');

while ($client = $result->fetch_object()) {
  echo "<li>$client->id: $client->first_name </li>";
}
$result->free();

$link->close();