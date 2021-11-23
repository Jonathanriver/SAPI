<?php
$iduser = $_SESSION['SESS_MEMBER_ID'];
//print_r($iduser);die;
require_once './Modelo/Conexion.php';

if ($result = mysqli_query($link, "SELECT * FROM producto")) {


    $total = $result->num_rows;
}
?>

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <br>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <ul class="nav nav-pills mb-3 bg-warning text-white" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link text-dark" id="pills-anuncios-tab" data-toggle="pill" href="#pills-anuncios" role="tab" aria-controls="pills-anuncios" aria-selected="true">Mis Anuncios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" id="pills-favoritos-tab" data-toggle="pill" href="#pills-favoritos" role="tab" aria-controls="pills-favoritos" aria-selected="false">Mis Favoritos</a>
                </li>
                <!--<li class="nav-item">
                    <a class="nav-link text-dark" id="pills-mensajes-tab" data-toggle="pill" href="#pills-mensajes" role="tab" aria-controls="pills-mensajes" aria-selected="false">Mis Mensajes</a>
                </li>-->
                <li class="nav-item">
                    <a class="nav-link text-dark" id="pills-perfil-tab" data-toggle="pill" href="#pills-perfil" role="tab" aria-controls="pills-perfil" aria-selected="false">Mi Perfil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" id="pills-productos-tab" data-toggle="pill" href="#pills-productos" role="tab" aria-controls="pills-productos" aria-selected="false">Mis Ofertas</a>
                </li>
               <!--li class="nav-item">
                    <a class="nav-link text-dark" id="pills-monedero-tab" data-toggle="pill" href="#pills-monedero" role="tab" aria-controls="pills-monedero" aria-selected="false">Mis Productos</a>
                </li>-->
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-anuncios" role="tabpanel" aria-labelledby="pills-anuncios-tab">

                    <div class="row">
                        <div class="col-9">
                            <?php
                            //include_once '../Modelo/Conexion.php';
                            if ($resultProduct = mysqli_query($link, "SELECT * FROM producto WHERE usuarios_idusuarios=$iduser")) {
                                // print_r($resultProduct);die;
                                while ($row = $resultProduct->fetch_assoc()) {
                                    // echo "<option value='" . $row['idsub_categoria'] . "'>" . utf8_encode($row['nombre']) . "</option>";
                                    //print_r($row['descripcion']);echo "<br>";
                                    $id_prdo = $row['idproducto'];
                                    //print_r($id_prdo);die;
                                    if ($resultAnuncio = mysqli_query($link, "SELECT * FROM anuncios WHERE producto_idproducto=$id_prdo")) {

                                        while ($rowPod = $resultAnuncio->fetch_assoc()) {
                                            ?>
                                            <table class="table table-bordered">
                                                <tr>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col text-center">
                                                                <img src="Recursos/ImagenesProducto/<?php echo $row['image']; ?>" style="width: 260px;height: 200px;">
                                                            </div>
                                                            <div class="col">
                                                                <p style="color: #563d7c;font-weight: bold;font-size: 12px;"><?php echo $row['titulo'] ?></p>
                                                                <p style="color: #563d7c;font-weight: bold;font-size: 12px;">Cierre: <span class="text-secondary"><?php echo $row['fecha_cierre'] ?></span></p>
                                                                <div class="alert alert-secondary" role="alert">
                                                                    Este anuncio esta a espera de la aprobación de administración.
                                                                </div>
                                        <a class="btn botonDEtalle" style="background-color: #563d7c;" href="DetalleProducto.php?idproducto=<?php echo $row['idproducto']; ?>"><i class="fas fa-list"></i> Detalle</a>
                                                            </div>
                                                            <div class="col">
                                                                <h2 style="color: #563d7c;font-weight: bold;font-size: 15px;">Abierta a ofertas</h2>
                                                                <hr style="border: 0; border-top: 1px solid #563d7c;">
                                                                <p><b>Valor Actual</b><br><span class="badge badge-warning">$ <?php echo $row['precio_base']; ?></span></p>
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
                                            <?php
                                        }
                                    }
                                }
                            }
                            ?>   
                        </div>
                        <div class="col-3">
                            <div class="card text-center " style="width: 18rem;">
                                <br>
                                <i class="far fa-id-card" style="font-size: 50px;color:#563d7c;"></i>
                                <div class="card-body">
                                    <h5 class="card-title text-warning">Nuevos Anuncios</h5>
                                    <p class="card-text text-justify">Puedes Agregar más anuncios en este apartado.</p>
                                    <a href="CrearAnuncios.php" class="btn btn-warning" style="font-weight: bold;">Agregar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-favoritos" role="tabpanel" aria-labelledby="pills-favoritos-tab">
                    <div class="row">
                        <div class="col-9">


                        </div>
                        <div class="col-3">
                            <div class="card text-center " style="width: 18rem;">
                                <br>
                                <i class="fas fa-star-half-alt" style="font-size: 50px;color:#563d7c;"></i>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-warning">Anuncios Favoritos</h5>
                                    <p class="card-text text-center"style="font-weight: bold;" >Hay un total de: <span class="badge badge-warning">5 Ofertas</span></p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-mensajes" role="tabpanel" aria-labelledby="pills-mensajes-tab">
                    <h1>Mensajes</h1>
                </div>
                <div class="tab-pane fade" id="pills-perfil" role="tabpanel" aria-labelledby="pills-perfil-tab">
                    <div class="container-fluid">
                        <div class="container">
                            <div class="row">
                                <div class="col-4"></div>
                                <div class="col-4 text-center">
                                    <div class="contenedor-images"></div>
                                </div>
                                <div class="col-4"></div>
                            </div>
                            <hr>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <form method="POST" action="Controladores/EditarUser.php">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-center text-white" colspan="3" style="background-color: #563d7c;">Dato de tu Cuenta</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-white" style="background-color: #563d7c;width: 20%;">
                                                        Nombre
                                                    </td>
                                                    <td class="text-dark input-group nombre">
                                                        <input type="text" style="width: 50%;" class="form-control" name="nombre" id="FirstName" value="<?php echo $_SESSION['SESS_FIRST_NAME']; ?>" readonly>
                                                        <input type="text" style="width: 50%;" class="form-control" name="apellido" id="LastName" value="<?php echo $_SESSION['SESS_LAST_NAME']; ?>" readonly>
                                                    </td>
                                                    <td class="text-dark text-center">
                                                        <span class="badge badge-warning" style="border-radius: 16px;height: 20px;cursor: pointer;" onclick="Desbloquear()" id="botoncont"><i class="fas fa-edit" id="etiqueta"></i> Editar</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-white" style="background-color: #563d7c;">
                                                        Teléfono
                                                    </td>
                                                    <td class="text-dark">
                                                        <input type="tel" name="telefono" id="telefono" class="form-control" value="<?php echo $_SESSION['telefono']; ?>" readonly>
                                                    </td>
                                                    <td class="text-white text-center">
                                                        <span class="badge badge-warning" style="border-radius: 16px;height: 20px;cursor: pointer;" onclick="DesbloquearTel()" id="botoncontTel"><i class="fas fa-edit"></i> Editar</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-white" style="background-color: #563d7c;">
                                                        Movil
                                                    </td>
                                                    <td class="text-dark">
                                                        <input type="tel" name="movil" id="movil" class="form-control" value="<?php echo $_SESSION['celular']; ?>" readonly>

                                                    </td>
                                                    <td class="text-white text-center">
                                                        <span class="badge badge-warning" style="border-radius: 16px;height: 20px; cursor: pointer;" onclick="DesbloquearCel()" id="botoncontMov"><i class="fas fa-edit"></i> Editar</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-white" style="background-color: #563d7c;">
                                                        Tipo Usuario
                                                    </td>
                                                    <td class="text-dark">
                                                        <select name="tipo" id="tipo" readonly required class="form-control">
                                                            <?php
                                                            if ($_SESSION['tipo_idtipo'] == 1) {
                                                                echo "<option selected value='1'>Individual</option><option value='2'>Empresa</option>";
                                                            } else {
                                                                echo "<option selected value='1'>Empresa</option><option value='2'>Individual</option>";
                                                            }
                                                            ?>
                                                        </select>
                                                    </td>
                                                    <td class="text-white text-center">
                                                        <span class="badge badge-warning" style="border-radius: 16px;height: 20px;"><i class="fas fa-edit"></i> Editar</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-white" style="background-color: #563d7c;">
                                                        Email
                                                    </td>
                                                    <td class="text-dark">
                                                        <input type="email" name="email" class="form-control" value="<?php echo $_SESSION['email']; ?>" readonly required id="email">
                                                    </td>
                                                    <td class="text-white text-center">
                                                        <span class="badge badge-warning" style="border-radius: 16px;height: 20px;cursor: pointer;" onclick="DesbloquearEmail()" id="botoncontEmail"><i class="fas fa-edit"></i> Editar</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-white" style="background-color: #563d7c;">
                                                        Nombre de Usuario
                                                    </td>
                                                    <td class="text-dark">
                                                        <input type="text" name="user" class="form-control" value="<?php echo $_SESSION['usuario']; ?>" readonly required id="user">
                                                    </td>
                                                    <td class="text-white text-center">
                                                        <span class="badge badge-warning" style="border-radius: 16px;height: 20px;cursor: pointer;" id="botonUser" onclick="DesbloquearUser()"><i class="fas fa-edit"></i> Editar</span>
                                                    </td>
                                                </tr>
                                                <!--<tr>
                                                    <td class="text-white" style="background-color: #563d7c;">
                                                        Contraseña
                                                    </td>
                                                    <td class="text-dark">
                                                        <input type="password"
                                                        *************
                                                    </td>
                                                    <td class="text-white text-center">
                                                        <span class="badge badge-warning" style="border-radius: 16px;height: 20px;"><i class="fas fa-edit"></i> Editar</span>
                                                    </td>
                                                </tr>-->
                                                <tr>
                                                    <td class="text-white" style="background-color: #563d7c;">
                                                        Imagen de Perfil
                                                    </td>
                                                    <td class="text-white" colspan="2">
                                                        <input type="file" name="foto" class="form-control" id="foto" name="foto">
                                                    </td>
                                                    <!--<td class="text-white text-center">
                                                        <span class="badge badge-warning" style="border-radius: 16px;height: 20px;"><i class="fas fa-edit"></i> Cargar</span>
                                                    </td>-->
                                                </tr>
                                                <tr>
                                                    <td colspan="3" class="text-center">
                                                        <button type="submit" class="btn btn-warning btn-lg">Guardar Datos</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-productos" role="tabpanel" aria-labelledby="pills-productos-tab">
                    <div class="row">
                        <div class="col">
                            <table class="table table-bordered">
                                <tr>
                                    <td class="text-center"><b>Numero de Ofertas: <span class="badge badge-warning">240</span></b></td>
                                    <td class="text-center"><b>Ofertas Ganadas: <span class="badge badge-warning">240</span></b></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="container">
                                <table class="table table-bordered">
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="col-2 text-center">
                                                    <i class="fas fa-user" style="font-size: 50px;"></i>
                                                </div>
                                                <div class="col">
                                                    <span style="color: #563d7c;font-weight: bold;font-size: 12px;">Carlos Andrés Penagos</span><br>
                                                    <span style="color: #563d7c;font-weight: bold;font-size: 12px;">Medellin Antioquia</span>
                                                    <br>
                                                </div>
                                                <div class="col">
                                                    <h2 style="color: #563d7c;font-weight: bold;font-size: 15px;">Oferta</h2>
                                                    <p>$221.000</p>
                                                </div>
                                                <div class="col">
                                                    <h2 style="color: #563d7c;font-weight: bold;font-size: 15px;">Fecha de Oferta</h2>
                                                    <p>20/06/2019</p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="col-2 text-center">
                                                    <i class="fas fa-user" style="font-size: 50px;"></i>
                                                </div>
                                                <div class="col">
                                                    <span style="color: #563d7c;font-weight: bold;font-size: 12px;">Carlos Andrés Penagos</span><br>
                                                    <span style="color: #563d7c;font-weight: bold;font-size: 12px;">Medellin Antioquia</span>
                                                    <br>
                                                </div>
                                                <div class="col">
                                                    <h2 style="color: #563d7c;font-weight: bold;font-size: 15px;">Oferta</h2>
                                                    <p>$221.000</p>
                                                </div>
                                                <div class="col">
                                                    <h2 style="color: #563d7c;font-weight: bold;font-size: 15px;">Fecha de Oferta</h2>
                                                    <p>20/06/2019</p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="col-2 text-center">
                                                    <i class="fas fa-user" style="font-size: 50px;"></i>
                                                </div>
                                                <div class="col">
                                                    <span style="color: #563d7c;font-weight: bold;font-size: 12px;">Carlos Andrés Penagos</span><br>
                                                    <span style="color: #563d7c;font-weight: bold;font-size: 12px;">Medellin Antioquia</span>
                                                    <br>
                                                </div>
                                                <div class="col">
                                                    <h2 style="color: #563d7c;font-weight: bold;font-size: 15px;">Oferta</h2>
                                                    <p>$221.000</p>
                                                </div>
                                                <div class="col">
                                                    <h2 style="color: #563d7c;font-weight: bold;font-size: 15px;">Fecha de Oferta</h2>
                                                    <p>20/06/2019</p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="col-2 text-center ">
                                                    <i class="fas fa-user" style="font-size: 50px;"></i>
                                                </div>
                                                <div class="col">
                                                    <span style="color: #563d7c;font-weight: bold;font-size: 12px;">Carlos Andrés Penagos</span><br>
                                                    <span style="color: #563d7c;font-weight: bold;font-size: 12px;">Medellin Antioquia</span>
                                                    <br>
                                                </div>
                                                <div class="col">
                                                    <h2 style="color: #563d7c;font-weight: bold;font-size: 15px;">Oferta</h2>
                                                    <p>$221.000</p>
                                                </div>
                                                <div class="col">
                                                    <h2 style="color: #563d7c;font-weight: bold;font-size: 15px;">Fecha de Oferta</h2>
                                                    <p>20/06/2019</p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="col-2 text-center">
                                                    <i class="fas fa-user" style="font-size: 50px;"></i>
                                                </div>
                                                <div class="col">
                                                    <span style="color: #563d7c;font-weight: bold;font-size: 12px;">Carlos Andrés Penagos</span><br>
                                                    <span style="color: #563d7c;font-weight: bold;font-size: 12px;">Medellin Antioquia</span>
                                                    <br>
                                                </div>
                                                <div class="col">
                                                    <h2 style="color: #563d7c;font-weight: bold;font-size: 15px;">Oferta</h2>
                                                    <p>$221.000</p>
                                                </div>
                                                <div class="col">
                                                    <h2 style="color: #563d7c;font-weight: bold;font-size: 15px;">Fecha de Oferta</h2>
                                                    <p>20/06/2019</p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="col-2 text-center">
                                                    <i class="fas fa-user" style="font-size: 50px;"></i>
                                                </div>
                                                <div class="col">
                                                    <span style="color: #563d7c;font-weight: bold;font-size: 12px;">Carlos Andrés Penagos</span><br>
                                                    <span style="color: #563d7c;font-weight: bold;font-size: 12px;">Medellin Antioquia</span>
                                                    <br>
                                                </div>
                                                <div class="col">
                                                    <h2 style="color: #563d7c;font-weight: bold;font-size: 15px;">Oferta</h2>
                                                    <p>$221.000</p>
                                                </div>
                                                <div class="col">
                                                    <h2 style="color: #563d7c;font-weight: bold;font-size: 15px;">Fecha de Oferta</h2>
                                                    <p>20/06/2019</p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="tab-pane fade" id="pills-monedero" role="tabpanel" aria-labelledby="pills-monedero-tab">
                    <div class="container-fluid">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="card bg-secondary text-center">

                                        <p class="text-white" style="font-size: 20px;"> Hay un total de <span class="badge badge-warning"><?php echo $total; ?></span> productos.</p>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">

                                <?php
                                while ($row = $result->fetch_assoc()) {
                                    //print_r($row);
                                    //die; 
                                    ?>
                                    <div class="col">
                                        <div class="card tarjeta-producto" style="width: 20rem;" >
                                            <div class="card-header" style="background-color: #563d7c;color: white;">
                                                <h5 class="card-title" style=""><?php echo $row['titulo'] ?></h5>   
                                            </div>
                                            <img src="<?php echo $row['image']; ?>" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title"><?php echo $row['nombre'] ?></h5>
                                                <table class="table table-bordered" style="font-size: 14px;">
                                                    <tbody>
                                                        <tr>
                                                            <td colspan="2" style="background-color: #563d7c;color: white;font-weight: bold;">Descripcion:</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2" style="height: 120px;color: #563d7c;">
                                                                <?php echo $row['descripcion']; ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: #563d7c;color: white;font-weight: bold;font-size: 13px;">
                                                                Fecha Publicación:
                                                            </td>
                                                            <td style="color: #563d7c;">
                                                                <?php echo $row['fecha_publi']; ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: #563d7c;color: white;font-weight: bold;font-size: 13px;">
                                                                Fecha Cierre:
                                                            </td>
                                                            <td style="color: #563d7c;">
                                                                <?php echo $row['fecha_cierre']; ?>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="alert alert-success text-center font-weight-bold" role="alert">
                                                    Estado Oferta: <?php
                                                    if ($row['estado'] == 1) {
                                                        $estado = "Abierto";
                                                    } else if ($row['estado'] == 2) {
                                                        $estado = "En Subasta";
                                                    } else if ($row['estado'] == 3) {
                                                        $estado = "Cerrado";
                                                    }
                                                    echo $estado;
                                                    ?>
                                                </div>
                                                <div class="alert alert-warning text-center font-weight-bold" role="alert">
                                                    Estado Publicación: <?php
                                                    if ($row['estado'] == 1) {
                                                        $estado = "Abierto";
                                                    } else if ($row['estado'] == 2) {
                                                        $estado = "En Subasta";
                                                    } else if ($row['estado'] == 3) {
                                                        $estado = "Cerrado";
                                                    }
                                                    echo $estado;
                                                    ?>
                                                </div>
                                                <div class="container-fluid text-center">
                                                    <a href="#" class="btn" style="background-color: #563d7c;color: white;">Ver Detalle</a>
                                                    <a href="#" class="btn" style="background-color: #563d7c;color: white;">Publicar</a>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                    </div>

                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php
if ($_GET) {
    $seccion = $_GET['secction'];

    if ($seccion == 1) {
        echo "<script>$('#pills-perfil-tab').click(); </script>";
    } else if ($seccion == 2) {
        echo "<script>$('#pills-anuncios-tab').click(); </script>";
    } else if ($seccion == 3) {
        echo "<script>$('#pills-favoritos-tab').click(); </script>";
    } else if ($seccion == 4) {
        echo "<script>$('#pills-productos-tab').click(); </script>";
    } else if ($seccion == 5) {
        echo "<script>$('#pills-monedero-tab').click(); </script>";
    }
}
?>

<script>
    //Campos para editar nombre
    function Desbloquear() {
        $('#FirstName').removeAttr('readonly');
        $('#LastName').removeAttr('readonly');

        $('#botoncont').attr('onclick', 'Bloquear()');
        $('#botoncont').text('Bloquear');
        $('#botoncont').prepend('<i class="fas fa-save"></i> ');
    }

    function Bloquear() {
        $('#FirstName').attr('readonly', 'readonly');
        $('#LastName').attr('readonly', 'readonly');

        $('#botoncont').attr('onclick', 'Desbloquear()');
        $('#botoncont').text('Editar');
        $('#botoncont').prepend('<i class="fas fa-edit"></i> ');
    }

    //Campos para editar telefono
    function DesbloquearTel() {
        $('#telefono').removeAttr('readonly');

        $('#botoncontTel').attr('onclick', 'BloquearTel()');
        $('#botoncontTel').text('Bloquear');
        $('#botoncontTel').prepend('<i class="fas fa-save"></i> ');
    }

    function BloquearTel() {
        $('#telefono').attr('readonly', 'readonly');

        $('#botoncontTel').attr('onclick', 'DesbloquearTel()');
        $('#botoncontTel').text('Editar');
        $('#botoncontTel').prepend('<i class="fas fa-edit"></i> ');
    }

    //Campos para editar movil
    function DesbloquearCel() {
        $('#movil').removeAttr('readonly');

        $('#botoncontMov').attr('onclick', 'BloquearCel()');
        $('#botoncontMov').text('Bloquear');
        $('#botoncontMov').prepend('<i class="fas fa-save"></i> ');
    }

    function BloquearCel() {
        $('#movil').attr('readonly', 'readonly');

        $('#botoncontMov').attr('onclick', 'DesbloquearCel()');
        $('#botoncontMov').text('Editar');
        $('#botoncontMov').prepend('<i class="fas fa-edit"></i> ');
    }

    //Campos para editar email
    function DesbloquearEmail() {
        $('#email').removeAttr('readonly');

        $('#botoncontEmail').attr('onclick', 'BloquearEmail()');
        $('#botoncontEmail').text('Bloquear');
        $('#botoncontEmail').prepend('<i class="fas fa-save"></i> ');
    }

    function BloquearEmail() {
        $('#email').attr('readonly', 'readonly');

        $('#botoncontEmail').attr('onclick', 'DesbloquearEmail()');
        $('#botoncontEmail').text('Editar');
        $('#botoncontEmail').prepend('<i class="fas fa-edit"></i> ');
    }

    //Campos para editar Usuario
    function DesbloquearUser() {
        $('#user').removeAttr('readonly');

        $('#botonUser').attr('onclick', 'BloquearUser()');
        $('#botonUser').text('Bloquear');
        $('#botonUser').prepend('<i class="fas fa-save"></i> ');
    }

    function BloquearUser() {
        $('#user').attr('readonly', 'readonly');

        $('#botonUser').attr('onclick', 'DesbloquearUser()');
        $('#botonUser').text('Editar');
        $('#botonUser').prepend('<i class="fas fa-edit"></i> ');
    }
</script>