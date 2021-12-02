<?php
$sql = "SELECT * FROM gestionCont ";
$resultado = $mysqli->query($sql);
$row_Cont = $resultado->fetch_array(MYSQLI_ASSOC);

// Consulta para tips
$sql = "SELECT * FROM tips";
$resultado = $mysqli->query($sql);
$row_Tips = $resultado->fetch_array(MYSQLI_ASSOC);
// 
$query = "SELECT id,reunion_Fecha, reunion_Hora,reunion_Titulo, reunion_link FROM reunion LIMIT 4 ";
$resul_Date = $mysqli->query($query);