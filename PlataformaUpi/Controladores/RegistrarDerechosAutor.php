<?php
session_start();

require_once '../Modelo/Conexion.php';
if (isset($_POST['Derecho_Autor'])) {
    // Tipo de registro
    $tipoRegistro = $_POST['tipoRegistro'];
    //id_users
    $Id_User = $_POST['id_User'];
    //Codigo de Proyecto
    $CodProd = $_POST['CodProd'];

    // Inicio de datos del registro
    //Variable de los tipos de sub registro
    $tipoSubRegistro = $_POST['tipoSubRegistro'];
    //DATOS DEL AUTOR 
    $nombre_Autor = $_POST['nombre_Autor'];
    $naciona_autor = $_POST['naciona_autor'];
    $documento_autor = $_POST['documento_autor'];
    $lugar_autor = $_POST['lugar_autor'];
    $direccion_autor = $_POST['direccion_autor'];

    // DATOS DEL REPRODUCTOR
    $nombre_reprod = $_POST['nombre_reprod'];
    $correo_reprod = $_POST['correo_reprod'];
    $sitio_reprod = $_POST['sitio_reprod'];
    $direccion_reprod = $_POST['direccion_reprod'];
    $ciudad_reprod = $_POST['ciudad_reprod'];
    $pais_reprod = $_POST['pais_reprod'];

    // DATOS DE LA OBRA
    $estado_obra = $_POST['estado_obra'];
    $titulo_obra = $_POST['titulo_obra'];
    $fecha_creacion_obra = $_POST['fecha_creacion_obra'];
    $fecha_publi_obra = $_POST['fecha_publi_obra'];
    $pais_orign_obra = $_POST['pais_orign_obra'];
    $categoria_obra = $_POST['categoria_obra'];

    // CARACTER DE OBRA
    // Segun su creacion
    $segunMarca = $_POST['segunMarca'];
    // Segun su origen
    $seguncreacion = $_POST['seguncreacion'];
    // Segun autor
    $segunautor = $_POST['segunautor'];
    $otra_autor = $_POST['otra_autor'];

    // BREVE DESCRIPCION
    $descripcion_breve = $_POST['descripcion_breve'];
    // Funciones plataforma
    $funcion1_platform = $_POST['funcion1_platform'];
    $funcion2_platform = $_POST['funcion2_platform'];
    $funcion3_platform = $_POST['funcion3_platform'];
    $principal_Ventajas = $_POST['principal_Ventajas'];
    $poblacion_usara = $_POST['poblacion_usara'];
    $vantaja_desarrollo = $_POST['vantaja_desarrollo'];

    // ElEMENTO SOPORTE LOGICO
    $elemen_soporte_logic = $_POST['elemen_soporte_logic'];
    // TRANSFERENCIAS
    $titu_patrimon_tranfe = $_POST['titu_patrimon_tranfe'];
    // document_transfe, archivo

    // OBSERVACIONES
    $expre_part_observacion = $_POST['expre_part_observacion'];
    // NOMBRE SOLICITANTE
    $nombre_solicitante = $_POST['nombre_solicitante'];
    $document_solicitante = $_POST['document_solicitante'];
    $lugar_expedi_solicitante = $_POST['lugar_expedi_solicitante'];
    $repre_legal_solicitante = $_POST['repre_legal_solicitante'];
    $cedula_ciudad_solicitante = $_POST['cedula_ciudad_solicitante'];
    $nacio_solicitante = $_POST['nacio_solicitante'];
    $pais_solicitante = $_POST['pais_solicitante'];
    $ciud_solicitante = $_POST['ciud_solicitante'];
    $telefono_solicitante = $_POST['telefono_solicitante'];

    // SEGUNDO FOMULARIO
    // DATOS DEL REPRODUCTOR FOTOGRAFICO 
    $nombre_fonografico = $_POST['nombre_fonografico'];
    $naciona_fonografico = $_POST['naciona_fonografico'];
    $tpDocumentFono = $_POST['tpDocumentFono'];
    $numero_doc_fonografico = $_POST['numero_doc_fonografico'];
    $lugar_expedi_fonografico = $_POST['lugar_expedi_fonografico'];
    $direccion_fonografico = $_POST['direccion_fonografico'];
    $ciudad_fonografico = $_POST['ciudad_fonografico'];
    $email_fonografico = $_POST['email_fonografico'];
    // DATOS DE LA OBRA FOTOGRAFICO 
    $titulo_obra_fonografico = $_POST['titulo_obra_fonografico'];
    $fecha_pri_fija_fonografico = $_POST['fecha_pri_fija_fonografico'];
    $pais_orign_obra_fono = $_POST['pais_orign_obra_fono'];
    $fecha_publi_fono = $_POST['fecha_publi_fono'];
    $editada_fonografico = $_POST['editada_fonografico'];
    $inedita_fonografico = $_POST['inedita_fonografico'];
    $year_cansion_fnografica = $_POST['year_cansion_fnografica'];
    // DATOS DE OBRAS FIJAS EN FONOGRAMA 
    $titulo_obra_fija_fon = $_POST['titulo_obra_fija_fon'];
    $nombre_com_inter_fonografica = $_POST['nombre_com_inter_fonografica'];
    $pais_orign_fonografica = $_POST['pais_orign_fonografica'];
    // TRANSFERENCIAS DE LA OBRA
    $nom_razon_fonograma = $_POST['nom_razon_fonograma'];
    // trans_obra_fonograma, archivo
    // DATOS DEL SOLICITANTE
    // certific_existen_soli, archivo
    // representa_soli_fonogra,archivo

    $nombre_soli_fono = $_POST['nombre_soli_fono'];
    $naciona_soli_fono = $_POST['naciona_soli_fono'];
    $tpDocument_soli_Fono = $_POST['tpDocument_soli_Fono'];
    $nume_doc_fono = $_POST['nume_doc_fono'];
    $expedicion_fono = $_POST['expedicion_fono'];
    $direccion_soli_fono = $_POST['direccion_soli_fono'];
    $inedita_fonografico = $_POST['ciudad_soli_fono'];
    $email_soli_fono = $_POST['email_soli_fono'];
    $represen_soli_fono = $_POST['represen_soli_fono'];
    $pais_soli_fono = $_POST['pais_soli_fono'];
    $telefono_soli_fono = $_POST['telefono_soli_fono'];

    // TERCER FORMULARIO OBRA ARTISTICA
    $obra_Artistic = $_POST['obra_Artistic'];

    //  <!-- Datos de obra -->
    $titu_obra_artis = $_POST['titu_obra_artis'];
    $año_creacion_artis = $_POST['año_creacion_artis'];
    $pais_origen_artis = $_POST['pais_origen_artis'];
    $editada_artis = $_POST['editada_artis'];
    $ineditada_artis = $_POST['ineditada_artis'];
    $fecha_publi_artis = $_POST['fecha_publi_artis'];
    $num_edic_artis = $_POST['num_edic_artis'];
    $editor_artis = $_POST['editor_artis'];
    $direccion_artis = $_POST['direccion_artis'];
    $tpDocumentArtis = $_POST['tpDocumentArtis'];
    $num_docum_artis = $_POST['num_docum_artis'];
    $nacional_artis = $_POST['nacional_artis'];
    $impresor_artis = $_POST['impresor_artis'];
    $cracionFinObra_Artis = $_POST['cracionFinObra_Artis'];

    // <!-- Categoría de la obra -->
    $catObraArtis = $_POST['catObraArtis'];
    // <!-- Caracter de la obra -->
    $caractObra = $_POST['caractObra'];
    // opcion_origen
    $orig_Obra = $_POST['orig_Obra'];
    // forma_autor
    $forma_Conoser = $_POST['forma_Conoser'];
    // forma_elaboracion
    $forma_elabora = $_POST['forma_elabora'];

    // 
    $otroTpObra = $_POST['otroTpObra'];
    // 
    $obra_Litera = $_POST['obra_Litera'];
    //
    $obra_Musical = $_POST['obra_Musical'];
    // 
    $tipoMusica = $_POST['tipoMusica'];


    //Captura usuarios
    $ListUser = $_POST['DataUsersList'];

    // Se crea una validación invalidando el registro si no se encuentra agregado al menos un talento en el formulario
    // if ($ListUser != '') {


    // TRANSFERENCIAS
    $directorio = '../Recursos/Documents/Derechos_Autor/';
    $doc_trans_Archivo = $directorio . basename($_FILES['document_transfe']['name']);
    $document_transfe = $_FILES['document_transfe']['name'];
    if (move_uploaded_file($_FILES['document_transfe']['tmp_name'], $doc_trans_Archivo)) {
    }

    //   DOCUMENTOS
    // Certificado de existencia
    $directorio = '../Recursos/Documents/Derechos_Autor/';
    $certif_exist_Archivo = $directorio . basename($_FILES['certific_exist_document']['name']);
    $certific_exist_document = $_FILES['certific_exist_document']['name'];
    if (move_uploaded_file($_FILES['certific_exist_document']['tmp_name'], $certif_exist_Archivo)) {
    }
    // Tres tipos de documentos
    $directorio = '../Recursos/Documents/Derechos_Autor/';
    $tres_documents_Archivo = $directorio . basename($_FILES['tres_documents']['name']);
    $tres_documents  = $_FILES['tres_documents']['name'];
    if (move_uploaded_file($_FILES['tres_documents']['tmp_name'], $tres_documents_Archivo)) {
    }
    // Manual desarollo
    $directorio = '../Recursos/Documents/Derechos_Autor/';
    $manual_desarro_Archivo = $directorio . basename($_FILES['manual_desarrollo']['name']);
    $manual_desarrollo = $_FILES['manual_desarrollo']['name'];
    if (move_uploaded_file($_FILES['manual_desarrollo']['tmp_name'], $manual_desarro_Archivo)) {
    }
    // Codigo fuente
    $directorio = '../Recursos/Documents/Derechos_Autor/';
    $cod_fuente_Archivo = $directorio . basename($_FILES['cod_fuente_document']['name']);
    $cod_fuente_document = $_FILES['cod_fuente_document']['name'];
    if (move_uploaded_file($_FILES['cod_fuente_document']['tmp_name'], $cod_fuente_Archivo)) {
    }
    // DOCUMENTOS SEGUNDO FORMULARIO
    // trans_obra_fonograma
    $directorio = '../Recursos/Documents/Derechos_Autor/';
    $trans_obra_Archivo = $directorio . basename($_FILES['trans_obra_fonograma']['name']);
    $trans_obra_fonograma = $_FILES['trans_obra_fonograma']['name'];
    if (move_uploaded_file($_FILES['trans_obra_fonograma']['tmp_name'], $trans_obra_Archivo)) {
    }
    // certific_existen_soli
    $directorio = '../Recursos/Documents/Derechos_Autor/';
    $certif_Existe_Archivo = $directorio . basename($_FILES['certific_existen_soli']['name']);
    $certific_existen_soli = $_FILES['certific_existen_soli']['name'];
    if (move_uploaded_file($_FILES['certific_existen_soli']['tmp_name'], $certif_Existe_Archivo)) {
    }
    // representa_soli_fonogra
    $directorio = '../Recursos/Documents/Derechos_Autor/';
    $repre_soli_Archivo = $directorio . basename($_FILES['representa_soli_fonogra']['name']);
    $representa_soli_fonogra = $_FILES['representa_soli_fonogra']['name'];
    if (move_uploaded_file($_FILES['representa_soli_fonogra']['tmp_name'], $repre_soli_Archivo)) {
    }
    // certific_existen_soli
    $directorio = '../Recursos/Documents/Derechos_Autor/';
    $obra_object_Archivo = $directorio . basename($_FILES['obra_objecto_regis_soli']['name']);
    $obra_objecto_regis_soli = $_FILES['obra_objecto_regis_soli']['name'];
    if (move_uploaded_file($_FILES['obra_objecto_regis_soli']['tmp_name'], $obra_object_Archivo)) {
    }
    // representa_soli_fonogra
    $directorio = '../Recursos/Documents/Derechos_Autor/';
    $cert_soli_Archivo = $directorio . basename($_FILES['cert_repre_leg_soli']['name']);
    $cert_repre_leg_soli = $_FILES['cert_repre_leg_soli']['name'];
    if (move_uploaded_file($_FILES['cert_repre_leg_soli']['tmp_name'], $cert_soli_Archivo)) {
    }

    // print_r($cod_fuente_document);die;

    $documents = "INSERT INTO documentos (
        document_transfe_Du,certific_exist_document_Du,tres_documents_Du,manual_desarrollo_Du,
        cod_fuente_document,trans_obra_fonograma,certific_existen_soli,
        representa_soli_fonogra,obra_objecto_regis_soli,cert_repre_leg_soli
    ) VALUES (
        '$document_transfe','$certific_exist_document','$tres_documents','$manual_desarrollo',
        '$cod_fuente_document','$trans_obra_fonograma','$certific_existen_soli',
        '$representa_soli_fonogra','$obra_objecto_regis_soli','$cert_repre_leg_soli')";

    if ($cons_Document = mysqli_query($link, $documents)) {
        $idDocument = mysqli_insert_id($link);

        // documentos_Sd
        $sql_User = "INSERT INTO registro(
        Usuarios_idUsuarios,tipo_registro,documentos_Sd,tipoSubRegistro_Sd,
        nombre_Autor_Du,naciona_autor_Du,documento_autor_Du,lugar_autor_Du,
        direccion_autor_Du,nombre_reprod_Du,correo_reprod_Du,sitio_reprod_Du,
        direccion_reprod_Du,ciudad_reprod_Du,pais_reprod_Du,estado_obra_Du,
        titulo_obra_Du,fecha_creacion_obra_Du,fecha_publi_obra_Du,pais_orign_obra_Du,
        categoria_obra_Du,segunMarca_Du,segunCreacion_Du,segunautor_Du,
        otra_autor_Du,descripcion_breve_Du,funcion1_platform_Du,funcion2_platform_Du,
        funcion3_platform_Du,principal_Ventajas_Du,poblacion_usara_Du,vantaja_desarrollo_Du,
        elemen_soporte_logic_Du,titu_patrimon_tranfe_Du,expre_part_observacion_Du,nombre_solicitante_Du,
        document_solicitante_Du,lugar_expedi_solicitante_Du,repre_legal_solicitante_Du,cedula_ciudad_solicitante_Du,
        nacio_solicitante_Du,pais_solicitante_Du,ciud_solicitante_Du,telefono_solicitante_Du,
        nombre_fonografico_Du_Fon,naciona_fonografico_Du,tpDocumentFono_Du,numero_doc_fonografico_Du,
        lugar_expedi_fonografico_Du,direccion_fonografico_Du,ciudad_fonografico_Du,email_fonografico_Du,
        titulo_obra_fonografico_Du,fecha_pri_fija_fonografico_Du,pais_orign_obra_fono_Du,fecha_publi_fono_Du,
        editada_fonografico_Du,inedita_fonografico_Du,year_cansion_fnografica_Du,titulo_obra_fija_fon_Du,
        nombre_com_inter_fonografica_Du,pais_orign_fonografica_Du,nom_razon_fonograma_Du,nombre_soli_fono_Du,
        naciona_soli_fono_Du,tpDocument_soli_Fono_Du,nume_doc_fono_Du,expedicion_fono_Du,
        direccion_soli_fono_Du,ciudad_soli_fono_Du,email_soli_fono_Du,represen_soli_fono_Du,
        pais_soli_fono_Du,telefono_soli_fono_Du,obra_Artistic__Atis_Du,titu_obra_artis_Du,
        año_creacion_artis_Du,pais_origen_artis_Du,editada_artis_Du,ineditada_artis_Du,
        fecha_publi_artis_Du,num_edic_artis_Du,editor_artis_Du,direccion_artis_Du,
        tpDocumentArtis_Du,num_docum_artis_Du,nacional_artis_Du,impresor_artis_Du,
        cracionFinObra_Artis_Du,catObraArtis_Du,caractObra_Du,orig_Obra_Du,
        forma_Conoser_Du,forma_elabora_Du,otroTpObra_Du,obra_Litera_Du,tipoMusica_Du,
        obra_Musical_Du
        )VALUES(
        $Id_User,'$tipoRegistro','$idDocument','$tipoSubRegistro',
        '$nombre_Autor','$naciona_autor','$documento_autor','$lugar_autor',
        '$direccion_autor','$nombre_reprod','$correo_reprod','$sitio_reprod',
        '$direccion_reprod','$ciudad_reprod','$pais_reprod','$estado_obra',
        '$titulo_obra','$fecha_creacion_obra','$fecha_publi_obra','$pais_orign_obra',
        '$categoria_obra','$segunMarca','$seguncreacion','$segunautor',
        '$otra_autor','$descripcion_breve','$funcion1_platform','$funcion2_platform',
        '$funcion3_platform','$principal_Ventajas','$poblacion_usara','$vantaja_desarrollo',
        '$elemen_soporte_logic','$titu_patrimon_tranfe','$expre_part_observacion','$nombre_solicitante',
        '$document_solicitante','$lugar_expedi_solicitante','$repre_legal_solicitante','$cedula_ciudad_solicitante',
        '$nacio_solicitante','$pais_solicitante','$ciud_solicitante','$telefono_solicitante',
        '$nombre_fonografico','$naciona_fonografico','$tpDocumentFono','$numero_doc_fonografico',
        '$lugar_expedi_fonografico','$direccion_fonografico','$ciudad_fonografico','$email_fonografico',
        '$titulo_obra_fonografico','$fecha_pri_fija_fonografico','$pais_orign_obra_fono','$fecha_publi_fono',
        '$editada_fonografico','$inedita_fonografico','$year_cansion_fnografica','$titulo_obra_fija_fon',
        '$nombre_com_inter_fonografica','$pais_orign_fonografica','$nom_razon_fonograma','$nombre_soli_fono',
        '$naciona_soli_fono','$tpDocument_soli_Fono','$nume_doc_fono','$expedicion_fono',
        '$direccion_soli_fono','$inedita_fonografico','$email_soli_fono','$represen_soli_fono',
        '$pais_soli_fono','$telefono_soli_fono','$obra_Artistic','$titu_obra_artis',
        '$año_creacion_artis','$pais_origen_artis','$editada_artis','$ineditada_artis',
        '$fecha_publi_artis','$num_edic_artis','$editor_artis','$direccion_artis',
        '$tpDocumentArtis','$num_docum_artis','$nacional_artis','$impresor_artis',
        '$cracionFinObra_Artis','$catObraArtis','$caractObra','$orig_Obra',
        '$forma_Conoser','$forma_elabora','$otroTpObra','$obra_Litera','$tipoMusica',
        '$obra_Musical'
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
// }

// $id = mysqli_insert_id($link);

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
