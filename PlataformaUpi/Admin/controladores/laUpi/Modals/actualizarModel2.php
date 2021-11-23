<?php
include_once "../../../modelo/database.php";

if (!isset($_POST['EditModel2'])) {
    $id = $_POST['id'];
    $Titulo = $_POST['modalTxt2'];
    $Parrafo = $_POST['modalParrafo2'];
    $Boton1 = $_POST['modalParra2'];
    $Boton2 = $_POST['modalText2'];
    $Boton3 = $_POST['modalTe2'];
    $Boton4 = $_POST['modalTx2'];
    $Imagen = addslashes(file_get_contents($_FILES['modalImg2']['tmp_name']));

    $sql = "UPDATE laupi SET modalTxt2='$Titulo', modalParrafo2='$Parrafo', modalParra2='$Boton1', modalText2='$Boton2', modalTe2='$Boton3', modalTx2='$Boton4', modalImg2='$Imagen' where id ='$id'";
    $resultado = $mysqli->query($sql);
} else {
    $id = $_POST['id'];
    $Titulo = $_POST['modalTxt2'];
    $Parrafo = $_POST['modalParrafo2'];
    $Boton1 = $_POST['modalParra2'];
    $Boton2 = $_POST['modalText2'];
    $Boton3 = $_POST['modalTe2'];
    $Boton4 = $_POST['modalTx2'];

    $sql = "UPDATE laupi SET modalTxt2='$Titulo', modalParrafo2='$Parrafo', modalParra2='$Boton1', modalText2='$Boton2', modalTe2='$Boton3', modalTx2='$Boton4' where id ='$id'";
    $resultado = $mysqli->query($sql);
}
if ($resultado) {
    // header("index.php");
    echo "BIen Modal 2";
    // echo "<script>alert('Los datos se han modificado con Éxito');window.location='../../index.php'</script>";
} else {
    echo "error modal 2";
    // echo "<script>alert('Error, algo anda mal');window.location='../../Editar_Menu_1.php'</script>";
}
