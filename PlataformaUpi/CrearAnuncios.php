<html>
    <!-- Headers -->
    <?php
    include_once './Modelo/Conexion.php';
    include_once './Vista/Headers.php';
    ?>
    <body>
        <!-- Menu Nav -->
<?php
include_once './Vista/MenuNav.php';
?>
        <!-- Menu Iconos -->
        <form action="Controladores/Registrar.php" method="Post">
            <div class="container-fluid">
                <div class="container">
                    <br>
                    <div class="row">
                        <div class="col text-center">
                            <h1 style="color: #563d7c;"><i class="fas fa-id-card"></i> NUEVO ANUNCIO</h1>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="container-fluid">
                <div class="container">

                </div>
            </div>

        </form>
        <br>
        <br>
<?php
include_once './Vista/Footer.php';
?>

    </body>

</html>
<script>
    function Comparara() {
        var campo1 = $('#email').val();
        var campo2 = $('#corn-email').val();

        if (campo1 != campo2) {
            $('#alertas').fadeIn(200);
        } else {
            $('#alertas').fadeOut(200);
        }
    }

    function Comparara2() {
        var campo1 = $('#contra').val();
        var campo2 = $('#contra2').val();
        console.log(campo1 + " - " + campo2);
        if (campo1 != campo2) {
            $('#alertas2').fadeIn(200);
        } else {
            $('#alertas2').fadeOut(200);
        }
    }
</script>

