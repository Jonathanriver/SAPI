<?php
session_start();

include_once "../../modelo/database.php";

if (isset($_POST['updated_User'])) {

    $User_Id = $_POST['menu_id'];
    $rol = $_POST['cbx_campo'];
  

    // print_r($rol);die;
    
            $sql = "UPDATE usuarios SET Rol_idRol='$rol' WHERE idUsuarios ='$User_Id'";
            $resultado = $mysqli->query($sql);
    
            if ($resultado) {
                if ($_FILES['image_Fon']['name'] != '') {
                    move_uploaded_file($_FILES['image_Fon']['tmp_name'], "Image/" . $_FILES["image_Fon"]["name"]);
                    unlink("Image/" . $old_image);
                }
                $_SESSION['status'] = "Los Datos se han actualiazado";
                header("Location: ../../AdminUsers.php");
            } else {
                $_SESSION['status'] = "Los Datos no se han actualiazado.!";
                header("Location: ../../AdminUsers.php");
            }
        
}
