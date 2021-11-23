<div class="col-md-12 col-sm-8">
    <table class="table">
        <thead style="background-color:#2A3F54; color:white;">
            <tr class="text-center" style="text-align: center;">
                <th scope="col">TITULO</th>
                <th scope="col">IMAGEN FONDO</th>
                <th scope="col">PARRAFO</th>
                <th scope="col">BOTON 1</th>
                <th scope="col">BOTON 2 </th>
                <th scope="col">BOTON 3</th>
                <th scope="col">BOTON 4</th>
                <th scope="col">EDITAR / VER MÁS</th>
                <th scope="col">ELIMINAR</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                while ($row = $resultado->fetch_array(MYSQLI_ASSOC)) {
                ?>
                    <td><?php echo $row['titulo'] ?></td>
                    <td>
                        <img src="<?php echo "controladores/laUpi/Image/" . $row['imagenFondo']; ?>" width="100px" alt="">
                    </td>
                    <td><?php echo $row['parrafo'] ?></td>
                    <td><?php echo $row['boton1'] ?></td>
                    <td><?php echo $row['boton2'] ?></td>
                    <td><?php echo $row['boton3'] ?></td>
                    <td><?php echo $row['boton4'] ?></td>
                   
                    <td style="align-items: center; text-align: center;"><a href="EditarUpi.php?id=<?php echo $row['id']; ?>"><button type="button" style=" background-color: #2A3F54;color:white;" class="btn btn btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i></button></a>

                    <td style="align-items: center; text-align: center;"><a href="controladores/laUpi/eliminar.php?id=<?php echo $row['id']; ?>"><button type="button" style=" color:white;" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></button></a>
                    <td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
<div>
    <a href="registrar_Upi.php"><button type="button" style="background-color:#2A3F54; color:white;" class="btn btn btn-sm">Nuevo Contenido</button></a>
</div>