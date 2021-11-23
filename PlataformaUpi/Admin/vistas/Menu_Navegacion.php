<div class="col-md-12 col-sm-8">
    <table class="table">
        <thead style="background-color:#2A3F54; color:white;">
            <tr class="text-center" style="text-align: center;">
                <th scope="col">MENÚ</th>
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
                while ($row_Menu = $resultado->fetch_array(MYSQLI_ASSOC)) {
                ?>
                    <td><?php echo $row_Menu['menu'] ?></td>
                    <td>
                        <img src="<?php echo "controladores/laUpi/Image/" . $row_Menu['imagenFondo']; ?>" width="100px" alt="">
                    </td>
                    <td><?php echo $row_Menu['textUno'] ?></td>
                    <td><?php echo $row_Menu['textDos'] ?></td>
                    <td><?php echo $row_Menu['textTres'] ?></td>
                    <td><?php echo $row_Menu['textCuatro'] ?></td>

                    <td style="align-items: center; text-align: center;"><a href="Edit_Menu_Nav.php?id=<?php echo $row_Menu['id']; ?>"><button type="button" style="background-color: #2A3F54; color:white; text-align: center; align-items: center;" class="btn btn btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i></button></a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>