<?php
session_start();

include_once "../../modelo/database.php";

if (isset($_POST['updated_Menu'])) {

    $Menu_id = $_POST['menu_id'];
    $titulo = $_POST['titulo'];
    $parrafo = $_POST['parrafo'];
    $boton1 = $_POST['boton1'];
    $boton2 = $_POST['boton2'];
    $boton3 = $_POST['boton3'];
    $boton4 = $_POST['boton4'];

    $new_image = $_FILES['image_Fon']['name'];
    $old_image = $_POST['stud_image_old'];

    if ($new_image != '') {
        $update_filename = $_FILES['image_Fon']['name'];
    } else {
        $update_filename = $old_image;
    }

    if ($_FILES['image_Fon']['name'] != '') {

        if (file_exists("Image/" . $_FILES['image_Fon']['name'])) {
            $filename = $_FILES['image_Fon']['name'];
            $_SESSION['status'] = "La Imagen ya existe" . $filename;
            header('Location: ../../LaUpi.php');
        } else {
            $sql = "UPDATE laupi SET titulo='$titulo',parrafo='$parrafo',boton1='$boton1',boton2='$boton2',boton3='$boton3',boton4='$boton4',imagenFondo='$update_filename' WHERE id ='$Menu_id'";
            $resultado = $mysqli->query($sql);

            if ($resultado) {
                if ($_FILES['image_Fon']['name'] != '') {
                    move_uploaded_file($_FILES['image_Fon']['tmp_name'], "Image/" . $_FILES["image_Fon"]["name"]);
                    unlink("Image/" . $old_image);
                }
                $_SESSION['status'] = "Los Datos se han actualiazado";
                header("Location: ../../LaUpi.php");
            } else {
                $_SESSION['status'] = "Los Datos no se han actualiazado.!";
                header("Location: ../../LaUpi.php");
            }
        }
    } else {
        $sql = "UPDATE laUpi SET titulo='$titulo',parrafo='$parrafo',boton1='$boton1',boton2='$boton2',boton3='$boton3',boton4='$boton4',imagenFondo='$update_filename' WHERE id ='$Menu_id'";
        $resultado = $mysqli->query($sql);

        if ($resultado) {
            if ($_FILES['image_Fon']['name'] != '') {
                move_uploaded_file($_FILES['image_Fon']['tmp_name'], "Image/" . $_FILES["image_Fon"]["name"]);
                unlink("Image/" . $old_image);
            }
            $_SESSION['status'] = "Los Datos se han actualiazado";
            header("Location: ../../LaUpi.php");
        } else {
            $_SESSION['status'] = "Los Datos no se han actualiazado.!";
            header("Location: ../../LaUpi.php");
        }
    }
}
