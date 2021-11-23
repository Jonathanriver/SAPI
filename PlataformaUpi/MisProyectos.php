<html>
<!-- Headers -->
<?php
session_start();
include_once './Vista/HeadersMisProyectos.php';
include_once './Modelo/Conexion.php';
if (!isset($_SESSION['SESS_MEMBER_ID']) && !isset($_SESSION['SESS_MEMBER_ID_TECNO'])) {
    header('Location: Login.php');
    // echo "No puedes ingresar";
}
$id_user = $_SESSION['SESS_MEMBER_ID'];
$id_user_plataforma = $_SESSION['SESS_MEMBER_ID_TECNO'];
$fuente = $_SESSION['SESS_FUENTE'];
?>

<body>
    <input type="hidden" value="<?php echo $fuente; ?>" id="Platform">
    <input type="hidden" value="<?php echo $id_user_plataforma; ?>" id="UserPlatform">
    <div class="box">
        <div class="row content">
            <?php include './Vista/MenuLateral.php'; ?>
            <div class="col-8 text-center">
                <div class="row">
                    <div class="col">
                        <br><br>
                    </div>
                </div>
                <!-- style="margin-left: 10%;margin-bottom:-45px;" -->
                <div class="row">
                    <div class="col text-left" style="margin:0px 150px 0px 15px;">
                        <h2 style="font-size:45px;" class="texto-titulo-perfil">Mis Proyectos</h2>
                    </div>
                </div>
                <br>
                <br>

                <br>
                <!-- border: solid #fc7323 0.5px !important; -->
                <!-- overflow: auto; height: auto; -->
                <div class="container-fluid" style="margin:0px 150px 0px 15px;height: 500px;overflow: auto;width: 90%;">
                    <table class="table StyleTabla">
                        <thead style="background-color: #fc7323;color: white;">
                            <tr>
                                <th style="border: solid #fc7323 0.5px !important;" class="text-center">
                                    Número de articulación
                                </th>
                                <th style="border: solid #fc7323 0.5px !important;" class="text-center">
                                    Nombre articulación
                                </th>
                                <th style="border: solid #fc7323 0.5px !important;" class="text-center">
                                    Nombre proyecto
                                </th>
                                <th style="border: solid #fc7323 0.5px !important;" class="text-center">
                                    Entidad
                                </th>
                                <th style="border: solid #fc7323 0.5px !important;" class="text-center">
                                    Objetivo
                                </th>
                                <th style="border: solid #fc7323 0.5px !important;" class="text-center">
                                    Nombre contacto
                                </th>
                                <th style="border: solid #fc7323 0.5px !important;" class="text-center">
                                    Fecha Incio
                                </th>
                                <th style="border: solid #fc7323 0.5px !important;" class="text-center">
                                    Fecha Cierre
                                </th>
                                <th style="border: solid #fc7323 0.5px !important;" class="text-center">
                                    Agregar
                                </th>
                            </tr>
                        </thead>
                        <tbody id="cuerpoLista" style="font-family: 'Josefin Sans Light'">

                        </tbody>
                    </table>

                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-sm text-left">
                        <p style="font-family: 'Josefin Sans Light'; font-size: 17px;">Ten presente que la opción que escojas sera usada para gestionar un registro de protección en propiedad intelectual</p>
                        <table>
                            <tr>
                                <td style="font-family: 'Josefin Sans Light';font-weight: bold;">Numero de Articulación a procesar:</td>
                                <td> <span id='Numero'></span></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-sm text-left">
                        <a class="btn" id="Boton-Registro" style="display:none;background-color: #fc7323;color: white;">Asociar un registro de propiedad intelectual</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<script type="text/javascript">
    var CodProd;

    $(document).ready(function() {

        var UserPlatform = $('#UserPlatform').val();
        Listar(UserPlatform);
    });

    function Listar(Valor) {
        var a = $('#Platform').val();
        switch (a) {
            case "Tecnoparque":

                $.ajax({
                    url: "http://localhost/ApiSupiKey/index.php/Proyectos/FuenteProyecto/" + Valor
                }).then(function(data) {
                    if (data != null || data != '' || data != 'undefined') {
                        if (data['response']) {

                            ConsultarProyectoGeneral(data['response'].nodo_id);
                        } else {
                            console.log(data);
                        }
                    }
                });
                console.log(Valor);
                break;
            case "Sennova":

                $('#cuerpoLista').html('');
                console.log('Sennova');
                break;
            case "UPI":
                $('#cuerpoLista').html('');
                console.log('Upi');
                break;
        }

    }
    function ConsultarProyectoGeneral(id) {

        $.ajax({
            url: "http://localhost/ApiSupiKey/index.php/Proyectos/ProyectosGeneralActividades/" + id
        }).then(function(data) {
            if (data != null || data != '' || data != 'undefined') {
                if (data['response']) {
                    console.log(data['response']);
                    for (var i = 0; i < data['response'].length; i++) {
                        var valorCap = data['response'][i][0];
                        var html = '<tr>' +
                            '<td style="border: solid #fc7323 0.5px !important;" class="funeteTabla"><a href="#" id="CodProd' + i + '">' + data['response'][i][1] + '</a></td>' +
                            '<td style="border: solid #fc7323 0.5px !important;">' + data['response'][i][2] + '</td>' +
                            '<td style="border: solid #fc7323 0.5px !important;">' + data['response'][i][3] + '</td>' +
                            '<td style="border: solid #fc7323 0.5px !important;">' + data['response'][i][4] + '</td>' +
                            '<td style="border: solid #fc7323 0.5px !important;">' + data['response'][i][5] + '</td>' +
                            '<td style="border: solid #fc7323 0.5px !important;">' + data['response'][i][6] + '</td>' +
                            '<td style="border: solid #fc7323 0.5px !important;">' + data['response'][i][7] + '</td>' +
                            '<td style="border: solid #fc7323 0.5px !important;">' + data['response'][i][8] + '</td>' +
                            '<td class="text-center" style="border: solid #fc7323 0.5px !important;"><input type="radio" name="option" onclick="AgergarRegistro(' + valorCap + ')"></td></tr>';
                        $('#cuerpoLista').append(html);
                    }

                } else {
                    console.log(data);
                }
            }
        });
    }
    function AgergarRegistro(valor) {

        $.ajax({
            url: "http://localhost/ApiSupiKey/index.php/Proyectos/ProyectosSelec/" + valor
        }).then(function(data) {
            if (data != null || data != '' || data != 'undefined') {
                if (data['response']) {
                    console.log(data['response']);

                    $('#Numero').text(data['response'].codigo_actividad);
                    $('#Boton-Registro').show();
                    $('#Boton-Registro').attr('href', 'RegistroIndividual.php?CodProd=' + data['response'].codigo_actividad);

                } else {
                    console.log(data);
                }
            }
        });
    }
</script>
<?php
?>