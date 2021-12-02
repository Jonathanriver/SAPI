<!-- Ventana Editar Registros CRUD 1 -->
<div class="modal fade" id="edit_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <?php if ($row['modalTxt1'] == null || $row['modalTxt1'] == 'undefined' || $row['modalTxt1'] == '') {
                            } else { ?>
                                <p class="text-center" style="color: #FF6600;font-size: 39px;font-family: 'Josefin Sans Bold'"><?php echo $row['modalTxt1']; ?></p>
                            <?php } ?>

                            <?php if ($row['modalImg1'] == null || $row['modalImg1'] == 'undefined' || $row['modalImg1'] == '') {
                            } else { ?>
                                <img src="<?php echo "Admin/controladores/laUpi/Image/" . $row['modalImg1']; ?>" width="60%" style="margin-left: 20%;">
                            <?php } ?>
                        </div>
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <br>
                                    <?php if ($row['modalParrafo1'] == null || $row['modalParrafo1'] == 'undefined' || $row['modalParrafo1'] == '') {
                                    } else { ?>
                                        <p style="font-family: 'Josefin Sans Bold';text-align: justify;"><?php echo $row['modalParrafo1']; ?>
                                        </p>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn" style="background-color:green; color:white;" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Salir</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Ventana Editar Registros CRUD 2-->
<div class="modal fade" id="edit2_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header ">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <?php if ($row['modalTe2'] == null || $row['modalTe2'] == 'undefined' || $row['modalTe2'] == '') {
                            } else { ?>
                                <p class="text-center" style="color: #FF6600;font-size: 39px;font-family: 'Josefin Sans Bold'"><?php echo $row['modalTe2']; ?></p>
                            <?php } ?>
                            <?php if ($row['modalImg2'] == null || $row['modalImg2'] == 'undefined' || $row['modalImg2'] == '') {
                            } else { ?>
                                <img src="<?php echo "Admin/controladores/laUpi/Image/" . $row['modalImg2']; ?>" width="60%" style="margin-left: 20%;">
                            <?php } ?>
                        </div>
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <br>
                                    <?php if ($row['modalParrafo2'] == null || $row['modalParrafo2'] == 'undefined' || $row['modalParrafo2'] == '') {
                                    } else { ?>
                                        <p style="font-family: 'Josefin Sans Bold';text-align: justify;"><?php echo $row['modalParrafo2']; ?>
                                        </p>
                                    <?php } ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn" data-dismiss="modal" style="background-color:green; color:white;"><span class="glyphicon glyphicon-remove"></span> Salir</button>
                </form>
            </div>

        </div>
    </div>
</div>
<!--  -->
<!-- Ventana Editar Registros CRUD 3-->
<div class="modal fade" id="edit3_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <?php if ($row['modalTxt3'] == null || $row['modalTxt3'] == 'undefined' || $row['modalTxt3'] == '') {
                            } else { ?>
                                <p class="text-center" style="color: #FF6600;font-size: 39px;font-family: 'Josefin Sans Bold'"><?php echo $row['modalTxt3']; ?></p>
                            <?php } ?>
                            <?php if ($row['modalImg3'] == null || $row['modalImg3'] == 'undefined' || $row['modalImg3'] == '') {
                            } else { ?>
                                <img src="<?php echo "Admin/controladores/laUpi/Image/" . $row['modalImg3']; ?>" width="60%" style="margin-left: 20%;">
                            <?php } ?>
                        </div>
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <br>
                                    <?php if ($row['modalParrafo3'] == null || $row['modalParrafo3'] == 'undefined' || $row['modalParrafo3'] == '') {
                                    } else { ?>
                                        <p style="font-family: 'Josefin Sans Bold';text-align: justify;"><?php echo $row['modalParrafo3']; ?>
                                        </p>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn" data-dismiss="modal" style="background-color:green; color:white;"><span class="glyphicon glyphicon-remove"></span> Salir</button>
                </form>
            </div>

        </div>
    </div>
</div>
<!--  -->
<!-- Ventana Editar Registros CRUD 4-->
<div class="modal fade" id="edit4_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header ">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 text-center" style="align-items: center;">
                            <?php if ($row['modalTxt4'] == null || $row['modalTxt4'] == 'undefined' || $row['modalTxt4'] == '') {
                            } else { ?>
                                <p class="text-center" style="color: #FF6600;font-size: 39px;font-family: 'Josefin Sans Bold'"><?php echo $row['modalTxt4']; ?></p>
                            <?php } ?>
                            <?php if ($row['modalImg4'] == null || $row['modalImg4'] == 'undefined' || $row['modalImg4'] == '') {
                            } else { ?>
                                <img src="<?php echo "Admin/controladores/laUpi/Image/" . $row['modalImg4']; ?>" width="60%" style="margin-left: 20%;">
                            <?php } ?>
                        </div>
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <br>
                                    <?php if ($row > 0) { ?>
                                        <p style="font-family: 'Josefin Sans Bold';text-align: justify;"><?php echo $row['modalParrafo4']; ?>
                                        </p>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn" data-dismiss="modal" style="background-color:green; color:white;"><span class="glyphicon glyphicon-remove"></span> Salir</button>
                </form>
            </div>
        </div>
    </div>
</div>