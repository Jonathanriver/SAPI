<?php
include_once './Modelo/Conexion.php';

$query = "SELECT * FROM `categoria`";
$resultado = $link->query($query);
?>
<script>
    $(document).ready(function () {
        $('#imagen1').change(function () {
            $('#drag1').text(this.files.length + " Imagen Seleccionada");
            Montar();
        });

        $('#imagen2').change(function () {
            $('#drag2').text(this.files.length + " Imagen Seleccionada");
            Montar2();
        });

        $('#imagen3').change(function () {
            $('#drag3').text(this.files.length + " Imagen Seleccionada");
            Montar3();
        });

        $('#imagen4').change(function () {
            $('#drag4').text(this.files.length + " Imagen Seleccionada");
            Montar4();
        });

        $('#imagen5').change(function () {
            $('#drag5').text(this.files.length + " Imagen Seleccionada");
            Montar5();
        });

        $('#imagen6').change(function () {
            $('#drag6').text(this.files.length + " Imagen Seleccionada");
            Montar6();
        });

        $('#imagen7').change(function () {
            $('#drag7').text(this.files.length + " Imagen Seleccionada");
            Montar7();
        });
    });
</script>
<div class="container-fluid">
    <div class="container">
        <form method="POST" action="Controladores/RegistrarProduct.php" enctype="multipart/form-data">
            <div class="row">
                <div class="col text-center">
                    <h3><i class="fas fa-cart-arrow-down"></i> Quiero Vender</h3>
                </div>
            </div>
            <bR>
            <div class="row">
                <div class="col text-center">
                    <h3>Paso <span class="badge" style="background-color: #563d7c;color:white;">2</span></h3><hr>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <h5 style="color:#563d7c;" id="titulocat">Seleccione la categoria</h5>
                </div>
            </div>
            <br>

            <div class="row" id="cates">
                <?php while ($row = $resultado->fetch_assoc()) { ?>
                    <div class="col-3">

                        <a class="btn btn-lg btn-block btn-warning text-white" style="margin: 14px;" id="Categ" onclick="SuCate(<?php echo $row['idcategoria']; ?>)">
                            <i class="fas <?php echo $row['icono']; ?>" style="font-size: 50px;"></i><br><?php echo utf8_encode($row['nombre']); ?>
                            <input type="hidden" name="categoria" value="<?php echo $row['idcategoria']; ?>" id="cbx_categoria">
                            <!--<input type="hidden" name="subcategoria" value="" id="cbx_subCate">-->
                        </a>

                    </div>
                <?php } ?>

            </div>
            <div class="row" id="subcates" style="display: none;">

            </div>
            <br><br>
            <div class="row" id="tituloEscoj" style="display: none;">
                <div class="col text-center">
                    <h6 style="color: #563d7c;"><i class="fas fa-check-circle"></i> Sub Categoria <span id="selecionado"></span> Seleccionada.</h6>
                </div>
            </div>
            <input type="hidden" id="ValorsubCap" name="idcategoria">
            <br>
            <div class="row">
                <div class="col">
                    <label>Nombre Producto</label>
                    <input type="text" name="nombre" class="form-control">
                </div>
                <div class="col">
                    <label>Titulo</label>
                    <input type="text" name="titulo" class="form-control">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <label>Descripción</label>
                    <textarea class="form-control" name="descripcion"></textarea>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <label>Fecha Publicación</label>
                    <input type="date" name="fecha_publi" class="form-control">
                </div>
                <div class="col">
                    <label>Fecha Cierre</label>
                    <input type="date" name="fecha_cierre" class="form-control">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <label>Carga de Imagenes</label>
                </div>
            </div>

            <div class="row">
                <div class="col bg-secondary" id="cotent" style="border: solid 1.5px #fff;">
                    <div class="row">
                        <div class="col text-center" id="contImage">
                    <!--<input type="file" name="imagen2" class="form-control">-->
                            <input type="file" class="form_fil" id="imagen1" name="imagen1" multiple>
                            <p id="drag1"><i class="fas fa-camera"></i><br><span style="font-size: 12px;">Arrastrar Imagen</span></p>

                            <!--<button type="submit" class="btn" style="background-color: #563d7c;">Cargar</button>-->
                        </div>
                    </div>
                </div>
                <div class="col bg-secondary" style="border: solid 1.5px #fff;">
                    <div class="row">
                        <div class="col text-center" id="cotent2" style="border: solid 1.5px #fff;height: 90px;">
                    <!--<input type="file" name="imagen2" class="form-control">-->
                            <input type="file" class="form_fil" id="imagen2" name="imagen2" multiple>
                            <p id="drag2"><i class="fas fa-camera"></i><br><span style="font-size: 12px;">Arrastrar Imagen</span></p>
                            <img src="" id="profile-img-tag-2" style="width:100%;margin: 5px;display: none;">
                            <!--<button type="submit" class="btn" style="background-color: #563d7c;">Cargar</button>-->
                        </div>

                        <div class="col text-center" id="cotent3" style="border: solid 1.5px #fff;height: 90px;">
                            <!--<input type="file" name="imagen2" class="form-control">-->
                            <input type="file" class="form_fil" id="imagen3" name="imagen3" multiple>
                            <p id="drag3"><i class="fas fa-camera"></i><br><span style="font-size: 12px;">Arrastrar Imagen</span></p>
                            <img src="" id="profile-img-tag-3" style="width:100%;margin-top: 15px;display: none;">
                            <!--<button type="submit" class="btn" style="background-color: #563d7c;">Cargar</button>-->
                        </div>

                        <div class="col text-center" id="cotent4" style="border: solid 1.5px #fff;height: 90px;">
                            <!--<input type="file" name="imagen2" class="form-control">-->
                            <input type="file" class="form_fil" id="imagen4" name="imagen4" multiple>
                            <p id="drag4"><i class="fas fa-camera"></i><br><span style="font-size: 12px;">Arrastrar Imagen</span></p>
                            <img src="" id="profile-img-tag-4" style="width:100%;margin: 15px;display: none;">
                            <!--<button type="submit" class="btn" style="background-color: #563d7c;">Cargar</button>-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center" id="cotent5" style="border: solid 1.5px #fff;height: 90px;">
                    <!--<input type="file" name="imagen2" class="form-control">-->
                            <input type="file" class="form_fil" id="imagen5" name="imagen5" multiple>
                            <p id="drag5"><i class="fas fa-camera"></i><br><span style="font-size: 12px;">Arrastrar Imagen</span></p>
                            <img src="" id="profile-img-tag-5" style="width:100%;margin: 15px;display: none;">
                            <!--<button type="submit" class="btn" style="background-color: #563d7c;">Cargar</button>-->
                        </div>
                        <div class="col text-center" id="cotent6" style="border: solid 1.5px #fff;height: 90px;">
                            <!--<input type="file" name="imagen2" class="form-control">-->
                            <input type="file" class="form_fil" id="imagen6" name="imagen6" multiple>
                            <p id="drag6"><i class="fas fa-camera"></i><br><span style="font-size: 12px;">Arrastrar Imagen</span></p>
                            <img src="" id="profile-img-tag-6" style="width:100%;margin: 15px;display: none;">
                            <!--<button type="submit" class="btn" style="background-color: #563d7c;">Cargar</button>-->
                        </div>

                        <div class="col text-center" id="cotent7" style="border: solid 1.5px #fff;height: 90px;">
                            <!--<input type="file" name="imagen2" class="form-control">-->
                            <input type="file" class="form_fil" id="imagen7" name="imagen7" multiple>
                            <p id="drag7"><i class="fas fa-camera"></i><br><span style="font-size: 12px;">Arrastrar Imagen</span></p>
                            <img src="" id="profile-img-tag-7" style="width:100%;margin: 15px;display: none;">
                            <!--<button type="submit" class="btn" style="background-color: #563d7c;">Cargar</button>-->
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <label>Precio Base</label>
                    <input type="text" name="precio_base" class="form-control">
                </div>
                <div class="col">
                    <label>Estado</label>
                    <select name="estado" class="form-control">
                        <option >Seleccione</option>
                        <option value="1">Nuevo</option>
                        <option value="2">Usado</option>
                    </select>
                </div>
            </div>
            <br>

            <br>
            <div class="row">
                <div class="col text-center">
                    <button type="submit" class="btn btn-warning"><i class="fas fa-save"></i> Registrar Producto</button>
                </div>
            </div>
            <br>
            <br>
        </form>
    </div>
</div>

<script language="javascript">
    function SuCate(categorias) {
        //var categorias = $("#cbx_categoria").val();

        $.post("Includes/GetSubCate.php", {id_estado: categorias}, function (data) {
            $('#cates').hide(200);
            $('#subcates').show(200);
            $('#titulocat').text('Seleccione una Sub-categoria');
            $('#titulocat').append(' <a class="btn btn-warning" onclick="MostrarCates()" id="BotonVolver"><i class="fas fa-long-arrow-alt-left"></i> Volver a Categorias</a>');
            //console.log(JSON.stringify(data));
            var datos = data;
            //console.log(data);
            $("#subcates").append(data);
        });
    }

    function selectSub(valor) {
        //console.log();
        var dato = $(valor).attr('data_tar');
        var name = $(valor).attr('data_name');

        $('#ValorsubCap').val(dato);

        $('#tituloEscoj').show(200);
        $('#selecionado').text(name);
    }

    function MostrarCates() {
        $('#BotonVolver').hide(200);
        $('#subcates').empty();
        $('#subcates').hide(200);
        $('#cates').show(200);
    }

    function Montar() {
        var imagen = $('#imagen1').val();
        $('#drag1').hide(200);
        $('#profile-img-tag').show(200);
        readURL(imagen);

    }

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#cotent').css('background-image', 'url(' + e.target.result + ')');
                $('#cotent').css('background-size', 'cover');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imagen1").change(function () {
        readURL(this);
    });

    function Montar2() {
        var imagen2 = $('#imagen2').val();
        $('#drag2').hide(200);
        //$('#profile-img-tag-2').show(200);
        readURL2(imagen2);

    }

    function readURL2(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#cotent2').css('background-image', 'url(' + e.target.result + ')');
                $('#cotent2').css('background-size', 'cover');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imagen2").change(function () {
        readURL2(this);
    });

    function Montar3() {
        var imagen3 = $('#imagen3').val();
        $('#drag3').hide(200);
        //$('#profile-img-tag-3').show(200);
        readURL3(imagen3);

    }

    function readURL3(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#cotent3').css('background-image', 'url(' + e.target.result + ')');
                $('#cotent3').css('background-size', 'cover');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imagen3").change(function () {
        readURL3(this);
    });

    function Montar4() {
        var imagen4 = $('#imagen4').val();
        $('#drag4').hide(200);
        //$('#profile-img-tag-4').show(200);
        readURL4(imagen4);

    }

    function readURL4(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#cotent4').css('background-image', 'url(' + e.target.result + ')');
                $('#cotent4').css('background-size', 'cover');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imagen4").change(function () {
        readURL4(this);
    });

    function Montar5() {
        var imagen5 = $('#imagen5').val();
        $('#drag5').hide(200);
        //$('#profile-img-tag-5').show(200);
        readURL5(imagen5);

    }

    function readURL5(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#cotent5').css('background-image', 'url(' + e.target.result + ')');
                $('#cotent5').css('background-size', 'cover');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imagen5").change(function () {
        readURL5(this);
    });

    function Montar6() {
        var imagen6 = $('#imagen6').val();
        $('#drag6').hide(200);
        //$('#profile-img-tag-6').show(200);
        readURL6(imagen6);

    }

    function readURL6(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#cotent6').css('background-image', 'url(' + e.target.result + ')');
                $('#cotent6').css('background-size', 'cover');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imagen6").change(function () {
        readURL6(this);
    });

    function Montar7() {
        var imagen7 = $('#imagen7').val();
        $('#drag7').hide(200);
        //$('#profile-img-tag-7').show(200);
        readURL7(imagen7);

    }

    function readURL7(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#cotent7').css('background-image', 'url(' + e.target.result + ')');
                $('#cotent7').css('background-size', 'cover');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imagen7").change(function () {
        readURL7(this);
    });




</script> 
