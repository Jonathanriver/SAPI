<html>
<!-- Headers -->
<?php
session_start();

include_once './Admin/modelo/database.php';

include_once './Vista/HeadersServicios.php';
include_once './Vista/MenuNav.php';

$sql = "SELECT * FROM gestionCont WHERE id=3";
$resultado = $mysqli->query($sql);
$row = $resultado->fetch_array(MYSQLI_ASSOC);

?>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm text-center">
                <h1 style="color: #23820b;font-family: 'Josefin Sans Bold';"><?php echo $row['textUno']; ?></h1>
                <p style="font-family: 'Josefin Sans Bold'"><?php echo $row['textDos']; ?></p>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="width: 60%;">
        <div class="row" style="margin-top: 90px;">
            <div class="col-sm-4 text-center">
                <img src="Recursos/Imagenes/ANALISIS_DE_RESULTADO.JPG" alt="alt" style="width: 160px;" />
            </div>
            <div class="col-sm-8 text-justify">
                <p style="font-family: 'Josefin Sans Bold'; color:#23820b;font-size: 26px;"><?php echo $row['textTres']; ?>
                </p>
                <p style="font-family: 'Josefin Sans Bold'"><?php echo $row['textCuatro']; ?>
                </p>
            </div>
        </div>
        <div class="row" style="margin-top: 90px;">
            <div class="col-sm-8 text-justify">
                <p style="font-family: 'Josefin Sans Bold'; color:#2cb1e5; font-size: 26px;"><?php echo $row['textCinco']; ?>
                </p>
                <p style="font-family: 'Josefin Sans Bold'"><?php echo $row['textSeis']; ?>
                </p>
            </div>
            <div class="col-sm-4 text-center">
                <img src="Recursos/Imagenes/tramite de proteccion.JPG" alt="alt" style="width: 160px;" />
            </div>
        </div>
        <div class="row" style="margin-top: 90px;">
            <div class="col-sm-4 text-center">
                <img src="Recursos/Imagenes/transferencia de tecn.JPG" alt="alt" style="width: 160px;" />
            </div>
            <div class="col-sm-8 text-justify">
                <p style="font-family: 'Josefin Sans Bold'; color:#495057;font-size: 26px;"><?php echo $row['textSiete']; ?>
                </p>
                <p style="font-family: 'Josefin Sans Bold'"><?php echo $row['textOcho']; ?>
                </p>
            </div>
        </div>
        <div class="row" style="margin-top: 90px;">
            <div class="col-sm-8 text-justify">
                <p style="font-family: 'Josefin Sans Bold'; color:#fc7323;font-size: 26px;"><?php echo $row['textNueve']; ?>
                </p>
                <p style="font-family: 'Josefin Sans Bold'"><?php echo $row['textDies']; ?>
                </p>
            </div>
            <div class="col-sm-4 text-center">
                <img src="Recursos/Imagenes/Divulgaciones.JPG" alt="alt" style="width: 160px;" />
            </div>
        </div>
    </div>
    </div>
    <?php
    include_once './Vista/Footer.php';
    ?>
</body>

</html>