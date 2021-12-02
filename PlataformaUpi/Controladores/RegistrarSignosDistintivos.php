<?php
session_start();

require_once '../Modelo/Conexion.php';
if (isset($_POST['Signos_Distintivos'])) {
    // Tipo de registro
    $tipoRegistro = $_POST['tipoRegistro'];
    //id_users
    $Id_User = $_POST['id_User'];
    //Codigo de Proyecto
    $CodProd = $_POST['CodProd'];
    //Variable de los tipos de sub registro
    $tipoSubRegistro = $_POST['tipoSubRegistro'];
    // $condicionesUso = $_POST['condicionesUso'];
    $tpMarca = $_POST['tpMarca'];
    $marca_logos = $_POST['marca_logos'];
    $indiqueColores = $_POST['indiqueColores'];
    $codigoColor = $_POST['codigoColor'];
    $tipoColor = $_POST['tipoColor'];
    $otrosColores = $_POST['otrosColores'];
    $desProducto = $_POST['desProducto'];
    $desCaracte = $_POST['desCaracte'];
    $describaServicioFuturo = $_POST['describaServicioFuturo'];
    $identMarcaNixa = $_POST['identMarcaNixa'];
    $MarcaNixaFutu = $_POST['MarcaNixaFutu'];

    // Datos del formlario marca de certificación
    $tipoPersonaCertif = $_POST['tipoPersonaCertif'];
    $reglamento_Certif = $_POST['reglamento_Certif'];

    // Datos del formulario marca de Origen
    $tipoPersonaOrigen = $_POST['tipoPersonaOrigen'];
    $origenRegistroOrigen = $_POST['origenRegistroOrigen'];

    // Lema comercial 
    $lemacomercial_Sd = $_POST['lemComercial'];
    // Datos del formulario nombre comercial 
    // Nombre comercial 

    // La actividad comercial o industrial: Indique a que actividad se dedica el titular.
    $activ_Comer_Name = $_POST['activ_Comer_Name'];
    $nombreComercial = $_POST['nombreComercial_jurid'];


    // Formu Nombre comercial
    $nomComer_nat_comer = $_POST['nombreComercial_nat_comer'];
    $nomComer_jurid_dep_nom = $_POST['nombreComercial_jurid_dep_nom'];

    // colectivo_tp_Person
    $colectivo_tp_Person = $_POST['colectivo_tp_Person'];
    // print_r($nomComer_jurid_dep_nom);die;
    //Captura usuarios
    $ListUser = $_POST['DataUsersList'];

    // Se crea una validación invalidando el registro si no se encuentra agregado al menos un talento en el formulario

    // REGISTRO DE MARCA COMERCIAL
    // Tipo de persona Natural

    // Copia de la cedula Natural
    $directorio = '../Recursos/Documents/Natural/';
    $cedula_Nat_Archivo = $directorio . basename($_FILES['copia_cedula_Nat']['name']);
    $copia_cedula_Nat = $_FILES['copia_cedula_Nat']['name'];
    if (move_uploaded_file($_FILES['copia_cedula_Nat']['tmp_name'], $cedula_Nat_Archivo)) {
    }
    // Logo o graficos
    $directorio = '../Recursos/Documents/Natural/';
    $logo_Nat_Archivo = $directorio . basename($_FILES['logo_Graficos_Nat']['name']);
    $logo_Graficos_Nat = $_FILES['logo_Graficos_Nat']['name'];
    if (move_uploaded_file($_FILES['logo_Graficos_Nat']['tmp_name'], $logo_Nat_Archivo)) {
    }
    // Certificado de ingreso Natural
    $directorio = '../Recursos/Documents/Natural/';
    $certificado_Nat_Archivo = $directorio . basename($_FILES['certificado_ingreso_Nat']['name']);
    $certificado_ingreso_Nat  = $_FILES['certificado_ingreso_Nat']['name'];
    if (move_uploaded_file($_FILES['certificado_ingreso_Nat']['tmp_name'], $certificado_Nat_Archivo)) {
    }
    // Divición de archivo
    $directorio = '../Recursos/Documents/Natural/';
    $divicion_por_Archivo = $directorio . basename($_FILES['divicion_porcentajes_Nat']['name']);
    $divicion_porcentajes_Nat = $_FILES['divicion_porcentajes_Nat']['name'];
    if (move_uploaded_file($_FILES['divicion_porcentajes_Nat']['tmp_name'], $divicion_por_Archivo)) {
    }

    // DATOS DE PERSONA JURIDICA

    // Certificado de existencia legal
    $directorio = '../Recursos/Documents/Juridico/';
    $certificado_existe_Archivo = $directorio . basename($_FILES['certificado_existencia_jurid']['name']);
    $certificado_existencia_jurid = $_FILES['certificado_existencia_jurid']['name'];
    if (move_uploaded_file($_FILES['certificado_existencia_jurid']['tmp_name'], $certificado_existe_Archivo)) {
    }
    // print_r($certificado_existencia_jurid);die;

    // Copia de la cedula Juridico
    $directorio = '../Recursos/Documents/Juridico/';
    $cedula_jurid_Archivo = $directorio . basename($_FILES['cedula_ciudadania_jurid']['name']);
    $cedula_ciudadania_jurid = $_FILES['cedula_ciudadania_jurid']['name'];
    if (move_uploaded_file($_FILES['cedula_ciudadania_jurid']['tmp_name'], $cedula_jurid_Archivo)) {
    }
    // Logo o graficos Juridico
    $directorio = '../Recursos/Documents/Juridico/';
    $marca_logo_Archivo = $directorio . basename($_FILES['marca_logo_jurid']['name']);
    $marca_logo_jurid = $_FILES['marca_logo_jurid']['name'];
    if (move_uploaded_file($_FILES['marca_logo_jurid']['tmp_name'], $marca_logo_Archivo)) {
    }
    // Certificado de ingreso Juridico
    $directorio = '../Recursos/Documents/Juridico/';
    $ingre_soci_jurid_Archivo = $directorio . basename($_FILES['ingreso_sociedad_jurid']['name']);
    $ingreso_sociedad_jurid = $_FILES['ingreso_sociedad_jurid']['name'];
    if (move_uploaded_file($_FILES['ingreso_sociedad_jurid']['tmp_name'], $ingre_soci_jurid_Archivo)) {
    }

    // REGISTRO DE MARCA COLECTIVA
    // TIPO DE PERSONA NATURAL 

    // Copia de la cedula Natural
    $directorio = '../Recursos/Documents/Natural/';
    $cedula_mar_Nat_Archivo = $directorio . basename($_FILES['copia_cedula_mar_Nat']['name']);
    $copia_cedula_mar_Nat = $_FILES['copia_cedula_mar_Nat']['name'];
    if (move_uploaded_file($_FILES['copia_cedula_mar_Nat']['tmp_name'], $cedula_mar_Nat_Archivo)) {
    }
    // Logo o graficos
    $directorio = '../Recursos/Documents/Natural/';
    $logo_mar_Nat_Archivo = $directorio . basename($_FILES['logo_Graficos_mar_Nat']['name']);
    $logo_Graficos_mar_Nat = $_FILES['logo_Graficos_mar_Nat']['name'];
    if (move_uploaded_file($_FILES['logo_Graficos_mar_Nat']['tmp_name'], $logo_mar_Nat_Archivo)) {
    }
    // Certificado de ingreso Natural
    $directorio = '../Recursos/Documents/Natural/';
    $certificado_mar_Nat_Archivo = $directorio . basename($_FILES['certificado_ingreso_mar_Nat']['name']);
    $certificado_ingreso_mar_Nat  = $_FILES['certificado_ingreso_mar_Nat']['name'];
    if (move_uploaded_file($_FILES['certificado_ingreso_mar_Nat']['tmp_name'], $certificado_mar_Nat_Archivo)) {
    }
    // Divición de archivo
    $directorio = '../Recursos/Documents/Natural/';
    $divicion_por_mar_Archivo = $directorio . basename($_FILES['divicion_porcentajes_mar_Nat']['name']);
    $divicion_porcentajes_mar_Nat = $_FILES['divicion_porcentajes_mar_Nat']['name'];
    if (move_uploaded_file($_FILES['divicion_porcentajes_mar_Nat']['tmp_name'], $divicion_por_mar_Archivo)) {
    }
    // DATOS DE PERSONA JURIDICA

    // Certificado de existencia legal
    $directorio = '../Recursos/Documents/Juridico/';
    $certificado_existe_mar_Archivo = $directorio . basename($_FILES['certificado_existencia_mar_jurid']['name']);
    $certificado_existencia_mar_jurid = $_FILES['certificado_existencia_mar_jurid']['name'];
    if (move_uploaded_file($_FILES['certificado_existencia_mar_jurid']['tmp_name'], $certificado_existe_mar_Archivo)) {
    }

    // Copia de la cedula Juridico
    $directorio = '../Recursos/Documents/Juridico/';
    $cedula_jurid_mar_Archivo = $directorio . basename($_FILES['cedula_ciudadania_mar_jurid']['name']);
    $cedula_ciudadania_mar_jurid = $_FILES['cedula_ciudadania_mar_jurid']['name'];
    if (move_uploaded_file($_FILES['cedula_ciudadania_mar_jurid']['tmp_name'], $cedula_jurid_mar_Archivo)) {
    }
    // Logo o graficos Juridico
    $directorio = '../Recursos/Documents/Juridico/';
    $marca_logo_mar_Archivo = $directorio . basename($_FILES['marca_logo_mar_jurid']['name']);
    $marca_logo_mar_jurid = $_FILES['marca_logo_mar_jurid']['name'];
    if (move_uploaded_file($_FILES['marca_logo_mar_jurid']['tmp_name'], $marca_logo_mar_Archivo)) {
    }
    // Certificado de ingreso Juridico
    $directorio = '../Recursos/Documents/Juridico/';
    $ingreso_socied_mar_jurid_Archivo = $directorio . basename($_FILES['ingreso_sociedad_mar_jurid']['name']);
    $ingreso_sociedad_mar_jurid = $_FILES['ingreso_sociedad_mar_jurid']['name'];
    if (move_uploaded_file($_FILES['ingreso_sociedad_mar_jurid']['tmp_name'], $ingreso_socied_mar_jurid_Archivo)) {
    }

    // REGISTRO DE MARCA DE CERTIFICACIÓN

    // certifi_Existencia_certif
    $directorio = '../Recursos/Documents/Natural/';
    $certif_existen_cert_Archivo = $directorio . basename($_FILES['certifi_Existencia_certif']['name']);
    $certifi_Existencia_certif = $_FILES['certifi_Existencia_certif']['name'];
    if (move_uploaded_file($_FILES['certifi_Existencia_certif']['tmp_name'], $certif_existen_cert_Archivo)) {
    }
    // cedula_certif
    $directorio = '../Recursos/Documents/Natural/';
    $cedula_ciud_certf_Archivo = $directorio . basename($_FILES['cedula_certif']['name']);
    $cedula_certif = $_FILES['cedula_certif']['name'];
    if (move_uploaded_file($_FILES['cedula_certif']['tmp_name'], $cedula_ciud_certf_Archivo)) {
    }
    // logo_grafico_certif
    $directorio = '../Recursos/Documents/Natural/';
    $certifi_logo_Archivo = $directorio . basename($_FILES['logo_grafico_certif']['name']);
    $logo_grafico_certif  = $_FILES['logo_grafico_certif']['name'];
    if (move_uploaded_file($_FILES['logo_grafico_certif']['tmp_name'], $certifi_logo_Archivo)) {
    }

    // REGISTRO DE MARCA DE ORIGEN

    // certif_unico_Archivo
    $directorio = '../Recursos/Documents/Natural/';
    $certif_unico_Archivo = $directorio . basename($_FILES['certifi_existencia_origen']['name']);
    $certifi_existencia_origen = $_FILES['certifi_existencia_origen']['name'];
    if (move_uploaded_file($_FILES['certifi_existencia_origen']['tmp_name'], $certif_unico_Archivo)) {
    }
    //cedula_origen_Archivo
    $directorio = '../Recursos/Documents/Natural/';
    $cedula_origen_Archivo = $directorio . basename($_FILES['cedula_certif_origen']['name']);
    $cedula_certif_origen = $_FILES['cedula_certif_origen']['name'];
    if (move_uploaded_file($_FILES['cedula_certif_origen']['tmp_name'], $cedula_origen_Archivo)) {
    }
    // Certificado de ingreso Natural
    $directorio = '../Recursos/Documents/Natural/';
    $docum_origen_Archivo = $directorio . basename($_FILES['documento_geografico_origen']['name']);
    $documento_geografico_origen  = $_FILES['documento_geografico_origen']['name'];
    if (move_uploaded_file($_FILES['documento_geografico_origen']['tmp_name'], $docum_origen_Archivo)) {
    }
    // Divición de archivo
    $directorio = '../Recursos/Documents/Natural/';
    $rese_origen_Archivo = $directorio . basename($_FILES['rese_reputacion_origen']['name']);
    $rese_reputacion_origen = $_FILES['rese_reputacion_origen']['name'];
    if (move_uploaded_file($_FILES['rese_reputacion_origen']['tmp_name'], $rese_origen_Archivo)) {
    }

    //certificado_origen_Archivo
    $directorio = '../Recursos/Documents/Juridico/';
    $certificado_origen_Archivo = $directorio . basename($_FILES['pruebas_certifi_origen']['name']);
    $pruebas_certifi_origen = $_FILES['pruebas_certifi_origen']['name'];
    if (move_uploaded_file($_FILES['pruebas_certifi_origen']['tmp_name'], $certificado_origen_Archivo)) {
    }
    // REGISTRO DE LEMA COMERCIAL 

    $directorio = '../Recursos/Documents/Juridico/';
    $expediente_registro_Archivo = $directorio . basename($_FILES['expediente_Regis_Lem']['name']);
    $expediente_Regis_Lem = $_FILES['expediente_Regis_Lem']['name'];
    if (move_uploaded_file($_FILES['expediente_Regis_Lem']['tmp_name'], $expediente_registro_Archivo)) {
    }

    //Documento del formulario nombre comercial

    // certif_unico_Archivo
    $directorio = '../Recursos/Documents/Natural/';
    $copia_ced_comer_Archivo = $directorio . basename($_FILES['copia_cedula_Nat_comer']['name']);
    $copia_cedula_Nat_comer = $_FILES['copia_cedula_Nat_comer']['name'];
    if (move_uploaded_file($_FILES['copia_cedula_Nat_comer']['tmp_name'], $copia_ced_comer_Archivo)) {
    }
    // cedula_origen_Archivo
    $directorio = '../Recursos/Documents/Natural/';
    $certif_comer_Archivo = $directorio . basename($_FILES['certificado_ingreso_Comer']['name']);
    $certificado_ingreso_Comer = $_FILES['certificado_ingreso_Comer']['name'];
    if (move_uploaded_file($_FILES['certificado_ingreso_Comer']['tmp_name'], $certif_comer_Archivo)) {
    }
    // Persona juridica
    // Certificado de ingreso Juridico
    $directorio = '../Recursos/Documents/Juridico/';
    $certific_comer_Archivo = $directorio . basename($_FILES['certif_exist_col_jurid_comer']['name']);
    $certif_exist_col_jurid_comer  = $_FILES['certif_exist_col_jurid_comer']['name'];
    if (move_uploaded_file($_FILES['certif_exist_col_jurid_comer']['tmp_name'], $certific_comer_Archivo)) {
    }
    // Divición de archivo
    $directorio = '../Recursos/Documents/Juridico/';
    $cedula_comer_Archivo = $directorio . basename($_FILES['cedula_col_jurid_comer']['name']);
    $cedula_col_jurid_comer = $_FILES['cedula_col_jurid_comer']['name'];
    if (move_uploaded_file($_FILES['cedula_col_jurid_comer']['tmp_name'], $cedula_comer_Archivo)) {
    }

    // certificado_origen_Archivo
    $directorio = '../Recursos/Documents/Juridico/';
    $ingre_comer_Archivo = $directorio . basename($_FILES['ingre_socie_col_jurid_comer']['name']);
    $ingre_socie_col_jurid_comer = $_FILES['ingre_socie_col_jurid_comer']['name'];
    if (move_uploaded_file($_FILES['ingre_socie_col_jurid_comer']['tmp_name'], $ingre_comer_Archivo)) {
    }

    // print_r($ingre_socie_col_jurid_comer);die;
    $documents = "INSERT INTO documentos (
        cedula_ciudadania_nat_com,marca_log_graficos_nat_com,certi_ingreso_anterior_nat_com,divicion_porcentaje_nat_com,
        certificado_existencia_jurid_com,cedula_ciudadania_jurid_com,marca_logo_jurid_com,ingreso_sociedad_jurid_com,
        copia_cedula_mar_Nat_col,logo_Graficos_mar_Nat_col,certificado_ingreso_mar_Nat_col,divicion_porcentajes_mar_Nat_col,
        certificado_existencia_mar_jurid_col,cedula_ciudadania_mar_jurid_col,marca_logo_mar_jurid_col,ingreso_sociedad_mar_jurid_col,
        certifi_Existencia_certif_Cert,cedula_certif_Cert,logo_grafico_certif_cert,certifi_existencia_origen,
        cedula_certif_origen,documento_geografico_origen,rese_reputacion_origen,pruebas_certifi_origen,
        expediente_SIC_Lema,copia_cedula_Nat_comer,certificado_ingreso_Comer,certif_exist_col_jurid_comer,
        cedula_col_jurid_comer,ingre_socie_col_jurid_comer
    ) VALUES (
        '$copia_cedula_Nat','$logo_Graficos_Nat','$certificado_ingreso_Nat','$divicion_porcentajes_Nat',
        '$certificado_existencia_jurid','$cedula_ciudadania_jurid','$marca_logo_jurid','$ingreso_sociedad_jurid',
        '$copia_cedula_mar_Nat','$logo_Graficos_mar_Nat','$certificado_ingreso_mar_Nat','$divicion_porcentajes_mar_Nat',
        '$certificado_existencia_mar_jurid','$cedula_ciudadania_mar_jurid','$marca_logo_mar_jurid','$ingreso_sociedad_mar_jurid',
        '$certifi_Existencia_certif','$cedula_certif','$logo_grafico_certif','$certifi_existencia_origen',
        '$cedula_certif_origen','$documento_geografico_origen','$rese_reputacion_origen','$pruebas_certifi_origen',
        '$expediente_Regis_Lem','$copia_cedula_Nat_comer','$certificado_ingreso_Comer','$certif_exist_col_jurid_comer',
        '$cedula_col_jurid_comer','$ingre_socie_col_jurid_comer')";

    if ($cons_Document = mysqli_query($link, $documents)) {
        $idDocument = mysqli_insert_id($link);

        // documentos_Sd
        $sql_User = "INSERT INTO registro(
        Usuarios_idUsuarios,tipo_registro,tipoSubRegistro_Sd,tipo_marca_Sd,
        marca_logos_Sd,indiqueColores_Sd,codigoColor_Sd,tipo_Color_Sd,
        otros_Colores_Sd,productos_Servicios_Sd,caracteristicas_Tecnicas_Sd,describaServicioFuturo_Sd,
        seleccione_Marca_Sd,seleccione_Marca_Futuro_Sd,documentos_Sd,tipo_persona_orig_Sd,
        origen_Registro_Origen_sd,reglamento_Certif_Sd,tipoPersonaCertif_Sd,lemacomercial_Sd,
        activ_Comer_Name_Sd,nombreComercial_Sd,nomComer_nat_comer_Sd,nomComer_jurid_dep_nom,
        colectivo_tp_Person_sd
        )VALUES(
        $Id_User,'$tipoRegistro','$tipoSubRegistro','$tpMarca',
        '$marca_logos','$indiqueColores','$codigoColor','$tipoColor',
        '$otrosColores','$desProducto','$desCaracte','$describaServicioFuturo',
        '$identMarcaNixa','$MarcaNixaFutu','$idDocument','$tipoPersonaOrigen',
        '$origenRegistroOrigen','$reglamento_Certif','$tipoPersonaCertif','$lemacomercial_Sd',
        '$activ_Comer_Name','$nombreComercial','$nomComer_nat_comer','$nomComer_jurid_dep_nom',
        '$colectivo_tp_Person'
        )";

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
}

// $id = mysqli_insert_id($link);

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
