<?php include_once "modelo/database.php"; ?>
<?php include "vistas/Headers_admin.php" ?>
<?php include "controladores/consulta_usuario.php" ?>
<?php
session_start();
if (!isset($_SESSION['SESS_MEMBER_ID'])) {
  header('Location:../Login_Admin.php');
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

$query = "SELECT * FROM usuarios INNER JOIN rol ON usuarios.Rol_idRol = rol.idRol WHERE usuarios.idUsuarios >=1 LIMIT $start_from, $per_page_record ";
$rs_result = mysqli_query($conn, $query);
?>

<body class="nav-md">

  <div class="container body">
    <div class="main_container">
      <!-- barra principal-->
      <?php include "Side_Menu/side_Menu.php"; ?>
      <!-- /barrra principal -->
      <!-- top navigation -->
      <?php include "Side_Menu/Top_Navigation.php" ?>
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">
        <div class="row">
          <div class="col-md-12 col-sm-12 ">
            <div class="dashboard_graph">
              <div class="row x_title">
                <div class="col-md-12 col-sm">
                  <h3 class="text-center">ADMINISTRACIÓN DE USUARIOS </h3>
                </div>

              </div>
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
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
        <br />
        <!-- Barra de Busqueda -->
        <nav class="navbar navbar-light bg-light">
          <div class="container-fluid">
            <a class="navbar-brand"></a>
            <form class="d-flex" name="form1" method="post">
              <input class="form-control me-2" name="PalabraClave" type="search" placeholder="Search..." aria-label="Search">
              <input name="buscar" type="hidden" class="form-control mb-2" id="inlineFormInput" value="v">
              <button class="btn btn-outline" style="color:white; background-color:#2A3F54;" type="submit">Buscar</button>
            </form>
            <!-- BUSQUEDA -->
          </div>
        </nav>
        <!-- Contenido Principal -->
        <div class="row">
          <div class="col-md-12 col-sm-8">
            <br>
            <table class="table">
              <thead style="background-color:#2A3F54; color:white;">
                <tr class="text-center" style="text-align: center;">
                  <th scope="col" class="text-left">NOMBRE</th>
                  <th scope="col" class="text-left">APELLIDO</th>
                  <th scope="col" class="text-left">NÚMERO DE DOCUMENTO</th>
                  <th scope="col" class="text-left">ROL</th>
                  <th scope="col" class="text-left">EDITAR / VER MÁS</th>
                </tr>
              </thead>
              <tbody>
                <?php

                if (!empty($_POST)) {
                  $aKeyword = explode(" ", $_POST['PalabraClave']);
                  $query = "SELECT * FROM usuarios INNER JOIN rol ON usuarios.Rol_idRol = rol.idRol WHERE documento like '%" . $aKeyword[0] . "%' OR nombre like '%" . $aKeyword[0] . "%'AND usuarios.idUsuarios >=1" ;

                  for ($i = 1; $i < count($aKeyword); $i++) {
                    if (!empty($aKeyword[$i])) {
                      $query .= " OR documento like '%" . $aKeyword[$i] . "%'";
                    }
                  }

                  $result = $conn->query($query);
                  // echo "<br>Has buscado la palabra clave:<b> " . $_POST['PalabraClave'] . "</b>";
                  //   echo " <div class='alert alert-primary alert-dismissible fade show' role='alert'>
                  //   <strong>Has buscado la palabra clave: " . $_POST['PalabraClave'] . "
                  //   <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                  //  </div>";

                  if (mysqli_num_rows($result) > 0) {
                    $row_count = 0;
                    while ($row = $result->fetch_assoc()) {
                      $row_count = $row_count++;
                ?>
                      <td> <?php echo $row['nombre']; ?></td>
                      <td> <?php echo $row['apellido']; ?></td>
                      <td> <?php echo $row['documento']; ?></td>
                      <td> <?php echo $row['nombreRol']; ?></td>
                      <td style="align-items: center; text-align: center;"><a style="align-items: center;" href="EditUsers.php?id=<?php echo $row['idUsuarios']; ?>"><button type="button" style="background-color: #2A3F54; color:white; text-align: center; align-items: center;" class="btn btn btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i></button></a>
                      </td>

                      </td>
                      </tr>
                    <?php
                    }
                  } else {

                    echo " <div class='alert alert-danger  alert-dismissible fade show' role='alert'>
                                <strong>Resultados encontrados: Ninguno
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                          </div>";
                    // echo "<br>Resultados encontrados: Ninguno";
                  }
                } else {
                  if ($query !== false) {
                    while ($row = $rs_result->fetch_assoc()) {
                    ?>
                      <td> <?php echo $row['nombre']; ?></td>
                      <td> <?php echo $row['apellido']; ?></td>
                      <td> <?php echo $row['documento']; ?></td>
                      <td> <?php echo $row['nombreRol']; ?></td>
                      <td style="align-items: center; text-align: center;"><a style="align-items: center;" href="EditUsers.php?id=<?php echo $row['idUsuarios']; ?>"><button type="button" style="background-color: #2A3F54; color:white; text-align: center; align-items: center;" class="btn btn btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i></button></a></td>

                      </td>
                      </tr>
                <?php
                    }
                  }
                }
                ?>
              </tbody>
            </table>
            <nav aria-label="Page navigation example">
              <div class="pagination">
                <?php

                $query = "SELECT COUNT(*) FROM usuarios LIMIT 25";
                $rs_result = mysqli_query($conn, $query);
                $row = mysqli_fetch_row($rs_result);
                $total_records = $row[0];

                echo "</br>";
                // Number of pages required.
                $total_pages = ceil($total_records / $per_page_record);
                $pagLink = "";

                if ($page >= 2) {
                  echo "<li class='page-item'><a class='page-link' style='color:white; background-color:#2A3F54;' href='AdminUsers.php?page=" . ($page - 1) . "'> Anterior </a></li>";
                }

                for ($i = 1; $i <= $total_pages; $i++) {
                  if ($i == $page) {
                    $pagLink .= "<li class='page-item'><a style='color:white; background-color:#2A3F54;' class = 'page-link active' href='AdminUsers.php?page=" . $i . "'>" . $i . " </a></li>";
                  } else {
                    $pagLink .= "<li class='page-item'><a style='color:white; background-color:#2A3F54;' class='page-link'href='AdminUsers.php?page=" . $i . "'>   
                                                " . $i . " </a></li>";
                  }
                };
                echo $pagLink;
                if ($page < $total_pages) {
                  echo "<li class='page-item'><a  style='color:white; background-color:#2A3F54;' class='page-link' href='AdminUsers.php?page=" . ($page + 1) . "'>  Siguiente </a></li>";
                } ?>
              </div>
            </nav>
            <div class="inline">
              <input id="page" type="number" min="1" max="<?php echo $total_pages ?>" placeholder="<?php echo $page . "/" . $total_pages; ?>" required>
              <button class="btn btn" style="color:white; background-color:#2A3F54;" onClick="go2Page();">Go</button>
            </div>
          </div>
          <!-- <?php include "Vistas/Usuarios.php" ?> -->
        </div>
      </div>
      <!-- Fin Contenido Principal -->
    </div>
    <!-- /page content -->

    <!-- footer content -->
    <footer>
      <div class="pull-right">
        © 2021 Copyright:<a href="#">Sennova</a>
      </div>
      <div class="clearfix"></div>
    </footer>
    <!-- /footer content -->
  </div>
</body>

<script>
  function go2Page() {
    var page = document.getElementById("page").value;
    page = ((page > <?php echo $total_pages; ?>) ? <?php echo $total_pages; ?> : ((page < 1) ? 1 : page));
    window.location.href = 'AdminUsers.php?page=' + page;
  }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>

<?php include "production/js/admin/admin.php" ?>

</html>