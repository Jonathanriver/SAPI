<?php
$cate = $_GET['categoria'];

if ($cate == 1) {
    $textoCate = "Automóviles";
} else if ($cate == 2) {
    //print_r($textoCate);die;
    $textoCate = "Alimentos";
} else if ($cate == 3) {
    $textoCate = "Inmuebles";
} else if ($cate == 4) {
    $textoCate = "Maquinaria";
} else if ($cate == 5) {
    $textoCate = "Reloj y Joyas";
} else if ($cate == 6) {
    $textoCate = "Viajes";
} else if ($cate == 7) {
    $textoCate = "Tecnología";
} else if ($cate == 8) {
    $textoCate = "Vestuario";
} else if ($cate == 9) {
    $textoCate = "Vestuario";
} else if ($cate == 10) {
    $textoCate = "Vestuario";
} else if ($cate == 11) {
    $textoCate = "Vestuario";
} else if ($cate == 12) {
    $textoCate = "Vestuario";
} else if ($cate == 13) {
    $textCate = "Varios";
}

?>
<br id="separador">
<div class="container-fluid">
    <div class="container">
        <div class="row" id="vistaBreadcoms">
            <div class="col">
                <span class="text-center" style="color: #563d7c;font-weight: bold;">Categorias > </span><span class="text-center" style="color: #563d7c;font-weight: bold;"><?php echo $textoCate; ?></span> 
            </div>
            <div class="col text-right">
                <a class="btn" style="color: #563d7c;font-weight: bold;cursor: pointer;" onclick="OcultarMenu()" id="vinculoMenu"><i class="fas fa-plus-circle"></i> <span id="MOcultar">Ocultar Menu</span></a>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col text-center">
                <table id="menucontent" style="width: 100%;">
                    <tr>
                        <td class="text-center">
                            <a class="btn boton-menu" href="ListaProductos.php?categoria=1">
                                <i class="fas fa-car icono-lis-cate"></i><br>Automóviles
                            </a>
                        </td>
                        <td class="text-center">
                            <a class="btn boton-menu" href="ListaProductos.php?categoria=2">
                                <i class="fas fa-utensils icono-lis-cate"></i><br>Alimentos
                            </a>
                        </td>
                        <td class="text-center">
                            <a class="btn boton-menu" href="ListaProductos.php?categoria=3">
                                <i class="fas fa-home icono-lis-cate"></i><br>Inmuebles
                            </a>
                        </td>
                        <td class="text-center">
                            <a class="btn boton-menu" href="ListaProductos.php?categoria=4">
                                <i class="fas fa-cogs icono-lis-cate"></i><br>Maquinaria
                            </a>
                        </td>
                        <td class="text-center">
                            <a class="btn boton-menu" href="ListaProductos.php?categoria=5">
                                <i class="fas fa-gem icono-lis-cate"></i><br>Joyas y Relojes
                            </a>
                        </td>
                        <td class="text-center">
                            <a class="btn boton-menu" href="ListaProductos.php?categoria=6">
                                <i class="fas fa-plane icono-lis-cate"></i><br>Viajes
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <a class="btn boton-menu" href="ListaProductos.php?categoria=7">
                                <i class="fas fa-laptop icono-lis-cate"></i><br>Tecnología
                            </a>
                        </td>
                        <td class="text-center">
                            <a class="btn boton-menu" href="ListaProductos.php?categoria=8">
                                <i class="fas fa-tshirt icono-lis-cate"></i><br>Vestuario
                            </a>
                        </td>
                        <td class="text-center">
                            <a class="btn boton-menu" href="ListaProductos.php?categoria=9">
                                <i class="fas fa-tshirt icono-lis-cate"></i><br>Vestuario
                            </a>
                        </td>
                        <td class="text-center">
                            <a class="btn boton-menu" href="ListaProductos.php?categoria=10">
                                <i class="fas fa-tshirt icono-lis-cate"></i><br>Vestuario
                            </a>
                        </td>
                        <td class="text-center">
                            <a class="btn boton-menu" href="ListaProductos.php?categoria=11">
                                <i class="fas fa-tshirt icono-lis-cate"></i><br>Vestuario
                            </a>
                        </td>
                        <td class="text-center">
                            <a class="btn boton-menu" href="ListaProductos.php?categoria=12">
                                <i class="fas fa-tshirt icono-lis-cate"></i><br>Vestuario
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>