<html>
<?php
// Headers 
session_start();
// Incluir componentes para su funcionalidad
include_once './Admin/modelo/database.php';
include_once './Vista/HeadersServicios.php';
include_once './Vista/MenuNav.php';
include_once './Controladores/Public_Content/LaUpi.php';

?>

<body>
    <!-- While para correr las consultas en la base de datos y traer toda la información -->
    <?php
    while ($row = $resultado->fetch_array(MYSQLI_ASSOC)) {
    ?>
        <div class="container-fluid">
            <div class="row" style="margin-top:70px;">
                <!-- Condicional para mostrar datos -->
                <?php if ($row > 0) { ?>
                    <div class="col-sm-6 text-center">
                        <div>
                            <?php if ($row['imagenFondo'] == null || $row['imagenFondo'] == 'undefined' || $row['imagenFondo'] == '') {
                            } else { ?>

                                <img src="<?php echo "Admin/controladores/laUpi/Image/" . $row['imagenFondo']; ?>" width="35%" width="" alt="">

                            <?php } ?>

                        </div>
                    </div>
                <?php } ?>
                <!-- Condicional para mostrar datos -->
                <div class="col-sm-6 text-center">
                    <div class="row">
                        <div class="col-sm-9">
                            <?php if ($row['titulo'] == null || $row['titulo'] == '' || $row['titulo'] == 'undefined') {
                            } else {
                            ?>
                                <p class="text-center" style="color: #FF6600;font-size: 60px;font-family: 'Josefin Sans Bold'"><?php echo $row['titulo']; ?></p>
                            <?php
                            } ?>
                            <!-- Fin -->
                            <div class="-sm text-center" style=" width:100%;">
                                <?php if ($row['parrafo'] == '' || $row['parrafo'] == null || $row['parrafo'] == 'undefined') {
                                } else {
                                ?>
                                    <p style="font-family: 'Josefin Sans Bold';text-align: justify;"><?php echo $row['parrafo']; ?>
                                    </p>
                                <?php
                                } ?>
                            </div>

                            <?php if ($row['boton1'] == null || $row['boton1'] == 'boton1' || $row['boton1'] == '') {
                            } else {
                            ?>
                                <a style="  margin-bottom:10px;text-decoration:none" href="#edit_<?php echo $row['id'];  ?> " data-toggle="modal"><span class="glyphicon glyphicon-edit"><button class="btn btn-success btn-block" style="margin: 6px;background-color: #23820b;color: white;font-family: 'Josefin Sans Bold';border-radius: 26px; " type="button" data-toggle="modal"><?php echo $row['boton1']; ?></button></span></a>
                            <?php
                            }; ?>
                            <?php if ($row['boton2'] == '' || $row['boton2'] == null || $row['boton2'] == 'undefined') { ?>
                            <?php } else {
                            ?>
                                <a style="text-decoration:none" href="#edit2_<?php echo $row['id']; ?>" data-toggle="modal"><span class="glyphicon glyphicon-edit"><button class="btn btn-success btn-block" style="margin: 6px;background-color: #59b548;color: white;font-family: 'Josefin Sans Bold';border-radius: 26px;" type="button" data-toggle="modal" data-target="#modal2"><?php echo $row['boton2']; ?></button></span></a>
                            <?php
                            } ?>
                            <?php if ($row['boton3'] == '' || $row['boton3'] == null || $row['boton3'] == 'undefined') {
                            } else {
                            ?>
                                <a style="text-decoration:none" href="#edit3_<?php echo $row['id']; ?>" data-toggle="modal"><span class="glyphicon glyphicon-edit"><button class="btn btn-success btn-block" style="margin: 6px;background-color: #b7bf0f;color: white;font-family: 'Josefin Sans Bold';border-radius: 26px;" type="button" data-toggle="modal" data-target="#modal3"><?php echo $row['boton3']; ?></button></span></a>
                            <?php
                            } ?>
                            <?php if ($row['boton4'] == '' || $row['boton4'] == null || $row['boton4'] == 'undefined') {
                            } else {
                            ?>
                                <a style="text-decoration:none" href="#edit4_<?php echo $row['id']; ?>" data-toggle="modal"><span class="glyphicon glyphicon-edit"><button class="btn btn-success btn-block" style="margin: 6px;background-color: #fc7323;color: white;font-family: 'Josefin Sans Bold';border-radius: 26px;" type="button" data-toggle="modal" data-target="#modal4"><?php echo $row['boton4']; ?></button></span></a>
                            <?php
                            } ?>
                        </div>
                    </div>
                </div>
                <!-- Incluir los modals de cada boton -->
                <?php include "Vista/Modals/Boton_Info.php"; ?>
            </div>
        </div>

    <?php } ?>
    <?php
    // Se include el footer para cada página
    include_once './Vista/Footer.php';
    ?>
</body>
</html>