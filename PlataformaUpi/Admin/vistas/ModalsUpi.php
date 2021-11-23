<div class="col-md-12 col-sm-8">
    <table class="table">
        <thead style="background-color:#2A3F54; color:white;">
            <tr class="text-center" style="text-align: center;">
                <th scope="col">TITULO</th>
                <th scope="col">IMAGEN FONDO</th>
                <th scope="col">TEXTO 1</th>
                <th scope="col">TEXTO 2 </th>
                <th scope="col">TEXTO 3</th>
                <th scope="col">TEXTO 4</th>
                <!-- <th scope="col">Texto 5</th> -->
                <th scope="col">EDITAR / VER MÁS</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                while ($row_Modal = $resultado->fetch_array(MYSQLI_ASSOC)) {
                ?>
                    <td><?php echo $row_Modal['modalTxt1'] ?></td>
                    <td>
                        <img src="<?php echo "controladores/laUpi/Image/" . $row_Modal['modalImg1']; ?>" width="100px" alt="">
                    </td>
                    <td><?php echo $row_Modal['modalParrafo1'] ?></td>
                    <td><?php echo $row_Modal['modalParra1'] ?></td>
                    <td><?php echo $row_Modal['modalText1'] ?></td>
                    <td><?php echo $row_Modal['modalTe1'] ?></td>
                    <td style="align-items: center; text-align: center;"><a  href="EditModal.php?id=<?php echo $row_Modal['id']; ?>"><button type="button" style="background-color: #2A3F54; color:white; text-align: center; align-items: center;" class="btn btn btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i></button></a>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>