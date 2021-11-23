// Funcionalidad del Select: Señale el estado de desarrollo de la creación...
function show(id) {

    if (id == "TRL_1") {
        $("#trl_1").show();
        $("#trl_2").hide();
        $("#trl_3").hide();
        $("#trl_4").hide();
        $("#trl_5").hide();
        $("#trl_6").hide();
        $("#trl_7").hide();
        $("#trl_8").hide();
        $("#trl_9").hide();
    }
    if (id == "TRL_2") {
        $("#trl_1").hide();
        $("#trl_2").show();
        $("#trl_3").hide();
        $("#trl_4").hide();
        $("#trl_5").hide();
        $("#trl_6").hide();
        $("#trl_7").hide();
        $("#trl_8").hide();
        $("#trl_9").hide();
    }
    
    if (id == "TRL_3") {
        $("#trl_1").hide();
        $("#trl_2").hide();
        $("#trl_3").show();
        $("#trl_4").hide();
        $("#trl_5").hide();
        $("#trl_6").hide();
        $("#trl_7").hide();
        $("#trl_8").hide();
        $("#trl_9").hide();
    }
    if (id == "TRL_4") {
        $("#trl_1").hide();
        $("#trl_2").hide();
        $("#trl_3").hide();
        $("#trl_4").show();
        $("#trl_5").hide();
        $("#trl_6").hide();
        $("#trl_7").hide();
        $("#trl_8").hide();
        $("#trl_9").hide();
    }
    
    if (id == "TRL_5") {
        $("#trl_1").hide();
        $("#trl_2").hide();
        $("#trl_3").hide();
        $("#trl_4").hide();
        $("#trl_5").show();
        $("#trl_6").hide();
        $("#trl_7").hide();
        $("#trl_8").hide();
        $("#trl_9").hide();
    }
    if (id == "TRL_6") {
        $("#trl_1").hide();
        $("#trl_2").hide();
        $("#trl_3").hide();
        $("#trl_4").hide();
        $("#trl_5").hide();
        $("#trl_6").show();
        $("#trl_7").hide();
        $("#trl_8").hide();
        $("#trl_9").hide();
    }
    
    if (id == "TRL_7") {
        $("#trl_1").hide();
        $("#trl_2").hide();
        $("#trl_3").hide();
        $("#trl_4").hide();
        $("#trl_5").hide();
        $("#trl_6").hide();
        $("#trl_7").show();
        $("#trl_8").hide();
        $("#trl_9").hide();
    }
    if (id == "TRL_8") {
        $("#trl_1").hide();
        $("#trl_2").hide();
        $("#trl_3").hide();
        $("#trl_4").hide();
        $("#trl_5").hide();
        $("#trl_6").hide();
        $("#trl_7").hide();
        $("#trl_8").show();
        $("#trl_9").hide();
    }
    
    if (id == "TRL_9") {
        $("#trl_1").hide();
        $("#trl_2").hide();
        $("#trl_3").hide();
        $("#trl_4").hide();
        $("#trl_5").hide();
        $("#trl_6").hide();
        $("#trl_7").hide();
        $("#trl_8").hide();
        $("#trl_9").show();
    }
//    Descipción de la creación a registrar
    if(id=="Otros productos de consumo"){
        $("#OPC").show();
    }
    if(id=="Mobiliario, juegos"){
         $("#OPC").hide();   
    }
    if(id=="Ingeniería civil"){
        $("#OPC").hide();   
    }
}

// <!-- PROCEDIMIENTO -->
    let pr = document.getElementById('PRO')
    pr.onclick = showPR;

    function showPR(evento) {
        $("#pro").show();
        $("#prod").hide();
        $("#compo").hide();
        $("#susta").hide();
        $("#artef").hide();
        $("#inst").hide();
        $("#herr").hide();
        $("#maq").hide();
        $("#meca").hide();
        $("#apar").hide();
        $("#met").hide();

    }
    // 
    let met = document.getElementById('MET')
    met.onclick = showmet;

    function showmet(evento) {
        $("#met").show();
        $("#pro").hide();
        $("#prod").hide();
        $("#compo").hide();
        $("#susta").hide();
        $("#artef").hide();
        $("#inst").hide();
        $("#herr").hide();
        $("#maq").hide();
        $("#meca").hide();
        $("#apar").hide();
    }
    // 
    let apar = document.getElementById('APAR')
    apar.onclick = showapar;

    function showapar(evento) {
        $("#apar").show();
        $("#met").hide();
        $("#pro").hide();
        $("#prod").hide();
        $("#compo").hide();
        $("#susta").hide();
        $("#artef").hide();
        $("#inst").hide();
        $("#herr").hide();
        $("#maq").hide();
        $("#meca").hide();
    }
    //
    let meca = document.getElementById('MECA')
    meca.onclick = showmeca;

    function showmeca(evento) {
        $("#meca").show();
        $("#apar").hide();
        $("#met").hide();
        $("#pro").hide();
        $("#prod").hide();
        $("#compo").hide();
        $("#susta").hide();
        $("#artef").hide();
        $("#inst").hide();
        $("#herr").hide();
        $("#maq").hide();
    }
    // 
    let maq = document.getElementById('MAQ')
    maq.onclick = showmaq;

    function showmaq(evento) {
        $("#maq").show();
        $("#meca").hide();
        $("#apar").hide();
        $("#met").hide();
        $("#pro").hide();
        $("#prod").hide();
        $("#compo").hide();
        $("#susta").hide();
        $("#artef").hide();
        $("#inst").hide();
        $("#herr").hide();
    }
    // 
    let herr = document.getElementById('HERR')
    herr.onclick = showherr;

    function showherr(evento) {
        $("#herr").show();
        $("#maq").hide();
        $("#meca").hide();
        $("#apar").hide();
        $("#met").hide();
        $("#pro").hide();
        $("#prod").hide();
        $("#compo").hide();
        $("#susta").hide();
        $("#artef").hide();
        $("#inst").hide();
    }
    // 
    let inst = document.getElementById('INST')
    inst.onclick = showinst;

    function showinst(evento) {
        $("#inst").show();
        $("#herr").hide();
        $("#maq").hide();
        $("#meca").hide();
        $("#apar").hide();
        $("#met").hide();
        $("#pro").hide();
        $("#prod").hide();
        $("#compo").hide();
        $("#susta").hide();
        $("#artef").hide();
    }
    // 
    let artef = document.getElementById('ARTEF')
    artef.onclick = showartef;

    function showartef(evento) {
        $("#artef").show();
        $("#inst").hide();
        $("#herr").hide();
        $("#maq").hide();
        $("#meca").hide();
        $("#apar").hide();
        $("#met").hide();
        $("#pro").hide();
        $("#prod").hide();
        $("#compo").hide();
        $("#susta").hide();
    }
    // 
    let susta = document.getElementById('SUSTA')
    susta.onclick = showsusta;

    function showsusta(evento) {
        $("#susta").show();
        $("#artef").hide();
        $("#inst").hide();
        $("#herr").hide();
        $("#maq").hide();
        $("#meca").hide();
        $("#apar").hide();
        $("#met").hide();
        $("#pro").hide();
        $("#prod").hide();
        $("#compo").hide();
    }
    // 
    let compo = document.getElementById('COMPO')
    compo.onclick = showcompo;

    function showcompo(evento) {
        $("#compo").show();
        $("#susta").hide();
        $("#artef").hide();
        $("#inst").hide();
        $("#herr").hide();
        $("#maq").hide();
        $("#meca").hide();
        $("#apar").hide();
        $("#met").hide();
        $("#pro").hide();
        $("#prod").hide();
    }
    // 
    let prod = document.getElementById('PROD')
    prod.onclick = showprod;

    function showprod(evento) {
        $("#prod").show();
        $("#compo").hide();
        $("#susta").hide();
        $("#artef").hide();
        $("#inst").hide();
        $("#herr").hide();
        $("#maq").hide();
        $("#meca").hide();
        $("#apar").hide();
        $("#met").hide();
        $("#pro").hide();
    }


    // Segunda Funcionalidad

    let p = document.getElementById('DI')
    p.onclick = showDI;

    function showDI(evento) {
        $("#di").show();
        $("#di3").hide();
        $("#stci").hide();
        $("#pi").hide();
        $("#mu").hide();
    }
    // 
    let d3 = document.getElementById('DI3')
    d3.onclick = showDI3;

    function showDI3(evento) {
        $("#di3").show();
        $("#di").hide();
        $("#stci").hide();
        $("#pi").hide();
        $("#mu").hide();

    }
    //STCI
    let si = document.getElementById('STCI')
    si.onclick = showsi;

    function showsi(evento) {
        $("#stci").show();
        $("#di").hide();
        $("#di3").hide();
        $("#pi").hide();
        $("#mu").hide();
    }
    // 
    let pi = document.getElementById('PI')
    pi.onclick = showpi;

    function showpi(evento) {
        $("#pi").show();
        $("#stci").hide();
        $("#di").hide();
        $("#di3").hide();
        $("#mu").hide();
    }
    // MU

    let mu = document.getElementById('MU')
    mu.onclick = showmmu;

    function showmmu(evento) {
        $("#mu").show();
        $("#pi").hide();
        $("#stci").hide();
        $("#di").hide();
        $("#di3").hide();
    }
    // PROCEDIMIENTO


    function mostrar(id) {
        // NCDI
        if (id == "Nuevas creaciones y diseños industriales") {
            $("#NCDI").show();
            $("#SD").hide();
        }
        if (id == "Signos distintivos") {
            $("#SD").show();
            $("#NCDI").hide();
        }
        if (id == "seleccione") {
            $("#SD").hide();
            $("#NCDI").hide();
        }
        // Se han realizado solicitudes anteriores de protección de patente u otros títulos
        if (id == "Si") {
            $("#solicitudes").hide();
            $("#solicitudes").show();
        }
        if (id == "No") {
            $("#solicitudes").hide();
        }
        // Fin de Solicitudes

        // Otra Varieda obción Multiple
        if (id == "otraVariedad") {
            $("#otraVariedad").show();
        }
        if (id == "Sucesion") {
            $("#otraVariedad").hide();
        }
        if (id == "Contracto") {
            $("#otraVariedad").hide();
        }
        //Fin de otras variedades 
        // Situación de las Variedades Opciones uno
        if (id == "Fue ofrecida a la venta y comercializada por primera vez en la subregión andina") {
            // $("#situacion_dos").hide();
            $("#situacionVaried").show();
        }
        if (id == "No ha sido ofrecida a la vaenta o entregada de otra manera ilicita a terceros en la subregión andina") {
            // $("#situacion_dos").hide();
            $("#situacionVaried").hide();
        }
        // 
        if (id == "Fue ha sido ofrecida a la venta o entregada de otra manera licita en terceros países") {
            $("#variedad_Dos").show();
        }
        if (id == "No ha sido ofrecida a la venta o entregada de otra manera licita en terceros países") {
            $("#variedad_Dos").hide();
        }
        // Opciones de Examen técnico
        if (id == "Ya se ha realizado") {
            $("#Esta_Curso").hide();
            $("#Todavia_No").hide();
            $("#Ya_Realizado").show();
        }
        if (id == "Está en curso de realización") {
            $("#Ya_Realizado").hide();
            $("#Esta_Curso").hide();
            $("#Todavia_No").show();
        }
        if (id == "Todavía no se ha iniciado") {
            $("#Ya_Realizado").hide();
            $("#Todavia_No").hide();
            $("#Esta_Curso").show();

        }
        //Fin de otras variedades 
    }
