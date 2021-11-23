<html>
<!-- Headers -->
<?php
session_start();
include_once './Vista/Headers.php';
if (!isset($_SESSION['SESS_MEMBER_ID']) && !isset($_SESSION['SESS_MEMBER_ID_TECNO'])) {
    header('Location: Login.php');
    // echo "No puedes ingresar";
}
//print_r($_SESSION['SESS_FIRST_NAME']);die;
?>

<body>
    <div class="box">
        <div class="row content">
            <?php include './Vista/MenuLateral.php'; ?>
            <div class="col-8 text-center">
                <div class="row">
                    <div class="col">
                        <br>
                    </div>
                </div>
                <div class="row">
                    <!--style="border: solid 0.5px #756d68 !important;"  -->
                    <div class="col-sm-4">
                        <button class="btn" style="border-radius: 26px !important; width:150px; margin:0px 100px;background-color: #FF6600;color: white;font-family: 'Josefin Sans Bold' !important;">
                            <p style="font-size: 120px; margin-top:-20px; margin-bottom:-50px;">6</p>
                            <p>Registrados</p>
                        </button>
                    </div>
                    <div class="col-sm-4">
                        <button class="btn" style="border-radius: 26px !important; width:150px; margin:0px 100px;background-color: #FF6600;color: white;font-family: 'Josefin Sans Bold' !important;">
                            <p style="font-size: 120px; margin-top:-20px; margin-bottom:-50px;">4</p>
                            <p>Aprobados</p>
                        </button>
                    </div>
                    <div class="col-sm-4">
                        <button class="btn" style="border-radius: 26px !important; width:150px; margin:0px 100px;background-color: #FF6600;color: white;font-family: 'Josefin Sans Bold' !important;">
                            <p style="font-size: 120px; margin-top:-20px; margin-bottom:-50px;">2</p>
                            <p>Gestionados</p>
                        </button>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <div class="row">
                    <div class="col">
                        <div class="card" style="border: none;font-family: 'Josefin Sans Bold' !important;">
                            <div class="card-body" style="margin: 0px 30px;">
                                <h1 style="text-align: left;color: #FF6600;">RECUERDA QUE</h1>
                                <br>
                                <p class="text-justify">
                                Este modulo busca fortalecer los procesos de investigación y productivos de los miembros del ecosistema SENNOVA, permitiéndoles conocer los diferentes métodos de protección de los bienes intangibles, tales como, libros, artículos, revistas, patentes, prototipos funcionales, marcas y logos generados dentro de las actividades realizadas en la entidad.   Cualquier duda particular en temas de propiedad intelectual no dudes en contactarte con nosotros <span style="color:blue;">upisennova@sena.edu.co</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--<div class="row footer">
                <p><b>footer</b> (fixed height)</p>
            </div>-->
    </div>
</body>

</html>