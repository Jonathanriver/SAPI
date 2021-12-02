<html>
<!-- Headers -->
<?php
include_once './Admin/modelo/database.php';
include_once './Vista/HeadersRegistrate.php';
include_once './Vista/MenuNav.php';
include_once './Controladores/Public_Content/Validacion.php';

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
            <div class="col-sm-3">
            </div>

            <div class="col-sm-6" style="overflow: auto; height:600px;">
                <!-- Controladores/RegistrarUsuarios.php -->
                <form action="Controladores/ValidaUser.php" method="POST">
                    <div>
                        <div class="col">
                            <p style="border-radius: 10px; background-color: #23820b; text-align: center; color:white; font-size: 20px;"> <strong> Antes de registrarse confirme que su usuario no haya sido creado</strong></p>
                            <div class="card deliniar-perfil">
                                <div class="card-body">
                                    <div class="table">
                                        <div class="row">
                                            <div class="col">
                                                <p>Ingrese los siguientes datos para confirmar que su usuario sea realmente nuevo</p>
                                                <span class="label-perfil">Número de documento: </span>
                                                <input type="text" value="" class="form-control campo-perfil" name="nombre" placeholder="Número de documento..." required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </form>
                <div class="row">
                    <div class="col-6 text-right">
                        <br>
                        <input type="submit" class="btn btn-warning" style="background-color: #23820b; margin-right:-40%;border-color: transparent;color: white; border-radius:22px; width:140px;" value="Confirmar" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php
    include_once './Vista/Footer.php';
    ?>
</body>
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

</html>