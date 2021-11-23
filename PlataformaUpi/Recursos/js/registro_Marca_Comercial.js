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
    if (id == "Otros productos de consumo") {
        $("#OPC").show();
    }
    if (id == "Mobiliario, juegos") {
        $("#OPC").hide();
    }
    if (id == "Ingeniería civil") {
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
    $("#Mix").hide()
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
    $("#Mix").hide()
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
    $("#Mix").hide()
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
    $("#Mix").hide()
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
    $("#Mix").hide()
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
    $("#Mix").hide()
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
    $("#Mix").hide()
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
    $("#Mix").hide()
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
    $("#Mix").hide()
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
    $("#Mix").hide()
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
    $("#Mix").hide()
}

let mix = document.getElementById('MIX')
mix.onclick = showMix;

function showMix(evento) {
    $("#Mix").show()
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

// PROCEDIMIENTO
function col(id) {
    if (id == "Incluir otros colores") {
        $("#color").show();
    }
    if (id == "Pantome (2 casilla) Pantone 281C") {
        $("#color").hide();
    }
    if (id == "RGB (tres casillas) RGB 285, 02, 38") {
        $("#color").hide();
    }
    if (id == "CMYK (4 casillas) C:0 M:100, Y:100, K:0") {
        $("#color").hide();
    }
}

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
// Tipo de registro Signos distintivos

function seleccion() {

    var opt = $('#tipoSubRegistro').val();
    if (opt == "Null") {
        $('#FormuCerti').hide();
        $('#FormuComercial').hide();
        $('#FormuMarColectiva').hide();
        $('#FormuNomComercial').hide();
        $('#FormuEnseComercial').hide();
        $('#marcatpMr').hide();
        $('#nomTpComer').hide();
        $('#enseComer').hide();
        $('#marcRegistra').hide();
        $('#enseGrafic').hide();
        $('#Tipo_marca').hide();
        $('#product_Services').hide();
        $('#tipo_persona_Colectivo').hide();
        $('#marca_Certificacion').hide();
        $('#FormuOrigen').hide();
        $('#Tipo_proteccion').hide();
        $('#marca_Origen').hide();
        $('#lema_Comercial').hide();
        $('#nomFormChange3').hide();
        $('#nomFormChange1').hide();
        $('#activ_Com_name').hide();
        $('#nomFormChange').hide();
        $('#nomFormChange2').hide();
    } else
    if (opt == "Registro de marca comercial") {
        $('#Tipo_marca').show();
        $('#product_Services').show();
        $('#FormuComercial').show();
        $('#marcatpMr').show();
        $('#marcRegistra').show();
        //
        $('#nomTpComer').hide();
        $('#enseComer').hide();
        $('#enseGrafic').hide();
        $('#FormuMarColectiva').hide();
        $('#tipo_persona_Colectivo').hide();
        $('#FormuCerti').hide();
        $('#marca_Certificacion').hide();
        $('#marca_Origen').hide();
        $('#FormuOrigen').hide();
        $('#Tipo_proteccion').hide();
        $('#lema_Comercial').hide();
        $('#FormuNomComercial').hide();
        $('#activ_Com_name').hide();
        $('#nomFormChange3').hide();
        $('#nomFormChange1').hide();
        $('#nomFormChange').hide();
        $('#nomFormChange2').hide();
    } else {
        if (opt == "Registro de marca colectiva") {
            $('#tipo_persona_Colectivo').show();
            $('#Tipo_marca').show();
            $('#product_Services').show();
            $('#FormuMarColectiva').show();
            $('#marcatpMr').show();
            $('#marcRegistra').show();

            // 
            $('#enseComer').hide();
            $('#enseGrafic').hide();
            $('#nomTpComer').hide();
            $('#FormuCerti').hide();
            $('#marca_Certificacion').hide();
            $('#marca_Origen').hide();
            $('#FormuOrigen').hide();
            $('#Tipo_proteccion').hide();
            $('#lema_Comercial').hide();
            $('#nomFormChange').hide();
            $('#nomFormChange2').hide();
            $('#FormuComercial').hide();
            $('#activ_Com_name').hide();
            $('#FormuNomComercial').hide();
            $('#nomFormChange3').hide();
            $('#nomFormChange1').hide();
        } else {
            if (opt == "Registro de marca de certificación") {
                $('#marca_Certificacion').show();
                $('#Tipo_marca').show();
                $('#product_Services').show();
                $('#marcatpMr').show();
                $('#FormuCerti').show();
                $('#marcRegistra').show();
                // 
                $('#nomTpComer').hide();
                $('#enseComer').hide();
                $('#enseGrafic').hide();
                $('#marca_Origen').hide();
                $('#FormuOrigen').hide();
                $('#Tipo_proteccion').hide();
                $('#lema_Comercial').hide();
                $('#nomFormChange').hide();
                $('#nomFormChange2').hide();
                $('#FormuComercial').hide();
                $('#nomFormChange3').hide();
                $('#nomFormChange1').hide();
                $('#tipo_persona_Colectivo').hide();
                $('#FormuMarColectiva').hide();
                $('#activ_Com_name').hide();
                $('#FormuNomComercial').hide();
            } else {
                if (opt == "Registro de denominación de origen") {
                    $('#marca_Origen').show();
                    $('#product_Services').show();
                    $('#FormuOrigen').show();
                    $('#Tipo_proteccion').show();
                    // 
                    $('#marcatpMr').hide();
                    $('#enseComer').hide();
                    $('#enseGrafic').hide();
                    $('#FormuCerti').hide();
                    $('#marca_Certificacion').hide();
                    $('#lema_Comercial').hide();
                    $('#nomFormChange').hide();
                    $('#nomFormChange2').hide();
                    $('#FormuComercial').hide();
                    $('#nomFormChange3').hide();
                    $('#nomFormChange1').hide();
                    $('#tipo_persona_Colectivo').hide();
                    $('#FormuMarColectiva').hide();
                    $('#Tipo_marca').hide();
                    $('#nomTpComer').hide();
                    $('#activ_Com_name').hide();
                    $('#FormuNomComercial').hide();
                    $('#marcRegistra').hide();
                } else {
                    if (opt == "Registro de lema comercial") {
                        $('#lema_Comercial').show();
                        $('#product_Services').show();
                        $('#FormuMarColectiva').show();
                        // 
                        $('#marcatpMr').hide();
                        $('#enseComer').hide();
                        $('#enseGrafic').hide();
                        $('#FormuCerti').hide();
                        $('#marca_Certificacion').hide();
                        $('#marca_Origen').hide();
                        $('#FormuOrigen').hide();
                        $('#Tipo_proteccion').hide();
                        $('#nomFormChange').hide();
                        $('#nomFormChange2').hide();
                        $('#FormuComercial').hide();
                        $('#nomFormChange3').hide();
                        $('#nomFormChange1').hide();
                        $('#tipo_persona_Colectivo').hide();
                        $('#Tipo_marca').hide();
                        $('#nomTpComer').hide();
                        $('#activ_Com_name').hide();
                        $('#FormuNomComercial').hide();
                        $('#marcRegistra').hide();
                    } else {
                        if (opt == "Depósito de nombre comercial") {
                            $('#Tipo_marca').show();
                            $('#nomTpComer').show();
                            $('#activ_Com_name').show();
                            $('#FormuNomComercial').show();
                            $('#marcRegistra').show();
                            // 
                            $('#marcatpMr').hide();
                            $('#enseComer').hide();
                            $('#enseGrafic').hide();
                            $('#FormuCerti').hide();
                            $('#marca_Certificacion').hide();
                            $('#marca_Origen').hide();
                            $('#FormuOrigen').hide();
                            $('#Tipo_proteccion').hide();
                            $('#lema_Comercial').hide();
                            $('#nomFormChange').hide();
                            $('#nomFormChange2').hide();
                            $('#FormuComercial').hide();
                            $('#nomFormChange3').hide();
                            $('#nomFormChange1').hide();
                            $('#tipo_persona_Colectivo').hide();
                            $('#product_Services').hide();
                            $('#FormuMarColectiva').hide();

                        } else {
                            if (opt == "Depósito de enseña comercial") {
                                $('#Tipo_marca').show();
                                $('#enseComer').show();
                                $('#activ_Com_name').show();
                                $('#FormuNomComercial').show();
                                $('#nomFormChange3').show();
                                $('#nomFormChange1').show();
                                $('#enseGrafic').show();
                                // 
                                $('#nomTpComer').hide();
                                $('#marcatpMr').hide();
                                $('#marcRegistra').hide();
                                $('#FormuMarColectiva').hide();
                                $('#tipo_persona_Colectivo').hide();
                                $('#FormuCerti').hide();
                                $('#marca_Certificacion').hide();
                                $('#marca_Origen').hide();
                                $('#FormuOrigen').hide();
                                $('#Tipo_proteccion').hide();
                                $('#lema_Comercial').hide();
                                $('#nomFormChange').hide();
                                $('#nomFormChange2').hide();
                                $('#product_Services').hide();
                                $('#FormuComercial').hide();
                            }
                        }
                    }
                }
            }
        }
    }
}
// 
let proOg = document.getElementById('PROTORIG')
proOg.onclick = showprog;

function showprog(evento) {
    $("#protOrig").show();
    $('#tpProtRecoOrig').show();
    $('#prodecla').hide();

}
let procla = document.getElementById('PRODECLA')
procla.onclick = showprocla;

function showprocla(evento) {
    $('#prodecla').show();
    $('#tpProtRecoOrig').hide();
    $("#protOrig").hide();
}
// 


let legsi = document.getElementById('leRegSi')
legsi.onclick = leRegSi;

function leRegSi(evento) {
    $("#documentEo").show();
}

let legNo = document.getElementById('leRegNo')
legNo.onclick = leRegNo;

function leRegNo(evento) {
    alert('Error!!, No puede continuar con el registro si no tiene la marca registrada');
    $("#documentEo").hide();
}