<?php
$sql = "SELECT * FROM usuarios INNER JOIN rol ON usuarios.Rol_idRol=rol.idRol";
$resultado = $mysqli->query($sql);
