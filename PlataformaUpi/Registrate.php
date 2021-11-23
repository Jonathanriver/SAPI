<html>
<!-- Headers -->
<?php
include_once './Admin/modelo/database.php';
include_once './Vista/HeadersRegistrate.php';
include_once './Vista/MenuNav.php';

$sql = "SELECT * FROM gestioncont WHERE id=5";
$resultado = $mysqli->query($sql);
$row = $resultado->fetch_array(MYSQLI_ASSOC);

?>

<body>

    <div class="container">
        <div class="row texto-titulo-registro" style="margin-left:14%;">
            <div class="col text-left">
                <img src="Recursos/Imagenes/QUIERES REGISTRARTE.png" alt="">
            </div>
        </div>
        <div class="row" style="margin-left:13%; width:75%;">
            <div class="col" style="width: 60%; ">
                <p><?php echo $row['textUno']; ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
            </div>
            <div class="col-sm-6" style="overflow: auto; height:600px;">
                <!-- Controladores/RegistrarUsuarios.php -->
                <form action="Controladores/RegistrarUsuarios.php" method="POST">
                    <div>
                        <div class="col">
                            <div class="card deliniar-perfil">
                                <div class="card-body">
                                    <div class="table">
                                        <div class="row">
                                            <div class="col">
                                                <span class="label-perfil">Nombre: </span>
                                                <input type="text" value="" class="form-control campo-perfil" name="nombre" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <span class="label-perfil">Apellido: </span>
                                                <input type="text" value="" class="form-control campo-perfil" name="apellido" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <span class="label-perfil">Tipo de documento: </span>
                                                <select class="form-select campo-perfil" name="tpDocumento" aria-label="Default select example">
                                                    <option value="Cédula de Ciudadanía">Cédula de ciudadanía</option>
                                                    <option value="Cédula de Extrangería">Cédula de extrangería</option>
                                                    <option value="Tarjeta de Identidad">Tarjeta de identidad</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <span class="label-perfil">Número de documento: </span>
                                                <input type="text" value="" class="form-control campo-perfil" name="numeroDoc" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <span class="label-perfil">Fecha de nacimiento: </span>
                                                <input type="date" value="" class="form-control campo-perfil" name="fechaNac" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <span class="label-perfil">Departamento expedición: </span>
                                                <input type="text" value="" class="form-control campo-perfil" name="deparExpedi" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <span class="label-perfil">Ciudad de expedición: </span>
                                                <input type="text" value="" class="form-control campo-perfil" name="ciudExpedi" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <span class="label-perfil">Correo: </span>
                                                <input type="text" value="" class="form-control campo-perfil" name="email" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <span class="label-perfil">Teléfono: </span>
                                                <input type="text" value="" class="form-control campo-perfil" name="telefono" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <span class="label-perfil">Número de celular:</span>
                                                <input type="text" value="" class="form-control campo-perfil" name="celular" required>
                                            </div>
                                        </div>
                                        <!-- Nuevo cont -->
                                        <div class="row">
                                            <div class="col">
                                                <span class="label-perfil">Usuario Sena: </span>
                                                <select class="form-select campo-perfil" name="UsuarioSena" aria-label="Default select example">
                                                    <option value="Sí"> Sí</option>
                                                    <option value="No"> No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <span class="label-perfil">Empresa donde trabaja:</span>
                                                <input type="text" value="" class="form-control campo-perfil" name="empresaTrabajo" placeholder="Solo responder si no es usuario sena">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <span class="label-perfil">Lugar de Trabajo:</span>
                                                <input type="text" value="" class="form-control campo-perfil" name="lugarTrabajo" placeholder="Solo responder si no es usuario sena">
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="row">
                                            <div class="col">
                                                <span class="label-perfil">Tipo de vinculación: </span>
                                                <input type="text" value="" class="form-control campo-perfil" name="tipoVinc" placeholder="Solo responder si es usuario sena">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <span class="label-perfil">Centro de formación: </span>
                                                <input type="text" value="" class="form-control campo-perfil" name="centroForm" placeholder="Solo responder si es usuario sena">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <span class="label-perfil">Grupo sanguíneo: </span>
                                                <input type="text" value="" class="form-control campo-perfil" name="grupoSang" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <span class="label-perfil">Estrato: </span>
                                                <input type="text" value="" class="form-control campo-perfil" name="estrato" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <span class="label-perfil">Etnias: </span>
                                                <input type="text" value="" class="form-control campo-perfil" name="etnias" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <span class="label-perfil">Eps: </span>
                                                <input type="text" value="" class="form-control campo-perfil" name="eps" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <span class="label-perfil">Contraseña: </span>
                                                <input type="password" value="" class="form-control campo-perfil" name="contra" required>
                                            </div>
                                        </div>
                                        <!--  -->
                                    </div>
                                </div>
                            </div>
                        </div>
                </form>
                <div class="row">
                    <div class="col-6 text-right">
                        <br>
                        <input type="submit" value="<?php echo $row['textDos']; ?>" class="btn btn-warning" style="background-color: #23820b; margin-right:-40%;border-color: transparent;color: white; border-radius:22px; width:140px;" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- footer -->

    <script type="text/javascript">
        function Comparara2() {
            $('#municipio').html('<option value="0">Seleccione</option>');
            var Depart;
            var campo1 = $('#Depart').val();

            $.ajax({
                url: "./Controladores/ConsultaListaMunicipios.php?id_departamento=" + campo1,
                contentType: "application/json",
                success: function(data) {
                    Depart = JSON.parse(data);
                    for (var i = 0; i < Depart.length; i++) {
                        $('#municipio').append('<option value="' + Depart[i]['idmunicipio'] + '">' + Depart[i][
                            'nombre'
                        ] + '</option>');
                    }
                }
            });
        }

        function Institu() {
            var int = $('#institucion').val();

            if (int === '39') {
                $('#sede').show();
            } else {
                $('#sede').hide();
            }
        }
    </script>
</body>
<?php
include_once './Vista/Footer.php';
?>

</html>