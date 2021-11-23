<?php
include_once "modelo/database.php";
include "vistas/Headers_admin.php";

session_start();
if (!isset($_SESSION['SESS_MEMBER_ID'])) {
    header('Location:../Login_Admin.php');
    // echo "No puedes ingresar";
}
$id_user = $_SESSION['SESS_MEMBER_ID'];


$id = $_GET['id'];
$sql = "SELECT * FROM reunion  WHERE id ='$id'";
$resultado = $mysqli->query($sql);
$row_Edit_M = $resultado->fetch_array(MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <?php include "Side_Menu/side_Menu.php"; ?>

            <!-- top navigation -->
            <?php include "Side_Menu/Top_Navigation.php" ?>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="dashboard_graph">
                            <div class="row x_title">
                                <div class="col-md-12 col-sm-12">
                                    <h3 class="text-center">ADMINISTRACIÓN DE CONTENIDO </h3>
                                </div>

                                <div class="col-md-6">
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <br />
                <!-- Contenido Principal -->
                <div class="row">
                    <div class="col-md col-sm-8"></div>
                    <div class="col-md-10 col-sm-8">
                        <form class="form_horizontal" method="POST" action="controladores/reunion/actualizarM.php" enctype="multipart/form-data">
                            <input type="hidden" name="reunion_id" value="<?php echo $row_Edit_M['id']; ?>" />
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label for="reunion_Titulo" class="form-label">TITULO DE LA REUNIÓN: </label>
                                    <input type="text" class="form-control" name="reunion_Titulo" value="<?php echo $row_Edit_M['reunion_Titulo']; ?>">
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="reunion_Fecha" class="form-label">FECHA DE LA REUNIÓN</label>
                                    <input type="date" class="form-control" name="reunion_Fecha" value="<?php echo $row_Edit_M['reunion_Fecha']; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label for="reunion_hora" class="form-label">HORA DE LA REUNIÓN:</label>
                                    <input type="time" class="form-control" name="reunion_hora" value="<?php echo $row_Edit_M['reunion_Hora']; ?>">
                                </div>

                                <div class="col-6 mb-3">
                                    <label for="reunion_link" class="form-label">LINK DE LA REUNIÓN:</label>
                                    <input type="text" class="form-control" name="reunion_link" value="<?php echo $row_Edit_M['reunion_link']; ?>">
                                </div>
                            </div>
                            <button type="submit" name="encuentro_link" class="btn btn-primary">Actualizar</button>
                        </form>
                    </div>
                    <div class="col-md col-sm-8">
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin Contenido Principal -->
    </div>
    <!-- /page content -->

    <!-- footer content -->
    <footer>
        <div class="pull-right">
            © 2021 Copyright:<a href="#">Sennova</a> | Gentelella - Bootstrap Admin Template
        </div>
        <div class="clearfix"></div>
    </footer>
    <!-- /footer content -->
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>

    <?php include "production/js/admin/admin.php" ?>
</body>

</html>