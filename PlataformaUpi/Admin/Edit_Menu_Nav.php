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
$sql = "SELECT * FROM gestionCont  WHERE id ='$id'";
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
                        <form class="form_horizontal" method="POST" action="controladores/Menu_Navegacion/actualizar.php" enctype="multipart/form-data">
                            <input type="hidden" name="menu_id" value="<?php echo $row_Edit_M['id']; ?>" />
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">IMAGEN FONDO:</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupFileAddon01">
                                                    <img src="<?php echo "controladores/Menu_Navegacion/Image/" . $row_Edit_M['imagenFondo']; ?>" style="width: 20px; border-radius:35px;">
                                                </span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" accept="image/*" name="image_Fon">
                                                <input type="hidden" name="stud_image_old" value="<?php echo $row_Edit_M['imagenFondo']; ?>">
                                                <label class="custom-file-label">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label for="textUno" class="form-label">PARRAFO</label>
                                    <textarea class="form-control" name="textUno" rows="5" cols="40"><?php echo $row_Edit_M['textUno']; ?></textarea>
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="textDos" class="form-label">TEXTO UNO</label>
                                    <input type="text" class="form-control" name="textDos" value="<?php echo $row_Edit_M['textDos']; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label for="textTres" class="form-label">TEXTO DOS</label>
                                    <input type="text" class="form-control" name="textTres" value="<?php echo $row_Edit_M['textTres']; ?>">
                                </div>

                                <div class="col-6 mb-3">
                                    <label for="textCuatro" class="form-label">TEXTO TRES</label>
                                    <input type="text" class="form-control" name="textCuatro" value="<?php echo $row_Edit_M['textCuatro']; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label for="textCinco" class="form-label">TEXTO CUATRO</label>
                                    <input type="text" class="form-control" name="textCinco" value="<?php echo $row_Edit_M['textCinco']; ?>">
                                </div>

                                <div class="col-6 mb-3">
                                    <label for="textSeis" class="form-label">TEXTO TIPS</label>
                                    <input type="text" class="form-control" name="textSeis" value="<?php echo $row_Edit_M['textSeis']; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label for="textSiete" class="form-label">TIPS</label>
                                    <input type="text" class="form-control" name="textSiete" value="<?php echo $row_Edit_M['textSiete']; ?>">
                                </div>

                                <div class="col-6 mb-3">
                                    <label for="textOcho" class="form-label">TIPS</label>
                                    <input type="text" class="form-control" name="textOcho" value="<?php echo $row_Edit_M['textOcho']; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label for="textNueve" class="form-label">TIPS</label>
                                    <input type="text" class="form-control" name="textNueve" value="<?php echo $row_Edit_M['textNueve']; ?>">
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="textDies" class="form-label">TIPS</label>
                                    <input type="text" class="form-control" name="textDies" value="<?php echo $row_Edit_M['textDies']; ?>">
                                </div>
                            </div>
                            <button type="submit" name="updated_Menu" class="btn btn-primary">Actualizar</button>
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