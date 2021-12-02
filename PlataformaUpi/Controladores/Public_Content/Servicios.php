<?php
$sql = "SELECT * FROM gestionCont WHERE id=3";
$resultado = $mysqli->query($sql);
$row = $resultado->fetch_array(MYSQLI_ASSOC);
