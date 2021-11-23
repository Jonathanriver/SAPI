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
                            <br><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-left">
                            <h2 class="texto-titulo-perfil" style="margin-left: 10%">Datos de Usuario</h2>
                        </div>
                    </div>
                    <br>
                    <br>
                    <form action="Controladores/RegistrarUsuarios.php" method="POST">
                        <div class="row">
                            <div class="col" style="overflow: auto;height: 440px;">
                                <div class="card deliniar-perfil">
                                    <div class="card-body">

                                        <div class="table">
                                            <div class="row">
                                                <div class="col-4 text-right">
                                                    <span class="label-perfil">Nombre completo:</span>
                                                </div>
                                                <div class="col-6">
                                                    <input type="text" value="" class="form-control campo-perfil" name="nombre">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4 text-right">
                                                    <span class="label-perfil">Tipo de Documento:</span>
                                                </div>
                                                <div class="col-6">
                                                    <select class="form-control campo-perfil" name="tipo_documento">
                                                        <option value="0">Seleccione</option>
                                                        <?php
                                                        if ($resultOfertas = mysqli_query($link, "SELECT * FROM tipo_documento where activo=1")) {
                                                            //print_r($resultOfertas);die;
                                                            while ($row = $resultOfertas->fetch_assoc()) {
                                                                ?>
                                                                <option value="<?php echo $row['idtipo_documento']; ?>"><?php echo $row['nombre']; ?></option>
                                                                <?php
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4 text-right">
                                                    <span class="label-perfil">Documento:</span>
                                                </div>
                                                <div class="col-6">
                                                    <input type="text" value="" class="form-control campo-perfil" name="documento">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4 text-right">
                                                    <span class="label-perfil">Teléfono:</span>
                                                </div>
                                                <div class="col-6">
                                                    <input type="text" value="" class="form-control campo-perfil" name="telefono">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4 text-right">
                                                    <span class="label-perfil">Celular:</span>
                                                </div>
                                                <div class="col-6">
                                                    <input type="text" value="" class="form-control campo-perfil" name="celular">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4 text-right">
                                                    <span class="label-perfil">E-mail:</span>
                                                </div>
                                                <div class="col-6">
                                                    <input type="text" value="" class="form-control campo-perfil" name="email">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4 text-right">
                                                    <span class="label-perfil">Departamento:</span>
                                                </div>
                                                <div class="col-6">
                                                    <select class="form-control campo-perfil" id="Depart" name="departamento" onchange="Comparara2()">
                                                        <option value="0">Seleccione</option>
                                                        <?php
                                                        if ($resultOfertas = mysqli_query($link, "SELECT * FROM departamento")) {
                                                            while ($row = $resultOfertas->fetch_assoc()) {
                                                                ?>
                                                                <option value="<?php echo $row['iddepartamento']; ?>"><?php echo $row['nombre']; ?></option>
                                                                <?php
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4 text-right">
                                                    <span class="label-perfil">Ciudad:</span>
                                                </div>
                                                <div class="col-6">
                                                    <select class="form-control campo-perfil" id="municipio" name="ciudad">
                                                        <option>Seleccionar</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4 text-right">
                                                    <span class="label-perfil">Fecha de Nacimiento:</span>
                                                </div>
                                                <div class="col-6">
                                                    <input type="date" value="" class="form-control campo-perfil" name="fecha_naci">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4 text-right">
                                                    <span class="label-perfil">Nivel Academico:</span>
                                                </div>
                                                <div class="col-6">
                                                    <select class="form-control campo-perfil" name="nivel_aca">
                                                        <option value="0">Seleccione</option>
                                                        <?php
                                                        if ($resultOfertas = mysqli_query($link, "SELECT * FROM nivel_academico")) {
                                                            while ($row = $resultOfertas->fetch_assoc()) {
                                                                ?>
                                                                <option value="<?php echo $row['idnivel_academico']; ?>"><?php echo $row['nombre']; ?></option>
                                                                <?php
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4 text-right">
                                                    <span class="label-perfil">Institución Perteneciente:</span>
                                                </div>
                                                <div class="col-6">
                                                    <select class="form-control campo-perfil" id="institucion" name="institu" onchange="Institu()">
                                                        <option value="0">Seleccione</option>
                                                        <?php
                                                        if ($resultOfertas = mysqli_query($link, "SELECT * FROM instituciones")) {
                                                            while ($row = $resultOfertas->fetch_assoc()) {
                                                                ?>
                                                                <option value="<?php echo $row['idinstituciones']; ?>"><?php echo $row['nombre']; ?></option>
                                                                <?php
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row" id="sede" style="display: none;">
                                                <div class="col-4 text-right">
                                                    <span class="label-perfil">Sede:</span>
                                                </div>
                                                <div class="col-6">
                                                    <select class="form-control campo-perfil" name="sede" >
                                                        <option value="0">Seleccione</option>
                                                        <?php
                                                        if ($resultOfertas = mysqli_query($link, "SELECT * FROM centros_formacion")) {
                                                            while ($row = $resultOfertas->fetch_assoc()) {
                                                                ?>
                                                                <option value="<?php echo $row['idcentros_formacion']; ?>"><?php echo $row['nombre']; ?></option>
                                                                <?php
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="card-header">
                                        <h3 class="texto-titulo-perfil">Credenciales Acceso</h3>
                                    </div>
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-4 text-right">
                                                <span class="label-perfil">Contraseña:</span>
                                            </div>
                                            <div class="col-6 text-left">
                                                <!--<input type="submit" value="Actualizar" class="btn btn-warning" style="background-color: #fc7323; border-color: transparent;color: white;"/>-->
                                                <input type="text" value="" class="form-control campo-perfil"  name="clave">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 text-right">
                                                <br>
                                                <input type="submit" value="Registrar" class="btn btn-warning" style="background-color: #fc7323; border-color: transparent;color: white;"/>
                                            </div>
                                            <div class="col-6 text-left">
                                                <br>
                                                <a href="index.php" class="btn btn-warning" style="background-color: #fc7323; border-color: transparent;color: white;">Cancelar</a>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <br>
                </div>

            </div>
            <!--<div class="row footer">
                <p><b>footer</b> (fixed height)</p>
            </div>-->
        </div>
        <script type="text/javascript">
            function Comparara2() {
                $('#municipio').html('<option value="0">Seleccione</option>');
                var Depart;
                var campo1 = $('#Depart').val();

                $.ajax({
                    url: "./Controladores/ConsultaListaMunicipios.php?id_departamento=" + campo1,
                    contentType: "application/json",
                    success: function (data) {
                        Depart = JSON.parse(data);
                        for (var i = 0; i < Depart.length; i++) {
                            $('#municipio').append('<option value="' + Depart[i]['idmunicipio'] + '">' + Depart[i]['nombre'] + '</option>');
                        }
                    }
                });
            }
            
            function Institu(){
                var int = $('#institucion').val();
                
                if(int === '39'){
                    $('#sede').show();                    
                }else{
                    $('#sede').hide();   
                }
            }
        </script>
    </body>

</html>


