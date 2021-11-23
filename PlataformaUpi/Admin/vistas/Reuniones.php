<div class="col-md-12 col-sm-8">
    <table class="table">
        <thead style="background-color:#2A3F54; color:white;">
            <tr class="text-center" style="text-align: center;">
                <th scope="col">TITULO</th>
                <th scope="col">FECHA DE LA REUNIÓN</th>
                <th scope="col">HORA DE LA REUNIÓN</th>
                <th scope="col">LINK DE LA REUNIÓN</th>
                <th scope="col">EDITAR / VER MÁS</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                while ($row_Menu = $resultado->fetch_array(MYSQLI_ASSOC)) {
                ?>
                    <td><?php echo $row_Menu['reunion_Titulo'] ?></td>
                    <td><?php echo $row_Menu['reunion_Fecha'] ?></td>
                    <td><?php echo $row_Menu['reunion_Hora'] ?></td>
                    <td><?php echo $row_Menu['reunion_link'] ?></td>

                    <td style="align-items: center; text-align: center;"><a href="EditReunion.php?id=<?php echo $row_Menu['id']; ?>"><button type="button" style="background-color: #2A3F54; color:white; text-align: center; align-items: center;" class="btn btn btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i></button></a></td>

            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>