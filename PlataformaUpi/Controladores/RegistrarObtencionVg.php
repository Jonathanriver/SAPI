<?php
session_start();

require_once '../Modelo/Conexion.php';
if (isset($_POST['ObVegetal'])) {
    // Tipo de registro
    $tipoRegistro = $_POST['tipoRegistro'];
    //id_users
    $Id_User = $_POST['id_User'];
    // print_r($Id_User);die;
    //Codigo de Proyecto
    $CodProd = $_POST['CodProd'];
    //Variables registro
    $nombreespecie = $_POST['nombreespecie'];
    $nombreCientifico = $_POST['nombreCientifico'];
    $dominacionPropuesta = $_POST['dominacionPropuesta'];
    $referenciaObtentor = $_POST['referenciaObtentor'];
    $drescripcionVariedad = $_POST['drescripcionVariedad'];
    $descripcionGenetico = $_POST['descripcionGenetico'];
    $variedadObtenida = $_POST['variedadObtenida'];
    $variedadTransferida = $_POST['variedadTransferida'];
    $descripcionVariedadSena = $_POST['descripcionVariedadSena'];
    $solicitudproteccion = $_POST['solicitudproteccion'];
    $tipoProteccion = $_POST['tipoProteccion'];
    $pais = $_POST['pais'];
    $numeroSolicitud = $_POST['numeroSolicitud'];
    $estadoSolicitud = $_POST['estadoSolicitud'];
    $referenciaOtentor = $_POST['referenciaOtentor'];
    $situacionVariedad = $_POST['situacionVariedad'];
    $cuandoVariedad = $_POST['cuandoVariedad'];
    $dondeVariedad = $_POST['dondeVariedad'];
    $indiqueSituacion = $_POST['indiqueSituacion'];
    $paisVariedadSituacion = $_POST['paisVariedadSituacion'];
    $cuandoSituacionVr = $_POST['cuandoSituacionVr'];
    $denominacionSituacionVariedad = $_POST['denominacionSituacionVariedad'];
    $examenTecnico = $_POST['examenTecnico'];
    $examenTecnicoFechaFin = $_POST['examenTecnicoFechaFin'];
    $examenTecnicoFechain = $_POST['examenTecnicoFechain'];
    $origenCaracteres = $_POST['origenCaracteres'];
    $origenNivelExpresion = $_POST['origenNivelExpresion'];
    $origenVariedadTi = $_POST['origenVariedadTi'];
    $origenNota = $_POST['origenNota'];
    $variedadDenominacion = $_POST['variedadDenominacion'];
    $variedadCaracter = $_POST['variedadCaracter'];
    $variedadSiminal = $_POST['variedadSiminal'];
    $variedadPresentada = $_POST['variedadPresentada'];
    $resistenciaplagas = $_POST['resistenciaplagas'];
    $condicionesVarieda = $_POST['condicionesVarieda'];
    $otrasInformacion = $_POST['otrasInformacion'];

    //Captura usuarios
    $ListUser = $_POST['DataUsersList'];

    // Se crea una validación invalidando el registro si no se encuentra agregado al menos un talento en el formulario


    $sql_User = "INSERT INTO registro
     (Usuarios_idUsuarios,tipo_registro,nombre_especie_cultivo,nombre_cientifico,denominacion_propuesta,referencia_obtentor_lg,
     descripcion_variedad,info_origen_genetico,variedad_obtenida,variedad_transferida,
     descripcion_variedad_sena,solicitud_Proteccion,tipo_proteccion_sl,pais_sl,
     numero_solicitud_sl,estado_solicitud_sl,referencia_obtentor_sl,situacion_variedad,
     cuando_variedad,donde_variedad,indiqueSituacion,pais_Variedad_Situacion,
     cuando_Situacion,denominacion_Situacion,examen_Tecnico,examen_Tec_Fech_Fin,
     examen_Tec_Fech_In,origen_Caracteres,origen_Nivel_Expresion,origen_Variedad,
     origen_nota,variedad_denominacion_sd,variedad_Caracter,variedad_Similar,
     variedad_Presentada,resistencia_Plagas,condiciones_Variedad,otras_Informacion
    )
    VALUES
    ($Id_User,'$tipoRegistro','$nombreespecie','$nombreCientifico','$dominacionPropuesta',
    '$referenciaObtentor','$drescripcionVariedad','$descripcionGenetico','$variedadObtenida',
    '$variedadTransferida','$descripcionVariedadSena','$solicitudproteccion','$tipoProteccion',
    '$pais','$numeroSolicitud','$estadoSolicitud','$referenciaOtentor',
    '$situacionVariedad','$cuandoVariedad','$dondeVariedad','$indiqueSituacion',
    '$paisVariedadSituacion','$cuandoSituacionVr','$denominacionSituacionVariedad','$examenTecnico',
    '$examenTecnicoFechaFin','$examenTecnicoFechain','$origenCaracteres','$origenNivelExpresion',
    '$origenVariedadTi','$origenNota','$variedadDenominacion','$variedadCaracter',
    '$variedadSiminal','$variedadPresentada','$resistenciaplagas','$condicionesVarieda',
    '$otrasInformacion')";

    if ($ListUser != '') {
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
        //VALIDACION DE USUARIOS EXTRAS E INSERCIÓN SIN UN TALENTO ASOCIADO
        if ($consulta_User = mysqli_query($link, $sql_User)) {
            $id = mysqli_insert_id($link);
            //Registro Usuarios
            // $out = array_values(json_decode($ListUser));
            // $array = json_decode(json_encode($out), true);
            // for ($i = 0; $i < count($array); $i++) {

            $sqlRF = "INSERT INTO `registro_full`(`idRegistro_full`, `usuarios_idUsuarios`, `Codigo_Proyecto`, `registro_idRegistro`, `tipo_registro_idTipo_Registro` ) VALUES (null,0,'$CodProd',$id,$tipoRegistro)";

            if ($consulta_Registro = mysqli_query($link, $sqlRF)) {
                // echo "<script>alert('El formulario se ha registrado de manera Éxitosa!)</script>";
                echo "<script>window.location.href = '../Vista/Transaccional/RespuestaFormulario.php';</script>";
                // print_r($consulta_User);
            } else {
                // echo "dsvsd";
                // echo "<script>alert('Se ha presentado un fallo en el registro')</script>";
                echo "<script>window.location.href = '../Vista/Transaccional/FormularioFallo.php';</script>";
                // die("No existe la consulta");
            }
        } else {
            // echo "<script>alert('Se ha presentado un fallo en el registro')</script>";
            echo "<script>window.location.href = '../Vista/Transaccional/FormularioFallo.php';</script>";

            // die("No existe la consulta");
        }
        // 

        echo "<script>window.location.href = '../Vista/Transaccional/FormularioFallo.php';</script>";
    }
}
// $id = mysqli_insert_id($link);

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
