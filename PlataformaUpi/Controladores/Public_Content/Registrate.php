<?php
$sql = "SELECT * FROM gestioncont WHERE id=5";
$resultado = $mysqli->query($sql);
$row = $resultado->fetch_array(MYSQLI_ASSOC);
