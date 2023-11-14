<?php
@$link = new mysqli('localhost', 'root', '', 'pruebas');
//echo $link->server_info;

$error = $link->connect_errno;

if ($error == null) {
echo "Conexion establecida correctamente.";
 $sql = "DELETE FROM client WHERE birthday < '1995-01-01'";
 $result = $link->query($sql);
  if($result) {
    echo "<p>Se han borrado $link->affected_rows registros.</p>";
  } else {
    echo "<p>Se produjo un error al hacer la consulta.</p>";
  }
  $link->close();
} else {
  echo "<p>HAY UN ERROR FEO: $link->connect_error</p>";
}

