<div class="col-4 Lateral">
    <div class="container marco-imagen">
        <div class="row">
            <div class="col-4">
                <img src="./Recursos/Imagenes/perfilimag.png" class="ImagenPerfil" />
            </div>
            <div class="col-8">
                <p style="margin-top: 18px;margin-left: -25px;color: white;">
                    <?php echo $_SESSION['SESS_FIRST_NAME']; ?><br><span style="font-family: 'Josefin Sans Light';font-size: 12px;">Último Ingreso
                        03/06/2021</span></p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="container contenido-menu">
                    <ul class="list-group fondo-color text-left">
                        <li class="list-group-item fondo-color"><a href="./Dashboard.php" class="link-menu"><i class="fas fa-tachometer-alt tamano-icono"></i>&nbsp;&nbsp;&nbsp;&nbsp;Recuerda que</a></li>
                        <li class="list-group-item fondo-color"><a href="./MiPerfil.php" class="link-menu"><i class="fas fa-user tamano-icono "></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mi perfil</a></li>
                        <li class="list-group-item fondo-color"><a href="./MisProcesos.php" class="link-menu"><i class="fas fa-cogs tamano-icono"></i>&nbsp;&nbsp;&nbsp;&nbsp;Mis procesos</a></li>
                        <li class="list-group-item fondo-color"><a href="./MisProyectos.php" class="link-menu"><i class="fas fa-folder-open tamano-icono"></i>&nbsp;&nbsp;&nbsp;&nbsp;Mis Articulaciones</a></li>
                        <!-- <li class="list-group-item fondo-color"><a href="./RegistroIndividual.php" class="link-menu"><i class="fas fa-file tamano-icono"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Registro Individual</a></li> -->
                        <li class="list-group-item fondo-color"><a href="./Controladores/Salir.php" class="link-menu"><i class="fas fa-sign-out-alt tamano-icono"></i>&nbsp;&nbsp;&nbsp;&nbsp;Cerrar sesión</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>