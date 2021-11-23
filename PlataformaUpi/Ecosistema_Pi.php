<html>
<!-- Headers -->
<?php
session_start();
include_once './Vista/HeaderEcosistema_Pi.php';
include_once './Modelo/Conexion_2.php';
include_once './Modelo/Conexion.php';
if (!isset($_SESSION['SESS_MEMBER_ID'])) {
    header('Location: Login.php');
}

?>

<body>
    <input type="hidden" value="<?php echo $fuente; ?>" id="Platform">
    <input type="hidden" value="<?php echo $id_user_plataforma; ?>" id="UserPlatform">
    <div class="box">
        <div class="row content">
            <?php include './Vista/MenuLateral.php'; ?>
            <div class="col-7">
                <div class="row">
                    <div class="col">
                        <br><br>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col">
                        <h1 class="texto-titulo-perfil" style="font-size:50px; text-align: center; margin-bottom:-45px;">ECOSISTEMA PI</h1>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <div class="row">
                    <div class="col-sm" style="overflow: auto; height: 700px">

                        <div class="card">
                           
                            <br>
                            <!-- Selección -->
                            <div class="container-fluid">
                                <!-- Inicio del Formulario -->
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-sm-6 card-body">
                                            <div class="row radious">
                                                <button class="accordion" style=" outline: none;">
                                                    <!-- style="  border: solid 0.5px red !important;" -->
                                                    <div class="col-sm">
                                                        <!-- <img src="./Recursos/Imagenes/Obtencion_Vegetal.jpg" style=" margin-left:-15px;width: 40px;" /> -->
                                                        <label style="color:#fc7323; margin-left:10px;" class="form-check-label" for="flexRadioDefault1">
                                                            <strong>REGISTRO DE MARCA COMERCIAL</strong>
                                                        </label>
                                                    </div>
                                                </button>
                                                <div class="panel">
                                                    <p>
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente adipisci ducimus nesciunt repellendus odio ipsa assumenda totam rem numquam illum distinctio nihil sunt enim facere, minus iste quos laudantium porro nulla saepe deserunt ratione. Tempore accusantium obcaecati ab quidem impedit.
                                                    </p>
                                                    <a class="btn btn" style="color: white; background-color: #fc7323;" href="./registro_Marca_Comercial.php" role="button">Ir a registro</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 card-body">
                                            <div class="row radious">
                                                <button class="accordion" style=" outline: none;">
                                                    <!-- style="  border: solid 0.5px red !important;" -->
                                                    <div class="col-sm">
                                                        <!-- <img src="./Recursos/Imagenes/Derecho_Autor.jpg" style=" margin-left:-15px;width: 40px;" /> -->
                                                        <label style="color:#fc7323; margin-left:10px;" class="form-check-label" for="flexRadioDefault1">
                                                            <strong>REGISTRO DE MARCA COLECTIVA</strong>
                                                        </label>
                                                    </div>
                                                </button>
                                                <div class="panel">
                                                    <p>
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente adipisci ducimus nesciunt repellendus odio ipsa assumenda totam rem numquam illum distinctio nihil sunt enim facere, minus iste quos laudantium porro nulla saepe deserunt ratione. Tempore accusantium obcaecati ab quidem impedit.
                                                    </p>
                                                    <a class="btn btn-primary" href="#" role="button">Link</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 card-body">
                                            <div class="row radious">
                                                <button class="accordion" style=" outline: none;">
                                                    <!-- style="  border: solid 0.5px red !important;" -->
                                                    <div class="col-sm">
                                                        <!-- <img src="./Recursos/Imagenes/Propiedad_Industrial.jpg" style=" margin-left:-15px;width: 40px;" /> -->
                                                        <label style="color:#fc7323; margin-left:10px;" class="form-check-label" for="flexRadioDefault1">
                                                            <strong> REGISTRO DE MARCA DE CERTIFICACIÓN</strong>
                                                        </label>
                                                    </div>
                                                </button>
                                                <div class="panel">
                                                    <p>
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente adipisci ducimus nesciunt repellendus odio ipsa assumenda totam rem numquam illum distinctio nihil sunt enim facere, minus iste quos laudantium porro nulla saepe deserunt ratione. Tempore accusantium obcaecati ab quidem impedit.
                                                    </p>
                                                    <a class="btn btn" style="color: white; background-color: #fc7323;" href="./NuevasCreaciones.php" role="button">Ir a registro</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 card-body">
                                            <div class="row radious">
                                                <button class="accordion" style=" outline: none;">
                                                    <!-- style="  border: solid 0.5px red !important;" -->
                                                    <div class="col-sm">
                                                        <!-- <img src="./Recursos/Imagenes/Obtencion_Vegetal.jpg" style=" margin-left:-15px;width: 40px;" /> -->
                                                        <label style="color:#fc7323; margin-left:10px;" class="form-check-label" for="flexRadioDefault1">
                                                            <strong> REGISTRO DE DENOMINACIÓN DE ORIGEN</strong>
                                                        </label>
                                                    </div>
                                                </button>
                                                <div class="panel">
                                                    <p>
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente adipisci ducimus nesciunt repellendus odio ipsa assumenda totam rem numquam illum distinctio nihil sunt enim facere, minus iste quos laudantium porro nulla saepe deserunt ratione. Tempore accusantium obcaecati ab quidem impedit.
                                                    </p>
                                                    <a class="btn btn" style="color: white; background-color: #fc7323;" href="./Ecosistema_Pi.php" role="button">Ir a registro</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 card-body">
                                            <div class="row radious">
                                                <button class="accordion" style=" outline: none;">
                                                    <!-- style="  border: solid 0.5px red !important;" -->
                                                    <div class="col-sm">
                                                        <!-- <img src="./Recursos/Imagenes/Propiedad_Industrial.jpg" style=" margin-left:-15px;width: 40px;" /> -->
                                                        <label style="color:#fc7323; margin-left:10px;" class="form-check-label" for="flexRadioDefault1">
                                                            <strong> REGISTRO DE LEMA COMERCIAL</strong>
                                                        </label>
                                                    </div>
                                                </button>
                                                <div class="panel">
                                                    <p>
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente adipisci ducimus nesciunt repellendus odio ipsa assumenda totam rem numquam illum distinctio nihil sunt enim facere, minus iste quos laudantium porro nulla saepe deserunt ratione. Tempore accusantium obcaecati ab quidem impedit.
                                                    </p>
                                                    <a class="btn btn" style="color: white; background-color: #fc7323;" href="./NuevasCreaciones.php" role="button">Ir a registro</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 card-body">
                                            <div class="row radious">
                                                <button class="accordion" style=" outline: none;">
                                                    <!-- style="  border: solid 0.5px red !important;" -->
                                                    <div class="col-sm">
                                                        <!-- <img src="./Recursos/Imagenes/Obtencion_Vegetal.jpg" style=" margin-left:-15px;width: 40px;" /> -->
                                                        <label style="color:#fc7323; margin-left:10px;" class="form-check-label" for="flexRadioDefault1">
                                                            <strong>DEPÓSITO DE NOMBRE COMERCIAL</strong>
                                                        </label>
                                                    </div>
                                                </button>
                                                <div class="panel">
                                                    <p>
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente adipisci ducimus nesciunt repellendus odio ipsa assumenda totam rem numquam illum distinctio nihil sunt enim facere, minus iste quos laudantium porro nulla saepe deserunt ratione. Tempore accusantium obcaecati ab quidem impedit.
                                                    </p>
                                                    <a class="btn btn" style="color: white; background-color: #fc7323;" href="./Ecosistema_Pi.php" role="button">Ir a registro</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 card-body">
                                            <div class="row radious">
                                                <button class="accordion" style=" outline: none;">
                                                    <!-- style="  border: solid 0.5px red !important;" -->
                                                    <div class="col-sm">
                                                        <!-- <img src="./Recursos/Imagenes/Propiedad_Industrial.jpg" style=" margin-left:-15px;width: 40px;" /> -->
                                                        <label style="color:#fc7323; margin-left:10px;" class="form-check-label" for="flexRadioDefault1">
                                                            <strong> DEPÓSITO DE ENSEÑA COMERCIAL</strong>
                                                        </label>
                                                    </div>
                                                </button>
                                                <div class="panel">
                                                    <p>
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente adipisci ducimus nesciunt repellendus odio ipsa assumenda totam rem numquam illum distinctio nihil sunt enim facere, minus iste quos laudantium porro nulla saepe deserunt ratione. Tempore accusantium obcaecati ab quidem impedit.
                                                    </p>
                                                    <a class="btn btn" style="color: white; background-color: #fc7323;" href="./NuevasCreaciones.php" role="button">Ir a registro</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
                <!-- Scripts funcionalidades -->
                <script src="./Recursos/js/Funcionalidades.js"></script>
                <script src="./Recursos/js/NuevasCreaciones.js"></script>

</body>
<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }
</script>

</html>