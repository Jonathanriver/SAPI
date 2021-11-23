<html>
<!-- Headers -->
<?php
session_start();
include_once './Vista/HeaderRgObtencionv.php';
include_once './Modelo/Conexion_2.php';
include_once './Modelo/Conexion.php';
if (!isset($_SESSION['SESS_MEMBER_ID'])) {
    header('Location: Login.php');
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<body>
    <div class="fade" id="PanelDiv" style="width: 100%;height: 100%;z-index: 1000;background-color: #000005;position: fixed;opacity: 0.5;display: none;"></div>
    <input type="hidden" id="Numero" value="<?php echo $_SESSION['SESS_COD_PROD']; ?>">
    <div class="box">
        <div class="row content">
            <?php include './Vista/MenuLateral.php'; ?>
            <div class="col-7">
                <div class="row">
                    <div class="col">
                        <br><br>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col">
                        <h1 class="texto-titulo-perfil" style="font-size:50px; text-align: center; margin-bottom:-45px;">MARCA COMERCIAL</h1>
                    </div>
                </div>
                <br>
                <br>
                <?php
                if (isset($_SESSION['status']) && $_SESSION != '') {
                ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Hey!</strong><?php echo $_SESSION['status']; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php
                    unset($_SESSION['status']);
                }
                ?>
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
                        <div class="card">
                            <div class="card-header">
                                <h5 style="font-family: 'Josefin Sans Bold';"><i class="far fa-folder"></i>&nbsp;&nbsp;Datos del registro
                            </div>
                            <!-- Selección -->
                            <div class="card-body">
                                <div class="container-fluid">
                                    <!-- Inicio del Formulario -->
                                    <form method="POST" action="./Controladores/RegistrarMarcaComercial.php" enctype="multipart/form-data">
                                        <input type="hidden" name="tipoRegistro" value="3">
                                        <!-- <input type="hidden" name="id_User" id="id_User"> -->
                                        <input type="hidden" name="id_User" value="<?php echo $_SESSION['SESS_MEMBER_ID']; ?>">
                                        <input type="hidden" name="CodProd" value="<?php echo $_SESSION['SESS_COD_PROD']; ?>">

                                        <div class="table" style="border: none;">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <h4 style="text-align: center;">INFORMACIÓN GENERAL</h4>
                                                </div>
                                            </div>
                                            <br>
                                            <!-- Inicio de Tipos de Marcas -->
                                            <div class="col-sm-12">
                                                <h5 style="text-align: left;">La Marca</h5>
                                                <label class="form-check-label">
                                                    Tipo de marca que desea registrar <span style="color: red;">(Solo una respuesta es posible)</span>
                                                </label>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <!-- <input class="form-check-input" type="hidden" value="Null" name="resultadoObtenido" selected> -->
                                                <div class="col-sm-6 text-left">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="Nominativa" name="resultadoObtenido" id="PRO">
                                                        <label class="form-check-label">
                                                            <strong>Nominativa</strong>
                                                        </label>
                                                        <label id="pro" style="display: none;" class="form-check-label">
                                                            Consisten en la escritura de la expresión, frase o palabra que se utiliza para identificar el producto o servicio, sin ningún tipo de acompañamiento, caracterización ni tipo de letra. </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 text-left">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="Figurativa" name="resultadoObtenido" id="MET">
                                                        <label class="form-check-label">
                                                            <strong>Figurativa</strong>
                                                        </label>
                                                        <label id="met" style="display: none;" class="form-check-label">
                                                            Consisten solo en la representación gráfica del signo sin incluir ningún tipo de expresiones, letras, palabras o frases.
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 text-left">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="Mixta" name="resultadoObtenido" id="APAR">
                                                        <label class="form-check-label">
                                                            <strong>Mixta</strong>
                                                        </label>
                                                        <label id="apar" style="display: none;" class="form-check-label" for="flexRadioDefault1">
                                                            Son la unión de las dos anteriores. Contienen un elemento nominativo (letras, palabras, o frases) como uno figurativo (gráfica abstracta o una figura) </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 text-left">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="3D" name="resultadoObtenido" id="MECA">
                                                        <label class="form-check-label">
                                                            <strong>3D</strong>
                                                        </label>
                                                        <label id="meca" style="display: none;" class="form-check-label" for="flexRadioDefault1">
                                                            El signo representa un cuerpo que ocupa las tres dimensiones del espacio (alto, ancho y profundo) y que puede ser perceptible por el sentido de la vista o por el del tacto, es decir, que posee volumen porque ocupa por sí mismo un espacio determinado.
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 text-left">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="Animada" name="resultadoObtenido" id="MAQ">
                                                        <label class="form-check-label">
                                                            <strong>Animada</strong>
                                                        </label>
                                                        <label id="maq" style="display: none;" class="form-check-label">
                                                            Es aquella compuesta por una secuencia de movimientos representados en imágenes fijas que lo describen en su conjunto.
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 text-left">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="Color" name="resultadoObtenido" id="HERR">
                                                        <label class="form-check-label">
                                                            <strong>Color</strong>
                                                        </label>
                                                        <label id="herr" style="display: none;" class="form-check-label" for="flexRadioDefault1">
                                                            El signo a proteger consiste en un color delimitado por una forma o una combinación de colores. </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 text-left">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="Holograma" name="resultadoObtenido" id="INST">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            <strong>Holograma</strong>
                                                        </label>
                                                        <label id="inst" style="display: none;" class="form-check-label" for="flexRadioDefault1">
                                                            El holograma es una placa fotográfica obtenida mediante la técnica de la holografía. Los hologramas que pueden ser bidimensionales o tridimensionales, son marcas que parecen cambiar cuando son vistas de ángulos diferentes.
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 text-left">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="Sonora" name="resultadoObtenido" id="ARTEF">
                                                        <label class="form-check-label">
                                                            <strong>Sonora</strong>
                                                        </label>
                                                        <label id="artef" style="display: none;" class="form-check-label" for="flexRadioDefault1">
                                                            El signo a proteger consiste solo en el sonido correspondiente, que normalmente es expresado en notas musicales, pero puede ser representado de otra forma.
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 text-left">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="Olfativa" name="resultadoObtenido" id="SUSTA">
                                                        <label class="form-check-label">
                                                            <strong>Olfativa</strong>
                                                        </label>
                                                        <label id="susta" style="display: none;" class="form-check-label" for="flexRadioDefault1">
                                                            El signo a proteger consiste en el olor del producto o servicio. </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 text-left">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="Táctil" name="resultadoObtenido" id="COMPO">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            <strong>Táctil</strong>
                                                        </label>
                                                        <label id="compo" style="display: none;" class="form-check-label" for="flexRadioDefault1">
                                                            Este es el caso de las superficies de productos que pueden dar lugar a su reconocimiento por el sentido del tacto. </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 text-left">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="Posición" name="resultadoObtenido" id="PROD">
                                                        <label class="form-check-label">
                                                            <strong>Posición</strong>
                                                        </label>
                                                        <label id="prod" style="display: none;" class="form-check-label" for="flexRadioDefault1">
                                                            Estas marcas se definen por la posición en que aparecen en un determinado producto o se fijan a él. Consiste en la ubicación especial y distintiva del signo en un producto. </label>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="col-sm-6 text-left">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="3D Mixta" name="resultadoObtenido" id="MIX">
                                                        <label class="form-check-label">
                                                            <strong>3D Mixta</strong>
                                                        </label>
                                                        <label id="Mix" style="display: none;" class="form-check-label" for="flexRadioDefault1">
                                                            Es la misma marca 3D, pero con elementos nominativos o palabras. </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="table" style="border: none;">
                                                <!-- <div id="colores" style="display: show;"> -->
                                                <div class="col-sm-12">
                                                    <h5 style="text-align: left;">Marca a Registrar</h5>
                                                    <label class="form-check-label">
                                                        La marca tiene logo o gráficos:
                                                    </label>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-sm-6 text-left">
                                                        <!-- <input class="form-check-input" type="hidden" value="Null" selected name="tipoProteccion"> -->
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" value="Sí" name="tipoProteccion" id="DI">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                <strong>Sí</strong>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 text-left">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" value="No" name="tipoProteccion" id="DI3">
                                                            <label class="form-check-label" for="flexRadioDefault2">
                                                                <strong>No</strong>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12 text-left">
                                                        <span class="label-perfil"><strong>Indique los colores:</strong> por ejemplo, “azul”, “amarillo”, “rojo”. No se deberán utilizar adjetivos para describir el color (por ejemplo, no usa “azul marino”, “amarillo pollito” o “rojo escarlata”)pack. </span>
                                                        <input type="text" name="indiqueColores" class="form-control campo-perfil">
                                                        <br>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12 text-left" id="di" style="display: none;">
                                                        <span class="label-perfil">Si desea ser más específico, indique el color en uno de los códigos de referencia internacional<br><span style="color: red;"> (pregunta opcional, responde una de las tres )</span> </span>
                                                        <br><br>
                                                        <select class="form-control campo-perfil" name="codigoColor" onchange="col(this.value);">
                                                            <option selected value="">Seleccione...</option>
                                                            <option value="Pantome (2 casilla) Pantone 281C">Pantome (2 casilla) Pantone 281C</option>
                                                            <option value="RGB (tres casillas) RGB 285, 02, 38">RGB (tres casillas) RGB 285, 02, 38</option>
                                                            <option value="CMYK (4 casillas) C:0 M:100, Y:100, K:0">CMYK (4 casillas) C:0 M:100, Y:100, K:0</option>
                                                            <option value="Incluir otros colores">Incluir otros colores</option>
                                                        </select>
                                                    </div>
                                                    <div id="color" style="display: none;"> <br>
                                                        <input class="form-control campo-perfil" name="otrosColores" placeholder="Descripción...">
                                                        </input>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="col-sm-12">
                                                    <h5 style="text-align: left;">Productos y Servicios</h5>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-sm-12 text-left">
                                                        <span class="label-perfil">Describa los productos y servicios principales que comercializa, vende o presta actualmente :</span>
                                                        <textarea type="text" class="form-control campo-perfill" name="desProducto" placeholder="Describa los productos..."></textarea>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-sm-12 text-left">
                                                        <span class="label-perfil">Describa las características técnicas de su producto o servicio :</span>
                                                        <textarea type="text" class="form-control campo-perfill" name="desCaracte" placeholder="Describa las varacteristicas..."></textarea>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-sm-12 text-left">
                                                        <span class="label-perfil">Describa los productos y servicios que comercializará, venderá o prestará a futuro :</span>
                                                        <textarea class="form-control campo-perfill" name="describaServicioFuturo" placeholder="Inserte el nombre del grupo de investigación donde se origina la creación ( si aplica)..."></textarea>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-sm-12 text-left">
                                                        <span class="label-perfil">Seleccione los productos o servicios que pretende identificar con la marca, los cuales se encuentran clasificados en la Clasificación Internacional de Niza :</span>
                                                        <br><br>
                                                        <select class="form-control campo-perfil" id="identMarcaNixa" name="identMarcaNixa" required>
                                                            <option value="0" required>Seleccione</option>
                                                            <?php
                                                            if ($resultOfertas = mysqli_query($link, "SELECT * FROM niza")) {
                                                                while ($row = $resultOfertas->fetch_assoc()) {
                                                            ?>
                                                                    <option style="width: 600px!important; overflow-y: auto ;" value="<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></option>
                                                            <?php
                                                                }
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-sm-12 text-left">
                                                        <span class="label-perfil">
                                                            Seleccione los productos o servicios que pretende identificar con la marca a futuro, los cuales se encuentran clasificados en la Clasificación Internacional de Niza. </span>
                                                        <br><br>
                                                        <select class="form-control campo-perfil" id="MarcaNixaFutu" name="MarcaNixaFutu" required>
                                                            <option value="0" required>Seleccione</option>
                                                            <?php
                                                            if ($resultOfertas = mysqli_query($link, "SELECT * FROM niza")) {
                                                                while ($row = $resultOfertas->fetch_assoc()) {
                                                            ?>
                                                                    <option style="width: 600px!important; overflow-y: auto ;" value="<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></option>
                                                            <?php
                                                                }
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-sm-12-text-left">
                                                        <strong>Nota:</strong> Tenga en cuenta que cada producto o servicio que identifique puede estar inmerso en cualquiera de las 45 clases de la Clasificación Internacional de Niza (34 clases de productos y 16 clases de servicios). Lo anterior quiere decir que, si desea registrar la marca para identificar un producto o servicio en una clase y otro producto o servicio de otra clase, deberá pagar por cada clase adicional.
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="col-sm-12">
                                                    <h5 style="text-align: left;">Documentos</h5>
                                                </div>
                                                <br>
                                                <span class="label-perfil">Persona Natural</span>
                                                <br>
                                                <div class="row">
                                                    <div class="col-sm-12 text-left">
                                                        <span class="label-perfil">● Copia de la cédula de ciudadanía por ambos lados (al 150). :</span>
                                                        <input type="hidden" name="MAX_FILE_SIZE" value="512000" />
                                                        <input type="file" class="form-control campo-perfil" name="copia_Cedula">
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-sm-12 text-left">
                                                        <span class="label-perfil">● Si la marca tiene logo o gráficos deberá aportarla en formato JPG o PNG con las dimensiones de (8cm x 8cm formato jpg o png) :</span>
                                                        <input type="hidden" name="MAX_FILE_SIZE" value="512000" />
                                                        <input type="file" class="form-control campo-perfil" name="logo_Grafico">
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-sm-12 text-left">
                                                        <span class="label-perfil">● Certificado de ingresos del año anterior para acceder al descuento del registro.</span>
                                                        <input type="hidden" name="MAX_FILE_SIZE" value="512000" />
                                                        <input type="file" class="form-control campo-perfil" name="certificado_Ingreso_Ant">
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-sm-12 text-left">
                                                        <span class="label-perfil">● En caso que exista división de porcentajes en la titularidad, aportar el documento que lo certifica :</span>
                                                        <input type="hidden" name="MAX_FILE_SIZE" value="512000" />
                                                        <input type="file" class="form-control campo-perfil" name="divicion_Porcentaje">
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="col-sm-12">
                                                    <h5 style="text-align: left;">Persona Jurídica</h5>
                                                </div>
                                                <br>
                                                <span class="label-perfil">Persona Jurídica</span>
                                                <br>
                                                <div class="row">
                                                    <div class="col-sm-12 text-left">
                                                        <span class="label-perfil">● Certificado de existencia y representación legal de la sociedad.</span>
                                                        <input type="hidden" name="MAX_FILE_SIZE" value="512000" />
                                                        <input type="file" class="form-control campo-perfil" name="certificado_Existencia">
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-sm-12 text-left">
                                                        <span class="label-perfil">● Cédula de ciudadanía por ambos lados (al 150) del representante legal de la sociedad. </span>
                                                        <input type="hidden" name="MAX_FILE_SIZE" value="512000" />
                                                        <input type="file" class="form-control campo-perfil" name="cedulaSociedad">
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-sm-12 text-left">
                                                        <span class="label-perfil">● Si la marca tiene logo o gráficos deberá aportarla en formato JPG o PNG con las dimensiones (8cm x 8cm formato jpg o png).</span>
                                                        <input type="hidden" name="MAX_FILE_SIZE" value="512000" />
                                                        <input type="file" class="form-control campo-perfil" name="marcaLogo">
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-sm-12 text-left">
                                                        <span class="label-perfil">● Certificado de ingresos de la sociedad del año anterior para acceder al descuento del registro. (Descargar formato). </span>
                                                        <input type="hidden" name="MAX_FILE_SIZE" value="512000" />
                                                        <input type="file" class="form-control campo-perfil" name="ingresosSociedadAnterior">
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
                                            </div>
                                    </form>
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
                                                        //print_r($resultOfertas);die;
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
                        <!-- onclick="RegistroTalento()" -->
                        <button class="btn btn-lg btn-block" onclick="RegistroTalento()" style="background-color: #fd7e14;color: white;">Agregar Usuario</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Scripts funcionalidades -->
    <script src="./Recursos/js/registro_Marca_Comercial.js"></script>

    <script>
        var UserData;
        var DataUserTalent = new Object();
        var UserObj = [];

        $(document).ready(function() {
            DataResumenProyect();
        });

        function consultaUserDB() {

            var cedula = $('#numUser').val();
            // print_r(cedula);die;
            $.ajax({
                url: "http://localhost/ApiSupiDB/index.php/LoginServ/Consultar/" + cedula
                //url: "http://localhost/ApiSupiKey/index.php/LoginServ/Consultar/" + cedula
            }).then(function(data) {
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

            $.ajax({
                url: "http://localhost/ApiSupiKey/index.php/Proyectos/ConsultaProyectosCodProd/" + codigo
            }).then(function(data) {
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

        function DataArticulacion_pbt() {

            var codigo = $('#CodigoArt').text();

            $.ajax({
                url: "http://localhost/ApiSupiKey/index.php/Proyectos/Consulta_pbt_codigo/" + codigo
            }).then(function(data) {
                if (data != null || data != '' || data != 'undefined') {
                    if (data['response']) {
                        console.log(data['response'].id);

                        var id = data['response'].id;

                        $.ajax({
                            url: "http://localhost/ApiSupiKey/index.php/Proyectos/Consultar_talento_articulacion/" + id
                        }).then(function(data) {
                            if (data != null || data != '' || data != 'undefined') {
                                if (data['response']) {
                                    console.log(data['response']);

                                    var id_talento = data['response'].talento_id;

                                    $.ajax({
                                        url: "http://localhost/ApiSupiKey/index.php/Proyectos/Consultar_Usuarios/" + id_talento
                                    }).then(function(data) {
                                        if (data != null || data != '' || data != 'undefined') {
                                            if (data['response']) {
                                                console.log(data['response']);

                                                var id_users = data['response'].user_id;

                                                $.ajax({
                                                    url: "http://localhost/ApiSupiKey/index.php/Proyectos/Consultar_Usuarios_x_talentos/" + id_users
                                                }).then(function(data) {
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
                                                            }).then(function(data) {
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
                                                }).then(function(data) {
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
            }).then(function(data) {
                // console.log(NumDoc);
                if (data != null || data != '' || data != 'undefined') {
                    $('#ResponseBien').show();
                } else {
                    $('#ResponseMal').show();
                }
            });

        }
    </script>

</body>

</html>