<html>
    <!-- Headers -->
    <?php include_once './Vista/Headers.php'; ?>
    <body>
        <!-- Menu Nav -->
        <?php
        include_once './Vista/MenuNav.php';
        ?>
        <!-- Menu Iconos -->
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <img src="Recursos/Imagenes/Capture2.PNG" width="100%">
                </div>
            </div>
        </div>
        <br>
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h3>Contáctanos</h3>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col tet-left">
                        <h5 style="color: #563d7c;">Escribenos</h5>
                        <hr>
                        <div  class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <input type="text" name="nombre" placeholder="Nombre" class="input-register-login form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input type="email" name="email" placeholder="Email" class="input-register-login form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input type="tel" name="telefono" placeholder="Teléfono" class="input-register-login form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input type="tte" name="mensaje" placeholder="Mensaje"  class="input-register-login form-control">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <button class="btn btn-warning">Envíar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <h5 style="color: #563d7c;">Detalles del contacto</h5>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <p><i class="fas fa-map-marker text-warning"></i>&nbsp;&nbsp;Calle 115 # 11a-68</p>
                                <p><i class="fas fa-envelope-square text-warning"></i>&nbsp;&nbsp;exampl.e.ema@email.com</p>
                                <p><i class="fas fa-phone text-warning"></i>&nbsp;&nbsp;(+57) 318 3432348</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <?php
        include_once './Vista/Footer.php';
        ?>
    </body>
</html>

