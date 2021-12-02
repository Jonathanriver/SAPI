<div class="modal fade" id="edit_img<?php echo $row_Tips['id']; ?>" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width: 50%; height: 50%;">
        <div class="modal-content">
            <div class="modal-header">
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