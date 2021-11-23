<?php

include_once '../Modelo/Conexion.php';

session_start();
$login = $_GET['username'];
$password = $_GET['password'];
$nombres=$_GET['nombres'];
$id=$_GET['idUsuario'];
$id_Plataforma=$_GET['idTecno'];
$fuente=$_GET['fuente'];

//print_r($nombres);die;

$_SESSION['SESS_MEMBER_ID'] = $id;
$_SESSION['SESS_FIRST_NAME'] = $nombres;
$_SESSION['SESS_MEMBER_ID_TECNO'] = $id_Plataforma;
$_SESSION['SESS_FUENTE'] = $fuente;
header("location: ../Dashboard.php");

