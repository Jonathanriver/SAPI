<?php

include_once '../Modelo/Conexion.php';

session_start();

$login = $_POST['username'];
$password = $_POST['password'];


$sql = "SELECT * FROM usuarios WHERE documento='$login' AND clave='$password'";

if ($result = mysqli_query($link, $sql)) {


    if (mysqli_num_rows($result) > 0) {
        session_regenerate_id();
        $member = mysqli_fetch_assoc($result);
        $_SESSION['SESS_MEMBER_ID'] = $member['idUsuarios'];
        $_SESSION['SESS_FIRST_NAME'] = $member['nombre'];
        $_SESSION['SESS_ID_ROL'] = $member['Rol_idRol'];
        $Rol = $_SESSION['SESS_ID_ROL'];

        if ($Rol == 1) {
            session_write_close();
            // echo 'Ingreso Correcto';
            $_SESSION['SESS_MEMBER_ID'] = $member['idUsuarios'];

            header("location:../Admin/index.php");
            exit();
        } else {
            echo "<script>alert('El usuario no cuenta con los permisos para ingresar al sistema');window.location='../Login_Admin.php'</script>";
        }
    } else {
        $_SESSION['SESS_MEMBER_ID'] = '';
        $_SESSION['SESS_FIRST_NAME'] = '';
        echo "<script>alert('Contraseña incorrecta o el usuario no se encuentra Registrado en el Sistema');window.location='../Login_Admin.php'</script>";
        // header("location: ../index.php");
        exit();
    }
} else {
    echo "<script>alert('Contraseña incorrecta o el usuario no se encuentra Registrado en el Sistema');window.location='../Login_Admin.php'</script>";
}
