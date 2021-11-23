<?php
session_start();

include_once "../../modelo/database.php";

if (isset($_POST['updated_Menu'])) {

    $Menu_id = $_POST['menu_id'];
    $txtUno = $_POST['textUno'];
    $txtDos = $_POST['textDos'];
    $txtTres = $_POST['textTres'];
    $txtCuatro = $_POST['textCuatro'];
    $txtCinco = $_POST['textCinco'];
    $txtSeis = $_POST['textSeis'];
    $txtSiete = $_POST['textSiete'];
    $txtOcho = $_POST['textOcho'];
    $txtNueve = $_POST['textNueve'];
    $txtDies = $_POST['textDies'];

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
            header('Location: ../../index.php');
        }else{
            $sql = "UPDATE gestionCont SET textUno='$txtUno',textDos='$txtDos',textTres='$txtTres',textCuatro='$txtCuatro',textCinco='$txtCinco',textSeis='$txtSeis',textSiete='$txtSiete',textOcho='$txtOcho',textNueve='$txtNueve',textDies='$txtDies', imagenFondo='$update_filename' WHERE id ='$Menu_id'";
            $resultado = $mysqli->query($sql);
    
            if ($resultado) {
                if ($_FILES['image_Fon']['name'] != '') {
                    move_uploaded_file($_FILES['image_Fon']['tmp_name'], "Image/" . $_FILES["image_Fon"]["name"]);
                    unlink("Image/" . $old_image);
                }
                $_SESSION['status'] = "Los Datos se han actualiazado";
                header("Location: ../../index.php");
            } else {
                $_SESSION['status'] = "Los Datos no se han actualiazado.!";
                header("Location: ../../index.php");
            }
        }
        
        
    } else {
        $sql = "UPDATE gestionCont SET textUno='$txtUno',textDos='$txtDos',textTres='$txtTres',textCuatro='$txtCuatro',textCinco='$txtCinco',textSeis='$txtSeis',textSiete='$txtSiete',textOcho='$txtOcho',textNueve='$txtNueve',textDies='$txtDies', imagenFondo='$update_filename' WHERE id ='$Menu_id'";
        $resultado = $mysqli->query($sql);

        if ($resultado) {
            if ($_FILES['image_Fon']['name'] != '') {
                move_uploaded_file($_FILES['image_Fon']['tmp_name'], "Image/" . $_FILES["image_Fon"]["name"]);
                unlink("Image/" . $old_image);
            }
            $_SESSION['status'] = "Los Datos se han actualiazado";
            header("Location: ../../index.php");
        } else {
            $_SESSION['status'] = "Los Datos no se han actualiazado.!";
            header("Location: ../../index.php");
        }
    }
}
