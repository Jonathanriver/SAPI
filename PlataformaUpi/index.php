<html>

<?php
session_start();
include_once './Admin/modelo/database.php';
include_once './Vista/HeadersIndex.php';
include_once './Vista/MenuNav.php';

$sql = "SELECT * FROM gestionCont ";
$resultado = $mysqli->query($sql);
$row_Cont = $resultado->fetch_array(MYSQLI_ASSOC);

// Consulta para tips
$sql = "SELECT * FROM tips";
$resultado = $mysqli->query($sql);
$row_Tips = $resultado->fetch_array(MYSQLI_ASSOC);
// 
$query = "SELECT id,reunion_Fecha, reunion_Hora,reunion_Titulo, reunion_link FROM reunion LIMIT 4 ";
$resul_Date = $mysqli->query($query);
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

<body>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <div class="col-sm text">
                        <div>
                            <img src="Recursos/Imagenes/IMAGEN SAPI.png" alt="alt" style="width: 100%;margin-top: 120px;" />
                        </div>
                        <p><?php echo $row_Cont['textUno']; ?></p>
                    </div>
                </div>
                <div class="col-sm-4 sistemaG">
                    <img src="<?php echo "Admin/controladores/Menu_Navegacion/Image/" . $row_Cont['imagenFondo']; ?>" width="100px" width="" alt="">
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
                                    <!-- Modal -->
                                    <div class="modal fade" id="edit_<?php echo $row_Date['id']; ?>" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel" style="color:#23820b;"><?php echo $row_Date['reunion_Titulo']; ?> </h5>
                                                    <button type="button" style="color: white; background-color: white; border: 3px solid #0000!important;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <fieldset disabled>
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-sm-12 sm-12">
                                                                        <div class="container fluid">
                                                                            <div class="row">
                                                                                <div class="col-sm-12 mb-12">
                                                                                    <label for="" class="form-label">Fecha de la reunión: </label>
                                                                                    <input type="date" class="form-control" id="exampleInputEmail1" value="<?php echo $row_Date['reunion_Fecha'] ?>">
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-sm-12 mb-12">
                                                                                        <br>
                                                                                        <label for="" class="form-label">Hora de la reunión:</label>
                                                                                        <input type="time" class="form-control" id="exampleInputEmail1" value="<?php echo $row_Date['reunion_Hora'] ?>">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-sm-12 mb-12">
                                                                                        <br>
                                                                                        <br>
                                                                                        <label for="" class="form-label">Link de la reunión:</label>
                                                                                        <a href="<?php echo $row_Date['reunion_link']; ?>">Click aqui!</a>
                                                                                        <br>
                                                                                        <br>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                    </form>
                                                    <div class="modal-footer">
                                                        <button name="boton" type="button" class="btn btn-black" data-bs-dismiss="modal">Cerrar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                            <!-- Modal -->
                            <div class="modal fade" id="edit_img<?php echo $row_Tips['id']; ?>" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" style="max-width: 50%; height: 50%;">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">
                                                <!-- <h1 style=" font-size: 15px;"><?php echo $row_Tips['titulo']; ?></h1> -->
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <img style=" border-radius: 25px;  align-items: center !important; text-align: center;" src="<?php echo "Admin/controladores/Tips/Image/" . $row_Tips['imagen']; ?>" alt="">
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn" style="background-color:green; color:white;" data-bs-dismiss="modal">Cerrar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <?php
    include_once './Vista/Footer.php';
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>