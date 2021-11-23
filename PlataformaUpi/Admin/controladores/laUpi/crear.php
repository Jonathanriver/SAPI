<?php
session_start();

include_once "../../modelo/database.php";

if (isset($_POST['regisUpi'])) {

    $titulo = $_POST['titulo'];
    $parrafo = $_POST['parrafo'];
    $boton1 = $_POST['boton1'];
    $boton2 = $_POST['boton2'];
    $boton3 = $_POST['boton3'];
    $boton4 = $_POST['boton4'];

    $image = $_FILES['image_Fon']['name'];

    $query = "INSERT INTO laupi (titulo,parrafo,boton1,boton2,boton3,boton4,imagenFondo) VALUES('$titulo','$parrafo','$boton1','$boton2','$boton3','$boton4','$image');";
    $query_run = $mysqli->query($query);


    if ($query_run) {
        move_uploaded_file($_FILES['image_Fon']['tmp_name'], "Image/" . $_FILES["image_Fon"]["name"]);
        $_SESSION['status'] = "Se ha creado con Éxito!!";
        header('Location: ../../LaUpi.php');
    } else {
        $_SESSION['status'] = "No se ha actualizado con Éxito";
        header('Location: ../../LaUpi.php');
    }
}
