<?php
$categoria = $_GET['categoria'];
require_once './Modelo/Conexion.php';
?>
<style>
    .item {
        position:relative;
        padding-top:20px;
        display:inline-block;
    }
    .notify-badge{
        position: absolute;
        right:-20px;
        top:10px;
        background: #ffc107;
        text-align: center;
        border-radius: 30px 30px 30px 30px;
        color:white;
        padding:5px 10px;
        font-size:20px;
    }

</style>
<div class="row" id="Favoritos" style="display: none;">
    <div class="col text-center">
        <div class="card" style="width: 18rem;">
            <div class="item">
                <a href="#">
                    <span class="notify-badge" style="font-size: 15px;">DESTACADO</span>
                    <img class="card-img-top" src="https://www.ite-espana.es/wp-content/uploads/2018/02/Tasaci%C3%B3n-y-valoraci%C3%B3n-de-inmuebles.jpg" alt="Card image cap" style="width: 286px; height: 214px;">
                </a>
            </div>

            <div class="card-body">
                <h5 class="card-title" style="font-size: 15px !important; color: #563d7c;;">INSTALACIONES EMGESA</h5>
                <p class="card-text" style="font-size: 10px !important;">INSTALACIONES (TERRENO Y CONSTRUCCION) CAMPAMENTO EMGESA DE 44945 M2..</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item" style="background-color: #563d7c;font-size: 13px !important;"><b class="text-warning">Cierre:</b> <span class="badge badge-warning">12/12/2019</span></li>
                <li class="list-group-item" style="background-color: #563d7c;font-size: 13px !important;"><b class="text-warning">Oferta Actual:</b> <span class="badge badge-warning">$4´000.000=</span></li>
                <li class="list-group-item" style="background-color: #563d7c;font-size: 13px !important;"><b class="text-warning">Ganador Actual:</b> <span class="badge badge-warning">---</span></li>
            </ul>
            <div class="card-body" style="background-color: #563d7c;font-size: 13px !important;">
                <a href="#" class="btn btn-warning" style="color: white;font-weight: bold;" >Ofertar</a>
                <!--<a href="#" class="btn btn-warning">link</a>-->
            </div>
        </div>
    </div>
    <div class="col text-center">
        <div class="card" style="width: 18rem;">
            <div class="item">
                <a href="#">
                    <span class="notify-badge" style="font-size: 15px;">DESTACADO</span>
                    <img class="card-img-top" src="https://media-public.canva.com/MABYLEDRVXU/1/screen_2x.jpg" alt="Card image cap" style="width: 286px; height: 214px;">
                </a>
            </div>
            <div class="card-body">
                <h5 class="card-title" style="font-size: 15px !important; color: #563d7c;;">INSTALACIONES EMGESA</h5>
                <p class="card-text" style="font-size: 10px !important;">INSTALACIONES (TERRENO Y CONSTRUCCION) CAMPAMENTO EMGESA DE 44945 M2..</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item" style="background-color: #563d7c;font-size: 13px !important;"><b class="text-warning">Cierre:</b> <span class="badge badge-warning">12/12/2019</span></li>
                <li class="list-group-item" style="background-color: #563d7c;font-size: 13px !important;"><b class="text-warning">Oferta Actual:</b> <span class="badge badge-warning">$4´000.000=</span></li>
                <li class="list-group-item" style="background-color: #563d7c;font-size: 13px !important;"><b class="text-warning">Ganador Actual:</b> <span class="badge badge-warning">---</span></li>
            </ul>
            <div class="card-body" style="background-color: #563d7c;font-size: 13px !important;">
                <a href="#" class="btn btn-warning" style="color: white;font-weight: bold;" >Ofertar</a>
                <!--<a href="#" class="btn btn-warning">link</a>-->
            </div>
        </div>
    </div>
    <div class="col text-center">
        <div class="card" style="width: 18rem;">
            <div class="item">
                <a href="#">
                    <span class="notify-badge" style="font-size: 15px;">DESTACADO</span>
                    <img class="card-img-top" src="https://as2.ftcdn.net/jpg/00/19/20/05/500_F_19200517_z9cDuu1kwT2nigOsyFGz9o4O3JqaqRug.jpg" alt="Card image cap" style="width: 286px; height: 214px;">
                </a>
            </div>
            <div class="card-body">
                <h5 class="card-title" style="font-size: 15px !important; color: #563d7c;;">INSTALACIONES EMGESA</h5>
                <p class="card-text" style="font-size: 10px !important;">INSTALACIONES (TERRENO Y CONSTRUCCION) CAMPAMENTO EMGESA DE 44945 M2..</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item" style="background-color: #563d7c;font-size: 13px !important;"><b class="text-warning">Cierre:</b> <span class="badge badge-warning">12/12/2019</span></li>
                <li class="list-group-item" style="background-color: #563d7c;font-size: 13px !important;"><b class="text-warning">Oferta Actual:</b> <span class="badge badge-warning">$4´000.000=</span></li>
                <li class="list-group-item" style="background-color: #563d7c;font-size: 13px !important;"><b class="text-warning">Ganador Actual:</b> <span class="badge badge-warning">---</span></li>
            </ul>
            <div class="card-body" style="background-color: #563d7c;font-size: 13px !important;">
                <a href="#" class="btn btn-warning" style="color: white;font-weight: bold;" >Ofertar</a>
                <!--<a href="#" class="btn btn-warning">link</a>-->
            </div>
        </div>
    </div>

</div>
<hr>
<div class="row">
    <div class="col-3">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th colspan="2" class="text-warning" style="background-color: #563d7c;border-color: #563d7c;">
                        <span style="font-size: 20px;">Sub-Categorias</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($resultOfertas = mysqli_query($link, "SELECT * FROM sub_categoria")) {
                    //print_r($resultOfertas);die;
                    while ($row = $resultOfertas->fetch_assoc()) {
                        ?>
                        <tr>
                            <td class="subMenu" style="font-size:12px;border-color: #563d7c;"><?php echo $row['nombre'] ?> </td>
                        </tr>
                        <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
    <div class="col-9">
        <table class="table table-bordered">
            <tr>
                <td>
                    <div class="row">
                        <div class="col">
                            <img src="https://static.s4bdigital.net/photos/9c83d0df-ba03-4429-9c63-408ae321fe53.jpg" style="width: 260px;height: 200px;">
                        </div>
                        <div class="col">
                            <p style="color: #563d7c;font-weight: bold;font-size: 12px;">Santos / SP - Edificio comercial - Rua XV de noviembre - Desocupado <span class="badge badge-secondary">Lote 1</span></p>
                            <p style="color: #563d7c;font-weight: bold;font-size: 12px;">Cierre: <span class="text-secondary">26/07/2019</span><br> <span class="text-secondary">15:00:00GMT -03:00</span></p>
                            <p style="color: #563d7c;font-weight: bold;font-size: 12px;">Predio Comercial</p><br>
                            <a class="btn botonDEtalle" href="DetalleProducto.php?categoria=1&id=1">Detalle</a> <a class="btn botonDEtalle">Ofertar</a>
                        </div>
                        <div class="col">
                            <h2 style="color: #563d7c;font-weight: bold;font-size: 15px;">Abierta a ofertas</h2>
                            <hr style="border: 0; border-top: 1px solid #563d7c;">
                            <p><b>Valor Actual</b><br><span class="badge badge-warning">$256.000</span></p>
                            <table style="padding: 1px;">
                                <tr>
                                    <td style="background-color: #563d7c;font-weight: bold;font-size:12px; text-align: center;" class="text-warning text-center">
                                        Visitas
                                    </td>
                                    <td style="background-color: #563d7c;font-weight: bold;font-size:12px;"  class="text-warning">
                                        Compra
                                    </td>
                                    <td style="background-color: #563d7c;font-weight: bold;font-size:12px;"  class="text-warning">
                                        Ofertas
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="badge badge-warning">16</span>
                                    </td>
                                    <td>
                                        <span class="badge badge-warning">16</span>
                                    </td>
                                    <td>
                                        <span class="badge badge-warning">16</span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                </td>
            </tr>
        </table>
    </div>
</div>
