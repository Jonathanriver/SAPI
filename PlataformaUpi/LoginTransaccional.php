<html>
    <!-- Headers -->
    <?php
    session_start();
    include_once './Vista/HeadersLogin.php'; 
    
    ?>
    <body>
        <div class="box">
            <div class="row content">
                <div class="col-4 Lateral">

                </div>
                <div class="col-8 text-center">
                    <div class="text-left texto-inicial" style="width: 50%;margin-left: 20%;margin-top: 15%;">
                        <h4>INICIAR SESIÓN</h4>
                    </div>
                    <div class="card tarjeta-inicio">
                        <div class="card-body">
                            <form action="Controladores/Login.php" method="POST" class="formulario-login">
                                <div class="mb-3 text-left">
                                    <label for="exampleInputEmail1" class="form-label">Usuario</label>
                                    <input type="usuario" name="username" class="form-control campo-user" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                                </div>
                                <div class="mb-3 text-left">
                                    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                                    <input type="password" name="password" class="form-control campo-user" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3">
                                    <a href="#" class="texto-recuperar" for="exampleCheck1">¿Olvidaste tu contraseña?</a>
                                </div>
                                <button type="submit" class="btn boton-ingreso">Ingresar</button>                                
                            </form>
                        </div>
                    </div>
                    <div class="text-right col">
                        <br>
                        <br>
                        <a href="Registrar.php" class="link-registro" style="cursor: pointer;color: #fc7323;font-family: 'Josefin Sans Bold';margin-right: 20px;margin-top: 20px;font-size: 20px">Regsitrate aqui <i class="fas fa-chevron-circle-right"></i></a>                        
                    </div>
                </div>

            </div>
        </div>
    </body>
</html>
