
    // 
    $(document).ready(function() {
        DataResumenProyect();
        consultaUser();
    });

    function consultaUser() {

        var cedula = $('#numUser').val();
        // print_r(cedula);die;
        $.ajax({
            url: "http://localhost/ApiSupiKey/index.php/LoginServ/Consultar/" + cedula
        }).then(function(data) {
            if (data != null || data != '' || data != 'undefined') {
                if (data['response']) {
                    console.log(data['response']);
                    var html = "<tr>" +
                        "<th>Nombre </th>" +
                        "<th>Apellido </th>" +
                        "<th>Documento </th>" +
                        "<th>Correo </th>" +
                        "<th>Teléfono </th>" +
                        "</tr>" +
                        "<tr>" +
                        "<td id='CodigoArt'>" + data['response'].nombres + "</td>" +
                        "<td>" + data['response'].apellidos + "</td>" +
                        "<td>" + data['response'].documento + "</td>" +
                        "<td>" + data['response'].email + "</td>" +
                        "<td>" + data['response'].telefono + "</td>" +
                        "</tr>";
                    "<br/>"
                    $('#tabla-user').append(html);
                    DataArticulacion_pbt();
                } else {
                    console.log(data);
                }
            }
        });

    }

    function DataResumenProyect() {

        var codigo = $('#Numero').val();

        $.ajax({
            url: "http://localhost/ApiSupiKey/index.php/Proyectos/ConsultaProyectosCodProd/" + codigo
        }).then(function(data) {
            if (data != null || data != '' || data != 'undefined') {
                if (data['response']) {
                    console.log(data['response']);
                    var html = "<tr>" +
                        "<th>Codigo del proyecto: </th>" +
                        "<th>Nombre del proyecto: </th>" +
                        "</tr>" +
                        "<tr>" +
                        "<td id='CodigoArt'>" + data['response'].codigo_actividad + "</td>" +
                        "<td>" + data['response'].nombre + "</td>" +
                        "</tr>";
                    $('#tabla-data').append(html);
                    DataArticulacion_pbt();
                } else {
                    console.log(data);
                }
            }
        });

    }


    function DataArticulacion_pbt() {

        var codigo = $('#CodigoArt').text();

        $.ajax({
            url: "http://localhost/ApiSupiKey/index.php/Proyectos/Consulta_pbt_codigo/" + codigo
        }).then(function(data) {
            if (data != null || data != '' || data != 'undefined') {
                if (data['response']) {
                    console.log(data['response'].id);

                    var id = data['response'].id;

                    $.ajax({
                        url: "http://localhost/ApiSupiKey/index.php/Proyectos/Consultar_talento_articulacion/" + id
                    }).then(function(data) {
                        if (data != null || data != '' || data != 'undefined') {
                            if (data['response']) {
                                console.log(data['response']);

                                var id_talento = data['response'].talento_id;

                                $.ajax({
                                    url: "http://localhost/ApiSupiKey/index.php/Proyectos/Consultar_Usuarios/" + id_talento
                                }).then(function(data) {
                                    if (data != null || data != '' || data != 'undefined') {
                                        if (data['response']) {
                                            console.log(data['response']);

                                            var id_users = data['response'].user_id;

                                            $.ajax({
                                                url: "http://localhost/ApiSupiKey/index.php/Proyectos/Consultar_Usuarios_x_talentos/" + id_users
                                            }).then(function(data) {
                                                if (data != null || data != '' || data != 'undefined') {
                                                    if (data['response']) {
                                                        .3
                                                        console.log(data['response']);
                                                        $('#NombreUser').val(data['response'].nombres);
                                                        $('#ApellidoUser').val(data['response'].apellidos);
                                                        $('#CorreoUser').val(data['response'].email);
                                                        $('#TelefonoUser').val(data['response'].telefono);
                                                        $('#NumeroDocUser').val(data['response'].documento);
                                                        $('#DireccionUser').val(data['response'].direccion);

                                                        var tipoDoc = data['response'].tipodocumento_id;
                                                        var TipoDocText;

                                                        $.ajax({
                                                            url: "http://localhost/ApiSupiKey/index.php/Proyectos/Consultar_Tipo_Documento/" + tipoDoc
                                                        }).then(function(data) {
                                                            if (data != null || data != '' || data != 'undefined') {
                                                                if (data['response']) {
                                                                    $('#IpoDocUser').val(data['response'].nombre);

                                                                } else {

                                                                }
                                                            }
                                                        });

                                                    } else {
                                                        console.log(data);
                                                    }
                                                }
                                            });

                                            $.ajax({
                                                url: "http://localhost/ApiSupiKey/index.php/Proyectos/Consultar_empresa_user/" + id_users
                                            }).then(function(data) {
                                                if (data != null || data != '' || data != 'undefined') {
                                                    if (data['response']) {
                                                        //consola.log('Datos empresa user');
                                                        console.log(data['response']);
                                                        $('#TipoUser').val('Juridico');
                                                        $('#NombreEmpresa').val(data['response'].nombre);
                                                        $('#NitEmprea').val(data['response'].nit);

                                                        if (data['response'].telefono == '' || data['response'].telefono == null || data['response'].telefono == 'undefined') {
                                                            $('#TelefonoEmpresa').val('N/A');
                                                        } else {
                                                            $('#TelefonoEmpresa').val(data['response'].telefono);
                                                        }

                                                        $('#CorreoEmpresa').val(data['response'].email);
                                                        $('#DireccionEmpresa').val(data['response'].direccion);

                                                        if (data['response'].nombreRepresntante == null || data['response'].nombreRepresntante == '' || data['response'].nombreRepresntante == 'undefined') {
                                                            $('#tr-titulo').hide();
                                                            $('#tr-titulo2').hide();
                                                            $('#tr-titulo3').hide();
                                                            $('#tr-titulo4').hide();
                                                        }


                                                    } else {
                                                        if (data['error'] == 'Nada') {
                                                            $('#TipoUser').val('Natural');
                                                            $('#DatosEmpresa').hide();
                                                        }

                                                    }
                                                }
                                            });

                                        } else {
                                            console.log(data);
                                        }
                                    }
                                });


                            } else {
                                console.log(data);
                            }
                        }
                    });

                } else {
                    console.log(data);
                }
            }
        });

    }

    // function guardar() {
    //     var DataUser = new Object();

    //     var nombre = 'Jonathan';

    //     DataUser = {
    //         'nombre': nombre,
    //         'Apellido': 'Espitia'
    //     };

    //     console.log(DataUser);
    // }