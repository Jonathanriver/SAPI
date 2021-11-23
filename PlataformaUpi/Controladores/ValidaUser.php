<?php

require_once '../Modelo/Conexion_2.php';

$usuario = $_POST['nombre'];


$stmt = $mysqli->prepare("SELECT idUsuarios, documento FROM usuarios WHERE documento = ? LIMIT 1");
$stmt->bind_param("s", $usuario);
$stmt->execute();
$stmt->store_result();
$rows = $stmt->num_rows;

if ($rows > 0) {

    $stmt->bind_result($idUsuario, $user);
    $stmt->fetch();

    $validaPassw = $usuario == $user;

    if ($validaPassw) {
        // lastSession($idUsuario);
        $_SESSION['id_usuario'] = $idUsuario;
        // $_SESSION['documento'] = $user;
        echo "<script>alert('Su Usuario ya se encuentra registrado en el Sistema');window.location='../Login.php'</script>";
        // header('Location: ../Validacion.php');
        // echo "Biem";
    } else {
        // $_SESSION['status'] = " Su Usuario no se encuentra en el sistema Registrese Aquí!!";
        echo "<script>alert('Algo ');window.location='../Registrate.php'</script>";
    }
} else {
    // $errors = "El Número de Documento no <strong>Existe!</strong>";
    // $_SESSION['status'] = " Su Usuario no se encuentra en el sistema Registrese Aquí!!";
    // header("location:../Validacion.php");
    echo "<script>alert('Su Usuario no se encuentra registrado en el Sistema.');window.location='../Registrate.php'</script>";
}

// $id = mysqli_insert_id($link);

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
