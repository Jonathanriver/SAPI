<?php
$sql = "SELECT * FROM gestioncont WHERE id=4";
$resultado = $mysqli->query($sql);
$row = $resultado->fetch_array(MYSQLI_ASSOC);
