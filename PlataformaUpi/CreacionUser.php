<html>
    <!-- Headers -->
    <?php
    include_once './Modelo/Conexion.php';
    include_once './Vista/Headers.php';

    $id_pais = 0;
    if ($result = mysqli_query($link, "SELECT * FROM pais ORDER BY idpais DESC")) {
        //print_r(mysqli_num_rows($result));
        if (mysqli_num_rows($result) > 0) {

            $member = mysqli_fetch_all($result, MYSQLI_ASSOC);
            //print_r($member);die();
        } else {
            echo '<script>alert("No hay Datos");</script>';
            exit();
        }
    } else {
        die("No existe la consulta");
    }
    //$ciudad;
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
                    <div class="row">
                        <div class="col">
                            <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <h3>Creación de Usuario</h3>
                        </div>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col text-center">
                            <h3 class="textoRadio">Tipo Usuario</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 text-center">
                            <label class="containerRadio">Individual&nbsp;&nbsp;<i class="fas fa-user" style="color: #563d7c;font-size: 20px;" required></i>
                                <input type="radio" name="tipo" value="1">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="col-6 text-center">
                            <label class="containerRadio">Empresa&nbsp;&nbsp;<i class="fas fa-industry" style="color: #563d7c;font-size: 20px;" required></i>
                                <input type="radio" name="tipo" value="2">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="text" name="nombre" placeholder="Nombre" class="input-register form-control" required>
                        </div>
                        <div class="col">
                            <input type="text" name="apellido" placeholder="Apellido" class="input-register form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <select placeholder="Tipo Documento" name="tipo_doc" class="input-register form-control" required>
                                <option value="1">Cedula Ciudadania</option>
                                <option value="2">Tarjeta Extranjeria</option>
                                <option value="3">Pasaporte</option>
                            </select>
                        </div>
                        <div class="col">
                            <input type="text" name="documento" placeholder="Numero de Documento" class="input-register form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="tel" name="telefono" placeholder="Teléfono" class="input-register form-control" required>
                        </div>
                        <div class="col">
                            <input type="tel" name="celular" placeholder=Movil class="input-register form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control input-register" placeholder="Pais" name="pais" id="pais" required>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control input-register" id="ciudad" placeholder="Ciudad" name="ciudad" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="email" name="email" id="email" placeholder="Email" class="input-register form-control" required>
                        </div>
                        <div class="col">
                            <input type="email" name="confir-email" id="corn-email" onchange="javascript:Comparara();" placeholder="Confirmar Email" class="input-register form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <div class="alert alert-danger" role="alert" id="alertas" style="display:none;">
                                El correo no coincide.
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="password" name="contrasena" id="contra" placeholder="Contraseña" class="input-register form-control" required>
                        </div>
                        <div class="col">
                            <input type="password" name="confir-contra" id="contra2" onchange="javascript:Comparara2();" placeholder="Confirmar Contraseña" class="input-register form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <div class="alert alert-danger" role="alert" id="alertas2" style="display:none;">
                               La contraseña no coincide.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <input type="text" name="usuario" placeholder="Usuario" class="input-register form-control" required>
                        </div>
                        <div class="col">

                        </div>
                    </div>

                </div>
            </div>
            <br>
            <br>
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col text-center" style="border-radius: 26px;padding: 52px;background-color: #563d7c;color: white;">
                            <h3>PROCEDIMIENTO DE USO DEL PORTAL </h3><br>
                            <p class="text-justify" style="background-color: transparent;line-height: inherit !important;">1) Para participar en las subastas divulgadas en el PORTAL GIBEGO, el Usuario deberá proceder
                                con su registro informando sus datos personales. Se deben completar todos los campos de forma
                                clara y precisa. Siempre que sea necesario, el Usuario deberá actualizar su registro.
                                2) Al registrarse, el Usuario indicará un LOGIN que lo identificará en el PORTAL y una
                                CONTRASEÑA personal e intransferible, que no se podrá utilizar con otras finalidades no
                                autorizadas.
                                3) El Usuario se compromete a no divulgar su contraseña a terceros. El uso no autorizado de la
                                contraseña es de total responsabilidad del Usuario, y el hecho deberá ser comunicado
                                inmediatamente por correo electrónico a la Central de Atención del PORTAL.
                                4) Para seguridad del Usuario, su contraseña y datos se transmitirán encriptados (Certificado de
                                Seguridad SSL).</p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <label class="containerRadio">He leído y estoy de acuerdo con los Terminos de Utilización*
                                <input type="checkbox" name="acepte" value="1" required>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col text-center">
                            <button type="submit" class="btn btn-warning btn-lg btn-block">Avanzar</button>
                        </div>
                    </div>
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
console.log(campo1+" - "+campo2);
        if (campo1 != campo2) {
            $('#alertas2').fadeIn(200);
        } else {
            $('#alertas2').fadeOut(200);
        }
    }
</script>

