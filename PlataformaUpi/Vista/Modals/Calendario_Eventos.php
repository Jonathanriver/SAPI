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