<?php include_once "modelo/database.php"; ?>
<?php include "vistas/Headers_admin.php" ?>
<?php include "controladores/la_Upi_Consulta.php" ?>
<?php
session_start();
if (!isset($_SESSION['SESS_MEMBER_ID'])) {
  header('Location:../Login_Admin.php');
  // echo "No puedes ingresar";
}
$id_user = $_SESSION['SESS_MEMBER_ID'];

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
                  <h3 class="text-center">ADMINISTRACIÓN DE CONTENIDO </h3>
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
        <!-- Contenido Principal -->
        <div class="row">
          <?php include "Vistas/laUpi.php" ?>
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
  </div>
  <?php include "production/js/admin/admin.php" ?>
</body>

</html>