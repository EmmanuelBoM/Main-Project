<?php
$mysqli = new mysqli("127.0.0.1", "root", "", "hack",3306);
mysqli_set_charset($mysqli, 'utf8');
if ($mysqli->connect_errno) {
    echo "error de DB";
}
else {
  //echo "conectado";
}

?>
