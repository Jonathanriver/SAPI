<html>
<!-- Headers -->
<?php
session_start();
include_once './Vista/Headers.php';
include_once './Modelo/Conexion.php';

if (!isset($_SESSION['SESS_MEMBER_ID']) && !isset($_SESSION['SESS_MEMBER_ID_TECNO'])) {
    header('Location: Login.php');
    // echo "No puedes ingresar";
}

?>
<?php
$conn = mysqli_connect('localhost', 'root', '');
if (!$conn) {
    die("Connection failed" . mysqli_connect_error());
} else {
    mysqli_select_db($conn, 'supi');
}
// Import the file where we defined the connection to Database.     
// require_once "connection.php";

$per_page_record = 4;  // Number of entries to show in a page.   
// Look for a GET variable page if not found default is 1.        
if (isset($_GET["page"])) {
    $page  = $_GET["page"];
} else {
    $page = 1;
}

$start_from = ($page - 1) * $per_page_record;
$query = "SELECT * FROM registro_full INNER JOIN `registro` ON `registro_full`.`registro_idRegistro`=`registro`.`idRegistro`
INNER JOIN usuarios ON registro_full.`usuarios_idUsuarios`=usuarios.`idUsuarios`
INNER JOIN tipo_registro ON registro_full.`tipo_registro_idTipo_Registro`= tipo_registro.`idTipo_Registro` LIMIT $start_from, $per_page_record ";
$rs_result = mysqli_query($conn, $query);
?>

<body>
    <div class="box">
        <div class="row content">
            <?php include './Vista/MenuLateral.php'; ?>
            <div class="col-8 text-center">
                <div class="row">
                    <div class="col">
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-left" style="margin:0px 150px 0px 15px;">
                        <h2 style="font-size:55px;" class="texto-titulo-perfil">Mis Procesos</h2>
                    </div>
                </div>
                <br>
                <?php
                if (isset($_SESSION['status']) && $_SESSION != '') {
                ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Hey!</strong><?php echo $_SESSION['status']; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php
                    unset($_SESSION['status']);
                }
                ?>
                <div class="row">
                    <div class="col-sm">
                        <div class="card" style="border: none;">
                            <div class="card-body">
                                <!-- Barra de Busqueda -->
                                <nav class="navbar navbar-light bg-light">
                                    <div class="container-fluid">
                                        <a class="navbar-brand"></a>
                                        <form class="d-flex" name="form1" method="post">
                                            <input class="form-control me-2" name="PalabraClave" type="search" placeholder="Search..." aria-label="Search">
                                            <input name="buscar" type="hidden" class="form-control mb-2" id="inlineFormInput" value="v">
                                            <button class="btn btn" style="color:white; background-color:#fc7323;" type="submit">Buscar</button>
                                        </form>
                                        <!-- BUSQUEDA -->
                                    </div>
                                </nav>
                                <div class="row">
                                    <div class="col-md-12 col-sm-8">
                                        <table class="table table-bordered" style="border-radius: 26px 0px 0px 26px !important;border: solid #fc7323 0.5px;">
                                            <thead style="background-color: #fc7323;color: white;">
                                                <tr class="text-center" style="text-align: center;">
                                                    <th style="border: solid #fc7323 0.5px !important;" class="text-center" scope="col">Número de articulación</th>
                                                    <th style="border: solid #fc7323 0.5px !important;" class="text-center" scope="col">Tipo de registro</th>
                                                    <th style="border: solid #fc7323 0.5px !important;" class="text-center" scope="col">Número de registro</th>
                                                    <th style="border: solid #fc7323 0.5px !important;" class="text-center" scope="col">EDITAR / VER MÁS</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php

                                                if (!empty($_POST)) {
                                                    $aKeyword = explode(" ", $_POST['PalabraClave']);
                                                    $query = "SELECT * FROM registro_full INNER JOIN `registro` ON `registro_full`.`registro_idRegistro`=`registro`.`idRegistro`
                                                    INNER JOIN usuarios ON registro_full.`usuarios_idUsuarios`=usuarios.`idUsuarios`
                                                    INNER JOIN tipo_registro ON registro_full.`tipo_registro_idTipo_Registro`= tipo_registro.`idTipo_Registro` WHERE Codigo_Proyecto like '%" . $aKeyword[0] . "%' OR idRegistro like '%" . $aKeyword[0] . "%'";

                                                    for ($i = 1; $i < count($aKeyword); $i++) {
                                                        if (!empty($aKeyword[$i])) {
                                                            $query .= " OR Codigo_Proyecto like '%" . $aKeyword[$i] . "%'";
                                                        }
                                                    }

                                                    $result = $conn->query($query);

                                                    if (mysqli_num_rows($result) > 0) {
                                                        $row_count = 0;
                                                        while ($row = $result->fetch_assoc()) {
                                                            $row_count = $row_count++;
                                                ?>
                                                            <td style="border: solid #fc7323 0.5px;"> <?php echo $row['Codigo_Proyecto']; ?></td>
                                                            <td style="border: solid #fc7323 0.5px;"> <?php echo $row['nombre_categoria']; ?></td>
                                                            <td style="border: solid #fc7323 0.5px;"> <?php echo $row['idRegistro']; ?></td>
                                                            <td class="text-center" style="border: solid #fc7323 0.5px !important;"><a href="#edit4_<?php echo $row['idRegistro']; ?>" data-toggle="modal" class="btn" style="background-color: #fc7323;border-radius: 30px;color: white;"><i class="fas fa-angle-double-right"></i></a></td>
                                                            </tr>
                                                            <!-- Modal -->
                                                            <div class="modal fade" id="edit4_<?php echo $row['idRegistro']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header ">
                                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                        </div>
                                                                        <div class="modal-body text-left">
                                                                            <form>
                                                                                <fieldset disabled>
                                                                                    <div class="row">
                                                                                        <div class="col-sm-6">
                                                                                            <label for="exampleInputEmail1" class="form-label">Código Proyecto</label>
                                                                                            <input type="email" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $row['Codigo_Proyecto'] ?>">
                                                                                        </div>
                                                                                        <div class="col-sm-6">
                                                                                            <label for="exampleInputPassword1" class="form-label">Tipo de Categoría</label>
                                                                                            <input type="text" class="form-control" value="<?php echo $row['nombre_categoria']; ?>">
                                                                                        </div>
                                                                                    </div>
                                                                                    <br>
                                                                                    <div class="row">
                                                                                        <div class="col-sm-6">
                                                                                            <label for="exampleInputEmail1" class="form-label">Código de registro</label>
                                                                                            <input type="email" class="form-control" value="<?php echo $row['idRegistro']; ?>">
                                                                                        </div>
                                                                                        <div class="col-sm-6">
                                                                                            <label for="exampleInputEmail1" class="form-label">Tipo de Registro</label>
                                                                                            <input type="email" class="form-control" value="<?php echo $row['tipoSubRegistro_Sd']; ?>">
                                                                                        </div>
                                                                                    </div>
                                                                                    <br>
                                                                                </fieldset>
                                                                            </form>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn" data-dismiss="modal" style="background-color:#fc7323; color:white;"><span class="glyphicon glyphicon-remove"></span> Salir</button>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php
                                                        }
                                                    } else {

                                                        echo " <div class='alert alert-danger  alert-dismissible fade show' role='alert'>
                                                            <strong>Resultados encontrados: Ninguno
                                                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                                          </div>";
                                                    }
                                                } else {
                                                    if ($query !== false) {
                                                        while ($row = $rs_result->fetch_assoc()) {
                                                        ?>
                                                            <td style="border: solid #fc7323 0.5px;"> <?php echo $row['Codigo_Proyecto']; ?></td>
                                                            <td style="border: solid #fc7323 0.5px;"> <?php echo $row['nombre_categoria']; ?></td>
                                                            <td style="border: solid #fc7323 0.5px;"> <?php echo $row['idRegistro']; ?></td>
                                                            <td class="text-center" style="border: solid #fc7323 0.5px !important;"><a href="#edit4_<?php echo $row['idRegistro']; ?>" data-toggle="modal" class="btn" style="background-color: #fc7323;border-radius: 30px;color: white;"><i class="fas fa-angle-double-right"></i></a></td>
                                                            </tr>
                                                            <!-- Modal -->
                                                            <div class="modal fade" id="edit4_<?php echo $row['idRegistro']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header ">
                                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                        </div>
                                                                        <div class="modal-body text-left">
                                                                            <form>
                                                                                <fieldset disabled>
                                                                                    <div class="row">
                                                                                        <div class="col-sm-6">
                                                                                            <label for="exampleInputEmail1" class="form-label">Código Proyecto</label>
                                                                                            <input type="email" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $row['Codigo_Proyecto'] ?>">
                                                                                        </div>
                                                                                        <div class="col-sm-6">
                                                                                            <label for="exampleInputPassword1" class="form-label">Tipo de Categoría</label>
                                                                                            <input type="text" class="form-control" value="<?php echo $row['nombre_categoria']; ?>">
                                                                                        </div>
                                                                                    </div>
                                                                                    <br>
                                                                                    <div class="row">
                                                                                        <div class="col-sm-6">
                                                                                            <label for="exampleInputEmail1" class="form-label">Código de registro</label>
                                                                                            <input type="email" class="form-control" value="<?php echo $row['idRegistro']; ?>">
                                                                                        </div>
                                                                                        <div class="col-sm-6">
                                                                                            <label for="exampleInputEmail1" class="form-label">Tipo de Registro</label>
                                                                                            <input type="email" class="form-control" value="<?php echo $row['tipoSubRegistro_Sd']; ?>">
                                                                                        </div>
                                                                                    </div>
                                                                                    <br>
                                                                                </fieldset>
                                                                            </form>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn" data-dismiss="modal" style="background-color:#fc7323; color:white;"><span class="glyphicon glyphicon-remove"></span> Salir</button>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                <?php
                                                        }
                                                    }
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                        <!-- Paginación -->
                                        <nav aria-label="Page navigation example">
                                            <div class="pagination">
                                                <?php

                                                $query = "SELECT COUNT(*) FROM registro LIMIT 25";
                                                $rs_result = mysqli_query($conn, $query);
                                                $row = mysqli_fetch_row($rs_result);
                                                $total_records = $row[0];

                                                echo "</br>";
                                                // Number of pages required.
                                                $total_pages = ceil($total_records / $per_page_record);
                                                $pagLink = "";

                                                if ($page >= 2) {
                                                    echo "<li class='page-item'><a class='page-link' style='color:white; background-color:#fc7323;' href='MisProcesos.php?page=" . ($page - 1) . "'> Anterior </a></li>";
                                                }

                                                for ($i = 1; $i <= $total_pages; $i++) {
                                                    if ($i == $page) {
                                                        $pagLink .= "<li class='page-item'><a style='color:white; background-color:#fc7323;' class = 'page-link active' href='MisProcesos.php?page=" . $i . "'>" . $i . " </a></li>";
                                                    } else {
                                                        $pagLink .= "<li class='page-item'><a style='color:white; background-color:#fc7323;' class='page-link'href='MisProcesos.php?page=" . $i . "'>   
                                                " . $i . " </a></li>";
                                                    }
                                                };
                                                echo $pagLink;
                                                if ($page < $total_pages) {
                                                    echo "<li class='page-item'><a  style='color:white; background-color:#fc7323;' class='page-link' href='MisProcesos.php?page=" . ($page + 1) . "'>  Siguiente </a></li>";
                                                } ?>
                                            </div>
                                        </nav>
                                        <div class="inline">
                                            <input id="page" type="number" min="1" max="<?php echo $total_pages ?>" placeholder="<?php echo $page . "/" . $total_pages; ?>" required>
                                            <button class="btn btn" style="color:white; background-color:#fc7323;" onClick="go2Page();">Go</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    function go2Page() {
        var page = document.getElementById("page").value;
        page = ((page > <?php echo $total_pages; ?>) ? <?php echo $total_pages; ?> : ((page < 1) ? 1 : page));
        window.location.href = 'MisProcesos.php?page=' + page;
    }
</script>

</html>