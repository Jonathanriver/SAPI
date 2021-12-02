<html>
<!-- Headers -->
<?php
session_start();
include_once './Vista/HeaderRgister.php';
require_once './Modelo/Conexion.php';
?>

<body>
    <div class="box">
        <div class="row content">
            <div class="col-4 Lateral">
            </div>
            <div class="col-8 text-center">
                <div class="row">
                    <div class="col">
                        <br><br><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center">
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
                                            <i class="far fa-check-circle" style="color: hsla(86, 78%, 56%, 0.856);font-size: 120px;"></i>
                                        </div>
                                        <br>
                                        <br>
                                        <p>
                                            No se encontro el usuario, por favor verifique que su número de cedula sea el correcto!, o contacte con el Dinamisador.
                                        </p>
                                        <div class="container">
                                            <a href="index.php" class="btn btn-warning" style="background-color: #fc7323; border-color: transparent;color: white;">Ingreso</a>
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