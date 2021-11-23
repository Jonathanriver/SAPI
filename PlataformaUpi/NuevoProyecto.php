<html>
<!-- Headers -->
<?php
session_start();
include_once './Vista/HeaderNuevoProyecto.php';
include_once './Modelo/Conexion.php';
$id_user = $_SESSION['SESS_MEMBER_ID'];
?>

<body>
    <div class="box">
        <div class="row content">
            <?php include './Vista/MenuLateral.php'; ?>
            <div class="col-8">
                <div class="row">
                    <div class="col">
                        <br><br>
                    </div>
                </div>
                <div class="row text-left">
                    <div class="col">
                        <h1 class="texto-titulo-perfil" style="font-size:50px; margin-bottom:-45px;">
                            Mis Proyectos</h1>
                    </div>
                </div>
                <br>
                <br>
                <?php
                //Consulta de datos de usuario
                if ($resultOfertas = mysqli_query($link, "SELECT * FROM usuarios WHERE idUsuarios=$id_user")) {
                    //print_r($resultOfertas);die;
                    while ($row = $resultOfertas->fetch_assoc()) {
                ?>
                        <div class="row">
                            <div class="col" style=" border: none;">
                                <div class="card deliniar-perfil" style="border: none;">
                                    <div class="card-body perfill">
                                        <form>
                                            <div class="table" style="  border: none;">
                                                <div class="row">
                                                    <div class="col-4 text-left">
                                                        <span class="label-perfil">Nombre del Proyecto:</span>
                                                    </div>
                                                    <!-- readonly -->
                                                    <div class="col-6">
                                                        <input type="text" class="form-control campo-perfil" name="nombre">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4 text-left">
                                                        <span class="label-perfil">Descripción:</span>
                                                    </div>
                                                    <div class="col-6">
                                                        <textarea class="form-control campo-perfill" name="documento"></textarea>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4 text-left">
                                                        <span class="label-perfil">Avatar del Proyecto:</span>
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="text" class="form-control campo-perfil" name="documento">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4 text-left">
                                                        <span class="label-perfil">Fecha de Inicio:</span>
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="text" class="form-control campo-perfil" name="documento">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-4 text-left">
                                                        <span class="label-perfil"> Nombre del Autor:</span>
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="text" class="form-control campo-perfil" name="documento">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4 text-left">
                                                        <span class="label-perfil">Teléfono del Autor:</span>
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="text" class="form-control campo-perfil" name="documento">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="row">
                                        <div class="col-9 text-right">
                                        </div>
                                        <div class="col-3 ">
                                            <input type="submit" value="Crear" class="btn btn-warning" style="border-radius:10px;text-align:center;width:120px;background-color: #fc7323; border-color: transparent;color: white;" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
<?php
                    }
                }
?>
    </div>
</body>
<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }
</script>

</html>