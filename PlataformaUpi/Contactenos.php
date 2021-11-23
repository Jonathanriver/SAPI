<html>
<!-- Headers -->
<?php
session_start();
include_once './Admin/modelo/database.php';

include_once './Vista/HeadersContactenos.php';
include_once './Vista/MenuNav.php';
$sql = "SELECT * FROM gestioncont WHERE id=4";
$resultado = $mysqli->query($sql);
$row = $resultado->fetch_array(MYSQLI_ASSOC);
?>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm">
            </div>
            <div class="col-sm-6">
                <div class="card-body">
                    <h1 class="card-title"><img src="Recursos/Imagenes/titulo.png" style="width: 100%;"></h1>
                    <p class="card-text"><?php echo $row['textUno']; ?></p>
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-sm">
                        <div class="col-sm" style="">
                            <img src="./Recursos/Imagenes/ICONO TELEFONO.png" style="width: 50px; margin:left;  margin-bottom: -50px;">
                            <div class="col-sm text-center">
                                <h6><span style="color:#2cb1e5; font-size:20px;"><strong>TELÉFONO</strong></span><br><span><?php echo $row['textDos']; ?></span></h6>
                                <hr style="border: solid 0.5px #756d68 !important;">
                            </div>
                        </div>
                        <div class="col-sm">
                            <img src="./Recursos/Imagenes/IMG EMAIL.png" style="width: 50px; margin:left; margin-bottom: -50px;">
                            <div class="col-sm text-center">
                                <h6><span style="color:#2cb1e5; font-size:20px;"><strong>E-MAIL</strong></span><br><span><?php echo $row['textTres']; ?></span>
                                </h6>
                                <hr style="border: solid 0.5px #756d68 !important;">
                            </div>
                        </div>
                        <div class="col-sm">
                            <img src="./Recursos/Imagenes/IMG_EMPRESA.png" style="width: 50px; margin:left; margin-bottom: -50px;">
                            <div class="col-sm text-center">
                                <h6><span style="color:#2cb1e5; font-size:20px;"><strong>DIRECCIÓN</strong></span><br><a style=" color:black;text-decoration:none; " href="#"><?php echo $row['textCuatro']; ?></a></h6>
                                <hr style="border: solid 0.5px #756d68 !important;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm">
            </div>
        </div>
    </div>
    </div>
    <?php
    include_once './Vista/Footer.php';
    ?>
</body>

</html>