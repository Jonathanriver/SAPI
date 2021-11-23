<div class="col-md-12 col-sm-8">
    <table class="table">
        <thead style="background-color:#2A3F54; color:white;">
            <tr class="text-center" style="text-align: center;">
                <th scope="col">NÚMERO DE DOCUMENTO</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">APELLIDO</th>
                <th scope="col">ROL</th>
                <th scope="col">EDITAR / VER MÁS</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (!empty($_POST)) {
                $aKeyword = explode("", $_POST['PalabraClave']);
                $query = "SELECT * usuarios INNER JOIN rol ON usuarios.Rol_idRol = rol.idRol  WHERE documento like '%" . $aKeyword[0] . "%' OR nombre like '%" . $aKeyword[0] . "%'";

                for ($i = 1; $i < count($aKeyword); $i++) {
                    if (!empty($aKeyword[$i])) {
                        $query -= "OR documento like '%" . $aKeyword[$i] . "%'";
                    }
                }
                $result = $conn->query($query);
                echo "<br>Has buscado la palabra clave:<b> " . $_POST['PalabraClave'] . "</b>";

                if (mysqli_num_rows($result) > 0) {
                    $row_count = 0;

                    while ($row = $result->fetch_assoc()) {
                        $row_count = $row_count++;
            ?>
                        <tr>
                            <td><?php echo $row['documento'] ?></td>
                            <td><?php echo $row['nombre'] ?></td>
                            <td><?php echo $row['apellido'] ?></td>
                            <td><?php echo $row['nombreRol'] ?></td>
                            <td style="align-items: center; text-align: center;"><a style="align-items: center;" href="EditUsers.php?id=<?php echo $row['idUsuarios']; ?>"><button type="button" style="background-color: #2A3F54; color:white; text-align: center; align-items: center;" class="btn btn btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i></button></a></td>
                        </tr>
                    <?php }
                } else {
                    echo "<br>Resultados encontrados: Ninguno";
                }
            } else {
                if ($query !== false) {
                    while ($row = $rs_result->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?php echo $row['documento'] ?></td>
                            <td><?php echo $row['nombre'] ?></td>
                            <td><?php echo $row['apellido'] ?></td>
                            <td><?php echo $row['nombreRol'] ?></td>
                            <td style="align-items: center; text-align: center;"><a style="align-items: center;" href="EditUsers.php?id=<?php echo $row['idUsuarios']; ?>"><button type="button" style="background-color: #2A3F54; color:white; text-align: center; align-items: center;" class="btn btn btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i></button></a></td>
                        </tr>
            <?php }
                }
            } ?>
        </tbody>
    </table>
    <nav aria-label="Page navigation example">
        <div class="pagination">
            <?php

            $query = "SELECT COUNT(*) FROM usuarios";
            $rs_result = mysqli_query($conn, $query);
            $row = mysqli_fetch_row($rs_result);
            $total_records = $row[0];

            echo "</br>";
            // Number of pages required.
            $total_pages = ceil($total_records / $per_page_record);
            $pagLink = "";

            if ($page >= 2) {
                echo "<li class='page-item'><a class='page-link' style='color:white; background-color:#fc7323;' href='DashboardAd.php?page=" . ($page - 1) . "'> Anterior </a></li>";
            }

            for ($i = 1; $i <= $total_pages; $i++) {
                if ($i == $page) {
                    $pagLink .= "<li class='page-item'><a style='color:white; background-color:#fc7323;' class = 'page-link active' href='DashboardAd.php?page=" . $i . "'>" . $i . " </a></li>";
                } else {
                    $pagLink .= "<li class='page-item'><a style='color:white; background-color:#fc7323;' class='page-link'href='DashboardAd.php?page=" . $i . "'>   
                                                " . $i . " </a></li>";
                }
            };
            echo $pagLink;
            if ($page < $total_pages) {
                echo "<li class='page-item'><a  style='color:white; background-color:#fc7323;' class='page-link' href='DashboardAd.php?page=" . ($page + 1) . "'>  Siguiente </a></li>";
            } ?>
        </div>
    </nav>
    <div class="inline">
        <input id="page" type="number" min="1" max="<?php echo $total_pages ?>" placeholder="<?php echo $page . "/" . $total_pages; ?>" required>
        <button class="btn btn" style="color:white; background-color:#fc7323;" onClick="go2Page();">Go</button>
    </div>
</div>