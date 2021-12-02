<html>
<!-- Headers -->
<?php include_once './Vista/HeadersLogin.php'; ?>

<body>
    <div class="box">
        <div class="row content">
            <div class="col-4 Lateral">

            </div>

            <div class="col-8 text-center" id="Validar">
                <div class="text-center texto-inicial" style="width: 50%;margin-left: 20%;margin-top: 15%;">
                    <h2>VALIDA TU USUARIO</h2>
                </div>
                <!-- esto es el formulario que recibe el documento del usuario para validarlo contra un servicio expuesto con php 
                    yo capturo el valor del campo documento por jquery y se lo paso como valor  a la url que consulta el servicio abajo en la etiqueta script-->
                <div class="card tarjeta-inicio">
                    <div class="card-body">
                        <br>
                        <br>
                        <p style="font-family: 'Josefin Sans Regular' !important;">Por favor ingresa tu numero de documento para validar si estas en alguno de los registros de Tecnoparque y Sennova.</p>
                        <br>
                        <form class="formulario-login">
                            <div class="mb-3 text-left">
                                <label for="exampleInputEmail1" class="form-label">Documento</label>
                                <input type="number" class="form-control campo-user" id="documento" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            </div>

                            <div class="mb-3 text-left">
                                <label for="exampleInputEmail1" class="form-label">Seleccione la Plataforma</label>
                                <select class="form-control campo-user" id="plataforma">
                                    <option value="0">Seleccione</option>
                                    <option value="1">Tecnoparque</option>
                                    <option value="2">Sennova</option>
                                    <!--<option value="3">Upi</option>-->
                                </select>

                            </div>
                            <br>
                            <button type="button" onclick="Validar()" class="btn boton-ingreso">Validar</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-8 text-center" style="display:none" id="load">
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
                        <p>Validando por favor espere...</p>
                    </div>
                </div>
            </div>
            <div class="col-8 text-center" style="display:none" id="error">
                <div class="text-left texto-inicial" style="width: 50%;margin-left: 20%;margin-top: 15%;">
                    <!-- <h4>INICIAR SESIÓN</h4>-->
                </div>
                <div class="card tarjeta-inicio">
                    <div class="card-body">
                        <br>
                        <img src="Recursos/Imagenes/ok.png" style="width: 80px; height: 80px;">
                        <br>
                        <br>
                        <p style="font-family: 'Josefin Sans Regular' !important;">El usuario no se encuentra registrado por favor comuniqiese con su dinamizador o articulador de su centro y/ tecnoparque.</p>
                        <br>
                        <a class="btn boton-ingreso" href="Login.php">Volver</a>
                    </div>
                </div>
            </div>
            <div class="col-8 text-center" style="display:none; margin-top: 5%;" id="Login">
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-7">
                        <div id="AlertContr" class="alert alert-danger alert-dismissible" style="display: none" role="alert">
                            <strong>Usuario: <span id="NomUser"></span></strong>, su contraseña es incorrecta!
                        </div>
                    </div>
                    <div class="col-sm-3"></div>
                </div>
                <br>
                <div class="row">
                    <div class="text-center texto-inicial" style="width: 50%;margin-left: 20%;">
                        <h2>INICIAR SESIÓN</h2>
                    </div>
                    <div class="card tarjeta-inicio">
                        <div class="card-body">
                            <br>
                            <p style="font-family: 'Josefin Sans Regular' !important;">
                                Tus datos se encuentran en nuestros registros, por favor ingresa el usuario y contraseña con las que habitualmente accede a la plataforma <span id="fuente"></span>.
                            </p>
                            <br>
                            <form class="formulario-login" id="formUpi" style="display: none;">
                                <div class="mb-3 text-left">
                                    <label for="exampleInputEmail1" class="form-label">Usuario</label>
                                    <input type="usuario" class="form-control campo-user" name="username" id="username" required>

                                </div>
                                <div class="mb-3 text-left">
                                    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                                    <input type="password" class="form-control campo-user" name="password" id="password" required>
                                </div>
                                <br>
                                <button type="button" class="btn boton-ingreso" onclick="IngresarUpi()">Ingresar</button>
                                <br>
                                <!-- <div class="mb-3">
                                    <a href="#" class="texto-recuperar" for="exampleCheck1">¿Olvidaste tu contraseña?</a>
                                </div> -->
                            </form>

                            <form class="formulario-login" id="formTecnoparque" style="display: none;">
                                <div class="mb-3 text-left">
                                    <label for="exampleInputEmail1" class="form-label">Usuario</label>
                                    <input type="usuario" class="form-control campo-user" id="username" name="username" required>

                                </div>
                                <div class="mb-3 text-left">
                                    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                                    <input type="password" class="form-control campo-user" id="password" name="password" id="exampleInputPassword1" required>
                                </div>
                                <br>
                                <button type="button" class="btn boton-ingreso" onclick="IngresarUpi()">Ingresar</button>
                                <br>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script type="text/javascript">
    //Declaracion de variables globales
    var valor;
    var fuente;
    var Documento;
    var plataforma;
    var IdUserTecno;
    var IdUserLoginTecno;
    var IdSennova;
    var IdUpi;
    var IdSennovaLogin;
    var ID_nodo;
    //Funciona para validacion de usuario
    function Validar() {

        $('#Validar').hide();
        $('#load').show();
        //Captura valor campo documento
        Documento = $('#documento').val();
        //Captura valor campo plataforma
        plataforma = $('#plataforma').val();
        if (plataforma == 1) {
            ValidarTecnoParque();
        } else if (plataforma == 2) {
            ValidarSennova();
        } else if (plataforma == 3) {
            ValidarUpi();
        }
    }

    //Funcion para validar usuario en Base Tecnoparque
    function ValidarTecnoParque() {

        $.ajax({
            url: "http://localhost/ApiSupiKey/index.php/LoginServ/Consultar/" + Documento
        }).then(function(data) {
            if (data != null || data != '' || data != 'undefined') {
                if (data['response']) {

                    valor = data['response'];
                    var username = data['response'].email;

                    $('#load').hide();
                    $('#Login').show();
                    $('#formUpi').show();
                    $('#username').val(username);
                    IdUserTecno = data['response'].id;
                    fuente = 'Tecnoparque';
                    $('#fuente').text(fuente);

                    ValidarUpi();

                } else {

                    $('#load').hide();
                    $('#error').show();
                }
            }
        });
    }

    //Funcion para validar usuario en Base Sennova
    function ValidarSennova() {

        var settings = {
            "url": "http://sennova.senaedu.edu.co/sgpssipro/api/v1/user_sennova",
            "method": "GET",
            "timeout": 0,
            "headers": {
                "Accept": "application/json",
                "Authorization": "Bearer {{token_prod}}",
                "Content-Type": "application/json"
            },
            "data": {
                "token": "1|fdyDO1V1DMF5Hfrjcd3JWTA1TugyQiKm85NHGhdV",
                "document_number": Documento
            },
        };

        $.ajax(settings).done(function(response) {
            if (response['data']) {
                console.log('success');
                valor = response['data']['attributes'];
                var username = response['data']['attributes'].email;
                fuente = 'SENNOVA';
                $('#load').hide();
                $('#Login').show();
                $('#fuente').text(fuente);
                $('#formUpi').show();
                $('#username').val(username);
                ValidarUpi();
                IdSennovaLogin = IdUpi;
                ID_nodo = response['data']['training_center'].id;
                IdSennova = response['data']['id'];
                //RegistrarUsuarioUpi(valor);
            } else {
                console.log('Error');
            }
        }).fail(function(response) {
            console.log('Error');
        });
    }

    //Funcion para validar usuario en Base Upi
    function ValidarUpi() {
        $.ajax({
            url: "http://localhost/ApiSupiDB/index.php/Usuarios/BucarUser/" + Documento
        }).then(function(data) {
            if (data != null || data != '' || data != 'undefined') {
                if (data['error']) {

                    //valor = data['response'];
                    var username = $('#username').val();

                    $('#load').hide();
                    $('#Login').show();

                    if ($('#plataforma').val() == 1) {
                        RegistrarUsuarioUpi(valor);
                        //IdUpi = data['response'].idUsuarios;
                        IdUserLoginTecno = IdUserTecno;
                        //IdPerfil = IdUpi;
                    } else if ($('#plataforma').val() == 2) {
                        RegistrarUsuarioUpi(valor);
                        IdPerfil = data['response'].idUsuarios;
                    } else {
                        fuente = 'UPI';
                        //IdPerfil = IdUpi;
                        $('#fuente').text(fuente);
                        $('#formUpi').show();
                        //IdUpi = data['response'].idUsuarios;
                        console.log(data);
                        $('#username').val(username);
                    }


                } else {
                    if ($('#plataforma').val() == 1) {

                        IdUserLoginTecno = IdUserTecno;
                        IdPerfil = data['response'].idUsuarios;
                    } else if ($('#plataforma').val() == 2) {

                        IdPerfil = data['response'].idUsuarios;
                    } else {
                        fuente = 'UPI';
                        //IdPerfil = IdUpi;
                        $('#fuente').text(fuente);
                        $('#formUpi').show();
                        //IdUpi = data['response'].idUsuarios;
                        console.log(data);
                        $('#username').val(username);
                    }
                }
            }
        });
    }


    function IngresarUpi() {

        var usuario = $('#username').val();
        var password = $('#password').val();
        $.ajax({
            url: "http://localhost/ApiSupiDB/index.php/Usuarios/find/" + usuario + '/' + password
        }).then(function(data) {
            if (data != null || data != '' || data != 'undefined') {
                if (data['response']) {

                    if (fuente == 'Tecnoparque') {
                        window.location = 'Controladores/Login.php?username=' + data['response'].email + '&password=' + data['response'].clave + '&idUsuario=' + IdUserLoginTecno + '&nombres=' + data['response'].nombre + '&idTecno=' + IdUserTecno + '&fuente=' + fuente + '&id_Perfil=' + IdPerfil;
                    } else if (fuente == 'SENNOVA') {
                        window.location = 'Controladores/Login.php?username=' + data['response'].email + '&password=' + data['response'].clave + '&idUsuario=' + IdSennovaLogin + '&nombres=' + data['response'].nombre + '&idTecno=' + IdSennova + '&fuente=' + fuente + '&id_Perfil=' + IdPerfil + '&nodo=' + ID_nodo;
                    } else if (fuente == 'UPI') {
                        window.location = 'Controladores/Login.php?username=' + data['response'].email + '&password=' + data['response'].clave + '&idUsuario=' + IdUpi + '&nombres=' + data['response'].nombre + '&idTecno=' + IdUpi + '&fuente=' + fuente + '&id_Perfil=' + IdPerfil;
                    }

                } else {

                    console.log(data);
                }
            }
        }).fail(function(response) {
            // console.log('Error');
            $('#AlertContr').show();
            $('#NomUser').text(usuario);
            // alert('Usuario: ' + usuario + ', su contraseña es incorrecta!, intente nuevamente');
        });
    }


    function ValidarCredencialesUpi(DocumentoVal) {
        //http://localhost/ApiSupiDB/index.php/Usuarios/BucarUser/1073683922


        if (DocumentoVal['documento']) {

            $.ajax({
                url: "http://localhost/ApiSupiDB/index.php/Usuarios/BucarUser/" + DocumentoVal['documento']
            }).then(function(data) {
                if (data != null || data != '' || data != 'undefined') {
                    if (data['response']) {

                    } else {
                        $.ajax({
                            url: "http://localhost/ApiSupiDB/index.php/Usuarios/guardar/?nombre=" + DocumentoVal['nombres'] + "&apellido=" + DocumentoVal['apellidos'] + "&fecha_nacimiento=" + DocumentoVal['fechanacimiento'] + "&depExpedicion&ciudadExpe&telefono&email=" + DocumentoVal['email'] + "&celular&UsuarioSena=" + DocumentoVal['email'] + "&empresaTrabajo&lugarTrabajo&tipoVinc&centroForm&grupoSang&estrato&etnias&eps&clave=Tecnoparque2021&tipo_documento=1&documento=" + DocumentoVal['documento'] + "&nivel_academico&ciudad_recidencia&departamento&institucion_perteneciente&nit&sede&Rol_idRol=2"
                        }).then(function(data) {
                            if (data != null || data != '' || data != 'undefined') {
                                if (data['response']) {
                                    console.log(data);
                                } else {
                                    console.log(data);
                                }
                            }
                        });
                    }
                }
            });

        } else if (DocumentoVal['document_number']) {
            $.ajax({
                url: "http://localhost/ApiSupiDB/index.php/Usuarios/guardar/?nombre=" + DocumentoVal['name'] + "&apellido=' '&fecha_nacimiento=' '&depExpedicion=''&ciudadExpe=' '&telefono=" + DocumentoVal['cellphone'] + "&email=" + DocumentoVal['email'] + "&celular=" + DocumentoVal['cellphone'] + "&UsuarioSena=" + DocumentoVal['email'] + "&empresaTrabajo&lugarTrabajo&tipoVinc&centroForm&grupoSang&estrato&etnias&eps&clave=Tecnoparque2021&tipo_documento=1&documento=" + DocumentoVal['document_number'] + "&nivel_academico&ciudad_recidencia&departamento&institucion_perteneciente&nit&sede&Rol_idRol=2"
            }).then(function(data) {
                if (data != null || data != '' || data != 'undefined') {
                    if (data['response']) {
                        console.log(data);
                    } else {
                        console.log(data);
                    }
                }
            });

        }


    }


    function RegistrarUsuarioUpi() {
        console.log(valor);
        if (valor['documento']) {
            IdPerfil = valor['id'];
            ValidarCredencialesUpi(valor);

        } else if (valor['document_number']) {
            IdPerfil = IdSennova;
            ValidarCredencialesUpi(valor);
        }

        /*
         *  if (valor) {
         ValidarCredencialesUpi(valor['documento']);
         } else {
         alert('No hay Usuario');
         }
         * 
         */
    }
</script>