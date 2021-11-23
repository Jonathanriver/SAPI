<?php
include_once "../../../modelo/database.php";

if (!isset($_POST['EditModel1'])) {
    $id = $_POST['id'];
    $Titulo = $_POST['modalTxt1'];
    $Parrafo = $_POST['modalParrafo1'];
    $Boton1 = $_POST['modalParra1'];
    $Boton2 = $_POST['modalText1'];
    $Boton3 = $_POST['modalTe1'];
    $Boton4 = $_POST['modalTx1'];
    $Imagen = addslashes(file_get_contents($_FILES['modalImg1']['tmp_name']));

    $sql = "UPDATE laupi SET modalTxt1='$Titulo', modalParrafo1='$Parrafo', modalParra1='$Boton1', modalText1='$Boton2', modalTe1='$Boton3', modalTx1='$Boton4', modalImg1='$Imagen' where id ='$id'";
    $resultado = $mysqli->query($sql);
} else {
    $id = $_POST['id'];
    $Titulo = $_POST['modalTxt1'];
    $Parrafo = $_POST['modalParrafo1'];
    $Boton1 = $_POST['modalParra1'];
    $Boton2 = $_POST['modalText1'];
    $Boton3 = $_POST['modalTe1'];
    $Boton4 = $_POST['modalTx1'];

    $sql = "UPDATE laupi SET modalTxt1='$Titulo', modalParrafo1='$Parrafo', modalParra1='$Boton1', modalText1='$Boton2', modalTe1='$Boton3', modalTx1='$Boton4' where id ='$id'";
    $resultado = $mysqli->query($sql);
}
if ($resultado) {
    // header("index.php");
    echo "BIen Modal 1";
    // echo "<script>alert('Los datos se han modificado con Éxito');window.location='../../index.php'</script>";
} else {
    echo "error modal 1";
    // echo "<script>alert('Error, algo anda mal');window.location='../../Editar_Menu_1.php'</script>";
}
