<?php
include_once "../../modelo/database.php";

$id = $_REQUEST['id'];
$sql = "DELETE FROM laupi WHERE id='$id'";
$resultado = $mysqli->query($sql);

if ($resultado) {
    echo "bien";
    header("Location: ../../Laupi.php");
} else {
    header("Location: ../../Laupi.php");
}
