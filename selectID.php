<?php
@$link = new mysqli('localhost', 'root', '', 'pruebas');

$id = $_POST['data'];
$sql = $link->query("SELECT * FROM client WHERE id = $id");

$result = $link->query($sql);

while ($row = $result->fetch_object()) {
  echo "<p<$row->id $row->first_name</p>";
}

$result->free();
$link->close();
