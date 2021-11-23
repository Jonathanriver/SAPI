<html>
<!-- Headers -->
<?php
session_start();
include_once './Vista/HeaderRgObtencionv.php';
include_once './Modelo/Conexion_2.php';
include_once './Modelo/Conexion.php';
if (!isset($_SESSION['SESS_MEMBER_ID']) && !isset($_SESSION['SESS_MEMBER_ID_TECNO'])) {
    header('Location: Login.php');
}
?>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<body>
    <div class="fade" id="PanelDiv" style="width: 100%;height: 100%;z-index: 1000;background-color: #000005;position: fixed;opacity: 0.5;display: none;"></div>
    <input type="hidden" id="Numero" value="<?php echo $_SESSION['SESS_COD_PROD']; ?>">
    <div class="box ">
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
                        <h1 class="texto-titulo-perfil" style="font-size:50px; text-align: center; margin-bottom:-45px">NUEVAS CREACIONES</h1>
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
                <br>
                <label for=""> La propiedad industrial es una de las ramas de la propiedad intelectual que comprende el conjunto de derechos que una persona natural o jurídica, según el caso, puede poseer sobre una invención (patente de invención o de modelo de utilidad), diseño industrial, o un signo distintivo, entre otros.</label>

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
                                    <div class="card-body">
                                        <!-- Inicio del Formulario -->
                                        <form method="POST" action="./Controladores/RegistrarNuevaCreacion.php" enctype="multipart/form-data">
                                            <input type="hidden" name="tipoRegistro" value="2">
                                            <!-- <input type="hidden" name="id_User" id="id_User"> -->
                                            <input type="hidden" name="id_User" value="<?php echo $_SESSION['SESS_MEMBER_ID']; ?>">
                                            <input type="hidden" name="CodProd" value="<?php echo $_SESSION['SESS_COD_PROD']; ?>">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <h4 style="text-align: center;">INFORMACIÓN GENERAL</h4>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12 text-left">
                                                    <span class="label-perfil">Nuevas creaciones y diseños industriales</span>
                                                    <!-- <select class="form-control campo-perfil" name="deseaRegistrar" aria-label="Default select example" id="status" onChange="mostrar(this.value);" required>
                                                        <option selected value="seleccione">Seleccione...</option>
                                                        <option value="Nuevas creaciones y diseños industriales">Nuevas creaciones y diseños industriales</option>
                                                        <option value="Signos distintivos">Signos distintivos</option>
                                                    </select> -->
                                                </div>
                                            </div>
                                            <br>
                                            <div class="table" id="NCDI" style=" border: none; display:show;">
                                                <div class="row">
                                                    <input class="form-check-input" type="hidden" value="Null" name="resultadoObtenido">
                                                    <div class="col-sm-6 text-left">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" value="Procedimiento" name="resultadoObtenido" id="PRO">
                                                            <label class="form-check-label">
                                                                <strong>Procedimiento</strong>
                                                            </label>
                                                            <label id="pro" style="display: none;" class="form-check-label">
                                                                Consiste en una serie de pasos bien definidos que permitirán y facilitarán la realización de un trabajo de la manera más correcta y exitosa posible.
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 text-left">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" value="Métodos" name="resultadoObtenido" id="MET">
                                                            <label class="form-check-label">
                                                                <strong>Métodos</strong>
                                                            </label>
                                                            <label id="met" style="display: none;" class="form-check-label">
                                                                Hace referencia a una técnica o conjunto de tareas para desarrollar una tarea. </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6 text-left">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" value="Aparatos" name="resultadoObtenido" id="APAR">
                                                            <label class="form-check-label">
                                                                <strong>Aparatos</strong>
                                                            </label>
                                                            <label id="apar" style="display: none;" class="form-check-label" for="flexRadioDefault1">
                                                                Se refiere a un objeto formado por una combinación de piezas y elementos que sirve para desarrollar un trabajo o función determinada </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 text-left">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" value="Mecanismos" name="resultadoObtenido" id="MECA">
                                                            <label class="form-check-label">
                                                                <strong>Mecanismos</strong>
                                                            </label>
                                                            <label id="meca" style="display: none;" class="form-check-label" for="flexRadioDefault1">
                                                                Conjunto de piezas o elementos que ajustados entre sí y empleando energía mecánica hacen un trabajo o cumplen una función.
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6 text-left">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" value="Maquinas" name="resultadoObtenido" id="MAQ">
                                                            <label class="form-check-label">
                                                                <strong>Maquinas</strong>
                                                            </label>
                                                            <label id="maq" style="display: none;" class="form-check-label">
                                                                Objeto fabricado y compuesto por un conjunto de piezas ajustadas entre sí que se usa para facilitar o realizar un trabajo determinado, generalmente transformando una forma de energía en movimiento o trabajo. </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 text-left">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" value="Herramientas" name="resultadoObtenido" id="HERR">
                                                            <label class="form-check-label">
                                                                <strong>Herramientas</strong>
                                                            </label>
                                                            <label id="herr" style="display: none;" class="form-check-label" for="flexRadioDefault1">
                                                                Objeto elaborado que sirve como extensión del cuerpo de quien lo usa, para permitir o facilitar una tarea mecánica </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6 text-left">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" value="Instrumentos" name="resultadoObtenido" id="INST">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                <strong>Instrumentos</strong>
                                                            </label>
                                                            <label id="inst" style="display: none;" class="form-check-label" for="flexRadioDefault1">
                                                                Objeto fabricado, simple o formado por una combinación de piezas, que sirve para realizar un trabajo o actividad </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 text-left">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" value="Artefactos" name="resultadoObtenido" id="ARTEF">
                                                            <label class="form-check-label">
                                                                <strong>Artefactos</strong>
                                                            </label>
                                                            <label id="artef" style="display: none;" class="form-check-label" for="flexRadioDefault1">
                                                                Objeto construido con algún tipo de ingenio y técnica para un desempeño específico </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6 text-left">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" value="Sustancias" name="resultadoObtenido" id="SUSTA">
                                                            <label class="form-check-label">
                                                                <strong>Sustancias</strong>
                                                            </label>
                                                            <label id="susta" style="display: none;" class="form-check-label" for="flexRadioDefault1">
                                                                Toda aquella materia cuyas propiedades y características son estables y homogéneas
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 text-left">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" value="Composiciones" name="resultadoObtenido" id="COMPO">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                <strong>Composiciones</strong>
                                                            </label>
                                                            <label id="compo" style="display: none;" class="form-check-label" for="flexRadioDefault1">
                                                                En sentido general es el acto de fusionar o reunir varias cosas y disponerlas en cierto orden para obtener una, con la finalidad de lograr constituir algo
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6 text-left">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" value="Productos" name="resultadoObtenido" id="PROD">
                                                            <label class="form-check-label">
                                                                <strong>Productos</strong>
                                                            </label>
                                                            <label id="prod" style="display: none;" class="form-check-label" for="flexRadioDefault1">
                                                                Son todos aquellos objetos u artefactos, fabricados en industrias, empresas siguiendo una línea de producción o de manera artesanal por las personas.
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                            <div class="table" id="SD" style=" border: none; display:none;">
                                                <div class="row">
                                                    <div class="col-sm-6 text-left">
                                                        <input class="form-check-input" type="hidden" value="Null" selected name="tipoProteccion">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" value="Diseño Industrial 2D" name="tipoProteccion" id="DI">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                <strong>Diseño Industrial 2D</strong>
                                                            </label>
                                                            <label id="di" style="display: none;" class="form-check-label" for="flexRadioDefault1">
                                                                Los diseños industriales protegen la apariencia estética de un producto y no las mejoras técnicas- por un plazo de 10 años, no prorrogables, contados a partir de la fecha de presentación de la solicitud. La apariencia objeto de protección se manifiesta a través de la reunión de líneas, combinación de colores o cualquier forma externa (bidimensional o tridimensional), línea, contorno, configuración, textura o material que no genere cambios en el destino o utilidad del producto.
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 text-left">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" value="Diseño Industrial 3D" name="tipoProteccion" id="DI3">
                                                            <label class="form-check-label" for="flexRadioDefault2">
                                                                <strong>Diseño Industrial 3D</strong>
                                                            </label>
                                                            <label id="di3" style="display: none;" class="form-check-label" for="flexRadioDefault2">
                                                                Los diseños industriales protegen la apariencia estética de un producto y no las mejoras técnicas- por un plazo de 10 años, no prorrogables, contados a partir de la fecha de presentación de la solicitud. La apariencia objeto de protección se manifiesta a través de la reunión de líneas, combinación de colores o cualquier forma externa (bidimensional o tridimensional), línea, contorno, configuración, textura o material que no genere cambios en el destino o utilidad del producto.
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6 text-left">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" value="Esquema de Trazado de Circuitos Integrados" name="tipoProteccion" id="STCI">
                                                            <label class="form-check-label">
                                                                <strong>Esquema de Trazado de Circuitos Integrados</strong>
                                                            </label>
                                                            <label id="stci" style="display: none;" class="form-check-label">
                                                                Título que se confiere a su titular exclusividad para la reproducción del circuito integrado, es decir, nadie más lo puede hacer, ni comercializarlo como esquema de trazado o en forma de artículo que contenga el circuito protegido. Se entiende por esquema de trazado, circuitos eléctricos muy pequeños que realizan operaciones electrónicas y están presentes en todos los aparatos electrónicos modernos.
                                                                El circuito integrado está compuesto por un conjunto de elementos tales como transistores, resistencias, condensadores y diodos que se encuentran dispuestos en un sustrato común. Los elementos se encuentran conectados de manera que el circuito integrado pueda controlar la corriente eléctrica para rectificarla, ampliarla o modularla. De acuerdo con la función que vayan a realizar necesitan un orden y una disposición especial por lo que se realiza un plan o diseño de los elementos que componen el circuito integrado, lo que en esencia conforma el Esquema de Trazado de Circuitos Integrados.
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 text-left">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" value="Patente de Invención" name="tipoProteccion" id="PI">
                                                            <label class="form-check-label">
                                                                <strong>Patente de Invención</strong>
                                                            </label>
                                                            <label id="pi" style="display: none;" class="form-check-label">
                                                                Son títulos que otorga un estado determinado para explotar una invención de manera exclusiva, evitando que un tercero la utilice, explote o venda sin la autorización previa de su titular. Se entiende por invención a la solución de un problema técnico a través de la puesta en práctica de una idea.
                                                                Este derecho exclusivo genera un plazo de protección de 20 años, no prorrogables, contados a partir de la fecha de presentación de la solicitud y sujetas al pago de tasas. De esta forma, una invención patentada en Colombia sólo otorgará derechos exclusivos en territorio colombiano, lo cual también ocurrirá en cada país en el que se registre; en consecuencia, si una invención ha sido patentada en el Colombia, Estados Unidos y Japón, el uso o explotación de esta en un tercer país como China o India (donde no ha sido patentada), no infringirá derecho alguno.
                                                                Las invenciones, para ser registradas como patentes de invención, deben cumplir obligatoriamente con tres requisitos: deben ser novedosas, poseer altura inventiva y
                                                                aplicación industrial.
                                                                Ser novedosa, que implica que no debe haber sido accesible al público6 en cualquier lugar del mundo y por cualquier medio (físico o virtual) antes de la fecha de presentación de la solicitud de patente; es decir, que no se encuentre en el estado de la técnica para así evitar que se otorguen dos patentes sobre un mismo invento.
                                                                Poseer nivel inventivo, que analiza si la invención constituye un “salto
                                                                tecnológico”, ya que para ser objeto de protección ésta no debe ser evidente
                                                                para una persona versada en la materia10 y, por ende, no será objeto de protección
                                                                la simple aplicación de ideas, conceptos y conocimientos.
                                                                Poseer aplicación industrial, referida a que las invenciones deben gozar de la capacidad para ser producidas o utilizadas en cualquier actividad productiva y no ser puramente teóricas o frívolas. Cabe destacar que no es necesario demostrar su viabilidad comercial ni utilidad social.

                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6 text-left">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" value="Modelo de Utilidad" name="tipoProteccion" id="MU">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                <strong>Modelo de Utilidad</strong>
                                                            </label>
                                                            <label id="mu" style="display: none;" class="form-check-label">
                                                                Son títulos que otorgan protección exclusiva a las mejoras funcionales realizadas a productos ya existentes (como el sacagrapas, el sofá-cama, el lápiz con borrador, etc.) tales como mecanismos, herramientas, artefactos, entre otros, por cambios de forma o configuración de sus elementos, que proporcionan alguna utilidad, ventaja o efecto técnico que antes no tenía el producto.
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 text-left">
                                                    <span class="label-perfil">Centro de Formación solicitante :</span>
                                                    <input type="text" class="form-control campo-perfil" name="centroForm" placeholder="Inserte nombre del Centro de Formación..." required>
                                                </div>
                                                <div class="col-sm-6 text-left">
                                                    <span class="label-perfil">Regional solicitante:</span>
                                                    <input type="text" class="form-control campo-perfil" name="regionSolici" placeholder="Inserte nombre de la Regional..." required>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-sm-6 text-left">
                                                    <span class="label-perfil">Grupo de investigación :</span>
                                                    <input class="form-control campo-perfil" name="grupInvesti" placeholder="Inserte el nombre del grupo de investigación donde se origina la creación ( si aplica)..." required></input>
                                                </div>
                                                <div class="col-sm-6 text-left">
                                                    <span class="label-perfil">Nombre del Proyecto :</span>
                                                    <input class="form-control campo-perfil" name="nombreProyecto" placeholder="Inserte el nombre del proyecto y código del proyecto..." required></input>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-sm-6 text-left">
                                                    <span class="label-perfil">Nombre de titulares de la creación :</span>
                                                    <input type="text" class="form-control campo-perfil" name="ntc" placeholder="Inserte el nombre de las personas que desarrollaron la creación (autores, inventores, diseñadores, obtentores)..." required>
                                                </div>
                                                <div class="col-sm-6 text-left">
                                                    <span class="label-perfil">Tipo de Vinculación al SENA :</span>
                                                    <input type="text" class="form-control campo-perfil" name="tipoVinculacion" placeholder="Inserte el tipo de vinculación de las personas que desarrollaron la creación con el SENA..." required>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-sm-6 text-left">
                                                    <span class="label-perfil">Tipo de documento :</span>
                                                    <select class="form-control campo-perfil" name="tpDocument" required>
                                                        <option selected>Seleccione...</option>
                                                        <option value="Cédula de ciudadanía">Cédula de ciudadanía</option>
                                                        <option value="Tarjeta de identidad">Tarjeta de identidad</option>
                                                        <option value="Cédula de extrangería">Cédula de extrangería</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6 text-left">
                                                    <span class="label-perfil">Número de documento :</span>
                                                    <input type="number" class="form-control campo-perfil" name="numeroDocumento" placeholder="00.000.00.00" required>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-sm-6 text-left">
                                                    <span class="label-perfil">Dirección :</span>
                                                    <input type="text" class="form-control campo-perfil" name="direccion" placeholder="Inserte la dirección de las personas que desarrollaron la creación..." required>
                                                </div>
                                                <div class="col-sm-6 text-left">
                                                    <span class="label-perfil">Teléfono de contacto:</span>
                                                    <input type="number" class="form-control campo-perfil" name="telefono" placeholder="000-000.00.00." required>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-sm-6 text-left">
                                                    <span class="label-perfil">Correo electónico:</span>
                                                    <input type="text" class="form-control campo-perfil" name="correo" placeholder="Correo electónico..." required>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-sm-6 text-left">
                                                    <span class="label-perfil">Nombre de cotitulares:</span>
                                                    <input type="text" class="form-control campo-perfil" name="nombreCoti" placeholder="Nombre de cootirulares..." required>
                                                </div>
                                                <div class="col-sm-6 text-left">
                                                    <span class="label-perfil">Cédula o NIT de cotitulares :</span>
                                                    <input type="text" class="form-control campo-perfil" name="cedulaCoti" placeholder="Inserte la cedula o NIT." required>
                                                </div>
                                                <br>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-sm-6 text-left">
                                                    <span class="label-perfil">Representante :</span>
                                                    <input type="text" class="form-control campo-perfil" name="representante" placeholder="Inserte el representante legal de la Empresa (si aplica)..." required>
                                                </div>
                                                <div class="col-sm-6 text-left">
                                                    <span class="label-perfil">Dirección :</span>
                                                    <input type="text" class="form-control campo-perfil" name="direccion" placeholder="Inserte el representante legal de la Empresa (si aplica)" required>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-sm-6 text-left">
                                                    <span class="label-perfil">Teléfono del o los cotitulares :</span>
                                                    <input type="text" class="form-control campo-perfil" name="telCotitular" placeholder="Dirección..." required>
                                                </div>
                                                <div class="col-sm-6 text-left">
                                                    <span class="label-perfil">Correo :</span>
                                                    <input type="text" class="form-control campo-perfil" name="correoCotit" placeholder="Inserte correo electrónico del o los cotitulares..." required>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-sm-6 text-left">
                                                    <span class="label-perfil">Porcentaje de participación de los cotitulares % :</span>
                                                    <textarea type="text" class="form-control campo-perfill" name="porcenCotitu" placeholder="Precise del porcentaje de titularidad de sobre el producto o servicio; de lo contrario si son 2 solicitantes automáticamente el porcentaje de titularidad será del 50%, si son 3 el 33.3%, si son 4 el 25% y así sucesivamente...." required></textarea>
                                                </div>
                                                <div class="col-sm-6 text-left">
                                                    <span class="label-perfil">En caso de cotitulares adjuntar acuerdo de propiedad intelectual :</span>
                                                    <input type="hidden" name="MAX_FILE_SIZE" value="512000" />
                                                    <input type="file" class="form-control campo-perfil" name="acuerdo_Intelectual">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <h4 style="text-align: center;">INFORMACIÓN DE LA CREACIÓN</h4>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-sm-6 text-left">
                                                    <span class="label-perfil">Señale el estado de desarrollo de la creación, considerando qué tan lejos se encuentra para llegar a ser un producto validable a nivel comercial. :</span>
                                                    <select class="form-control campo-perfil" name="estadoDesarrollo" onchange="show(this.value);" required>
                                                        <option selected>Seleccione...</option>
                                                        <option value="TRL_1">TRL 1</option>
                                                        <option value="TRL_2">TRL 2</option>
                                                        <option value="TRL_3">TRL 3</option>
                                                        <option value="TRL_4">TRL 4</option>
                                                        <option value="TRL_5">TRL 5</option>
                                                        <option value="TRL_6">TRL 6</option>
                                                        <option value="TRL_7">TRL 7</option>
                                                        <option value="TRL_8">TRL 8</option>
                                                        <option value="TRL_9">TRL 9</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6 text-left">
                                                    <!--  Opción TRL 1 -->
                                                    <label id="trl_1" style="display: none;" class="form-check-label">
                                                        TRL 1 – Principios básicos observados y reportados: Este corresponde al nivel más bajo en cuanto al nivel de maduración tecnológica. En este nivel comienza la investigación científica básica y se da inicio a la transición a la investigación aplicada. Las herramientas descriptivas pueden ser formulaciones matemáticas o algoritmos. En esta fase de desarrollo no existe todavía ningún grado de aplicación comercial.</label>
                                                    <!--  Opción TRL 2 -->
                                                    <label id="trl_2" style="display: none;" class="form-check-label">
                                                        TRL 2 – Concepto de tecnología y/o aplicación formulada. Investigación aplicada. La teoría y principios científicos están enfocados en áreas específicas de aplicación para definir el concepto. En esta fase se ha formulado el concepto de la tecnología, su aplicación y su puesta en práctica. Se perfila el plan de desarrollo. Estudios y pequeños experimentos proporcionan información valiosa para las posteriores pruebas de conceptos de la tecnología. Se pueden empezar a formular eventuales aplicaciones de las tecnologías y herramienta analíticas para la simulación o análisis. Sin embargo, todavía no se cuenta con pruebas que validen dicha aplicación. El tema de propiedad intelectual cobra gran interés.
                                                    </label>
                                                    <!--  Opción TRL 3 -->
                                                    <label id="trl_3" style="display: none;" class="form-check-label">
                                                        TRL 3 – Pruebas de concepto de las características analíticas y experimentales. Esta fase incluye la realización de actividades de investigación y desarrollo (I+D) dentro de las cuales se incluye la realización de pruebas analíticas, pruebas de concepto o a
                                                        escala en laboratorio, orientadas a demostrar la factibilidad técnica de los conceptos tecnológicos. Se incluyen pruebas de laboratorio para medir parámetros y comparación con predicciones analíticas de subsistemas críticos. El concepto y los procesos han sido demostrados a escala de laboratorio. Esta fase implica la validación de los componentes de una tecnología específica, aunque esto no derive en la integración de todos los componentes en un sistema completo
                                                    </label>
                                                    <!--  Opción TRL 4 -->
                                                    <label id="trl_4" style="display: none;" class="form-check-label">
                                                        TRL 4 – Validación de componentes/subsistemas en pruebas de laboratorio. En esta fase, los componentes que integran determinada tecnología han sido identificados y se busca establecer si dichos componentes individuales cuentan con las capacidades para actuar de manera integrada, funcionando conjuntamente en un sistema. Una unidad
                                                        de prototipo ha sido construida en el laboratorio y en un entorno controlado. Las operaciones proporcionan datos para identificar el potencial de ampliación dado que se ha validado de manera preliminar el ciclo de vida y los modelos de evaluación económica iniciales. (diseño de producto).

                                                    </label>
                                                    <!--  Opción TRL 5 -->
                                                    <label id="trl_5" style="display: none;" class="form-check-label">
                                                        TRL 5 – Validación de los sistemas, subsistemas o componentes en un entorno relevante (o industrialmente relevante en caso de tecnologías habilitadoras clave). Los elementos básicos de determinada tecnología son integrados de manera que la configuración final es similar a su aplicación final, es decir que está listo para ser usado en la simulación de un entorno real, por lo que se mejoran los modelos tanto técnicos como
                                                        económicos del diseño inicial, se ha identificado adicionalmente aspectos de seguridad, limitaciones amiéntales y/o regulatorios entre otros. Sin embargo, la operatividad del sistema y tecnologías ocurre todavía a nivel de laboratorio. La principal diferencia entre el nivel 4 y 5 es el incremento en la fidelidad del sistema y su ambiente hacia la aplicación final.
                                                    </label>
                                                    <!--  Opción TRL 6 -->
                                                    <label id="trl_6" style="display: none;" class="form-check-label">
                                                        TRL 6 – Validación de sistema, subsistema, modelo o prototipo en condiciones cercanas a las reales. En esta fase es posible contar con prototipos piloto capaces de desarrollar todas las funciones necesarias dentro de un sistema determinado, habiendo superado pruebas de factibilidad en condiciones de operación o funcionamiento real. Es
                                                        posible que los componentes y los procesos se hayan ampliado para demostrar su potencial industrial en sistemas reales. La documentación disponible puede ser limitada, sin embargo, se puede iniciar la documentación con el prototipo que se ha probado en condiciones muy cercanas a las que se espera vaya a funcionar, se han identificado y
                                                        modelado el sistema a escala comercial completa, perfeccionando la evaluación del ciclo de vida y la evaluación económica. El prototipo debe ser capaz de desarrollar todas las funciones requeridas por un sistema operativo en condiciones muy cercanas a las que se espera vaya a funcionar es la demostración de pruebas “Beta”.

                                                    </label>
                                                    <!--  Opción TRL 7 -->
                                                    <label id="trl_7" style="display: none;" class="form-check-label">
                                                        TRL 7 – Demostración de sistema o prototipo validados en el entorno operativo real. El sistema se encuentra o está próximo a operar en escala pre-comercial. Es posible llevar a cabo la fase de identificación de aspectos relacionados con la fabricación, la evaluación del ciclo de vida, y la evaluación económica de las tecnologías, contando con la mayor parte de funciones disponibles para pruebas. La documentación disponible puede ser limitada, sin embargo, se cuenta con la demostración de que la tecnología funciona y opera a escala pre-comercial, se han perfeccionado la evaluación del ciclo de vida y la evolución económica. En esta etapa se realiza la primera corrida piloto y las pruebas finales reales.
                                                    </label>
                                                    <!--  Opción TRL 8 -->
                                                    <label id="trl_8" style="display: none;" class="form-check-label">
                                                        TRL 8 – Sistema completo y calificado a través de pruebas y demostraciones en ambientes operacionales. En esta fase, los sistemas están integrados, las tecnologías han sido probadas en su forma final y bajo condiciones supuestas, habiendo alcanzado en muchos casos, el final del desarrollo del sistema. Todas las cuestiones operativas y de fabricación han suido resueltas, la mayoría de la documentación disponible está completa ya que se cuenta con manuales para el uso y mantenimiento del producto. La tecnología ha sido probada en su forma final y bajo condiciones supuestas, por lo que se ha demostrado su potencial a nivel comercial. En muchos casos significa el final del desarrollo del sistema.
                                                    </label>
                                                    <!--  Opción TRL 9 -->
                                                    <label id="trl_9" style="display: none;" class="form-check-label">
                                                        TRL 9 – Sistema probado y operando con éxito en un entorno real.
                                                        Tecnología/sistema en su fase final y operable en un sin número de condiciones operativa, está probada y disponible para su comercialización y/o producción disponible para la sociedad. Entrega de producto o tecnología para producción en serie y comercialización.
                                                    </label>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <p style="text-align: center;"><strong>Sector tecnológico:</strong> Indique el sector tecnológico que más se relaciona con el origen de su creación de acuerdo con la siguiente clasificación (seleccionar una opción) no aplica para diseño industrial, Esquema de trazado de circuito integrado</p>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-sm-6 text-left">
                                                    <span class="label-perfil">Electricidad - electrónica :</span>
                                                    <select class="form-control campo-perfil" name="electiElectonic" required>
                                                        <option selected>Seleccione...</option>
                                                        <option value="Aparatos electrónicos, Ingeniería electrónica, energía eléctrica">Aparatos electrónicos, Ingeniería electrónica, energía eléctrica</option>
                                                        <option value="Comunicación Digital">Comunicación Digital</option>
                                                        <option value="métodos de Gestión mediante T. I">métodos de Gestión mediante T. I</option>
                                                        <option value="Procesos Básicos de Comunicación">Procesos Básicos de Comunicación</option>
                                                        <option value="Semiconductores ">Semiconductores </option>
                                                        <option value="Tecnología Audiovisual">Tecnología Audiovisual</option>
                                                        <option value="Tecnología Informática">Tecnología Informática</option>
                                                        <option value="Telecomunicaciones">Telecomunicaciones</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6 text-left">
                                                    <span class="label-perfil">Ingeniería Mecánica :</span>
                                                    <select class="form-control campo-perfil" name="ingMecanica" required>
                                                        <option selected>Seleccione...</option>
                                                        <option value="Componentes mecánicos">Componentes mecánicos</option>
                                                        <option value="Manejo">Manejo</option>
                                                        <option value="Maquinaria textil y de papel">Maquinaria textil y de papel</option>
                                                        <option value="Maquinas herramientas">Maquinas herramientas</option>
                                                        <option value="Motores, Bombas, Turbinas">Motores, Bombas, Turbinas</option>
                                                        <option value="Otras Maquinaria especial">Otras Maquinaria especial</option>
                                                        <option value="Procesos térmicos y aparatos">Procesos térmicos y aparatos</option>
                                                        <option value="Transporte">Transporte</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-sm-6 text-left">
                                                    <span class="label-perfil">Instrumentos :</span>
                                                    <select class="form-control campo-perfil" name="instrumentos" required>
                                                        <option selected>Seleccione...</option>
                                                        <option value="Análisis de Materiales biológicos">Análisis de Materiales biológicos</option>
                                                        <option value="Control">Control</option>
                                                        <option value="Medida">Medida</option>
                                                        <option value="Óptica">Óptica</option>
                                                        <option value="Tecnología Medica">Tecnología Medica</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6 text-left">
                                                    <span class="label-perfil">Química :</span>
                                                    <select class="form-control campo-perfil" name="quimica" required>
                                                        <option selected>Seleccione...</option>
                                                        <option value="Biotecnología">Biotecnología</option>
                                                        <option value="Ingeniería química">Ingeniería química</option>
                                                        <option value="Materiales Metalurgia">Materiales Metalurgia</option>
                                                        <option value="Productos farmacéuticos">Productos farmacéuticos </option>
                                                        <option value="Productos orgánicos elaborados ">Productos orgánicos elaborados </option>
                                                        <option value="Química de alimentos">Química de alimentos </option>
                                                        <option value="Química de materiales ">Química de materiales </option>
                                                        <option value="Química macromolecular, polímeros">Química macromolecular, polímeros</option>
                                                        <option value="Tecnología de las microestructuras nanotecnologías">Tecnología de las microestructuras nanotecnologías </option>
                                                        <option value="Tecnología de superficie, revestimientos  ">Tecnología de superficie, revestimientos </option>
                                                        <option value="Tecnología medioambiental">Tecnología medioambiental</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 text-left">
                                                    <span class="label-perfil">Otros sectores :</span>
                                                    <select class="form-control campo-perfil" name="otrosSectores" onchange="show(this.value);" required>
                                                        <option selected>Seleccione...</option>
                                                        <option value="Ingeniería civil">Ingeniería civil</option>
                                                        <option value="Mobiliario, juegos">Mobiliario, juegos</option>
                                                        <option value="Otros productos de consumo">Otros productos de consumo</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6 text-left" id="OPC" style="display: none;">
                                                    <span class="label-perfill">Descripción otros productos de consumo :</span>
                                                    <textarea class="form-control campo-perfill" name="descripcionOtroPro" placeholder="Descipcion de otros productos.."></textarea>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-sm-6 text-left">
                                                    <span class="label-perfill">Descripción de la creación a registrar :</span>
                                                    <textarea style="height: 180px!important;" class="form-control campo-perfill" name="descipcionCreacion" placeholder="Descipcion de otros productos.." required></textarea>
                                                </div>
                                                <div class="col-sm-6 text-left">
                                                    <label id="trl_1" class="form-check-label" style="overflow-x: auto; height: 200px; ">
                                                        Describa de manera detallada y completa la forma de ejecutar o llevar a la práctica la creación, utilizando ejemplos y referencias con dibujos. Si la creación es un producto (p. Ej. Un dispositivo, un aparato, una máquina) se debe describir cada una de las partes que lo componen, cómo se unen ellas para configurar la creación y como trabajan juntas. En caso de que la creación sea una composición o una mezcla de compuestos o sustancias (por ejemplo, productos químicos, productos farmacéuticos, alimentos, etc.), se deben nombrar concretamente cada uno de los componentes que la conforman, indicando el nombre químico, fórmula o estructura química y la proporción de cada uno de ellos. dentro de la composición. Si es un proceso, se debe definir mediante la mención de cada una de sus etapas, indicando las condiciones críticas y novedosas en las que se realiza (p.ej. temperatura, tiempo, velocidad, presión, etc.). Recuerde que se necesitan obligatoriamente planos, dibujos técnicos, figuras o diagramas de flujo (proceso) que permitan una mejor compresión de la creación. Por favor no dibujos realizados a mano alzada, fotografías o imágenes de difícil comprensión.</label>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-sm-6 text-left">
                                                    <span class="label-perfill">Ventajas y Beneficios de la Creación :</span>
                                                    <textarea style="height: 100px!important;" class="form-control campo-perfill" name="ventaBenefi" placeholder="Ventajas y Beneficios de la Creación..." required></textarea>
                                                </div>
                                                <div class="col-sm-6 text-left">
                                                    <label id="trl_1" class="form-check-label" style="overflow-x: auto; height: 200px; ">
                                                        Describa los atributos que usted considera son las ventajas y beneficios de su
                                                        creación.
                                                        .</label>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-sm-6 text-left">
                                                    <span class="label-perfill">Características Novedosas :</span>
                                                    <textarea style="height: 100px!important;" class="form-control campo-perfill" name="caracteriNovedo" placeholder="Favor incluir las características técnicas de la creación, dando prelación a las que lo diferencian de lo existente en el sector tecnológico la creación..." required></textarea>
                                                </div>
                                                <div class="col-sm-6 text-left">
                                                    <label id="trl_1" class="form-check-label" style="overflow-x: auto; height: 200px; ">
                                                        Identifique las características técnicas novedosas de su creación que lo diferencia
                                                        de otras creaciones similares a la suya. No debe incluir comentarios acerca de su
                                                        utilidad, beneficios o ventajas económicas, sociales, ambientales, etc.
                                                        .</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 text-left">
                                                    <span class="label-perfill">Impacto o solución :</span>
                                                    <textarea style="height: 100px!important;" class="form-control campo-perfill" name="impactoSolucion" placeholder="Descripción..." required></textarea>
                                                </div>
                                                <div class="col-sm-6 text-left">
                                                    <label id="trl_1" class="form-check-label" style="overflow-x: auto; height: 200px; ">
                                                        Indique de manera corta y concisa de qué manera la creación soluciona el problema técnico .</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 text-left">
                                                    <span class="label-perfill">Estado del Arte :</span>
                                                    <textarea style="height: 100px!important;" class="form-control campo-perfill" name="estadoArte" placeholder="Descripción..." required></textarea>
                                                </div>
                                                <div class="col-sm-6 text-left">
                                                    <label id="trl_1" class="form-check-label" style="overflow-x: auto; height: 200px; ">
                                                        Identifique tecnologías (productos / procesos) que se encuentren en el estado del arte (patentes, artículos científicos, productos en el mercado). Señale el nombre y número de la patente o artículo, así como los autores, inventores o titulares de la
                                                        patente (si aplica).
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12 text-left">
                                                    <span class="label-perfill">Publicaciones o Divulgaciones previas :</span>
                                                    <br>
                                                    <div class="row">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" value="Sí" name="pdps" id="flexRadioDefault1">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                Sí
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" value="No" name="pdps" id="flexRadioDefault2">
                                                            <label class="form-check-label" for="flexRadioDefault2">
                                                                No
                                                            </label>
                                                        </div>
                                                        <br>
                                                        <label class="label-perfill">Indique Otro :</label>
                                                        <textarea style="height: 100px!important;" name="indiqueotro" class="form-control campo-perfill" name="IndiqueOtro" placeholder="Indique Si o No ha divulgado su Creación anteriormente. En caso de que su respuesta sea SI por favor describa donde y como divulgo su creacion..."></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-sm-12 text-left">
                                                    <span class="label-perfill">Posibilidades de Mercado :</span>
                                                    <div class="row">
                                                        <textarea style="height: 100px!important;" class="form-control campo-perfill" name="posibiMerca" placeholder="Indique que mercado posible tiene su creación y que contactos ya ha adelantado" required></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-sm-6 text-left">
                                                    <span class="label-perfill">Contrato de acceso a recursos genéticos :</span>
                                                    <div class="row">
                                                        <label class="label-perfill">Indique si en el desarrollo de su creación utilizo recursos genéticos :</label>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" value="Sí" name="carg" id="flexRadioDefault1">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                Sí
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" value="No" name="carg" id="flexRadioDefault2">
                                                            <label class="form-check-label" for="flexRadioDefault2">
                                                                No
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 text-left">
                                                    <span class="label-perfill">Agregar Imagen :</span>
                                                    <div class="row">
                                                        <label class="label-perfill">Inserte diseño de la creación, preferiblemente imagen a color :</label>
                                                        <input type="file" name="disCreacion" class="form-control campo-perfil">
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-sm-12 text-left">
                                                    <span class="label-perfill">Observaciones Adicionales :</span>
                                                    <div class="row">
                                                        <div class="form-check">
                                                            <textarea style="height: 100px!important;" class="form-control campo-perfill" name="obserAdicion" placeholder="Favor incluir información que considere pertinente y no esté descrita en el formulario..."></textarea>
                                                        </div>
                                                    </div>
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
    </div>
    <!-- Modal de Tegistro de Usuario -->
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
</body>
<!-- Scripts funcionalidades -->
<script src="./Recursos/js/NuevasCreaciones.js"></script>
<!-- Funcionalidades del Formulario CRUD -->
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<!-- BS JavaScript -->
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


</html>