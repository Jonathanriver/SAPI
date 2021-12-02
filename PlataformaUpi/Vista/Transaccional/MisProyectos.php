<html>
    <!-- Headers -->
    <?php
    session_start();
    include_once '../../Vista/HeaderProyectos.php';
    include_once '../../Modelo/Conexion.php';
// Se valida que el usuario este logeado
    include_once '../../Controladores/Transaccional/Sesion.php';

    $id_user_plataforma = $_SESSION['SESS_MEMBER_ID_TECNO'];
    $fuente = $_SESSION['SESS_FUENTE'];
    $nodo = $_SESSION['SESS_MEMBER_NODO'];
    $id_perfil = $_SESSION['SESS_MEMBER_ID_PERFIL'];
    $id_user = $_SESSION['SESS_MEMBER_ID']
    ?>

    <body>
        <input type="hidden" value="<?php echo $fuente; ?>" id="Platform">
        <input type="hidden" value="<?php echo $id_user_plataforma; ?>" id="UserPlatform">
        <input type="hidden" value="<?php echo $id_user; ?>" id="id_user">
        <input type="hidden" value="<?php echo $nodo; ?>" id="nodo">

        <div class="box">
            <div class="row content">
                <?php include 'MenuLateral.php'; ?>
                <div class="col-8 text-center">
                    <div class="row">
                        <div class="col">
                            <br><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-left" style="margin:0px 150px 0px 15px;">
                            <h2 style="font-size:40px;" class="texto-titulo-perfil">MIS ARTICULACIONES</h2>
                        </div>
                    </div>
                    <br>
                    <br>

                    <br>
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
                        <div class="col-12 text-center" style="display:none" id="load">
                            <div class="text-left texto-inicial" style="width: 50%;margin-left: 20%;margin-top: 15%;">
                                <!-- <h4>INICIAR SESIÓN</h4>-->
                            </div>
                            <div class="card tarjeta-inicio">
                                <div class="card-body">
                                    <br>
                                    <div class="d-flex justify-content-center">
                                        <div class="spinner-border" role="status" style="width: 6rem; height: 6rem;color: #FC7323;font-size: 40px">
                                            <span class="visually-hidden"></span>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <p>Validando por favor espere, esta operación puede demorar más de lo normal...</p>
                                </div>
                            </div>
                        </div>
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
    <script type="text/javascript">
        var CodProd;

        $(document).ready(function () {
            $('#load').show();
            var UserPlatform = $('#UserPlatform').val();
            Listar(UserPlatform);
        });

        function Listar(Valor) {
            var a = $('#Platform').val();
            var user = $('#id_user').val();
            switch (a) {
                case "Tecnoparque":

                    $.ajax({
                        url: "http://localhost/ApiSupiKey/index.php/Proyectos/FuenteProyecto/" + user
                    }).then(function (data) {
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
                case "SENNOVA":

                    $('#cuerpoLista').html('');
                    $('#load').show();
                    var nodo = $('#nodo').val();
                    //var Id_User = $('#UserPlatform').val();
                    //consulta proyectos por dinamizador SENNOVA
                    var settings = {
                        "url": "http://sennova.senaedu.edu.co/sgpssipro/api/v1/center/" + nodo + "/projects",
                        "method": "GET",
                        "timeout": 0,
                        "headers": {
                            "Accept": "application/json",
                            "Authorization": "Bearer {{token_prod}}",
                            "Content-Type": "application/json"
                        },
                        "data": {
                            "token": "1|fdyDO1V1DMF5Hfrjcd3JWTA1TugyQiKm85NHGhdV"
                        },
                    };

                    $.ajax(settings).done(function (response) {
                        console.log(response);
                        $('#load').hide();
                        for (var i = 0; i < response['data'].length; i++) {
                            var valorCap = response['data'][i]['id'];
                            var UserFormuler;
                            if (response['data'][i]['formuler']) {
                                UserFormuler = response['data'][i]['formuler'].name;
                            } else {
                                UserFormuler = '';
                            }

                            var html = '<tr>' +
                                    '<td style="border: solid #fc7323 0.5px !important;" class="funeteTabla"><a href="#" id="CodProd' + i + '">' + response['data'][i]['attributes'].code + '</a></td>' +
                                    '<td style="border: solid #fc7323 0.5px !important;">' + response['data'][i]['attributes'].title + '</td>' +
                                    '<td style="border: solid #fc7323 0.5px !important;">' + response['data'][i]['attributes'].title + '</td>' +
                                    '<td style="border: solid #fc7323 0.5px !important;">N/A</td>' +
                                    '<td style="border: solid #fc7323 0.5px !important;">' + response['data'][i]['attributes'].general_objective + '</td>' +
                                    '<td style="border: solid #fc7323 0.5px !important;">' + UserFormuler + '</td>' +
                                    '<td style="border: solid #fc7323 0.5px !important;">' + response['data'][i]['attributes'].start_date + '</td>' +
                                    '<td style="border: solid #fc7323 0.5px !important;">' + response['data'][i]['attributes'].end_date + '</td>' +
                                    '<td class="text-center" style="border: solid #fc7323 0.5px !important;"><input type="radio" name="option" onclick="AgergarRegistro(' + valorCap + ')"></td></tr>';
                            $('#cuerpoLista').append(html);
                        }

                    }).fail(function (response) {
                        console.log('Error');

                    });

                    console.log('Sennova');
                    break;
                case "UPI":
                    $('#cuerpoLista').html('');
                    console.log('Upi');
                    break;
            }

        }



        function ConsultarProyectoGeneral(id) {
            var user = $('#id_user').val();
            $.ajax({
                url: "http://localhost/ApiSupiKey/index.php/Proyectos/ProyectosGeneralActividades/" + id
            }).then(function (data) {
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
            if ($('#Platform').val() == 'SENNOVA') {
                //consulta proyectos por dinamizador SENNOVA
                var settings = {
                    "url": "http://sennova.senaedu.edu.co/sgpssipro/api/v1/projects/" + valor,
                    "method": "GET",
                    "timeout": 0,
                    "headers": {
                        "Accept": "application/json",
                        "Authorization": "Bearer {{token_prod}}",
                        "Content-Type": "application/json"
                    },
                    "data": {
                        "token": "1|fdyDO1V1DMF5Hfrjcd3JWTA1TugyQiKm85NHGhdV"
                    },
                };

                $.ajax(settings).done(function (response) {

                    $('#Numero').text(response['data']['attributes'].code);
                    $('#Boton-Registro').show();
                    $('#Boton-Registro').attr('href', 'RegistroIndividual.php?CodProd=' + valor);

                }).fail(function (response) {
                    console.log('Error');

                });

            } else if ($('#Platform').val() == 'Tecnoparque') {
                $.ajax({
                    url: "http://localhost/ApiSupiKey/index.php/Proyectos/ProyectosSelec/" + valor
                }).then(function (data) {
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
        }
    </script>

</html>