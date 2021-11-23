<?php
session_start();

include_once "../../modelo/database.php";

if (isset($_POST['updated_Menu'])) {

    $Menu_id = $_POST['menu_id'];
    $modalTxt1 = $_POST['modalTxt1'];
    $modalParrafo1 = $_POST['modalParrafo1'];
    $modalParra1 = $_POST['modalParra1'];
    $modalText1 = $_POST['modalText1'];
    $modalTe1 = $_POST['modalTe1'];
    $modalTx1 = $_POST['modalTx1'];

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
            header('Location: ../../ModalsUpi.php');
        } else {
            $sql = "UPDATE laupi SET modalTxt1='$modalTxt1',modalParrafo1='$modalParrafo1',modalParra1='$modalParra1',modalText1='$modalText1',modalTe1='$modalTe1',modalTx1='$modalTx1',modalImg1='$update_filename' WHERE id ='$Menu_id'";
            $resultado = $mysqli->query($sql);

            if ($resultado) {
                if ($_FILES['image_Fon']['name'] != '') {
                    move_uploaded_file($_FILES['image_Fon']['tmp_name'], "Image/" . $_FILES["image_Fon"]["name"]);
                    unlink("Image/" . $old_image);
                }
                $_SESSION['status'] = "Los Datos se han actualiazado";
                header("Location: ../../ModalsUpi.php");
            } else {
                $_SESSION['status'] = "Los Datos no se han actualiazado.!";
                header("Location: ../../ModalsUpi.php");
            }
        }
    } else {
        $sql = "UPDATE laupi SET modalTxt1='$modalTxt1',modalParrafo1='$modalParrafo1',modalParra1='$modalParra1',modalText1='$modalText1',modalTe1='$modalTe1',modalTx1='$modalTx1',modalImg1='$update_filename' WHERE id ='$Menu_id'";
        $resultado = $mysqli->query($sql);

        $resultado = $mysqli->query($sql);

        if ($resultado) {
            if ($_FILES['image_Fon']['name'] != '') {
                move_uploaded_file($_FILES['image_Fon']['tmp_name'], "Image/" . $_FILES["image_Fon"]["name"]);
                unlink("Image/" . $old_image);
            }
            $_SESSION['status'] = "Los Datos se han actualiazado";
            header("Location: ../../ModalsUpi.php");
        } else {
            $_SESSION['status'] = "Los Datos no se han actualiazado.!";
            header("Location: ../../ModalsUpi.php");
        }
    }
}
// Primer Modal Img
if (isset($_POST['actualizar_img1'])) {

    $menu_id4 = $_POST['menu_id'];
    $new_image4 = $_FILES[''];

    $sql = "UPDATE laupi SET modalImg1='$new_image4' WHERE id ='$menu_id4'";
    $resultado = $mysqli->query($sql);

    //      
    if ($resultado) {

        $_SESSION['status'] = "Los Datos se han actualiazado";
        header("Location: ../../ModalsUpi.php");
    } else {
        $_SESSION['status'] = "Los Datos no se han actualiazado.!";
        header("Location: ../../ModalsUpi.php");
    }
}
// segundo_modal
if (isset($_POST['segundo_modal'])) {

    $Menu_id2 = $_POST['menu_id'];
    $modalTxt2 = $_POST['modalTxt2'];
    $modalParrafo2 = $_POST['modalParrafo2'];
    $modalParra2 = $_POST['modalParra2'];
    $modalText2 = $_POST['modalText2'];
    $modalTe2 = $_POST['modalTe2'];
    $modalTx2 = $_POST['modalTx2'];

    $new_image2 = $_FILES['image_Fon2']['name'];
    $old_image2 = $_POST['stud_image_old2'];

    // print_r($new_image2);
    // die;
    if ($new_image2 != '') {
        $update_filename2 = $_FILES['image_Fon2']['name'];
    } else {
        $update_filename2 = $old_image2;
    }

    if ($_FILES['image_Fon2']['name'] != '') {

        if (file_exists("Image/" . $_FILES['image_Fon2']['name'])) {
            $filename = $_FILES['image_Fon2']['name'];
            $_SESSION['status'] = "la Imagen ya Éxiste!" . $filename;
            header('Location: ../../ModalsUpi.php');
        } else {
            $sql = "UPDATE laupi SET modalTxt2='$modalTxt2',modalParrafo2='$modalParrafo2',modalParra2='$modalParra2',modalTx2='$modalText2',modalTe2='$modalTe2',modalTxt2='$modalTx2',modalImg2='$update_filename2' WHERE id ='$Menu_id2'";
            $resultado = $mysqli->query($sql);

            if ($resultado) {
                if ($_FILES['image_Fon2']['name'] != '') {
                    move_uploaded_file($_FILES['image_Fon2']['tmp_name'], "Image/" . $_FILES["image_Fon2"]["name"]);
                    unlink("Image/" . $old_image2);
                }
                $_SESSION['status'] = "Los Datos se han actualiazado";
                header("Location: ../../ModalsUpi.php");
            } else {
                $_SESSION['status'] = "Los Datos no se han actualiazado.!";
                header("Location: ../../ModalsUpi.php");
            }
        }
    } else {
        $sql = "UPDATE laupi SET modalTxt2='$modalTxt2',modalParrafo2='$modalParrafo2',modalParra2='$modalParra2',modalText2='$modalText2',modalTe2='$modalTe2',modalTxt2='$modalTx2',modalImg2='$update_filename2' WHERE id ='$Menu_id2'";
        $resultado = $mysqli->query($sql);

        $resultado = $mysqli->query($sql);

        if ($resultado) {
            if ($_FILES['image_Fon2']['name'] != '') {
                move_uploaded_file($_FILES['image_Fon2']['tmp_name'], "Image/" . $_FILES["image_Fon2"]["name"]);
                unlink("Image/" . $old_image2);
            }
            $_SESSION['status'] = "Los Datos se han actualiazado";
            header("Location: ../../ModalsUpi.php");
        } else {
            $_SESSION['status'] = "Los Datos no se han actualiazado.!";
            header("Location: ../../ModalsUpi.php");
        }
    }
}
// Cuarto Modal Img
if (isset($_POST['actualizar_img2'])) {

    $menu_id4 = $_POST['menu_id'];
    $new_image4 = $_FILES[''];

    $sql = "UPDATE laupi SET modalImg2='$new_image4' WHERE id ='$menu_id4'";
    $resultado = $mysqli->query($sql);

    //      
    if ($resultado) {

        $_SESSION['status'] = "Los Datos se han actualiazado";
        header("Location: ../../ModalsUpi.php");
    } else {
        $_SESSION['status'] = "Los Datos no se han actualiazado.!";
        header("Location: ../../ModalsUpi.php");
    }
}

// tercer modal

if (isset($_POST['tercer_modal'])) {

    $Menu_id3 = $_POST['menu_id'];
    $modalTxt3 = $_POST['modalTxt3'];
    $modalParrafo3 = $_POST['modalParrafo3'];
    $modalParra3 = $_POST['modalParra3'];
    $modalText3 = $_POST['modalText3'];
    $modalTe3 = $_POST['modalTe3'];
    $modalTex3 = $_POST['modalTex3'];

    $new_image3 = $_FILES['image_Fon3']['name'];
    $old_image3 = $_POST['stud_image_old3'];


    if ($new_image3 != '') {
        $update_filename3 = $_FILES['image_Fon3']['name'];
    } else {
        $update_filename3 = $old_image3;
    }

    if ($_FILES['image_Fon3']['name'] != '') {

        if (file_exists("Image/" . $_FILES['image_Fon3']['name'])) {
            $filename = $_FILES['image_Fon3']['name'];
            $_SESSION['status'] = "la Imagen ya Éxiste!" . $filename;
            header('Location: ../../ModalsUpi.php');
        } else {
            $sql = "UPDATE laupi SET modalTxt3='$modalTxt3',modalParrafo3='$modalParrafo3',modalParra3='$modalParra3',modalText3='$modalText3',modalTe3='$modalTe3',modalTex3='$modalTex3',modalImg3='$update_filename3' WHERE id ='$Menu_id3'";
            $resultado = $mysqli->query($sql);

            if ($resultado) {
                if ($_FILES['image_Fon3']['name'] != '') {
                    move_uploaded_file($_FILES['image_Fon3']['tmp_name'], "Image/" . $_FILES["image_Fon3"]["name"]);
                    unlink("Image/" . $old_image3);
                }
                $_SESSION['status'] = "Los Datos se han actualiazado";
                header("Location: ../../ModalsUpi.php");
            } else {
                $_SESSION['status'] = "Los Datos no se han actualiazado.!";
                header("Location: ../../ModalsUpi.php");
            }
        }
    } else {
        $sql = "UPDATE laupi SET modalTxt3='$modalTxt3',modalParrafo3='$modalParrafo3',modalParra3='$modalParra3',modalText3='$modalText3',modalTe3='$modalTe3',modalTex3='$modalTex3',modalImg3='$update_filename3' WHERE id ='$Menu_id3'";
        $resultado = $mysqli->query($sql);

        $resultado = $mysqli->query($sql);

        if ($resultado) {
            if ($_FILES['image_Fon3']['name'] != '') {
                move_uploaded_file($_FILES['image_Fon3']['tmp_name'], "Image/" . $_FILES["image_Fon3"]["name"]);
                unlink("Image/" . $old_image3);
            }
            $_SESSION['status'] = "Los Datos se han actualiazado";
            header("Location: ../../ModalsUpi.php");
        } else {
            $_SESSION['status'] = "Los Datos no se han actualiazado.!";
            header("Location: ../../ModalsUpi.php");
        }
    }
}
// Tercer Modal img
if (isset($_POST['actualizar_img3'])) {

    $menu_id4 = $_POST['menu_id'];
    $new_image4 = $_FILES[''];

    $sql = "UPDATE laupi SET modalImg3='$new_image4' WHERE id ='$menu_id4'";
    $resultado = $mysqli->query($sql);

    //      
    if ($resultado) {

        $_SESSION['status'] = "Los Datos se han actualiazado";
        header("Location: ../../ModalsUpi.php");
    } else {
        $_SESSION['status'] = "Los Datos no se han actualiazado.!";
        header("Location: ../../ModalsUpi.php");
    }
}

// Cuarto Modal
if (isset($_POST['cuarto_modal'])) {

    $menu_id4 = $_POST['menu_id'];
    $modalTxt4 = $_POST['modalTxt4'];
    $modalParrafo4 = $_POST['modalParrafo4'];
    $modalParra4 = $_POST['modalParra4'];
    $modalText4 = $_POST['modalText4'];
    $modalTex4 = $_POST['modalTex4'];
    $modalTe4 = $_POST['modalTe4'];

    $new_image4 = $_FILES['image_Fon4']['name'];
    $old_image4 = $_POST['stud_image_old4'];

    // print_r($new_image4);die;
    if ($new_image4 != '') {
        $update_filename4 = $_FILES['image_Fon4']['name'];
    } else {
        $update_filename4 = $old_image4;
    }

    if ($_FILES['image_Fon4']['name'] != '') {

        if (file_exists("Image/" . $_FILES['image_Fon4']['name'])) {
            $filename = $_FILES['image_Fon4']['name'];
            $_SESSION['status'] = "la Imagen ya Éxiste! " . $filename;
            echo "Repetido";
            header("Location: ../../ModalsUpi.php");
        } else {
            $sql = "UPDATE laupi SET modalTxt4='$modalTxt4',modalParrafo4='$modalParrafo4',modalParra4='$modalParra4',modalText4='$modalText4',modalTe4='$modalTe4',modalTex4='$modalTex4',modalImg4='$update_filename4' WHERE id ='$menu_id4'";
            $resultado = $mysqli->query($sql);

            if ($resultado) {
                if ($_FILES['image_Fon4']['name'] != '') {
                    move_uploaded_file($_FILES['image_Fon4']['tmp_name'], "Image/" . $_FILES["image_Fon4"]["name"]);
                    unlink("Image/" . $old_image4);
                }
                $_SESSION['status'] = "Los Datos se han actualizado";
                header("Location: ../../ModalsUpi.php");
            } else {
                $_SESSION['status'] = "Los Datos no se han actualiazado.!";
                header("Location: ../../ModalsUpi.php");
            }
        }
    } else {
        $sql = "UPDATE laupi SET modalTxt4='$modalTxt4',modalParrafo4='$modalParrafo4',modalParra4='$modalParra4',modalText4='$modalText4',modalTe4='$modalTe4',modalTex4='$modalTex4',modalImg4='$update_filename4' WHERE id ='$menu_id4'";

        $resultado = $mysqli->query($sql);

        if ($resultado) {
            if ($_FILES['image_Fon4']['name'] != '') {
                move_uploaded_file($_FILES['image_Fon4']['tmp_name'], "Image/" . $_FILES["image_Fon4"]["name"]);
                unlink("Image/" . $old_image4);
            }
            $_SESSION['status'] = "Los Datos se han actualiazado";
            header("Location: ../../ModalsUpi.php");
        } else {
            $_SESSION['status'] = "Los Datos no se han actualiazado.!";
            header("Location: ../../ModalsUpi.php");
        }
    }
}
// Cuarto Modal img
if (isset($_POST['actualizar_img4'])) {

    $menu_id4 = $_POST['menu_id'];
    $new_image4 = $_FILES[''];

    $sql = "UPDATE laupi SET modalImg4='$new_image4' WHERE id ='$menu_id4'";
    $resultado = $mysqli->query($sql);
    //      
    if ($resultado) {

        $_SESSION['status'] = "Los Datos se han actualiazado";
        header("Location: ../../ModalsUpi.php");
    } else {
        $_SESSION['status'] = "Los Datos no se han actualiazado.!";
        header("Location: ../../ModalsUpi.php");
    }
}
