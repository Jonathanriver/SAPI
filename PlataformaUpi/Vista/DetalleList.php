<?php
require_once './Modelo/Conexion.php';
$idproducto = $_GET['idproducto'];
//print_r($idproducto);
?>

<script>
    $(document).ready(function () {
        $('#AOcultar').hide();
    });
</script>
<style>
    body {font-family: Arial;}

    /* Style the tab */
    .tab {
        overflow: hidden;
        border: 1px solid #ccc;
        background-color: #f1f1f1;
    }

    /* Style the buttons inside the tab */
    .tab button {
        background-color: inherit;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        transition: 0.3s;
        font-size: 17px;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
        background-color: #ddd;
    }

    /* Create an active/current tablink class */
    .tab button.active {
        background-color: #ccc;
    }

    /* Style the tab content */
    .tabcontent {
        display: none;
        padding: 6px 12px;
        -webkit-animation: fadeEffect 1s;
        animation: fadeEffect 1s;
    }

    /* Fade in tabs */
    @-webkit-keyframes fadeEffect {
        from {opacity: 0;}
        to {opacity: 1;}
    }

    @keyframes fadeEffect {
        from {opacity: 0;}
        to {opacity: 1;}
    }
</style>
<br>
<div class="container-fluid">
    <div class="container">
        <?php
        if ($result = mysqli_query($link, "SELECT * FROM producto WHERE idproducto=$idproducto")) {
            while ($row = $result->fetch_assoc()) {
                $descrip=$row['descripcion'];
                ?>
                <div class="row">
                    <div class="col">
                        <h4 style="color: #563d7c;font-weight: bold;font-size: 40px;"><?php echo $row['nombre']; ?></h4>
                        <span style="color:#563d7c;font-size: 20px;font-weight: normal;" class="badge badge-warning">
                            <?php
                            if ($row['estado'] == 1) {
                                $estado = "Disponible";
                            } else {
                                $estado = "No Disponible";
                            }


                            echo $estado;
                            ?>
                        </span>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-7">
                        <img src="Recursos/Imagenes/<?php echo $row['image']; ?>" id="iframe_a" name="iframe_a" height="60%" width="100%">
                        <br>
                        <br>
                        <table class="table table-bordered">
                            <tr>
                                <td class="text-center">
                                    <button class="btn" href="#" onclick="MontarImagen1()" target="iframe_a">
                                        <img src="Recursos/Imagenes/<?php echo $row['image']; ?>" id="image" style="width: 50px; height: 35px;">
                                    </button>
                                </td>
                                <td class="text-center">
                                    <button class="btn" href="#" onclick="MontarImagen2()" target="iframe_a">
                                        <img src="Recursos/Imagenes/<?php echo $row['image2']; ?>" id="image2" style="width: 50px; height: 35px;">
                                    </button>
                                </td>
                                <td class="text-center">
                                    <button class="btn" href="#" onclick="MontarImagen3()" target="iframe_a">
                                        <img src="Recursos/Imagenes/<?php echo $row['image3']; ?>" id="image3" style="width: 50px; height: 35px;">
                                    </button>
                                </td>
                                <td class="text-center">
                                    <button class="btn" href="#" onclick="MontarImagen4()" target="iframe_a">
                                        <img src="Recursos/Imagenes/<?php echo $row['image4']; ?>" id="image4" style="width: 50px; height: 35px;">
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <button class="btn" href="#" onclick="MontarImagen5()" target="iframe_a">
                                        <img src="Recursos/Imagenes/<?php echo $row['image5']; ?>" id="image5" style="width: 50px; height: 35px;">
                                    </button>
                                </td>
                                <td class="text-center">
                                    <button class="btn" href="#" onclick="MontarImagen6()" target="iframe_a">
                                        <img src="Recursos/Imagenes/<?php echo $row['image6']; ?>" id="image5" style="width: 50px; height: 35px;">
                                    </button>
                                </td>
                                <td class="text-center">
                                    <button class="btn" href="#" onclick="MontarImagen7()" target="iframe_a">
                                        <img src="Recursos/Imagenes/<?php echo $row['image7']; ?>" id="image7" style="width: 50px; height: 35px;">
                                    </button>
                                </td>
                            </tr>
                        </table>

                    </div>
                    <div class="col-5">
                        <span class="Texto-titulo-detalle">Panel de Ofertas</span>
                        <hr>

                        <table class="table table-bordered" style="width: 100%;">
                            <tr style="background-color: #563d7c;">
                                <td class="text-center text-warning" style="font-weight: bold;">Precio Base</td>
                                <td class="text-center text-warning" style="font-weight: bold;">Mayor Oferta</td>
                                <td class="text-center text-warning" style="font-weight: bold;">Ganador Oferta</td>
                            </tr>
                            <tr>
                                <td class="text-center" style="color: #563d7c;">$ <?php echo $row['precio_base']; ?></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table><br>
                        <table class="table table-bordered">
                            <tr style="background-color: #563d7c;">
                                <th class="text-center text-warning">
                                    Apertura
                                </th>
                                <th class="text-center text-warning">
                                    Cierre
                                </th>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <span  style="color: #563d7c;"><i class="fas fa-clock"></i> <?php echo $row['fecha_publi']; ?></span>
                                </td>
                                <td class="text-center">
                                    <span  style="color: #563d7c;"><i class="fas fa-clock"></i> <?php echo $row['fecha_cierre']; ?></span><br>
                                </td>
                            </tr>
                        </table>
                        <br>
                        <div class="container-fluid">
                            <a class="btn btn-warning btn-block" href="SalaOferta.php?idproducto=<?php echo $idproducto; ?>"><i class="fas fa-money-check-alt"></i> Ir a Ofertar</a>
                            <a class="btn btn-secondary btn-block" href="Perfil.php?secction=2"><i class="fas fa-backward"></i> Volver</a>
                        </div>

                    </div>  

                </div>
                <?php
            }
        }
        ?>
    </div>
</div>
<br>
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col">
                <span class="Texto-titulo-detalle">Información de Oferta</span>
                <hr>
                <?php
                       // print_r($idproducto);die;
                if ($resultExtras = mysqli_query($link, "SELECT * FROM extras WHERE producto_idproducto=$idproducto")) {
                    while ($rowExtras = $resultExtras->fetch_assoc()) {
                        ?>
                        <b>Vendedor:</b>&nbsp;&nbsp;<?php echo $rowExtras['descripcion']; ?></br>
                        <?php
                    }
                }
                ?>

            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col">
                <div class="tab row">
                    <div class="col text-center" style="padding-right: 0px;padding-left: 0px;">
                        <button class="tablinks btn btn-warning" style="font-weight: bold;width: 100%;color: #563d7c;" onclick="openCity(event, 'Paris')"><i class="fas fa-info-circle"></i> Descripción Del Producto</button>
                    </div>
                   <!-- <div class="col text-center " style="padding-right: 0px;padding-left: 0px;">
                        <button class="tablinks btn btn-warning" style="font-weight: bold;width: 100%;color: #563d7c;" onclick="openCity(event, 'London')"><i class="fas fa-vr-cardboard"></i> Descripción Detallada</button>
                    </div>-->
                    <div class="col text-center" style="padding-right: 0px;padding-left: 0px;">
                        <button class="tablinks btn btn-warning" style="font-weight: bold;width: 100%;color: #563d7c;" onclick="openCity(event, 'Tokyo')"><i class="fas fa-tags"></i> Ofertas Recientes</button>
                    </div>
                </div>

                <div id="London" class="tabcontent">
                    <br>
                    <table class="table table-bordered" style="border: 1px solid #563d7c !important;" >
                        <tr>
                            <td><b style="color: silver;">Marca:</b><br>LG</td>
                            <td><b style="color: silver;">Modelo:</b><br>LG</td>
                        </tr>
                        <tr>
                            <td><b style="color: silver;">Versión:</b><br>M250DSF</td>
                            <td><b style="color: silver;">Memoria Interna:</b><br>16 GB</td>
                        </tr>
                        <tr>
                            <td><b style="color: silver;">Memoria Ram:</b><br>LG</td>
                            <td><b style="color: silver;">Tamaño de la Pantalla:</b><br>LG</td>
                        </tr>
                        <tr>
                            <td><b style="color: silver;">Compañia Telefonica:</b><br>Liberado</td>
                            <td><b style="color: silver;">Velocidad del procesador:</b><br>1.5 GHz</td>
                        </tr>
                    </table>
                </div>

                <div id="Paris" class="tabcontent">
                    <br>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-3 text-center">
                                <i class="fas fa-file-alt" style="font-size: 100px;margin: 15px;margin-top: 123px;color: #563d7c; "></i><br>
                                <p style="color: #563d7c;font-weight: bold;">Información suminstrada por el Vendedor</p>
                            </div>
                            <div class="col-9">
                                <p class="text-justify" style="color: #563d7c;"><?php echo $descrip; ?></p>
                            </div>
                        </div>
                    </div>
                    <br>
                    
                </div>

                <div id="Tokyo" class="tabcontent">
                    <br>
                    <table class="table table-bordered">
                        <tr>
                            <td>
                                <div class="row">
                                    <div class="col-2">
                                        <i class="fas fa-user" style="font-size: 50px;"></i>
                                    </div>
                                    <div class="col">
                                        <span class="badge badge-warning" style="color: #563d7c;font-weight: bold;font-size: 18px;">Carlos Andrés Penagos</span><br>
                                        <span style="color: #563d7c;font-weight: bold;font-size: 12px;">Medellin Antioquia</span>
                                    </div>
                                    <div class="col">
                                        <h2 style="color: #563d7c;font-weight: bold;font-size: 15px;">Oferta</h2>
                                        <p>$221.000</p>
                                    </div>
                                    <div class="col">
                                        <h2 style="color: #563d7c;font-weight: bold;font-size: 15px;">Fecha de Oferta</h2>
                                        <p>20/06/2019</p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="row">
                                    <div class="col-2">
                                        <i class="fas fa-user" style="font-size: 50px;"></i>
                                    </div>
                                    <div class="col">
                                        <span class="badge badge-warning" style="color: #563d7c;font-weight: bold;font-size: 18px;">Carlos Andrés Penagos</span><br>
                                        <span style="color: #563d7c;font-weight: bold;font-size: 12px;">Medellin Antioquia</span>
                                    </div>
                                    <div class="col">
                                        <h2 style="color: #563d7c;font-weight: bold;font-size: 15px;">Oferta</h2>
                                        <p>$221.000</p>
                                    </div>
                                    <div class="col">
                                        <h2 style="color: #563d7c;font-weight: bold;font-size: 15px;">Fecha de Oferta</h2>
                                        <p>20/06/2019</p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="row">
                                    <div class="col-2">
                                        <i class="fas fa-user" style="font-size: 50px;"></i>
                                    </div>
                                    <div class="col">
                                        <span class="badge badge-warning" style="color: #563d7c;font-weight: bold;font-size: 18px;">Carlos Andrés Penagos</span><br>
                                        <span style="color: #563d7c;font-weight: bold;font-size: 12px;">Medellin Antioquia</span>
                                    </div>
                                    <div class="col">
                                        <h2 style="color: #563d7c;font-weight: bold;font-size: 15px;">Oferta</h2>
                                        <p>$221.000</p>
                                    </div>
                                    <div class="col">
                                        <h2 style="color: #563d7c;font-weight: bold;font-size: 15px;">Fecha de Oferta</h2>
                                        <p>20/06/2019</p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<script>
    function MontarImagen1() {
        var imagen1 = $('#image').attr('src');
        $('#iframe_a').attr('src', imagen1);
    }
    function MontarImagen2() {
        var imagen2 = $('#image2').attr('src');
        $('#iframe_a').attr('src', imagen2);
    }
    function MontarImagen3() {
        var imagen3 = $('#image3').attr('src');
        $('#iframe_a').attr('src', imagen3);
    }
    function MontarImagen4() {
        var imagen4 = $('#image4').attr('src');
        $('#iframe_a').attr('src', imagen4);
    }
    function MontarImagen5() {
        var imagen5 = $('#image5').attr('src');
        $('#iframe_a').attr('src', imagen5);
    }
    function MontarImagen6() {
        var imagen6 = $('#image6').attr('src');
        $('#iframe_a').attr('src', imagen6);
    }
    function MontarImagen7() {
        var imagen7 = $('#image7').attr('src');
        $('#iframe_a').attr('src', imagen7);
    }


    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>