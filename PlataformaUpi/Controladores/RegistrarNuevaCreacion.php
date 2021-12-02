<?php
require_once '../Modelo/Conexion.php';
if (isset($_POST['ObVegetal'])) {

    //Captura usuarios
    $ListUser = $_POST['DataUsersList'];

    // Se crea una validación invalidando el registro si no se encuentra agregado al menos un talento en el formulario
    // Tipo de registro
    $tipoRegistro = $_POST['tipoRegistro'];
    //id_users
    $Id_User = $_POST['id_User'];
    //Codigo de Proyecto
    $CodProd = $_POST['CodProd'];

    // Que tipo de registro quiere guardad( es una pregunta del formu)
    $deseaRegistrar = $_POST['Null'];
    //Tipo de Protección
    $tipoProteccion = $_POST['tipoProteccion'];
    // Resultados Obtenidos
    $resultadoObtenido = $_POST['resultadoObtenido'];
    // Información General
    $centroForm = $_POST['centroForm'];
    $regionSolici = $_POST['regionSolici'];
    $grupInvesti = $_POST['grupInvesti'];
    $nombreProyecto = $_POST['nombreProyecto'];
    $ntc = $_POST['ntc'];
    $tipoVinculacion = $_POST['tipoVinculacion'];
    $tpDocument = $_POST['tpDocument'];
    $numeroDocumento = $_POST['numeroDocumento'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $nombreCoti = $_POST['nombreCoti'];
    $cedulaCoti = $_POST['cedulaCoti'];
    $representante = $_POST['representante'];
    $direccion = $_POST['direccion'];
    $telCotitular = $_POST['telCotitular'];
    $correoCotit = $_POST['correoCotit'];
    $porcenCotitu = $_POST['porcenCotitu'];
    // Documentos acuerdo de propiedad intelectual
    $directorio = '../Recursos/Documents/Cotitulares/';
    $subir_Archivo = $directorio . basename($_FILES['acuerdo_Intelectual']['name']);
    $acuerInteName = $_FILES['acuerdo_Intelectual']['name'];
    if (move_uploaded_file($_FILES['acuerdo_Intelectual']['tmp_name'], $subir_Archivo)) {
    }
    // Información de la creación
    $estadoDesarrollo = $_POST['estadoDesarrollo'];
    $electiElectonic = $_POST['electiElectonic'];
    $ingMecanica = $_POST['ingMecanica'];
    $instrumentos = $_POST['instrumentos'];
    $quimica = $_POST['quimica'];
    $descripcionOtroPro = $_POST['descripcionOtroPro'];
    $descipcionCreacion = $_POST['descipcionCreacion'];
    $otrosSectores = $_POST['otrosSectores'];
    $ventaBenefi = $_POST['ventaBenefi'];
    $caracteriNovedo = $_POST['caracteriNovedo'];
    $impactoSolucion = $_POST['impactoSolucion'];
    $estadoArte = $_POST['estadoArte'];
    $pdps = $_POST['pdps'];
    $indiqueotro = $_POST['indiqueotro'];
    $posibiMerca = $_POST['posibiMerca'];
    $carg = $_POST['carg'];
    // Agregar Imagen Diseño de la creación 
    $directorio = '../Recursos/Documents/DisenoCreacion/';
    $subir_Archivo = $directorio . basename($_FILES['disCreacion']['name']);
    $disCreacion = $_FILES['disCreacion']['name'];
    if (move_uploaded_file($_FILES['disCreacion']['tmp_name'], $subir_Archivo)) {
    }
    $obserAdicion = $_POST['obserAdicion'];
    // print_r($obserAdicion);
    // die;

    $sql_User = "INSERT INTO registro
     (Usuarios_idUsuarios,tipo_Registro,deseaRegistrar_Nc,resultado_Obtenido_Nc,tipo_Proteccion_Nc,
     centro_Forma_Solicitante_Nc,regional_Solicitante_Nc,grupo_Investigacion_Nc,nombre_Proyecto_Nc,
     nombre_Titular_Crea_Nc,tipo_vinculacion_sena_Nc,tipo_Documento_Nc,numero_Documento_Nc,
     direccion_Nc,telefono_Contacto_Nc,correo_Electonico_Nc,nombre_Cotitulares_Nc,
     cedula_Nit_Cotitulare_Nc,repre_Legal_Document_Nc,dirrecion_Nc,telefono_Represent_Nc,
     correo_Represent_Nc,porcent_Participacion_Nc,acuerdo_Propiedad_Documento_Nc,
     estado_Desarrollo_Nc,electric_Electonica_Nc,ing_Mecanica_Nc,instrumentos_Nc,
     quimica_Nc,sector_Tecnologico_Nc,otro_producto_consumo_Nc,descripcion_Creacion_Nc,
     ventajas_Bene_Creacion_Nc,caracteris_Novedosas_Nc,impacto_Solucion_Nc,estado_Arte_Nc,
     publicacion_Divulgacion_Nc,indique_Otro_Nc,posibilidades_Mercado_Nc,contacto_acceso_Nc,
     documento_diseño_creacion_Nc,obserbacion_Adicional_Nc
    )
    VALUES
    ($Id_User,'$tipoRegistro','$deseaRegistrar','$resultadoObtenido','$tipoProteccion',
    '$centroForm','$regionSolici','$grupInvesti','$nombreProyecto',
    '$ntc','$tipoVinculacion','$tpDocument','$numeroDocumento',
    '$direccion','$telefono','$correo','$nombreCoti',
    '$cedulaCoti','$representante','$direccion','$telCotitular',
    '$correoCotit','$porcenCotitu','$acuerInteName','$estadoDesarrollo',
    '$electiElectonic','$ingMecanica','$instrumentos','$quimica',
    '$descripcionOtroPro','$descipcionCreacion','$otrosSectores','$ventaBenefi',
    '$caracteriNovedo','$impactoSolucion','$estadoArte','$pdps',
    '$indiqueotro','$posibiMerca','$carg','$disCreacion','$obserAdicion')";


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
