<html>
    <!-- Headers -->
    <?php
    session_start();
    include_once '../../Vista/HeaderRgObtencionv.php';
    include_once './../../Modelo/Conexion_2.php';
    include_once './../../Modelo/Conexion.php';

// Se valida que el usuario este logeado
    include_once '../../Controladores/Transaccional/Sesion.php';
    $id_user = $_SESSION['SESS_MEMBER_ID'];
    $fuente = $_SESSION['SESS_FUENTE'];
    ?>

    <body>
        <div class="fade" id="PanelDiv" style="width: 100%;height: 100%;z-index: 1000;background-color: #000005;position: fixed;opacity: 0.5;display: none;"></div>
        <input type="hidden" id="Numero" value="<?php echo $_SESSION['SESS_COD_PROD']; ?>">
        <input type="hidden" id="id_user" value="<?php echo $id_user; ?>">
        <input type="hidden" id="plataforma" value="<?php echo $fuente; ?>">
        <div class="box ">
            <div class="row content">
                <?php include 'MenuLateral.php'; ?>
                <div class="col-7">
                    <div class="row">
                        <div class="col">
                            <br><br>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col">
                            <h1 class="texto-titulo-perfil" style="font-size:50px; text-align: center; margin-bottom:-45px;">OBTENCIÓN VEGETAL</h1>
                        </div>
                    </div>
                    <br>
                    <br>
                    <!-- <?php
                    if (isset($_SESSION['status']) && $_SESSION != '') {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Hey!</strong><?php echo $_SESSION['status']; ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                        unset($_SESSION['status']);
                    }
                    ?> -->
                    <label for="">
                        Definición: Es el derecho exclusivo que se otorga a quien obtiene una nueva, homogénea, distinguible y estable, que hayan sido designadas genéricamente con un nombre distintivo. El registro se adelanta en el Instituto Colombiano Agropecuario - ICA
                    </label>
                    <br>
                    <br>
                    <!-- Inicio de consulta tecnoparque -->

                    <!-- Datos del Proyecto -->
                    <div class="row">
                        <div class="col-sm">
                            <div class="card">
                                <div class='card-header'>
                                    <h5 style="font-family: 'Josefin Sans Bold';"><i class="far fa-folder"></i>&nbsp;&nbsp;Datos del proyecto</h5>
                                </div>
                                <div class="card-body">
                                    <table id='tabla-data' class="tabala" style="width: 100%;">

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Fin de datos del Proyecto -->
                    <br>
                    <div class="row">
                        <div class="col-sm" style="overflow: auto; height: 700px">
                            <!-- Datos de Usuario y Titular -->
                            <div class="card">
                                <div class="card-header">
                                    <h5 style="font-family: 'Josefin Sans Bold';"><i class="far fa-folder"></i>&nbsp;&nbsp;Datos del usuario y/o titular</h5>
                                </div>
                                <div class="card-body">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <table class="">
                                                <tbody>
                                                    <tr>
                                                        <td>Tipo de usuario</td>
                                                        <td><input type="text" class="campo-Info" id="TipoUser" disabled></td>
                                                        <td>Nombre usuario</td>
                                                        <td><input type="text" class="campo-Info" id="NombreUser" disabled></td>
                                                        <td>Apellido usuario</td>
                                                        <td><input type="text" class="campo-Info" id="ApellidoUser" disabled></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Correo usuario</td>
                                                        <td><input type="text" class="campo-Info" id="CorreoUser" disabled></td>
                                                        <td>Teléfono</td>
                                                        <td><input type="text" class="campo-Info" id="TelefonoUser" disabled></td>
                                                        <td>Tipo documento</td>
                                                        <td><input type="text" class="campo-Info" id="IpoDocUser" disabled></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Número documento</td>
                                                        <td><input type="text" class="campo-Info" id="NumeroDocUser" disabled></td>
                                                        <td>Dirección</td>
                                                        <td><input type="text" class="campo-Info" id="DireccionUser" disabled></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Fin de datos de usuario y titular -->
                            <br>
                            <!-- Inicio de datos de empresa -->
                            <div class="card" id="DatosEmpresa">
                                <div class="card-header">
                                    <h5 style="font-family: 'Josefin Sans Bold';"><i class="far fa-folder"></i>&nbsp;&nbsp;Datos de la empresa</h5>
                                </div>
                                <div class="card-body">
                                    <table class="" style="width: 100%;">
                                        <tbody>
                                            <tr>
                                                <td>Nombre empresa</td>
                                                <td><input type="text" class="campo-Info" class="campo-Info" id="NombreEmpresa" disabled></td>
                                                <td>Nit</td>
                                                <td><input type="text" class="campo-Info" class="campo-Info" id="NitEmprea" disabled></td>
                                                <td>Teléfono empresa</td>
                                                <td><input type="text" class="campo-Info" class="campo-Info" id="TelefonoEmpresa" disabled></td>
                                            </tr>
                                            <tr>
                                                <td>Correo empresa</td>
                                                <td><input type="text" class="campo-Info" class="campo-Info" id="CorreoEmpresa" disabled></td>
                                                <td>Dirección empresa</td>
                                                <td><input type="text" class="campo-Info" class="campo-Info" id="DireccionEmpresa" disabled></td>

                                            </tr>
                                            <tr>
                                                <td colspan='6'>
                                                    <hr>
                                                </td>
                                            </tr>
                                            <tr id="tr-titulo">
                                                <th colspan="6" class="text-center">
                                                    <h5 style="font-family: 'Josefin Sans Bold';">&nbsp;&nbsp;Datos representante de la empresa</h5>
                                                </th>
                                            </tr>
                                            <tr id="tr-titulo2">
                                                <td>
                                                    <br>
                                                </td>
                                            </tr>
                                            <tr id="tr-titulo3">
                                                <td>Nombre representante</td>
                                                <td><input type="text"></td>
                                                <td>Tipo documento </td>
                                                <td><input type="text"></td>
                                                <td>Número documento</td>
                                                <td><input type="text"></td>
                                            </tr>
                                            <tr id="tr-titulo4">
                                                <td>Teléfono representante</td>
                                                <td><input type="text"></td>
                                                <td>Dirección representante</td>
                                                <td><input type="text"></td>
                                                <td>Correo representante</td>
                                                <td><input type="text"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- Fin de datos de Empresa -->
                            <br>
                            <!-- Inicio de la información del Formulario -->
                            <div class="card">
                                <div class="card-header">
                                    <h5 style="font-family: 'Josefin Sans Bold';"><i class="far fa-folder"></i>&nbsp;&nbsp;Datos del registro
                                </div>
                                <div class="card-body">
                                    <div class="container-fluid">
                                        <!-- Inicio del Formulario -->
                                        <form method="POST" action="../../Controladores/RegistrarObtencionVg.php" enctype="multipart/form-data">
                                            <div class="table" style=" border: none;">
                                                <input type="hidden" name="tipoRegistro" value="1">
                                                <!-- <input type="hidden" name="id_User" id="id_User"> -->
                                                <input type="hidden" name="id_User" value="<?php echo $_SESSION['SESS_MEMBER_ID_PERFIL']; ?>">
                                                <input type="hidden" name="CodProd" value="<?php echo $_SESSION['SESS_COD_PROD']; ?>">
                                                <div class="row">
                                                    <div class="col-sm-6 text-left">
                                                        <span class="label-perfil">Nombre común, especie y cultivo:</span>
                                                        <input type="text" class="form-control campo-perfil" name="nombreespecie" placeholder="Nombre..." required>
                                                    </div>
                                                    <div class="col-sm-6 text-left">
                                                        <span class="label-perfil">Nombre científico:</span>
                                                        <input type="text" class="form-control campo-perfil" name="nombreCientifico" placeholder="Género, especie, subespecie" required>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-sm-6 text-left">
                                                        <span class="label-perfil">Dominación propuesta:</span>
                                                        <input type="text" class="form-control campo-perfil" name="dominacionPropuesta" placeholder="Dominación propuesta..." required>
                                                    </div>
                                                    <div class="col-sm-6 text-left">
                                                        <span class="label-perfil">Referencia del Obtentor:</span>
                                                        <input type="text" class="form-control campo-perfil" name="referenciaObtentor" placeholder="Referencia del Obtentor..." required>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-sm-12 text-left">
                                                        <span class="label-perfil">De una breve descripción de la variedad:</span>
                                                        <textarea class="form-control campo-perfill" name="drescripcionVariedad" placeholder="Descripción..." required></textarea>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-sm-12 text-left">
                                                        <span class="label-perfil">Escriba la información sobre el origen genético, mantenimiento y reproducción o multiplicación de la variedad:</span>
                                                        <textarea class="form-control campo-perfill" name="descripcionGenetico" placeholder="Descripción..." required></textarea>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-sm-6 text-left">
                                                        <span class="label-perfil">La variedad fue obtenida en país(es):</span>
                                                        <input type="text" class="form-control campo-perfil" name="variedadObtenida" placeholder="Lugar de la Variedad" required>
                                                    </div>
                                                    <div class="col-sm-6 text-left">
                                                        <span class="label-perfil">La variedad fue transferida al SENA:</span>
                                                        <select class="form-control campo-perfil" name="variedadTransferida" aria-label="Default select example" id="status" onChange="mostrar(this.value);" required>
                                                            <option selected>Seleccione...</option>
                                                            <option value="Contracto">Contracto</option>
                                                            <option value="Sucesion">Sucesion</option>
                                                            <option value="otraVariedad">Otra forma especificar</option>
                                                        </select>
                                                        <div id="otraVariedad" style="display: none;">
                                                            <div class="col-sm-12 text-left">
                                                                <textarea class="form-control campo-perfill" name="descripcionVariedadSena" placeholder="Descripción..."></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-sm-12 text-left">
                                                        <span class="label-perfil">Se han realizado solicitudes anteriores de protección de patente u otros títulos?</span>
                                                        <select class="form-control campo-perfil" namearia-label="Default select example" id="status" name="solicitudproteccion" onChange="mostrar(this.value);" required>
                                                            <option selected>Seleccione...</option>
                                                            <option value="Si">Sí</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                        <div id="solicitudes" style="display: none;">
                                                            <input type="text" class="form-control campo-perfil" name="tipoProteccion" placeholder="Tipo de protección">
                                                            <input type="text" class="form-control campo-perfil" name="pais" placeholder="País">
                                                            <input type="text" class="form-control campo-perfil" name="numeroSolicitud" placeholder="Número de solicitud">
                                                            <input type="text" class="form-control campo-perfil" name="estadoSolicitud" placeholder="Estado de la solicitud (Tramite,Rechazada,retirada,aceptada)">
                                                            <input type="text" class="form-control campo-perfil" name="referenciaOtentor" placeholder="Denominacion o referencia del obtentor">
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-sm-12 text-left">
                                                        <span class="label-perfil">Indique su situación, la variedad:</span>
                                                        <select class="form-control campo-perfil" aria-label="Default select example" id="status" name="situacionVariedad" onChange="mostrar(this.value);">
                                                            <option selected>Seleccione...</option>
                                                            <option value="No ha sido ofrecida a la vaenta o entregada de otra manera ilicita a terceros en la subregión andina">a. No ha sido ofrecida a la venta o entregada de otra manera ilicita a terceros en la subregión andina</option>
                                                            <option value="Fue ofrecida a la venta y comercializada por primera vez en la subregión andina">b. Fue ofrecida a la venta y comercializada por primera vez en la subregión andina </option>
                                                        </select>
                                                        <div id="situacionVaried" style="display: none;">
                                                            <div class="col-sm-12 text-left">
                                                                <textarea class="form-control campo-perfill" name="cuandoVariedad" placeholder="¿Cuando?"></textarea>
                                                                <br>
                                                                <textarea class="form-control campo-perfill" name="dondeVariedad" placeholder="¿que denominación se utilizó?"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-sm-12 text-left">
                                                        <span class="label-perfil">Indique su situación, la variedad:</span>
                                                        <select class="form-control campo-perfil" aria-label="Default select example" d="status" name="indiqueSituacion" onChange="mostrar(this.value);" required>
                                                            <option value="NoSeleccionVariedad" selected>Seleccione...</option>
                                                            <option value="No ha sido ofrecida a la venta o entregada de otra manera licita en terceros países">a. No ha sido ofrecida a la venta o entregada de otra manera licita en terceros países</option>
                                                            <option value="Fue ha sido ofrecida a la venta o entregada de otra manera licita en terceros países">b. Fue ofrecida a la venta o comercializada por primera vez en (país) </option>
                                                        </select>
                                                        <div id="variedad_Dos" style="display: none;">
                                                            <div class="col-sm-12 text-left">
                                                                <textarea class="form-control campo-perfill target" name="paisVariedadSituacion" placeholder="¿En qué país?"></textarea>
                                                                <br>
                                                                <textarea class="form-control campo-perfill target" name="cuandoSituacionVr" placeholder="¿Cuándo?"></textarea>
                                                                <br>
                                                                <textarea class="form-control campo-perfill target" name="denominacionSituacionVariedad" placeholder="¿Qué denominación se utilizó?"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12 text-left">
                                                        <span class="label-perfil">El examen técnico de la variedad:</span>
                                                        <select class="form-control campo-perfil" aria-label="Default select example" id="status" name="examenTecnico" onChange="mostrar(this.value);" required>
                                                            <option selected>Seleccione...</option>
                                                            <option value="Ya se ha realizado">Ya se ha realizado</option>
                                                            <option value="Está en curso de realización">Está en curso de realización </option>
                                                            <option value="Todavía no se ha iniciado">Todavía no se ha iniciado </option>
                                                        </select>
                                                        <div id="Ya_Realizado" style="display: none;">
                                                            <div class="col-sm-12 text-left">
                                                                <textarea class="form-control campo-perfill" name="examenTecnicoFechaFin" placeholder="Indicar donde se realizó y fecha de finalización"></textarea>
                                                            </div>
                                                        </div>
                                                        <div id="Todavia_No" style="display: none;">
                                                            <div class="col-sm-12 text-left">
                                                                <textarea class="form-control campo-perfill" name="examenTecnicoFechain" placeholder="Indicar donde se está realizando y fecha de inicio"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-sm-12 text-left">
                                                        <span class="label-perfil">Información sobre el origen genético, mantenimiento y reproduccióm o multiplicación de la variedad:</span>
                                                        <input type="text" class="form-control campo-perfill" name="origenCaracteres" placeholder="Caracteres" required>
                                                        <br>
                                                        <input type="text" class="form-control campo-perfill" name="origenNivelExpresion" placeholder="Nivel de Expresión" required>
                                                        <br>
                                                        <input type="text" class="form-control campo-perfill" name="origenVariedadTi" placeholder="Variedad o Título de Ejemplo" required>
                                                        <br>
                                                        <input type="text" class="form-control campo-perfill" name="origenNota" placeholder="Nota" required>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-sm-12 text-left">
                                                        <span class="label-perfil">Variedades similares y diferencias respecto a estas variedades:</span>
                                                        <textarea class="form-control campo-perfill" name="variedadDenominacion" placeholder="Denominación de la variedad Similar" required></textarea>
                                                        <br>
                                                        <textarea class="form-control campo-perfill" name="variedadCaracter" placeholder="Carácter por el que difiere la variedad similar" required></textarea>
                                                        <br>
                                                        <textarea class="form-control campo-perfill" name="variedadSiminal" placeholder="Nivel de expresión variedad similar" required></textarea>
                                                        <br>
                                                        <textarea class="form-control campo-perfill" name="variedadPresentada" placeholder="Nivel de expresión variedad presentada" required></textarea>
                                                    </div>
                                                </div><br>
                                                <div class="row">
                                                    <div class="col-sm-12 text-left">
                                                        <span class="label-perfil">Informaciones adicionales que pueda ayudar a distinguir la variedad:</span>
                                                        <textarea class="form-control campo-perfill" name="resistenciaplagas" placeholder="Resistencia a plagas" required></textarea>
                                                        <br>
                                                        <textarea class="form-control campo-perfill" name="condicionesVarieda" placeholder="Condiciones especiales para el examen de la variedad" required></textarea>
                                                        <br>
                                                        <textarea class="form-control campo-perfill" name="otrasInformacion" placeholder="Otras informaciones" required></textarea>
                                                    </div>
                                                </div>
                                                <!-- Fin de los datos del Formulario -->
                                                <br>
                                                <!-- Inicio de formulario de Talentos -->

                                                <!-- Campo de Obtención y consulta del Talento por Número de documento -->
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <div><br></div>
                                                                <a type="#" id="agregarTalento" name="" class="btn btn-lg btn-block" style="background-color: #fd7e14; color: white;" onclick="consultaUserDB()">Agregar Talento</a>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <label for="" class="form-label">Número de documento</label>
                                                                <input type="number" style="padding: 0px; margin: 0px; width: 100%!important;" id="numUser" class="form-control campo-perfil">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Fin del campo del Número de documento -->
                                                <br>
                                                <br>
                                                <div class="row">
                                                    <div class="col-sm">
                                                        <div class="card">
                                                            <div class='card-header'>
                                                                <h5 style="font-family: 'Josefin Sans Bold';"><i class="far fa-user"></i>&nbsp;&nbsp;Datos del Talento</h5>

                                                            </div>
                                                            <div class="card-body">
                                                                <div class="container-fluid text-right">
                                                                    <a onclick="Limpiar()" class="btn" style="background-color: #fd7e14; color: white;">Limpiar Lista</a>
                                                                </div>
                                                                <br>
                                                                <table class="tabala" style="width: 100%;">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Nombre </th>
                                                                            <th>Apellido </th>
                                                                            <th>Documento </th>
                                                                            <th>Correo </th>
                                                                            <th>Aregar</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody id='tabla-user'>

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-sm text-center">
                                                        <input type="hidden" value="" id="DataUsersList" name="DataUsersList">
                                                        <button type="submit" name="ObVegetal" class="btn btn-lg btn-block" style="background-color: #fd7e14; color: white;">Guardar</button>
                                                    </div>
                                                </div>
                                        </form>
                                        <!-- Fin del Formulario -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                </div>
            </div>
        </div>
        <div class="modal" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Agregar Usuario</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="Salir()">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form>
                        <div class="modal-body">
                            <p>Por favor ingrese los datos del usuairo.</p>
                            <div class="container-fluid">
                                <div class="card deliniar-perfil">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-12" id="ResponseMal" style="display: none;">
                                                <div class="alert alert-danger" role="alert">
                                                    Atención: A ocurrido un error inesperado, intentelo mas tarde.
                                                </div>
                                            </div>
                                            <div class="col-sm-12" id="ResponseBien" style="display: none;">
                                                <div class="alert alert-success" role="alert">
                                                    Atención: Usuario agregado exitosamente.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table" style="overflow: auto;height: 600px;overflow-x: hidden;">
                                            <div class="row">
                                                <div class="col">
                                                    <span class="label-perfil">Nombre: </span>
                                                    <input type="text" value="" class="form-control campo-perfil" id="nombre" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <span class="label-perfil">Apellido: </span>
                                                    <input type="text" value="" class="form-control campo-perfil" id="apellido" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <span class="label-perfil">Tipo de documento: </span>
                                                    <select class="form-control campo-perfil" id="tipo_documento" required>
                                                        <option value="0" required>Seleccione</option>
                                                        <?php
                                                        if ($resultOfertas = mysqli_query($link, "SELECT * FROM tipo_documento where activo=1")) {
                                                            while ($row = $resultOfertas->fetch_assoc()) {
                                                                ?>
                                                                <option value="<?php echo $row['idtipo_documento']; ?>"><?php echo $row['nombre']; ?></option>
                                                                <?php
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <span class="label-perfil">Número de documento: </span>
                                                    <input type="text" value="" class="form-control campo-perfil" id="numeroDoc" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <span class="label-perfil">Fecha de nacimiento: </span>
                                                    <input type="date" value="" class="form-control campo-perfil" id="fechaNac" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <span class="label-perfil">Departamento expedición: </span>
                                                    <select class="form-control campo-perfil" id="deparExpedi" required>
                                                        <?php
                                                        if ($resultOfertas = mysqli_query($link, "SELECT * FROM departamento")) {
                                                            while ($row = $resultOfertas->fetch_assoc()) {
                                                                ?>
                                                                <option value="<?php echo $row['iddepartamento']; ?>"><?php echo $row['nombre']; ?></option>
                                                                <?php
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <span class="label-perfil">Ciudad de expedición: </span>
                                                    <input type="text" value="" class="form-control campo-perfil" id="ciudExpedi" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <span class="label-perfil">Correo: </span>
                                                    <input type="text" value="" class="form-control campo-perfil" id="email" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <span class="label-perfil">Teléfono: </span>
                                                    <input type="text" value="" class="form-control campo-perfil" id="telefono" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <span class="label-perfil">Número de celular:</span>
                                                    <input type="text" value="" class="form-control campo-perfil" id="celular" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <span class="label-perfil">Institución Perteneciente:</span>
                                                    <select class="form-control campo-perfil" id="institucion" name="institu" required>
                                                        <option value="0" required>Seleccione</option>
                                                        <?php
                                                        if ($resultOfertas = mysqli_query($link, "SELECT * FROM instituciones")) {
                                                            while ($row = $resultOfertas->fetch_assoc()) {
                                                                ?>
                                                                <option value="<?php echo $row['idinstituciones']; ?>"><?php echo $row['nombre']; ?></option>
                                                                <?php
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Nuevo cont -->
                                            <div class="row">
                                                <div class="col">
                                                    <span class="label-perfil">Usuario Sena: </span>
                                                    <select class="form-select campo-perfil" id="UsuarioSena" aria-label="Default select example" required>
                                                        <option value="Sí"> Sí</option>
                                                        <option value="No"> No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <span class="label-perfil">Empresa donde trabaja:</span>
                                                    <input type="text" value="" class="form-control campo-perfil" id="empresaTrabajo" placeholder="Solo responder si no es usuario sena" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <span class="label-perfil">Lugar de Trabajo:</span>
                                                    <input type="text" value="" class="form-control campo-perfil" id="lugarTrabajo" placeholder="Solo responder si no es usuario sena" required>
                                                </div>
                                            </div>
                                            <!--  -->
                                            <div class="row">
                                                <div class="col">
                                                    <span class="label-perfil">Tipo de vinculación: </span>
                                                    <input type="text" value="" class="form-control campo-perfil" id="tipoVinc" placeholder="Solo responder si es usuario sena" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <span class="label-perfil">Centro de formación: </span>
                                                    <select class="form-control campo-perfil" id="sede" required>
                                                        <option value="0">Seleccione</option>
                                                        <?php
                                                        if ($resultOfertas = mysqli_query($link, "SELECT * FROM centros_formacion")) {
                                                            while ($row = $resultOfertas->fetch_assoc()) {
                                                                ?>
                                                                <option value="<?php echo $row['idcentros_formacion']; ?>"><?php echo $row['nombre']; ?></option>
                                                                <?php
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <span class="label-perfil">Grupo sanguíneo: </span>
                                                    <input type="text" value="" class="form-control campo-perfil" id="grupoSang" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <span class="label-perfil">Estrato: </span>
                                                    <select class="form-control campo-perfil" id="estrato" required>
                                                        <option value="0">0</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <span class="label-perfil">Etnias: </span>
                                                    <input type="text" value="" class="form-control campo-perfil" id="etnias" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <span class="label-perfil">Eps: </span>
                                                    <input type="text" value="" class="form-control campo-perfil" id="eps" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-lg btn-block" onclick="RegistroTalento()" style="background-color: #fd7e14;color: white;">Agregar Usuario</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>

    <!-- Scripts funcionalidades -->
    <script type="text/javascript">
        function mostrar(id) {
            // Se han realizado solicitudes anteriores de protección de patente u otros títulos
            if (id == "Si") {
                $("#solicitudes").hide();
                $("#solicitudes").show();
            }
            if (id == "No") {
                $("#solicitudes").hide();
            }
            // Fin de Solicitudes

            // Otra Varieda obción Multiple
            if (id == "otraVariedad") {
                $("#otraVariedad").show();
            }
            if (id == "Sucesion") {
                $("#otraVariedad").hide();
            }
            if (id == "Contracto") {
                $("#otraVariedad").hide();
            }
            //Fin de otras variedades 
            // Situación de las Variedades Opciones uno
            if (id == "Fue ofrecida a la venta y comercializada por primera vez en la subregión andina") {
                // $("#situacion_dos").hide();
                $("#situacionVaried").show();
            }
            if (id == "No ha sido ofrecida a la vaenta o entregada de otra manera ilicita a terceros en la subregión andina") {
                // $("#situacion_dos").hide();
                $("#situacionVaried").hide();
            }
            // 
            if (id == "Fue ha sido ofrecida a la venta o entregada de otra manera licita en terceros países") {
                $("#variedad_Dos").show();
            }
            if (id == "No ha sido ofrecida a la venta o entregada de otra manera licita en terceros países") {
                $("#variedad_Dos").hide();
            }
            // Opciones de Examen técnico
            if (id == "Ya se ha realizado") {
                $("#Esta_Curso").hide();
                $("#Todavia_No").hide();
                $("#Ya_Realizado").show();
            }
            if (id == "Está en curso de realización") {
                $("#Ya_Realizado").hide();
                $("#Esta_Curso").hide();
                $("#Todavia_No").show();
            }
            if (id == "Todavía no se ha iniciado") {
                $("#Ya_Realizado").hide();
                $("#Todavia_No").hide();
                $("#Esta_Curso").show();

            }
            //Fin de otras variedades 
        }
    </script>

    <!-- Funcionalidad de Consultas -->
    <script>
        var UserData;
        var DataUserTalent = new Object();
        var UserObj = [];

        $(document).ready(function () {
            DataResumenProyect();
        });

        function consultaUserDB() {

            var cedula = $('#numUser').val();
            // print_r(cedula);die;
            $.ajax({
                url: "http://localhost/ApiSupiDB/index.php/LoginServ/Consultar/" + cedula
                        //url: "http://localhost/ApiSupiKey/index.php/LoginServ/Consultar/" + cedula
            }).then(function (data) {
                if (data != null || data != '' || data != 'undefined') {
                    if (data['response']) {

                        if (UserData == data['response'].idUsuarios) {
                            alert('El usuario ya se ha agregado');
                            return false;
                        }
                        // console.log(data['response']);
                        UserData = data['response'].idUsuarios;
                        var html = "<tr><td colspan='6'><br></td></tr><tr>" +
                                "<td id='CodigoArt'>" + data['response'].nombre + "</td>" +
                                "<td>" + data['response'].apellido + "</td>" +
                                "<td>" + data['response'].documento + "</td>" +
                                "<td>" + data['response'].email + "</td>" +
                                // "<td>" + data['response'].telefono + "</td>" +
                                "<td><a id='agreg" + data['response'].idUsuarios + "' href='#' style='background-color: #fd7e14; color: white;' class='btn' onclick='Agregar(" + data['response'].idUsuarios + ")'>+</a><span id='estado" + data['response'].idUsuarios + "' style='display: none;'><i class='fas fa-check' style='color: green;'></i></span></td>" +
                                "</tr>";
                        "<br/>"
                        $('#tabla-user').append(html);
                        DataArticulacion_pbt();
                    } else {
                        $('#ResponseMal').hide();
                        $('#ResponseBien').hide();
                        $('#PanelDiv').show('12ss');
                        $('#exampleModal').show('12s');
                        $('#numeroDoc').val(cedula);
                        $('#nombre').val('');
                        $('#apellido').val('');
                        $('#tipo_documento').val('');
                        //$('#numeroDoc').val('');
                        $('#fechaNac').val('');
                        $('#deparExpedi').val('');
                        $('#ciudExpedi').val('');
                        $('#email').val('');
                        $('#telefono').val('');
                        $('#celular').val('');
                        $('#institu').val('');
                        $('#UsuarioSena').val('');
                        $('#empresaTrabajo').val('');
                        $('#lugarTrabajo').val('');
                        $('#tipoVinc').val('');
                        $('#sede').val('');
                        $('#grupoSang').val('');
                        $('#estrato').val('');
                        $('#etnias').val('');
                        $('#eps').val('');


                    }
                }
            });
        }

        function Agregar(value) {

            UserObj.push({
                'Id': value
            });

            $('#estado' + value).show();
            $('#agreg' + value).hide();

            $('#DataUsersList').val(JSON.stringify(UserObj));
        }

        function Limpiar() {
            $('#tabla-user').html('');
            UserData = '';
        }

        function DataResumenProyect() {

            var codigo = $('#Numero').val();
            console.log(codigo);
            var plataforma = $('#plataforma').val();

            if (plataforma == 'SENNOVA') {

                var settings = {
                    "url": "http://sennova.senaedu.edu.co/sgpssipro/api/v1/projects/" + codigo,
                    "method": "GET",
                    "timeout": 0,
                    "headers": {
                        "Accept": "application/json",
                        "Authorization": "Bearer {{token_prod}}",
                        "Content-Type": "application/json"
                    },
                    "data": {
                        "token": "1|fdyDO1V1DMF5Hfrjcd3JWTA1TugyQiKm85NHGhdV"
                    },
                };

                $.ajax(settings).done(function (response) {
                    var idTalento = response['data'].id;
                    var html = "<tr>" +
                            "<th>Codigo del proyecto: </th>" +
                            "<th>Nombre del proyecto: </th>" +
                            "</tr>" +
                            "<tr>" +
                            "<td id='CodigoArt'>" + response['data']['attributes'].code + "</td>" +
                            "<td>" + response['data']['attributes'].title + "</td>" +
                            "</tr>";
                    $('#tabla-data').append(html);
                    $('#TipoUser').val('Natural');

                    for (var i = 0; i < response['data']['participants'].length; i++) {
                        $('#NombreUser').val(response['data']['participants'][i]['attributes'].name);
                        $('#ApellidoUser').val('N/A');
                        $('#CorreoUser').val('N/A');
                        $('#TelefonoUser').val('N/A');
                        $('#IpoDocUser').val(response['data']['participants'][i]['attributes'].document_type);
                        $('#NumeroDocUser').val(response['data']['participants'][i]['attributes'].document_number);
                        $('#DireccionUser').val('N/A');
                        $('#DatosEmpresa').hide();
                    }


                }).fail(function (response) {
                    console.log('Error');

                });
            } else {
                $.ajax({
                    url: "http://localhost/ApiSupiKey/index.php/Proyectos/ConsultaProyectosCodProd/" + codigo
                }).then(function (data) {
                    if (data != null || data != '' || data != 'undefined') {
                        if (data['response']) {
                            console.log(data['response']);
                            var idTalento = data['response'].id;
                            var html = "<tr>" +
                                    "<th>Codigo del proyecto: </th>" +
                                    "<th>Nombre del proyecto: </th>" +
                                    "</tr>" +
                                    "<tr>" +
                                    "<td id='CodigoArt'>" + data['response'].codigo_actividad + "</td>" +
                                    "<td>" + data['response'].nombre + "</td>" +
                                    "</tr>";
                            $('#tabla-data').append(html);
                            DataArticulacion_pbt();
                        } else {
                            console.log(data);
                        }
                    }
                });
            }


        }

        function DataArticulacion_pbt() {

            var codigo = $('#CodigoArt').text();

            $.ajax({
                url: "http://localhost/ApiSupiKey/index.php/Proyectos/Consulta_pbt_codigo/" + codigo
            }).then(function (data) {
                if (data != null || data != '' || data != 'undefined') {
                    if (data['response']) {
                        console.log(data['response'].id);

                        var id = data['response'].id;

                        $.ajax({
                            url: "http://localhost/ApiSupiKey/index.php/Proyectos/Consultar_talento_articulacion/" + id
                        }).then(function (data) {
                            if (data != null || data != '' || data != 'undefined') {
                                if (data['response']) {
                                    console.log(data['response']);

                                    var id_talento = data['response'].talento_id;

                                    $.ajax({
                                        url: "http://localhost/ApiSupiKey/index.php/Proyectos/Consultar_Usuarios/" + id_talento
                                    }).then(function (data) {
                                        if (data != null || data != '' || data != 'undefined') {
                                            if (data['response']) {
                                                console.log(data['response']);

                                                var id_users = data['response'].user_id;

                                                $.ajax({
                                                    url: "http://localhost/ApiSupiKey/index.php/Proyectos/Consultar_Usuarios_x_talentos/" + id_users
                                                }).then(function (data) {
                                                    if (data != null || data != '' || data != 'undefined') {
                                                        if (data['response']) {
                                                            .3
                                                            console.log(data['response']);
                                                            $('#id_User').val(data['response'].id);
                                                            $('#NombreUser').val(data['response'].nombres);
                                                            $('#ApellidoUser').val(data['response'].apellidos);
                                                            $('#CorreoUser').val(data['response'].email);
                                                            $('#TelefonoUser').val(data['response'].telefono);
                                                            $('#NumeroDocUser').val(data['response'].documento);
                                                            $('#DireccionUser').val(data['response'].direccion);
                                                            var tipoDoc = data['response'].tipodocumento_id;
                                                            var TipoDocText;
                                                            // console.log(data['response'].id);
                                                            $.ajax({
                                                                url: "http://localhost/ApiSupiKey/index.php/Proyectos/Consultar_Tipo_Documento/" + tipoDoc
                                                            }).then(function (data) {
                                                                if (data != null || data != '' || data != 'undefined') {
                                                                    if (data['response']) {
                                                                        $('#IpoDocUser').val(data['response'].nombre);

                                                                    } else {

                                                                    }
                                                                }
                                                            });

                                                        } else {
                                                            console.log(data);
                                                        }
                                                    }
                                                });

                                                $.ajax({
                                                    url: "http://localhost/ApiSupiKey/index.php/Proyectos/Consultar_empresa_user/" + id_users
                                                }).then(function (data) {
                                                    if (data != null || data != '' || data != 'undefined') {
                                                        if (data['response']) {
                                                            //consola.log('Datos empresa user');
                                                            console.log(data['response']);
                                                            $('#TipoUser').val('Juridico');
                                                            $('#NombreEmpresa').val(data['response'].nombre);
                                                            $('#NitEmprea').val(data['response'].nit);

                                                            if (data['response'].telefono == '' || data['response'].telefono == null || data['response'].telefono == 'undefined') {
                                                                $('#TelefonoEmpresa').val('N/A');
                                                            } else {
                                                                $('#TelefonoEmpresa').val(data['response'].telefono);
                                                            }

                                                            $('#CorreoEmpresa').val(data['response'].email);
                                                            $('#DireccionEmpresa').val(data['response'].direccion);

                                                            if (data['response'].nombreRepresntante == null || data['response'].nombreRepresntante == '' || data['response'].nombreRepresntante == 'undefined') {
                                                                $('#tr-titulo').hide();
                                                                $('#tr-titulo2').hide();
                                                                $('#tr-titulo3').hide();
                                                                $('#tr-titulo4').hide();
                                                            }


                                                        } else {
                                                            if (data['error'] == 'Nada') {
                                                                $('#TipoUser').val('Natural');
                                                                $('#DatosEmpresa').hide();
                                                            }

                                                        }
                                                    }
                                                });

                                            } else {
                                                console.log(data);
                                            }
                                        }
                                    });


                                } else {
                                    console.log(data);
                                }
                            }
                        });

                    } else {
                        console.log(data);
                    }
                }
            });

        }

        function Salir() {
            $('#PanelDiv').hide('12ss');
            $('#exampleModal').hide('12s');
        }

        function RegistroTalento() {

            var Nombre = $('#nombre').val();
            var Apellido = $('#apellido').val();
            var TipoDoc = $('#tipo_documento').val();
            var NumDoc = $('#numeroDoc').val();
            var FechasNac = $('#fechaNac').val();
            var DepartExp = $('#deparExpedi').val();
            var CiudadExp = $('#ciudExpedi').val();
            var Email = $('#email').val();
            var Telefono = $('#telefono').val();
            var Celular = $('#celular').val();
            var Institu = $('#institu').val();
            var UsuarioSena = $('#UsuarioSena').val();
            var Empresa = $('#empresaTrabajo').val();
            var Lugar = $('#lugarTrabajo').val();
            var TipoVinc = $('#tipoVinc').val();
            var Sede = $('#sede').val();
            var GrupoSangre = $('#grupoSang').val();
            var Estrato = $('#estrato').val();
            var etnias = $('#etnias').val();
            var eps = $('#eps').val();

            // Inicio de Validación de datos vacidos
            if (Nombre == '') {
                alert('Campo Nombre vacio');
                return false;
            }

            if (Apellido == '') {
                alert('Campo Apellido vacio');
                return false;
            }

            if (TipoDoc == '') {
                alert('Campo Tipo documento vacio');
                return false;
            }

            if (NumDoc == '') {
                alert('Campo Número de documento vacio');
                return false;
            }

            if (FechasNac == '') {
                alert('Campo Fecha de nacimiento vacio');
                return false;
            }

            if (DepartExp == '') {
                alert('Campo Departamento de expedicción vacio');
                return false;
            }

            if (CiudadExp == '') {
                alert('Campo Ciudad expedición vacio');
                return false;
            }

            if (Email == '') {
                alert('Campo Email vacio');
                return false;
            }

            if (Telefono == '') {
                alert('Campo Teléfono vacio');
                return false;
            }

            if (Celular == '') {
                alert('Campo Celular vacio');
                return false;
            }

            if (Institu == '') {
                alert('Campo Institución vacio');
                return false;
            }

            if (UsuarioSena == '') {
                alert('Campo Usuario sena vacio');
                return false;
            }

            if (Empresa == '') {
                alert('Campo Empresa vacio');
                return false;
            }

            if (Lugar == '') {
                alert('Campo Lugar vacio');
                return false;
            }

            if (TipoVinc == '') {
                alert('Campo Tipo vinculación vacio');
            }

            if (Lugar == '') {
                alert('Campo Lugar vacio');
                return false;
            }

            if (Sede == '') {
                alert('Campo Sede vacio');
                return false;
            }

            if (GrupoSangre == '') {
                alert('Campo Grupo sanguineo vacio');
                return false;
            }

            if (Estrato == '') {
                alert('Campo Estrato vacio');
                return false;
            }

            if (etnias == '') {
                alert('Campo Etnias vacio');
                return false;
            }

            if (eps == '') {
                alert('Campo Eps vacio');
                return false;
            }

            DataUserTalent = {
                'Nombre': Nombre,
                'Apellido': Apellido,
                'TipoDoc': TipoDoc,
                'NumDoc': NumDoc,
                'FechasNac': FechasNac,
                'DepartExp': DepartExp,
                'CiudadExp': CiudadExp,
                'Email': Email,
                'Telefono': Telefono,
                'Celular': Celular,
                'Institu': Institu,
                'UsuarioSena': UsuarioSena,
                'Empresa': Empresa,
                'Lugar': Lugar,
                'TipoVinc': TipoVinc,
                'Sede': Sede,
                'GrupoSangre': GrupoSangre,
                'Estrato': Estrato,
                'etnias': etnias,
                'eps': eps,
            };
            $.ajax({
                url: "http://localhost/ApiSupiDB/index.php/Usuarios/guardar/?nombre=" + DataUserTalent['Nombre'] + "&apellido=" + DataUserTalent['Apellido'] + "&fecha_nacimiento=" + DataUserTalent['FechasNac'] + "&depExpedicion=" + DataUserTalent['DepartExp'] + "&ciudadExpe=" + DataUserTalent['CiudadExp'] + "&telefono=" + DataUserTalent['Telefono'] + "&email=" + DataUserTalent['Email'] + "&celular=" + DataUserTalent['Celular'] + "&UsuarioSena=" + DataUserTalent['UsuarioSena'] + "&empresaTrabajo=" + DataUserTalent['Empresa'] + "&lugarTrabajo=" + DataUserTalent['Lugar'] + "&tipoVinc=" + DataUserTalent['TipoVinc'] + "&centroForm=" + DataUserTalent['Sede'] + "&grupoSang=" + DataUserTalent['GrupoSangre'] + "&estrato=" + DataUserTalent['Estrato'] + "&etnias=" + DataUserTalent['etnias'] + "&eps=" + DataUserTalent['eps'] + "&clave='123456'&tipo_documento=" + DataUserTalent['TipoDoc'] + "&documento=" + DataUserTalent['NumDoc'] + "&nivel_academico='Generico'&ciudad_recidencia='Bogota'&departamento='N/A'&institucion_perteneciente=" + DataUserTalent['Institu'] + "&nit=123456&sede='N/A'&Rol_idRol=2"
                        //url: "http://localhost/ApiSupiKey/index.php/LoginServ/Consultar/" + cedula
            }).then(function (data) {
                // console.log(NumDoc);
                if (data != null || data != '' || data != 'undefined') {
                    $('#ResponseBien').show();
                } else {
                    $('#ResponseMal').show();
                }
            });

        }
    </script>

</html>