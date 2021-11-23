<html>
<!-- Headers -->
<?php
session_start();
include_once './Vista/HeaderNuevoProyecto.php';
include_once './Modelo/Conexion.php';
if (!isset($_SESSION['SESS_MEMBER_ID']) && !isset($_SESSION['SESS_MEMBER_ID_TECNO'])) {
    header('Location: Login.php');
    // echo "No puedes ingresar";
}
$CodProd = '';
$CodProd = $_GET['CodProd'];

$_SESSION['SESS_COD_PROD'] = $CodProd;
//print_r($CodProd);die;
?>
<script type="text/javascript" src="./Recursos/js/jquery-3.6.0.min.js"></script>

<body>
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
                        <h1 class="texto-titulo-perfil" style="font-size:50px; text-align: center; margin-bottom:-45px;">TIPOS DE REGISTRO</h1>
                    </div>
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-sm-6 card-body">
                        <div class="row radious">
                            <button class="accordion" style=" outline: none;">
                                <!-- style="  border: solid 0.5px red !important;" -->
                                <div class="col-sm">
                                    <img src="./Recursos/Imagenes/Obtencion_Vegetal.jpg" style=" margin-left:-15px;width: 40px;" /><label style="color:#fc7323; margin-left:10px;" class="form-check-label" for="flexRadioDefault1">
                                        <strong> OBTENCIÓN VEGETAL</strong>
                                    </label>
                                </div>
                            </button>
                            <div class="panel">
                                <br>
                                <p>
                                    Protección otorgada sobre nuevas variedades vegetales de árboles forestales, frutales o demás cultivos.
                                </p>
                                <a class="btn btn" style="color: white; background-color: #fc7323;" href="./RgObtencionVegetal.php" role="button">Ir a registro</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 card-body">
                        <div class="row radious">
                            <button class="accordion" style=" outline: none;">
                                <!-- style="  border: solid 0.5px red !important;" -->
                                <div class="col-sm">
                                    <img src="./Recursos/Imagenes/Derecho_Autor.jpg" style=" margin-left:-15px;width: 40px;" /><label style="color:#fc7323; margin-left:10px;" class="form-check-label" for="flexRadioDefault1">
                                        <strong> DERECHOS DE AUTOR</strong>
                                    </label>
                                </div>
                            </button>
                            <div class="panel">
                                <br>

                                <p>
                                    Protección otorgada a los creadores de obras literarias, artísticas, científicas, audiovisuales, de software, de fonogramas.
                                    <br>
                                    <br>
                                    Se pueden proteger: libros, películas, canciones, pinturas, fotografías, esculturas, diseños arquitectónicos, artículos, entre otros.

                                </p>
                                <a class="btn btn" style="color: white; background-color: #fc7323;" href="./Derechosdeautor.php" role="button">Ir a registro</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 card-body">
                        <div class="row radious">
                            <button class="accordion" style=" outline: none;">
                                <!-- style="  border: solid 0.5px red !important;" -->
                                <div class="col-sm">
                                    <img src="./Recursos/Imagenes/Propiedad_Industrial.jpg" style=" margin-left:-15px;width: 40px;" /><label style="color:#fc7323; margin-left:10px;" class="form-check-label" for="flexRadioDefault1">
                                        <strong>NUEVAS CREACIONES</strong>
                                    </label>
                                </div>
                            </button>
                            <div class="panel">
                                <br>

                                <p>
                                    Protección otorgada a los inventores que desarrollan nuevos productos o procesos que incluyen novedad y originalidad.
                                    <br>
                                    <br>
                                    Estos desarrollos se pueden proteger por patentes, modelos de utilidad, diseños industriales, esquemas de trazado
                                </p>
                                <a class="btn btn" style="color: white; background-color: #fc7323;" href="./NuevasCreaciones.php" role="button">Ir a registro</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 card-body">
                        <div class="row radious">
                            <button class="accordion" style=" outline: none;">
                                <!-- style="  border: solid 0.5px red !important;" -->
                                <div class="col-sm">
                                    <img src="./Recursos/Imagenes/Obtencion_Vegetal.jpg" style=" margin-left:-15px;width: 40px;" /><label style="color:#fc7323; margin-left:10px;" class="form-check-label" for="flexRadioDefault1">
                                        <strong>SIGNOS DISTINTIVOS</strong>
                                    </label>
                                </div>
                            </button>
                            <div class="panel">
                                <br>
                                <p>
                                    Protección otorgada a los titulares de expresiones, vocablos, símbolos, figuras o demás elementos que utiliza una persona natural o jurídica en el mercado para distinguir productos, servicios, establecimientos o actividades económicas, de los demás competidores del mercado.
                                    <br>
                                    <br>
                                    Se pueden proteger: marcas, nombres, lemas, enseñas comerciales, denominaciones de origen

                                </p>
                                <a class="btn btn" style="color: white; background-color: #fc7323;" href="./SignosDistintivos.php?CodProd=<?php echo $CodProd ?>" role="button">Ir a registro</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }
</script>

</html>