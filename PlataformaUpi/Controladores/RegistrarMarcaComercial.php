<?php
session_start();

require_once '../Modelo/Conexion.php';
if (isset($_POST['ObVegetal'])) {
    // Tipo de registro
    $tipoRegistro = $_POST['tipoRegistro'];
    //id_users
    $Id_User = $_POST['id_User'];
    //Codigo de Proyecto
    $CodProd = $_POST['CodProd'];
    //Variables registro
    $resultadoObtenido = $_POST['resultadoObtenido'];
    $tipoProteccion = $_POST['tipoProteccion'];
    $indiqueColores = $_POST['indiqueColores'];
    $codigoColor = $_POST['codigoColor'];
    $otrosColores = $_POST['otrosColores'];
    $desProducto = $_POST['desProducto'];
    $desCaracte = $_POST['desCaracte'];
    $describaServicioFuturo = $_POST['describaServicioFuturo'];
    $identMarcaNixa = $_POST['identMarcaNixa'];
    $MarcaNixaFutu = $_POST['MarcaNixaFutu'];

        // print_r($ingresosSociedadAnterior);
    // die;
    // print_r($copia_Cedula);
    // die;
    //Captura usuarios
    $ListUser = $_POST['DataUsersList'];

    // Se crea una validación invalidando el registro si no se encuentra agregado al menos un talento en el formulario
    if ($ListUser != '') {
    // Persona Natural

    // Copia de cédula
    $directorio = '../Recursos/Documents/Natural/';
    $cedula_Archivo = $directorio . basename($_FILES['copia_Cedula']['name']);
    $copia_Cedula = $_FILES['copia_Cedula']['name'];
    if (move_uploaded_file($_FILES['copia_Cedula']['tmp_name'], $cedula_Archivo)) {
    }
    // logo o Graficos
    $directorio = '../Recursos/Documents/Natural/';
    $logo_Archivo = $directorio . basename($_FILES['logo_Grafico']['name']);
    $logo_Grafico = $_FILES['logo_Grafico']['name'];
    if (move_uploaded_file($_FILES['logo_Grafico']['tmp_name'], $logo_Archivo)) {
    }
    // certificado de Ingreso Anterior
    $directorio = '../Recursos/Documents/Natural/';
    $certificado_Archivo = $directorio . basename($_FILES['certificado_Ingreso_Ant']['name']);
    $certificado_Ingreso_Ant = $_FILES['certificado_Ingreso_Ant']['name'];
    if (move_uploaded_file($_FILES['certificado_Ingreso_Ant']['tmp_name'], $certificado_Archivo)) {
    }
    // Copia de cédula
    $directorio = '../Recursos/Documents/Natural/';
    $divicion_Archivo = $directorio . basename($_FILES['divicion_Porcentaje']['name']);
    $divicion_Porcentaje = $_FILES['divicion_Porcentaje']['name'];
    if (move_uploaded_file($_FILES['divicion_Porcentaje']['tmp_name'], $divicion_Archivo)) {
    }

    // Persona Juridica

    // Copia de cédula
    $directorio = '../Recursos/Documents/Juridica/';
    $existencia_Archivo = $directorio . basename($_FILES['certificado_Existencia']['name']);
    $certificado_Existencia = $_FILES['certificado_Existencia']['name'];
    if (move_uploaded_file($_FILES['certificado_Existencia']['tmp_name'], $existencia_Archivo)) {
    }
    // Cédula Sociedad
    $directorio = '../Recursos/Documents/Juridica/';
    $ceSociedad_Archivo = $directorio . basename($_FILES['cedulaSociedad']['name']);
    $cedulaSociedad = $_FILES['cedulaSociedad']['name'];
    if (move_uploaded_file($_FILES['cedulaSociedad']['tmp_name'], $ceSociedad_Archivo)) {
    }
    // Marca de Logo
    $directorio = '../Recursos/Documents/Juridica/';
    $marca_Archivo = $directorio . basename($_FILES['marcaLogo']['name']);
    $marcaLogo = $_FILES['marcaLogo']['name'];
    if (move_uploaded_file($_FILES['marcaLogo']['tmp_name'], $marca_Archivo)) {
    }
    // Copia de cédula
    $directorio = '../Recursos/Documents/Juridica/';
    $ingreso_Archivo = $directorio . basename($_FILES['ingresosSociedadAnterior']['name']);
    $ingresosSociedadAnterior = $_FILES['ingresosSociedadAnterior']['name'];
    if (move_uploaded_file($_FILES['ingresosSociedadAnterior']['tmp_name'], $ingreso_Archivo)) {
    }



    $sql_User = "INSERT INTO registro
     (Usuarios_idUsuarios,tipo_registro,tipo_marca_Mc,marca_logos_Mc,
     tipo_Color_Mc,codigoColor,otros_Colores_Mc,productos_Servicios_Mc,
     caracteristicas_Tecnicas_Mc,describaServicioFuturo_Mc,seleccione_Marca_Mc,seleccione_Marca_Futuro_Mc,
     cedula_Ciudadania_Doc_Mc,marca_logo_grafico_Doc_Mc,certificado_ingreso_Doc_Mc,divicion_porcentaje_Doc_Mc,
     certificado_Existencia_Rep_Mc,cedula_Ciudadania_Rep_Mc,logo_Gradicos_Mc,certificado_Ingreso_Mc
    )
    VALUES
    ($Id_User,'$tipoRegistro','$resultadoObtenido','$tipoProteccion',
    '$indiqueColores','$codigoColor','$otrosColores','$desProducto',
    '$desCaracte','$describaServicioFuturo','$identMarcaNixa','$MarcaNixaFutu',
    '$cedula_Archivo','$logo_Archivo','$certificado_Ingreso_Ant','$divicion_Porcentaje',
    '$certificado_Existencia','$ceSociedad_Archivo','$marcaLogo','$ingresosSociedadAnterior')";

    //VALIDACION DE USUARIOS EXTRAS E INSERCIÓN
    if ($consulta_User = mysqli_query($link, $sql_User)) {
        $id = mysqli_insert_id($link);
        //Registro Usuarios
        $out = array_values(json_decode($ListUser));
        $array = json_decode(json_encode($out), true);
        for ($i = 0; $i < count($array); $i++) {

            $sqlRF = "INSERT INTO `registro_full`(`idRegistro_full`, `usuarios_idUsuarios`, `Codigo_Proyecto`, `registro_idRegistro`, `tipo_registro_idTipo_Registro` ) VALUES (null," . $array[$i]['Id'] . ",'$CodProd',$id,$tipoRegistro)";

            if ($consulta_Registro = mysqli_query($link, $sqlRF)) {
                // echo "<script>alert('El formulario se ha registrado de manera Éxitosa!)</script>";
                echo "<script>window.location.href = '../Vista/Transaccional/RespuestaFormulario.php';</script>";
                // print_r($consulta_User);
            } else {
                // echo "<script>alert('Se ha presentado un fallo en el registro')</script>";
                echo "<script>window.location.href = '../Vista/Transaccional/FormularioFallo.php';</script>";
                // die("No existe la consulta");
            }
        }
    } else {
        // echo "<script>alert('Se ha presentado un fallo en el registro')</script>";
        echo "<script>window.location.href = '../Vista/Transaccional/FormularioFallo.php';</script>";

        // die("No existe la consulta");
    }
} else {

    $_SESSION['status'] = "Se debe agregar al menos un Talento.!";
    header("Location: ../Vista/Transaccional/RgObtencionVegetal.php");
    return false;
}
}
// $id = mysqli_insert_id($link);

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
