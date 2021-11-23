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
$sql = "SELECT * FROM laUpi  WHERE id ='$id'";
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
                                    <h3 class="text-center">ADMINISTRACIÓN DEL PRIMER MODAL </h3>
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
                    <div class="col-md col-sm"></div>
                    <div class="col-md-10 col-sm-8">
                        <form method="POST" action="controladores/laUpi/actualizarModal.php" enctype="multipart/form-data">
                            <input type="hidden" name="menu_id" value="<?php echo $row_Edit_M['id']; ?>" />
                            <button type="submit" name="actualizar_img1" class="btn btn-primary">Eliminar Imagen 1</button>
                        </form>
                        <form class="form_horizontal" method="POST" action="controladores/laUpi/actualizarModal.php" enctype="multipart/form-data">
                            <input type="hidden" name="menu_id" value="<?php echo $row_Edit_M['id']; ?>" />
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">IMAGEN FONDO:</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">

                                                <span class="input-group-text" id="inputGroupFileAddon01">
                                                    <img src="<?php echo "controladores/laUpi/Image/" . $row_Edit_M['modalImg1']; ?>" style="width:15px; border-radius:35px;">
                                                </span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" accept="image/*" name="image_Fon">
                                                <input type="hidden" name="stud_image_old" value="<?php echo $row_Edit_M['modalImg1']; ?>">
                                                <label class="custom-file-label">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label for="modalTxt1" class="form-label">TITULO</label>
                                    <input type="text" class="form-control" name="modalTxt1" value="<?php echo $row_Edit_M['modalTxt1']; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label for="modalParrafo1" class="form-label">TEXTO UNO</label>
                                    <textarea class="form-control" name="modalParrafo1" rows="5" cols="40"><?php echo $row_Edit_M['modalParrafo1']; ?></textarea>
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="modalParra1" class="form-label">TEXTO DOS</label>
                                    <input type="text" class="form-control" name="modalParra1" value="<?php echo $row_Edit_M['modalParra1']; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label for="modalText1" class="form-label">TEXTO TRES</label>
                                    <input type="text" class="form-control" name="modalText1" value="<?php echo $row_Edit_M['modalText1']; ?>">
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="modalTe1" class="form-label">TEXTO CUATRO</label>
                                    <input type="text" class="form-control" name="modalTe1" value="<?php echo $row_Edit_M['modalTe1']; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label for="modalTx1" class="form-label">TEXTO CUATRO</label>
                                    <input type="text" class="form-control" name="modalTx1" value="<?php echo $row_Edit_M['modalTx1']; ?>">
                                </div>
                            </div>
                            <button type="submit" name="updated_Menu" class="btn btn-primary">Actualizar</button>
                        </form>
                        <br>
                        <!-- Segundo Modal -->
                        <div class="col-md-12 col-sm-12 ">
                            <div class="dashboard_graph">
                                <div class="row x_title">
                                    <div class="col-md-12 col-sm-12">
                                        <h3 class="text-center">ADMINISTRACIÓN SEGUNDO MODAL </h3>
                                    </div>

                                    <div class="col-md-6">
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <form method="POST" action="controladores/laUpi/actualizarModal.php" enctype="multipart/form-data">
                            <input type="hidden" name="menu_id" value="<?php echo $row_Edit_M['id']; ?>" />
                            <button type="submit" name="actualizar_img2" class="btn btn-primary">Eliminar Imagen 2</button>
                        </form>
                        <form class="form_horizontal" method="POST" action="controladores/laUpi/actualizarModal.php" enctype="multipart/form-data">
                            <input type="hidden" name="menu_id" value="<?php echo $row_Edit_M['id']; ?>" />
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">IMAGEN FONDO:</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupFileAddon01">
                                                    <img src="<?php echo "controladores/laUpi/Image/" . $row_Edit_M['modalImg2']; ?>" style="width:15px; border-radius:35px;">
                                                </span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" accept="image/*" name="image_Fon2">
                                                <input type="hidden" name="stud_image_old2" value="<?php echo $row_Edit_M['modalImg2']; ?>">
                                                <label class="custom-file-label">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label for="modalTxt2" class="form-label">TITULO</label>
                                    <input type="text" class="form-control" name="modalTe2" value="<?php echo $row_Edit_M['modalTe2']; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label for="modalParrafo2" class="form-label">TEXTO UNO</label>
                                    <textarea class="form-control" name="modalParrafo2" rows="5" cols="40"><?php echo $row_Edit_M['modalParrafo2']; ?></textarea>
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="modalParra2" class="form-label">TEXTO DOS</label>
                                    <input type="text" class="form-control" name="modalParra2" value="<?php echo $row_Edit_M['modalParra2']; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label for="modalText2" class="form-label">TEXTO TRES</label>
                                    <input type="text" class="form-control" name="modalText2" value="<?php echo $row_Edit_M['modalText2']; ?>">
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="modalTxt2" class="form-label">TEXTO CUATRO</label>
                                    <input type="text" class="form-control" name="modalTxt2" value="<?php echo $row_Edit_M['modalTxt2']; ?>">
                                </div>
                            </div>
                            <button type="submit" name="segundo_modal" class="btn btn-primary">Actualizar</button>
                        </form>
                        <!-- Tercer Modal -->
                        <div class="col-md-12 col-sm-12 ">
                            <div class="dashboard_graph">
                                <div class="row x_title">
                                    <div class="col-md-12 col-sm-12">
                                        <h3 class="text-center">ADMINISTRACIÓN TERCER MODAL </h3>
                                    </div>

                                    <div class="col-md-6">
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <form method="POST" action="controladores/laUpi/actualizarModal.php" enctype="multipart/form-data">
                            <input type="hidden" name="menu_id" value="<?php echo $row_Edit_M['id']; ?>" />
                            <button type="submit" name="actualizar_img3" class="btn btn-primary">Eliminar Imagen 3</button>
                        </form>
                        <form class="form_horizontal" method="POST" action="controladores/laUpi/actualizarModal.php" enctype="multipart/form-data">
                            <input type="hidden" name="menu_id" value="<?php echo $row_Edit_M['id']; ?>" />
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">IMAGEN FONDO:</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupFileAddon01">
                                                    <img src="<?php echo "controladores/laUpi/Image/" . $row_Edit_M['modalImg3']; ?>" style="width:15px; border-radius:35px;">
                                                </span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" accept="image/*" name="image_Fon3">
                                                <input type="hidden" name="stud_image_old3" value="<?php echo $row_Edit_M['modalImg3']; ?>">
                                                <label class="custom-file-label">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label for="modalTxt3" class="form-label">TITULO</label>
                                    <textarea class="form-control" name="modalTxt3" rows="5" cols="40"><?php echo $row_Edit_M['modalTxt3']; ?></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label for="modalParrafo3" class="form-label">TEXTO UNO</label>


                                    <input type="text" class="form-control" name="modalParrafo3" value="<?php echo $row_Edit_M['modalParrafo3']; ?>">
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="modalParra3" class="form-label">TEXTO DOS</label>
                                    <input type="text" class="form-control" name="modalParra3" value="<?php echo $row_Edit_M['modalParra3']; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label for="modalText3" class="form-label">TEXTO TRES</label>
                                    <input type="text" class="form-control" name="modalText3" value="<?php echo $row_Edit_M['modalText3']; ?>">
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="modalTe3" class="form-label">TEXTO CUATRO</label>
                                    <input type="text" class="form-control" name="modalTe3" value="<?php echo $row_Edit_M['modalTe3']; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label for="modalTex3" class="form-label">TEXTO CUATRO</label>
                                    <input type="text" class="form-control" name="modalTex3" value="<?php echo $row_Edit_M['modalTex3']; ?>">
                                </div>
                            </div>
                            <button type="submit" name="tercer_modal" class="btn btn-primary">Actualizar</button>
                        </form>
                        <!-- Cuarto Modal -->
                        <div class="col-md-12 col-sm-12 ">
                            <div class="dashboard_graph">
                                <div class="row x_title">
                                    <div class="col-md-12 col-sm-12">
                                        <h3 class="text-center">ADMINISTRACIÓN CUARTO MODAL </h3>
                                    </div>

                                    <div class="col-md-6">
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <form method="POST" action="controladores/laUpi/actualizarModal.php" enctype="multipart/form-data">
                            <input type="hidden" name="menu_id" value="<?php echo $row_Edit_M['id']; ?>" />
                            <button type="submit" name="actualizar_img4" class="btn btn-primary">Eliminar Imagen 4</button>
                        </form>
                        <form class="form_horizontal" method="POST" action="controladores/laUpi/actualizarModal.php" enctype="multipart/form-data">
                            <input type="hidden" name="menu_id" value="<?php echo $row_Edit_M['id']; ?>" />
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">IMAGEN FONDO:</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupFileAddon01">
                                                    <img src="<?php echo "controladores/laUpi/Image/" . $row_Edit_M['modalImg4']; ?>" style="width:15px; border-radius:35px;">
                                                </span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" accept="image/*" name="image_Fon4">
                                                <input type="hidden" name="stud_image_old4" value="<?php echo $row_Edit_M['modalImg4']; ?>">
                                                <label class="custom-file-label">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label for="modalTxt4" class="form-label">TITULO</label>
                                    <input type="text" class="form-control" name="modalTxt4" value="<?php echo $row_Edit_M['modalTxt4']; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 mb-3">


                                    <label for="modalParrafo4" class="form-label">TEXTO UNO</label>
                                    <input type="text" class="form-control" name="modalParrafo4" value="<?php echo $row_Edit_M['modalParrafo4']; ?>">
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="modalParra4" class="form-label">TEXTO DOS</label>
                                    <input type="text" class="form-control" name="modalParra4" value="<?php echo $row_Edit_M['modalParra4']; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label for="modalText4" class="form-label">TEXTO TRES</label>
                                    <input type="text" class="form-control" name="modalText4" value="<?php echo $row_Edit_M['modalText4']; ?>">
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="modalTex4" class="form-label">TEXTO CUATRO</label>
                                    <input type="text" class="form-control" name="modalTex4" value="<?php echo $row_Edit_M['modalTex4']; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label for="modalTe4" class="form-label">TEXTO CUATRO</label>
                                    <input type="text" class="form-control" name="modalTe4" value="<?php echo $row_Edit_M['modalTe4']; ?>">
                                </div>
                            </div>
                            <button type="submit" name="cuarto_modal" class="btn btn-primary">Actualizar</button>
                        </form>
                    </div>
                    <div class="col"></div>
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