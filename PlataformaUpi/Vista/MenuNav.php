<?php
$sql = "SELECT menuImage FROM gestionCont";
$resultado = $mysqli->query($sql);
$rowimg = $resultado->fetch_array(MYSQLI_ASSOC);

$sql = "SELECT menu FROM gestionCont WHERE id=1";
$resultado = $mysqli->query($sql);
$row1 = $resultado->fetch_array(MYSQLI_ASSOC);

$sql = "SELECT menu FROM gestionCont WHERE id=2";
$resultado = $mysqli->query($sql);
$row2 = $resultado->fetch_array(MYSQLI_ASSOC);

$sql = "SELECT menu FROM gestionCont WHERE id=3";
$resultado = $mysqli->query($sql);
$row3 = $resultado->fetch_array(MYSQLI_ASSOC);

$sql = "SELECT menu FROM gestionCont WHERE id=4";
$resultado = $mysqli->query($sql);
$row4 = $resultado->fetch_array(MYSQLI_ASSOC);

$sql = "SELECT menu FROM gestionCont WHERE id=5";
$resultado = $mysqli->query($sql);
$row5 = $resultado->fetch_array(MYSQLI_ASSOC);

$sql = "SELECT menu FROM gestionCont WHERE id=6";
$resultado = $mysqli->query($sql);
$row6 = $resultado->fetch_array(MYSQLI_ASSOC);
?>
<nav class="navbar navbar-expand-lg navbar-dark static-top" style="background-color: #23820B;">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <?php if($rowimg['menuImage'] == null || $rowimg['menuImage'] == '' || $rowimg['menuImage'] == 'undefined'){
                
            }else{?>
            <img src="<?php echo "Admin/controladores/Menu_Navegacion/Image/" . $rowimg['menuImage']; ?>" width="220px" width="" alt="">
        <?php };?>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto" style="font-family: 'Josefin Sans Bold';margin-top: 2%;">
                <li class="nav-item">

                    <a class="nav-link text-white" style="font-family: 'Josefin Sans Bold';font-size:20px;margin-right:25px; padding: 0px 32px 32px 0px;" href="./index.php"><?php echo $row1['menu']; ?></a>
                </li>
                <li class="nav-item" id="log">

                    <a class="nav-link text-white" style="font-family: 'Josefin Sans Bold';font-size:20px;margin-right:25px;padding: 0px 32px 32px 0px;" href="./LaUpi.php"><?php echo $row2['menu']; ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" style="font-family: 'Josefin Sans Bold';font-size:20px;margin-right:25px;padding: 0px 32px 32px 0px;" href="./Servicios.php"><?php echo $row3['menu']; ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" style="font-family: 'Josefin Sans Bold';font-size:20px;margin-right:25px;padding: 0px 32px 32px 0px;" href="./Contactenos.php"><?php echo $row4['menu']; ?></a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link text-white" style="font-family: 'Josefin Sans Bold';font-size:20px;margin-right:25px;padding: 0px 32px 32px 0px;" href="./Validacion.php"><?php echo $row5['menu']; ?></a>
                </li> -->
                <li class="nav-item">
                    <span>
                        <a type="button" class="btn btn-light" style="margin-top:-5%;font-family: 'Josefin Sans Bold';font-size:20px;margin-right:25px;text-align:center; color:#23820b; border-radius:22px;;" href="./Login.php"><?php echo $row6['menu']; ?></a>
                    </span>
                </li>
                <!-- margin -->
            </ul>
        </div>
    </div>
</nav>
<div style="background-image: url('Recursos/Imagenes/2.png');width: 100%;background-size: cover;height: 110px;">

</div>