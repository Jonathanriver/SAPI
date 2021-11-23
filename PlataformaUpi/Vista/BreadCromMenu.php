<br id="separador-bread">
<div class="container-fluid">
    <div class="container">
        <div class="row" id="vista-bread">
            <div class="col text-left">
                <h3 style="color: #563d7c;"><?php echo $textoCate; ?></h3>
            </div>
            <div class="col text-right">
                <a class="btn" style="color: #563d7c;font-weight: bold;" onclick="Ocultar()" id="vinculo"><i class="fas fa-plus-circle"></i> <span id="AOcultar">Ocultar Destacados</span></a>
            </div>
        </div>
    </div>
</div>
<script>
    function Ocultar() {
        $('#Favoritos').fadeOut(1500);
        $('#AOcultar').text('Mostrar Destacados');
        $('#vinculo').attr('onclick', 'Mostrar()');
    }

    function Mostrar() {
        $('#Favoritos').fadeIn(2000);
        $('#AOcultar').text('Ocultar Destacados');
        $('#vinculo').attr('onclick', 'Ocultar()');
    }
    
    function OcultarMenu() {
        $('#menucontent').fadeOut(1000);
        $('#MOcultar').text('Mostrar Menu');
        $('#vinculoMenu').attr('onclick', 'MostrarMenu()');
    }

    function MostrarMenu() {
        $('#menucontent').fadeIn(1000);
        $('#MOcultar').text('Ocultar Menu');
        $('#vinculoMenu').attr('onclick', 'OcultarMenu()');
    }
</script>
