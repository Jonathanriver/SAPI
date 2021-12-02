<html>
<!-- Headers -->
<?php
session_start();
include_once '../../Vista/HeaderRgister.php';
require_once '../../Modelo/Conexion.php';
?>
<body>
    <div class="box">
        <div class="row content">
            <div class="col-4 Lateral">
            </div>
            <div class="col-8 text-center">
                <div class="row">
                    <div class="col">
                        <!-- <br><br><br> -->
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center" style="margin-top: 20%;">
                        <div class="card">
                            <div class="card-header" style="background-color: #fc7323; color: white;">
                                <h3>
                                    En hora buena!
                                </h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-2">
                                    </div>
                                    <div class="col-8">
                                        <div class="container">
                                            <svg style="color: hsla(86, 78%, 56%, 0.856);font-size: 120px;" xmlns="http://www.w3.org/2000/svg" width="150" height="100" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                            </svg>
                                        </div>
                                        <br>
                                        <br>
                                        <p>
                                            Si tiene alguna duda o comentario por favor no dude en contactarnos.

                                            Gracias por registrar su información, nos estaremos contactando con usted muy pronto, por favor procede a ingresar al menú principal.
                                        </p>
                                        <div class="container">
                                            <a href="MisProcesos.php" class="btn btn-warning" style="background-color: #fc7323; border-color: transparent;color: white;">Ingreso</a>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>

</body>

</html>