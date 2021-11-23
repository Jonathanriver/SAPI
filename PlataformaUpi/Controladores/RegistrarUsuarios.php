<?php

require_once '../Modelo/Conexion.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$fecha_nacimiento = $_POST['fechaNac'];
$tipo_documento = $_POST['tpDocumento'];
$numeroDocumento = $_POST['numeroDoc'];
$depExpedicion = $_POST['deparExpedi'];
$ciudadExpe = $_POST['ciudExpedi'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$celular = $_POST['celular'];
$UsuarioSena = $_POST['UsuarioSena'];
$empresaTrabajo = $_POST['empresaTrabajo'];
$lugarTrabajo = $_POST['lugarTrabajo'];
$tipoVinc = $_POST['tipoVinc'];
$centroForm = $_POST['centroForm'];
$grupoSang = $_POST['grupoSang'];
$estrato = $_POST['estrato'];
$etnias = $_POST['etnias'];
$eps = $_POST['eps'];
$contra = $_POST['contra'];

// print_r($lugarTrabajo);die;
$sql_User = "INSERT INTO `usuarios` (nombre,apellido,fecha_nacimiento,tipo_documento,documento,depExpedicion,ciudadExpe,email,telefono,celular,UsuarioSena,empresaTrabajo,lugarTrabajo,tipoVinc,centroForm,grupoSang,estrato,etnias,eps,clave) VALUES ('$nombre','$apellido','$fecha_nacimiento','$tipo_documento','$numeroDocumento','$depExpedicion','$ciudadExpe','$email','$telefono','$celular','$UsuarioSena','$empresaTrabajo','$lugarTrabajo','$tipoVinc','$centroForm','$grupoSang','$estrato','$etnias','$eps','$contra')";

if ($consulta_User = mysqli_query($link, $sql_User)) {
    echo "Bien";
    echo "<script>window.location.href = '../RespuestaRegistro.php';</script>";
    // print_r($consulta_User);
} else {
    die("No existe la consulta");
}

// $id = mysqli_insert_id($link);

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
