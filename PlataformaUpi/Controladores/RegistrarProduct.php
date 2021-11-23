<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//$carpetaDestino = ImagenesProducto/";
session_start();
require_once '../Modelo/Conexion.php';
$id_categoria = $_POST['idcategoria'];
//$id_subcategoria = $_POST['subCategoria'];
$nombre = $_POST['nombre'];
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$fecha_publi = $_POST['fecha_publi'];
$fecha_cierre = $_POST['fecha_cierre'];
$estado = $_POST['estado'];
move_uploaded_file($_FILES['imagen1']['tmp_name'], '../Recursos/ImagenesProducto/' . $_FILES["imagen1"]['name']);
move_uploaded_file($_FILES['imagen2']['tmp_name'], '../Recursos/ImagenesProducto/' . $_FILES["imagen2"]['name']);
move_uploaded_file($_FILES['imagen3']['tmp_name'], '../Recursos/ImagenesProducto/' . $_FILES["imagen3"]['name']);
move_uploaded_file($_FILES['imagen4']['tmp_name'], '../Recursos/ImagenesProducto/' . $_FILES["imagen4"]['name']);
move_uploaded_file($_FILES['imagen5']['tmp_name'], '../Recursos/ImagenesProducto/' . $_FILES["imagen5"]['name']);
move_uploaded_file($_FILES['imagen6']['tmp_name'], '../Recursos/ImagenesProducto/' . $_FILES["imagen6"]['name']);
move_uploaded_file($_FILES['imagen7']['tmp_name'], '../Recursos/ImagenesProducto/' . $_FILES["imagen7"]['name']);
$precio_base = $_POST['precio_base'];
$id_user = $_SESSION['SESS_MEMBER_ID'];

$imagen1 = $_FILES["imagen1"]['name'];
$imagen2 = $_FILES["imagen2"]['name'];
$imagen3 = $_FILES["imagen3"]['name'];
$imagen4 = $_FILES["imagen4"]['name'];
$imagen5 = $_FILES["imagen5"]['name'];
$imagen6 = $_FILES["imagen6"]['name'];
$imagen7 = $_FILES["imagen7"]['name'];

$sql_User = "INSERT INTO `producto`(`nombre`, `titulo`, `descripcion`, `fecha_publi`, `fecha_cierre`, `estado`, `precio_base`, `sub_categoria_idsub_categoria`, `usuarios_idusuarios`, `image`, `image2`, `image3`,`image4`, `image5`, `image6`, `image7`) VALUES ('$nombre','$titulo','$descripcion','$fecha_publi','$fecha_cierre',$estado,$precio_base,$id_categoria,$id_user, '$imagen1', '$imagen2', '$imagen3', '$imagen4', '$imagen5', '$imagen6', '$imagen7')";

if ($consulta_User = mysqli_query($link, $sql_User)) {
    $id = mysqli_insert_id($link);
    //print_r($id);die;
    $sql_Anuncio = "INSERT INTO `anuncios`(`fecha_anuncio`, `producto_idproducto`, `descripcion`, `fecha_cierre`) VALUES ($fecha_publi,$id,'$descripcion',$fecha_cierre)";

    if ($consulta_Anuncio = mysqli_query($link, $sql_Anuncio)) {
    //$id = mysqli_insert_id($link);
        echo "<script>window.location.href = '../RespuestaRegistroProduct.php';</script>";
    }
    
    
} else {
    die("No existe la consulta");
}
