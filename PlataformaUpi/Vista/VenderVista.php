
<div class="row">
    <div class="col text-center">
        <h3><i class="fas fa-cart-arrow-down"></i>Quiero Vender</h3>
    </div>
</div>
<bR>
<div class="row">
    <div class="col text-center">
        <h3>Paso <span class="badge" style="background-color: #563d7c;color:white;">1</span></h3><hr>
    </div>
</div>
<br>
<div class="row">
    <div class="col">
        <h5 style="color:#563d7c;">Datos de contacto</h5>
    </div>
</div>
<br>

<form method="POST" action="VenderPanel.php">
    <div class="row">
        <div class="col">
            <h5 class="text-secondary">Cliente</h5>
        </div>
    </div>

    <div class="row">
        <div class="col-6 text-center">
            <label class="containerRadio">Individual&nbsp;&nbsp;<i class="fas fa-user" style="color: #563d7c;font-size: 20px;"></i>
                <input type="radio" name="radio" id="cliente1" disabled>
                <span class="checkmark"></span>
            </label>
        </div>
        <div class="col-6 text-center">
            <label class="containerRadio">Empresa&nbsp;&nbsp;<i class="fas fa-industry" style="color: #563d7c;font-size: 20px;"></i>
                <input type="radio" name="radio" id="cliente2" disabled>
                <span class="checkmark"></span>
            </label>
        </div>
        <?php
        //print_r($_SESSION['tipo_idtipo']);
        if ($_SESSION['tipo_idtipo'] == 1) {
            echo "<script>$('#cliente1').attr('checked','checked');</script>";
        } else if ($_SESSION['tipo_idtipo'] == 2) {
            echo "<script>$('#cliente2').attr('checked','checked');</script>";
        }
        ?>
    </div>
    <br>
    <div class="row">
        <div class="col-5">
            <input type="text" name="nombre" value="<?php echo $_SESSION['SESS_FIRST_NAME']; ?>" placeholder="Nombre" class="input-register form-control" readonly>
        </div>
        <div class="col-2"></div>
        <div class="col-5">
            <input type="text" name="apellido" value="<?php echo $_SESSION['SESS_LAST_NAME']; ?>" placeholder="Apellido" class="input-register form-control" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col-5">
            <input type="text" name="telefono" value="<?php echo $_SESSION['telefono']; ?>" placeholder="Teléfono" class="input-register form-control" readonly>
        </div>
        <div class="col-2"></div>
        <div class="col-5">
            <input type="text" name="movil" value="<?php echo $_SESSION['celular']; ?>" placeholder="Móvil" class="input-register form-control" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col-5">
            <input type="text" name="correo" value="<?php echo $_SESSION['email']; ?>" placeholder="Correo" class="input-register form-control" readonly>
        </div>
        <div class="col-2"></div>
        <div class="col-5">

        </div>
    </div>
    <div class="row">
        <div class="col-5">
            <input type="text" name="pais" placeholder="Pais" class="input-register form-control" readonly>
        </div>
        <div class="col-2"></div>
        <div class="col-5">
            <input type="text" name="ciudad" placeholder="Ciudad" class="input-register form-control"readonly >
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col text-center">
            <button type="submit" class="btn btn-warning"><i class="fas fa-forward"></i> Siguiente Paso</button>
        </div>
    </div>
    <br>
    <br>
</form>
