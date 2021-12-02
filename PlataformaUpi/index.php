<html>
<?php
session_start();
include_once './Admin/modelo/database.php';
include_once './Vista/HeadersIndex.php';
include_once './Vista/MenuNav.php';
include_once './Controladores/Public_Content/Consultas_Index.php';
?>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-4">
                <div class="col-sm text">
                    <div>
                        <img src="Recursos/Imagenes/IMAGEN SAPI.png" alt="alt" style="width: 100%;margin-top: 120px;" />
                    </div>
                    <p><?php echo $row_Cont['textUno']; ?></p>
                </div>
            </div>
            <div class="col-sm-3 sistemaG">
                <img src="<?php echo "Admin/controladores/Menu_Navegacion/Image/" . $row_Cont['imagenFondo']; ?>">
            </div>
            <div class="col-sm-3">
                <div class="card tarjeta-inicio">
                    <table class="table">
                        <h1 style=" text-align:center;font-size: 15px; color:green;">CALENDARÍO DE EVENTOS</h1>
                        <tbody>
                            <?php while ($row_Date = mysqli_fetch_array($resul_Date)) { ?>
                                <tr>
                                    <button class='btn btn btn-block' data-toggle='modal' type=' button' data-bs-toggle="modal" data-bs-target="#edit_<?php echo $row_Date['id']; ?>"><?php echo $row_Date['reunion_Titulo'] ?> | <?php echo $row_Date['reunion_Fecha'] ?></button>
                                </tr>
                                <!-- Modal de calendario de Evento -->
                                <?php include './Vista/Modals/Calendario_Eventos.php'; ?>
                                <!-- Fin de Modal -->
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="card tarjeta-inicio-2">
                    <div class="col-sm text-center">
                        <p style=" font-size: 15px;"><?php echo $row_Tips['titulo']; ?></p>
                    </div>
                    <div class="col-sm">
                        <ul>
                            <li style="text-align:left;"><?php echo $row_Tips['contenido']; ?></li>
                        </ul>
                    </div>
                    <div class="col-sm">
                        <button class='btn btn btn-block' data-toggle='modal' type=' button' data-bs-toggle="modal" data-bs-target="#edit_img<?php echo $row_Tips['id']; ?>"> <img style=" border-radius: 25px;  align-items: center !important;" src="<?php echo "Admin/controladores/Tips/Image/" . $row_Tips['imagen']; ?>" width="200px" width="" alt=""></button>
                        <!-- Modal Tips-->
                        <?php include './Vista/Modals/Tips.php'; ?>
                        <!-- Fin de Modal -->
                    </div>
                </div>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>
    <!-- footer -->
    <?php
    include_once './Vista/Footer.php';
    ?>
</body>

</html>