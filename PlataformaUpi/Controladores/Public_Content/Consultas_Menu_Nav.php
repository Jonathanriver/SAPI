<?php

$sql = "SELECT menuImage FROM gestionCont";
$resultado = $mysqli->query($sql);
$rowimg = $resultado->fetch_array(MYSQLI_ASSOC);

$sql = "SELECT menu FROM gestionCont WHERE id=1";
$resultado = $mysqli->query($sql);
$row1 = $resultado->fetch_array(MYSQLI_ASSOC);

$sql = "SELECT menu FROM gestionCont WHERE id=2";
$resultado = $mysqli->query($sql);
$row2 = $resultado->fetch_array(MYSQLI_ASSOC);

$sql = "SELECT menu FROM gestionCont WHERE id=3";
$resultado = $mysqli->query($sql);
$row3 = $resultado->fetch_array(MYSQLI_ASSOC);

$sql = "SELECT menu FROM gestionCont WHERE id=4";
$resultado = $mysqli->query($sql);
$row4 = $resultado->fetch_array(MYSQLI_ASSOC);

$sql = "SELECT menu FROM gestionCont WHERE id=5";
$resultado = $mysqli->query($sql);
$row5 = $resultado->fetch_array(MYSQLI_ASSOC);

$sql = "SELECT menu FROM gestionCont WHERE id=6";
$resultado = $mysqli->query($sql);
$row6 = $resultado->fetch_array(MYSQLI_ASSOC);
