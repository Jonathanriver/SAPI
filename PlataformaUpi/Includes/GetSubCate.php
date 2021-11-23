<?php

require_once '../Modelo/Conexion.php';
$id_estado = $_POST['id_estado'];

$queryM = "SELECT * FROM sub_categoria WHERE categoria_idcategoria = '$id_estado'";
$resultadoM = $link->query($queryM);

$html = "";

while ($rowM = $resultadoM->fetch_assoc()) {
                
    $html.= "<div class='col-3'><a onclick='selectSub(this)' data_name='".utf8_decode($rowM['nombre'])."' data_tar='" . $rowM['idsub_categoria'] . "' class='btn btn-lg btn-block btn-warning text-white'><i class='".$rowM['icon']."' style='font-size: 50px;'></i><br>" .utf8_decode($rowM['nombre']) . "</a> </div>";
    
}
echo $html;
