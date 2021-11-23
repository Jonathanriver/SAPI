<?php
require_once './Modelo/Conexion.php';
$idproducto = $_GET['idproducto'];
?>
<img src="Recursos/Imagenes/Capture3.PNG" width="100%">
<div class="container-fluid">
    <div class="row">
        <div class="col text-center">
            <br>
            <h3 style="color: #563d7c;">Sala de Ofertas</h3>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="container">
        <hr>
        <div class="row">
            <div class="col-5">
                <?php
                if ($resultProduct = mysqli_query($link, "SELECT * FROM producto WHERE idproducto=$idproducto")) {
                    // print_r($resultProduct);die;
                    while ($row = $resultProduct->fetch_assoc()) {
                        ?>
                        <img src="Recursos/Imagenes/<?php echo $row['image']; ?>" id="iframe_a" name="iframe_a" height="60%" width="100%"><br>
                        <br>
                        <h4 style="color: #563d7c;">Información de Ofertas</h4><a class="btn btn-warning" href="DetalleProducto.php?idproducto=<?php echo $row['idproducto']; ?>" style="font-weight: bold;color: #563d7c;"><i class="fas fa-list"></i> Detalle</a>
                        <hr>
                        <?php
                        if ($resultExtras = mysqli_query($link, "SELECT * FROM extras WHERE producto_idproducto=$idproducto")) {
                            while ($rowExtras = $resultExtras->fetch_assoc()) {
                                ?>
                                <span><b>Vendedor:</b> <?php echo $rowExtras['descripcion']; ?></span><br>
                                <?php
                            }
                        }
                        ?>

                        <span><b>Oferta Base:</b> $<?php echo $row['precio_base']; ?></span><br>
                        <span><b>Fecha de Cierre:</b> <?php echo $row['fecha_cierre']; ?></span><br>
                        <br>
                        <table class="table table-bordered">
                            <tr>
                                <td class="text-center text-warning" style="background-color: #563d7c;">Visitas</td>
                                <td class="text-center text-warning" style="background-color: #563d7c;">Compras</td>
                                <td class="text-center text-warning" style="background-color: #563d7c;">Ofertas</td>
                            </tr>
                            <tr>
                                <td class="text-center">234</td>
                                <td class="text-center">-</td>
                                <td class="text-center">35</td>
                            </tr>
                        </table>
                        <?php
                    }
                }
                ?>
            </div>
            <div class="col-7">
                <br>
                <h3 style="color: #563d7c;">¿Cuál es tu oferta?</h3>
                <form method="post" action="Controladores/RegistrarOfertar.php">
                    <table class="table">
                        <tr>
                            <td class="text-center">
                                <input type="text" class="form-control bg-light text-dark" name="Oferta" placeholder="Ej: $270.000">
                                <input type="hidden" value="<?php echo $idproducto; ?>" name="idprod">
                                <!--<button class="btn btn-secondary btn-block" style="font-size: 15px;">$270.000</button>-->
                            </td>
                            <td class="text-center">
                                <button class="btn btn-warning btn-block" type="submit">Ofertar</button>
                            </td>
                        </tr>
                    </table>
                </form>
                <br>
                <table class="table table-bordered">
                    <?php
                    //echo "hola mundo";
                    if ($resultOfertas = mysqli_query($link, "SELECT * FROM oferta")) {
                        //print_r($resultOfertas);die;
                        while ($row = $resultOfertas->fetch_assoc()) {

                            $id_users = $row['usuarios_idusuarios'];
                            ?>
                            <tr>
                                <td>
                                    <div class="row">
                                        <div class="col-2">
                                            <i class="fas fa-user" style="font-size: 50px;"></i>
                                        </div>
                                        <div class="col">
                                            <?php
                                            if ($resultUser = mysqli_query($link, "SELECT * FROM usuarios")) {
                                                //print_r($resultOfertas);die;
                                                while ($row_User = $resultUser->fetch_assoc()) {
                                                    ?>
                                                    <span style="color: #563d7c;font-weight: bold;font-size: 12px;"><?php echo $row_User['nombre'].' '.$row_User['apellido']; ?></span><br>
                                                    <!--<span style="color: #563d7c;font-weight: bold;font-size: 12px;">Medellin Antioquia</span>-->
                                                    <?php
                                                }
                                            }
                                            ?>

                                            <br>
                                        </div>
                                        <div class="col">
                                            <h2 style="color: #563d7c;font-weight: bold;font-size: 15px;">Oferta</h2>
                                            <p><?php echo $row['valor_oferta']; ?></p>
                                        </div>
                                        <div class="col">
                                            <h2 style="color: #563d7c;font-weight: bold;font-size: 15px;">Fecha de Oferta</h2>
                                            <p><?php echo $row['fecha_oferta']; ?></p>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>


