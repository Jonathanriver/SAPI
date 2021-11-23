<?php
include_once "../../modelo/database.php";

$Titulo = $_POST['titulo'];
$Parrafo = $_POST['parrafo'];
$Boton1 = $_POST['boton1'];
$Boton2 = $_POST['boton2'];
$Boton3 = $_POST['boton3'];
$Boton4 = $_POST['boton4'];
$Imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

$sql = "INSERT INTO laupi (titulo,parrafo,boton1,boton2,boton3,boton4,imagenFondo)VALUES('$Titulo','$Parrafo','$Boton1','$Boton2','$Boton3','$Boton4','$Imagen')";
$resultado = $mysqli->query($sql);

if ($resultado) {
    // header("index.php");
    echo "BIen";
    // echo "<script>alert('Los datos se han modificado con Éxito');window.location='../../index.php'</script>";
} else {
    echo "error";
    // echo "<script>alert('Error, algo anda mal');window.location='../../Editar_Menu_1.php'</script>";
}
