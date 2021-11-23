<html>
    <!-- Headers -->
    <?php include_once './Vista/HeadersLogin.php'; ?>
    <body>
        <div class="box">
            <div class="row content">
                <div class="col-4 Lateral">

                </div>

                <div class="col-8 text-center" id="Validar">
                    <div class="text-left texto-inicial" style="width: 50%;margin-left: 20%;margin-top: 15%;">
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
                            <form  class="formulario-login">
                                <div class="mb-3 text-left">
                                    <label for="exampleInputEmail1" class="form-label">Documento</label>
                                    <input type="number" class="form-control campo-user" id="documento" id="exampleInputEmail1" aria-describedby="emailHelp" required>

                                </div>

                                <div class="mb-3 text-left">
                                    <label for="exampleInputEmail1" class="form-label">Seleccione la Plataforma</label>
                                    <select class="form-control campo-user" id="plataforma" >
                                        <option value="0">Seleccione</option>
                                        <option value="1">Tecnoparque</option>
                                        <option value="2">Sennova</option>
                                        <option value="3">Upi</option>
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



                <div class="col-8 text-center" style="display:none" id="Login">
                    <div class="text-left texto-inicial" style="width: 50%;margin-left: 20%;margin-top: 15%;">
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
                                <div class="mb-3">
                                    <a href="#" class="texto-recuperar" for="exampleCheck1">¿Olvidaste tu contraseña?</a>
                                </div>

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
    </body>
</html>
<script type="text/javascript">

    //Declaracion de variables globales
    var valor;
    var fuente;
    var Documento;
    var plataforma;
    var IdUserTecno;
    var IdSennova;

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
        }).then(function (data) {
            if (data != null || data != '' || data != 'undefined') {
                if (data['response']) {

                    valor = data['response'];
                    var username = data['response'].email;
                    fuente = 'Tecnoparque';

                    $('#load').hide();
                    $('#Login').show();
                    $('#fuente').text(fuente);
                    $('#formUpi').show();
                    $('#username').val(username);
                    IdUserTecno = data['response'].id;

                    RegistrarUsuarioUpi(valor);

                } else {

                    $('#load').hide();
                    $('#error').show();


                }
            }
        });
    }

    //Funcion para validar usuario en Base Sennova
    function ValidarSennova() {
        $.ajax({
            url: "" + Documento
        }).then(function (data) {
            if (data != null || data != '' || data != 'undefined') {
                if (data['response']) {

                    valor = data['response'];

                    fuente = 'Sennova';

                    $('#load').hide();
                    $('#Login').show();
                    $('#fuente').text(fuente);
                    IdSennova = data['response'].id;

                } else {
                    $('#load').hide();
                    $('#error').show();
                    valor = '';
                    fuente = '';
                }
            }

        });
    }

    //Funcion para validar usuario en Base Upi
    function ValidarUpi() {
        $.ajax({
            url: "http://localhost/ApiSupiDB/index.php/Usuarios/BucarUser/" + Documento
        }).then(function (data) {
            if (data != null || data != '' || data != 'undefined') {
                if (data['response']) {

                    valor = data['response'];
                    var username = data['response'].email;
                    fuente = 'UPI';

                    $('#load').hide();
                    $('#Login').show();
                    $('#fuente').text(fuente);
                    $('#formUpi').show();
                    $('#username').val(username);

                } else {
                    $('#load').hide();
                    $('#error').show();
                    valor = '';
                    fuente = '';
                }
            }
        });
    }


    function IngresarUpi() {

        var usuario = $('#username').val();
        var password = $('#password').val();

        $.ajax({
            url: "http://localhost/ApiSupiDB/index.php/Usuarios/find/" + usuario + '/' + password
        }).then(function (data) {
            if (data != null || data != '' || data != 'undefined') {
                if (data['response']) {
                    console.log(data);
                    if (fuente == 'Tecnoparque') {
                        window.location = 'Controladores/Login.php?username=' + data['response'].email + '&password=' + data['response'].clave + '&idUsuario=' + data['response'].idUsuarios + '&nombres=' + data['response'].nombre + '&idTecno=' + IdUserTecno+'&fuente='+fuente;
                    }else if(fuente == 'Sennova'){
                        window.location = 'Controladores/Login.php?username=' + data['response'].email + '&password=' + data['response'].clave + '&idUsuario=' + data['response'].idUsuarios + '&nombres=' + data['response'].nombre+'&idTecno='+IdSeenova+'&fuente='+fuente;
                    }

                } else {
                    console.log(data);
                }
            }
        });

    }


    function ValidarCredencialesUpi(DocumentoVal) {
        //http://localhost/ApiSupiDB/index.php/Usuarios/BucarUser/1073683922

        $.ajax({
            url: "http://localhost/ApiSupiDB/index.php/Usuarios/BucarUser/" + DocumentoVal
        }).then(function (data) {
            if (data != null || data != '' || data != 'undefined') {
                if (data['response']) {

                } else {

                    $.ajax({
                        url: "http://localhost/ApiSupiDB/index.php/Usuarios/guardar/?nombre=" + valor['nombres'] + "&apellido=" + valor['apellidos'] + "&fecha_nacimiento=" + valor['fechanacimiento'] + "&depExpedicion&ciudadExpe&telefono&email=" + valor['email'] + "&celular&UsuarioSena=" + valor['email'] + "&empresaTrabajo&lugarTrabajo&tipoVinc&centroForm&grupoSang&estrato&etnias&eps&clave=Tecnoparque2021&tipo_documento=1&documento=" + valor['documento'] + "&nivel_academico&ciudad_recidencia&departamento&institucion_perteneciente&nit&sede&Rol_idRol=2"
                    }).then(function (data) {
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
    }


    function RegistrarUsuarioUpi() {
        console.log(valor);
        if (valor) {
            ValidarCredencialesUpi(valor['documento']);
        } else {
            alert('No hay Usuario');
        }

        //Agregar validacion si existe o no en la Upi, si el usuarui existe no debo registrarlo de lo contrario debo registrar el usuario
    }

</script>
