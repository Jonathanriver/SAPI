<?php

$campo = Array();
require_once '../Modelo/Conexion.php';

$id = $_GET['id_departamento'];

$sql = "SELECT * FROM departamento_x_municipio where departamento_iddepartamento=$id";

if ($resultOfertas = mysqli_query($link, $sql)) {
    $campos = [];
    //print_r($resultOfertas);die;
    while ($row = $resultOfertas->fetch_assoc()) {

        //$array[]=$row['municipio_idmunicipio'];
        $idmunicipio = $row['municipio_idmunicipio'];

        $sqlMun = "SELECT * FROM municipio where idmunicipio=$idmunicipio";

        if ($resultMunicipio = mysqli_query($link, $sqlMun)) {

            

            while ($rowMun = $resultMunicipio->fetch_assoc()) {

                $campos[] = $rowMun;
            }
            
        }
    }
    echo json_encode($campos);
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

