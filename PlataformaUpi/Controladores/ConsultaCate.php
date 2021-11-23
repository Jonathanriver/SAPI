<?php

require_once './Modelo/Conexion.php';

if ($result = mysqli_query($link, "SELECT * FROM `sub_categoria WHERE categoria_idcategoria=$idCate")) {
    //$member = mysqli_fetch_all($result);

    while ($row = $result->fetch_assoc()) {
        echo "<option value='" . $row['idsub_categoria'] . "'>" . utf8_encode($row['nombre']) . "</option>";
    }
}
