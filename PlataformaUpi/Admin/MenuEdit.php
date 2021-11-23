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
$sql = "SELECT * FROM gestioncontenido  WHERE id ='$id'";
$resultado = $mysqli->query($sql);
$row = $resultado->fetch_array(MYSQLI_ASSOC);

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
                        <form class="form_horizontal" method="POST" action="controladores/menu_1/MenuActualizar.php" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <div class="form-group">
                                        <input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>" />
                                        <label for="message-text" class="col-form-label">IMAGEN DEL MENÚ:</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupFileAddon01"><img src="<?php echo "controladores/menu_1/upload/" . $row['MENUIMG']; ?>"></span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="menu_image">
                                                <input type="hidden" id="image_old" name="image_old" value="<?php echo $row['MENUIMG']; ?>" />
                                                <label class="custom-file-label" for="">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label for="menu" class="form-label">NOMBRE DEL MENÚ</label>
                                    <input type="text" class="form-control" id="menu" aria-describedby="menu" name="menu" value="<?php echo $row['MENU']; ?>">
                                </div>
                            </div>
                            <button type="submit" name="update_menu" class="btn btn-primary">Actualizar</button>
                        </form>
                    </div>
                    <div class="col-md col-sm-8"></div>
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
    <?php include "production/js/admin/admin.php" ?>
</body>

</html>