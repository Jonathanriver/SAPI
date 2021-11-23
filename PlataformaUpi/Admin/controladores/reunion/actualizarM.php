<?php
session_start();

include_once "../../modelo/database.php";

if (isset($_POST['encuentro_link'])) {

    $reunion_id = $_POST['reunion_id'];
    $reunion_Titulo = $_POST['reunion_Titulo'];
    $reunion_Fecha = $_POST['reunion_Fecha'];
    $reunion_hora = $_POST['reunion_hora'];
    $reunion_link = $_POST['reunion_link'];


    $sql = "UPDATE reunion SET reunion_Titulo='$reunion_Titulo',reunion_Fecha='$reunion_Fecha',reunion_hora='$reunion_hora',reunion_link='$reunion_link' WHERE id ='$reunion_id'";
    $resultado = $mysqli->query($sql);

    if ($resultado) {
        $_SESSION['status'] = "Los Datos se han actualiazado";
        header("Location: ../../Reuniones.php");
    } else {
        $_SESSION['status'] = "Los Datos no se han actualiazado.!";
        header("Location: ../../Reuniones.php");
    }
} else {
    $_SESSION['status'] = "Debe Completar todos los campos!!";
    header("Location: ../../Reuniones.php");
}
