<html>
<!-- Headers -->
<?php
session_start();
 include_once './Vista/HeadersAdmin.php'; ?>

<body>
    <div class="box">
        <div class="row content">
            <div class="col-4 Lateral">
            </div>
            <div class="col-8 text-center">
                <div class="text-left texto-inicial" style="width: 50%;margin-left: 20%;margin-top: 15%;">
                    <h4 class="text-center">INICIO DE ADMINISTRADOR
                    </h4>
                </div>
                <div class="card tarjeta-inicio">
                    <div class="card-body">
                        <form action="Controladores/LoginAdmin.php" method="POST" class="formulario-login">
                            <div class="mb-3 text-left">
                                <label for="exampleInputEmail1" class="form-label">Usuario</label>
                                <input type="usuario" class="form-control campo-user" name="username" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                            </div>
                            <div class="mb-3 text-left">
                                <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                                <input type="password" class="form-control campo-user" name="password" id="exampleInputPassword1"required>
                            </div>
                            <div class="mb-3">
                                <a href="#" class="texto-recuperar" for="exampleCheck1">¿Olvidaste tu contraseña?</a>
                            </div>
                            <button type="submit" class="btn boton-ingreso">Ingresar   <i class="fas fa-user-cog"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>