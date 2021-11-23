<html>
<!-- Headers -->
<?php
session_start();
include_once './Vista/Headers.php';
include_once './Modelo/Conexion.php';

if (!isset($_SESSION['SESS_MEMBER_ID']) && !isset($_SESSION['SESS_MEMBER_ID_TECNO'])) {
    header('Location:Login.php');
    // echo "No puedes ingresar";
}
// echo "bienvenido";
$id_user = $_SESSION['SESS_MEMBER_ID'];

?>

<body>
    <div class="box">
        <div class="row content">
            <?php include './Vista/MenuLateral.php'; ?>
            <div class="col-8 text-center">
                <div class="row">
                    <div class="col">
                        <br><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-left">
                        <h1 class="texto-titulo-perfil" style="margin-left: 20%; margin-bottom:-45px;">Mi Perfil</h1>
                    </div>
                </div>
                <br>
                <br>
                <?php
                //Consulta de datos de usuario
                if ($resultOfertas = mysqli_query($link, "SELECT * FROM usuarios WHERE idUsuarios=$id_user")) {
                    //print_r($resultOfertas);die;
                    while ($row = $resultOfertas->fetch_assoc()) {
                       // print_r($row);
                ?>

                        <div class="row">
                            <div class="col" style="  border: none;">
                                <div class="card deliniar-perfil" style="  border: none;">
                                    <div class="card-body perfill" style="  border: none;">
                                        <form>
                                            <div class="table">
                                                <div class="row">
                                                    <div class="col-4 text-right">
                                                        <span class="label-perfil">Nombre completo:</span>
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="text" value="<?php echo $row['nombre']; ?>" class="form-control campo-perfil" readonly name="nombre">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4 text-right">
                                                        <span class="label-perfil">Tipo de Documento:</span>
                                                    </div>
                                                    <div class="col-6">
                                                        <?php
                                                        if ($row['tipo_documento'] == 1) {
                                                            $tipo = "Tarjeta de Identidad";
                                                        } else if ($row['tipo_documento'] == 2) {
                                                            $tipo = "Cedula Ciudadania";
                                                        } else if ($row['tipo_documento'] == 3) {
                                                            $tipo = "Cedula Extranjeria";
                                                        } else if ($row['tipo_documento'] == 2) {
                                                            $tipo = "Pasaporte";
                                                        }
                                                        ?>
                                                        <input type="text" value="<?php echo $tipo; ?>" class="form-control campo-perfil" readonly name="tipo">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4 text-right">
                                                        <span class="label-perfil">Documento:</span>
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="text" value="<?php echo $row['documento']; ?>" class="form-control campo-perfil" readonly name="documento">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4 text-right">
                                                        <span class="label-perfil">Teléfono:</span>
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="text" value="<?php echo $row['telefono']; ?>" class="form-control campo-perfil" readonly name="telefono">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4 text-right">
                                                        <span class="label-perfil">Celular:</span>
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="text" value="<?php echo $row['celular']; ?>" class="form-control campo-perfil" readonly name="celular">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4 text-right">
                                                        <span class="label-perfil">E-mail:</span>
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="text" value="<?php echo $row['email']; ?>" class="form-control campo-perfil" readonly name="email">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4 text-right">
                                                        <span class="label-perfil">Departamento:</span>
                                                    </div>
                                                    <div class="col-6">
                                                        <?php
                                                        if ($row['departamento'] == 1) {
                                                            $depart = "Cundinamarca";
                                                        }else if($row['departamento']==0){
                                                            $depart='N/A';
                                                        }
                                                        ?>
                                                        <input type="text" value="<?php echo $depart; ?>" class="form-control campo-perfil" readonly name="depart">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4 text-right">
                                                        <span class="label-perfil">Ciudad:</span>
                                                    </div>
                                                    <div class="col-6">
                                                        <?php
                                                        if ($row['ciudad_recidencia'] == 1) {
                                                            $ciudad = "Bogotá";
                                                        }if ($row['ciudad_recidencia'] == 0) {
                                                            $ciudad = "N/A";
                                                        }
                                                        ?>
                                                        <input type="text" value="<?php echo $ciudad; ?>" class="form-control campo-perfil" readonly name="ciudad">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4 text-right">
                                                        <span class="label-perfil">Fecha de Nacimiento:</span>
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="text" value="<?php echo $row['fecha_nacimiento']; ?>" class="form-control campo-perfil" readonly name="fecha_ini">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4 text-right">
                                                        <span class="label-perfil">Nivel Academico:</span>
                                                    </div>
                                                    <div class="col-6">
                                                        <?php
                                                        if ($row['nivel_academico'] == 1) {
                                                            $academic = "Tecnologico";
                                                        }else if ($row['nivel_academico'] == 0) {
                                                            $academic = "N/A";
                                                        }
                                                        ?>
                                                        <input type="text" value="<?php echo $academic; ?>" class="form-control campo-perfil" readonly name="acadec">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4 text-right">
                                                        <span class="label-perfil">Institución Perteneciente:</span>
                                                    </div>
                                                    <div class="col-6">
                                                        <?php
                                                        if ($row['institucion_perteneciente'] == 1) {
                                                            $institu = "SENA";
                                                        }else if ($row['institucion_perteneciente'] == 0) {
                                                            $institu = "N/A";
                                                        }
                                                        ?>
                                                        <input type="text" value="<?php echo $institu; ?>" class="form-control campo-perfil" readonly name="intitu">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4 text-right">
                                                        <span class="label-perfil">Sede:</span>
                                                    </div>
                                                    <div class="col-6">
                                                        <?php
                                                        if ($row['sede'] == 2) {
                                                            $sede = "CIDE";
                                                        }else if ($row['sede'] == 0) {
                                                            $sede = "N/A";
                                                        }
                                                        ?>
                                                        <input type="text" value="<?php echo $sede; ?>" class="form-control campo-perfil" readonly name="sede">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-header" style="  border: none;">
                                        <h1 class="texto-titulo-perfil" style="margin-left:-20%;font-size: 50px;">Credenciales Acceso</h1>
                                    </div>
                                    <div class="card-body" style="  border: none;">
                                        <form>
                                            <div class="row">
                                                <div class="col-4 text-right">
                                                    <span class="label-perfil">Usuario:</span>
                                                </div>
                                                <div class="col-6">
                                                    <input type="text" value="<?php echo $row['documento']; ?>" class="form-control campo-perfil" name="user">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4 text-right">
                                                    <span class="label-perfil">Contraseña:</span>
                                                </div>
                                                <div class="col-6 text-left">
                                                    <input type="submit" value="Cambiar Contraseña" class="btn btn-warning" style="background-color: #fc7323; border-color: transparent;color: white;" />
                                                    <!--<input type="text" value="<?php echo $row['clave']; ?>" class="form-control campo-perfil"  name="documento">-->
                                                </div>
                                            </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
            </div><?php
                        // print_r($row['nombre']);
                    }
                }
                    ?>
    <br>
        </div>

    </div>
    <!--<div class="row footer">
                <p><b>footer</b> (fixed height)</p>
            </div>-->
    </div>
</body>

</html>