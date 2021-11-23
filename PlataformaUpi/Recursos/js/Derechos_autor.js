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
// FORMU OBRA ARTISTICA

// caracter_obra
// CAROBRA
let carabr = document.getElementById('CAROBRA')
carabr.onclick = showcb;

function showcb(evento) {
    $("#carobra").show();
    $("#obElabo").hide();
    $("#obcolec").hide();
}
// OBELABO
let obElabo = document.getElementById('OBELABO')
obElabo.onclick = showoo;

function showoo(evento) {
    $("#obElabo").show();
    $("#carobra").hide();
    $("#obcolec").hide();
}
// OBCOLEC
let obcolec = document.getElementById('OBCOLEC')
obcolec.onclick = showoc;

function showoc(evento) {
    $("#obcolec").show();
    $("#carobra").hide();
    $("#obElabo").hide();
}

// opcion_origen
// OBRAORIGN
let obragn = document.getElementById('OBRAORIGN')
obragn.onclick = showon;

function showon(evento) {
    $("#obraorign").show();
    $("#obderiv").hide();
}
// OBRADERIV
let obriv = document.getElementById('OBRADERIV')
obriv.onclick = showod;

function showod(evento) {
    $("#obraderiv").show();
    $("#obraorign").hide();
}
// forma_autor
// OBRADERIV
let obranom = document.getElementById('OBRANOMI')
obranom.onclick = showmi;

function showmi(evento) {
    $("#obranomi").show();
    $("#obseudo").hide();
    $("#obpostu").hide();
}
// OBSEUDO
let obseudoo = document.getElementById('OBSEUDO')
obseudoo.onclick = showeu;

function showeu(evento) {
    $("#obseudo").show();
    $("#obranomi").hide();
    $("#obpostu").hide();
}
// OBPOSTU
let obpostuu = document.getElementById('OBPOSTU')
obpostuu.onclick = showeuu;

function showeuu(evento) {
    $("#obpostu").show();
    $("#obseudo").hide();
    $("#obranomi").hide();
}
// FORMA ELABORACIÓN
// OBCARGO
let obcargo = document.getElementById('OBCARGO')
obcargo.onclick = showcarg;

function showcarg(evento) {
    $("#obcargo").show();
    $("#funejerc").hide();
    $("#otraa").hide();
    $("#otra2").hide();
}
// FUNEJERC, funejerc
let funejercc = document.getElementById('FUNEJERC')
funejercc.onclick = showjerc;

function showjerc(evento) {
    $("#funejerc").show();
    $("#obcargo").hide();
    $("#otraa").hide();
    $("#otra2").hide();
}
// OTRAA
let otraaa = document.getElementById('OTRAA')
otraaa.onclick = showtra;

function showtra(evento) {
    $("#otraa").show();
    $("#otra2").show();
    $("#obcargo").hide();
    $("#funejerc").hide();

}


// OTRO FUNCION NO ME ACUERDO
// <!-- CARACTER DE OBRA RADIO BUTON -->
let ob = document.getElementById('OBIN')
ob.onclick = showOb;

function showOb(evento) {
    $("#obin").show();
    $("#obcol").hide();
    $("#obencar").hide();
}
// 
let obcol = document.getElementById('OBCOL')
obcol.onclick = showmet;

function showmet(evento) {
    $("#obcol").show();
    $("#obin").hide();
    $("#obencar").hide();
}
// 
let car = document.getElementById('OBENCAR')
car.onclick = showcar;

function showcar(evento) {
    $("#obencar").show();
    $("#obin").hide();
    $("#obcol").hide();

}
// OBORIGIN
let obring = document.getElementById('OBORIGIN')
obring.onclick = showgin;

function showgin(evento) {
    $("#oborigin").show();
    $("#obderiv").hide();

}
// OBDERIV
let obderiv = document.getElementById('OBDERIV')
obderiv.onclick = showriv;

function showriv(evento) {
    $("#obderiv").show();
    $("#oborigin").hide();
}
// Sgundo
// OBANOM
let obanom = document.getElementById('OBANOM')
obanom.onclick = shownom;

function shownom(evento) {
    $("#obanom").show();
    $("#obseud").hide();
    $("#obPost").hide();
    $("#otra").hide();
    $("#otro1").hide();

}
// OBSEUD

let obseud = document.getElementById('OBSEUD')
obseud.onclick = showeud;

function showeud(evento) {
    $("#obseud").show();
    $("#obanom").hide();
    $("#obPost").hide();
    $("#otra").hide();
    $("#otro1").hide();

}
// OBPOST
let obpost = document.getElementById('OBPOST')
obpost.onclick = showosp;

function showosp(evento) {
    $("#obPost").show();
    $("#obanom").hide();
    $("#obseud").hide();
    $("#otra").hide();
    $("#otro1").hide();
}
// OTRA
let otra = document.getElementById('OTRA')
otra.onclick = showotr;

function showotr(evento) {
    $("#otra").show();
    $("#otro1").show();
    $("#obanom").hide();
    $("#obseud").hide();
    $("#obPost").hide();

}
// Elemento soporte logico procomp
let procomp = document.getElementById('PROCOMP')
procomp.onclick = showcomp;

function showcomp(evento) {
    $("#procomp").show();


}
// DESPROGRA
let desprogra = document.getElementById('DESPROGRA')
desprogra.onclick = showgra;

function showgra(evento) {
    $("#desprogra").show();


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
// 
function seleccion() {

    var opt = $('#tipoSubRegistro').val();
    if (opt == "Null") {
        $('#marca_Fonograma').hide();
        $('#marca_Software').hide();
        $('#obra_artistia').hide();
        $('#categoria_de_obra').hide();
        $('#datos_solicitante').hide();
        $('#documentos_solicitan').hide();
        $('#transferencias_fonograma').hide();
        $('#datos_obra_re').hide();
        $('#caracter_de_obra_re').hide();
        $('#datos_autor_3_form').hide();
        $('#datos_obra_literaria').hide();
        $('#otroLiter1').hide();
        $('#otroLiter2').hide();
        $('#otroLiter3').hide();
        $('#otroLiter4').hide();
        $('#otroLiter5').hide();
        $('#obra_literaria').hide();
        $('#datos_obra_musical').hide();
    } else
    if (opt == "Registro de Software") {
        $('#marca_Software').show();
        // 
        $('#marca_Fonograma').hide();
        $('#datos_solicitante').hide();
        $('#documentos_solicitan').hide();
        $('#obra_artistia').hide();
        $('#transferencias_fonograma').hide();
        $('#caracter_de_obra_re').hide();
        $('#datos_autor_3_form').hide();
        $('#datos_obra_re').hide();
        $('#categoria_de_obra').hide();
        $('#datos_obra_literaria').hide();
        $('#otroLiter1').hide();
        $('#otroLiter2').hide();
        $('#otroLiter3').hide();
        $('#otroLiter4').hide();
        $('#otroLiter5').hide();
        $('#datos_obra_musical').hide();
        $('#obra_literaria').hide();
    } else {
        if (opt == "Registro de fonograma") {
            $('#transferencias_fonograma').show();
            $('#marca_Fonograma').show();
            $('#documentos_solicitan').show();
            $('#datos_solicitante').show();
            // 
            $('#caracter_de_obra_re').hide();
            $('#datos_autor_3_form').hide();
            $('#datos_obra_re').hide();
            $('#categoria_de_obra').hide();
            $('#datos_obra_literaria').hide();
            $('#otroLiter1').hide();
            $('#otroLiter2').hide();
            $('#otroLiter3').hide();
            $('#otroLiter4').hide();
            $('#otroLiter5').hide();
            $('#datos_obra_musical').hide();
            $('#obra_artistia').hide();
            $('#marca_Software').hide();
            $('#obra_literaria').hide();
        } else {
            if (opt == 'Obra Artística') {
                $('#transferencias_fonograma').show();
                $('#categoria_de_obra').show();
                $('#obra_artistia').show();
                $('#datos_obra_re').show();
                $('#documentos_solicitan').show();
                $('#caracter_de_obra_re').show();
                $('#datos_autor_3_form').show();
                $('#datos_solicitante').show();
                // 
                $('#datos_obra_literaria').hide();
                $('#otroLiter1').hide();
                $('#otroLiter2').hide();
                $('#otroLiter3').hide();
                $('#otroLiter4').hide();
                $('#otroLiter5').hide();
                $('#datos_obra_musical').hide();
                $('#marca_Fonograma').hide();
                $('#marca_Software').hide();
                $('#obra_literaria').hide();
            } else {
                if (opt == 'Obra literaria') {
                    $('#datos_obra_literaria').show();
                    $('#otroLiter1').show();
                    $('#otroLiter2').show();
                    $('#otroLiter3').show();
                    $('#otroLiter4').show();
                    $('#otroLiter5').show();
                    $('#transferencias_fonograma').show();
                    $('#caracter_de_obra_re').show();
                    $('#categoria_de_obra').show();
                    $('#datos_obra_re').show();
                    $('#documentos_solicitan').show();
                    $('#datos_autor_3_form').show();
                    $('#datos_solicitante').show();
                    // 
                    $('#marca_Fonograma').hide();
                    $('#marca_Software').hide();
                    $('#obra_artistia').hide();
                    $('#datos_obra_musical').hide();
                } else {
                    if (opt == 'Obra Musical') {
                        $('#datos_obra_musical').show();
                        $('#transferencias_fonograma').show();
                        $('#caracter_de_obra_re').show();
                        $('#categoria_de_obra').show();
                        $('#datos_obra_re').show();
                        $('#datos_solicitante').show();
                        $('#documentos_solicitan').show();
                        $('#datos_autor_3_form').show();
                        // 
                        $('#datos_obra_literaria').hide();
                        $('#otroLiter1').hide();
                        $('#otroLiter2').hide();
                        $('#otroLiter3').hide();
                        $('#otroLiter4').hide();
                        $('#otroLiter5').hide();
                        $('#obra_literaria').hide();
                        $('#marca_Fonograma').hide();
                        $('#marca_Software').hide();
                        $('#obra_artistia').hide();
                    }
                }
            }
        }
    }
}
// 
function soporLogic() {

    var opt = $('#sopLogic').val();
    if (opt == "Null") {
        $('#proCompu').hide();
        $('#desprogra').hide();
        $('#matauxili').hide();
    } else {
        if (opt == "Programa de computador") {
            $('#proCompu').show();
            $('#desprogra').hide();
            $('#matauxili').hide();

        } else {
            if (opt == "Descripción de programa") {
                $('#desprogra').show();
                $('#proCompu').hide();
                $('#matauxili').hide();

            } else {
                if (opt == "Material auxiliar") {
                    $('#matauxili').show();
                    $('#desprogra').hide();
                    $('#proCompu').hide();
                }
            }
        }
    }
}



let legsi = document.getElementById('leRegSi')
legsi.onclick = leRegSi;

function leRegSi(evento) {
    $("#documentEo").show();
}

let legNo = document.getElementById('leRegNo')
legNo.onclick = leRegNo;

function leRegNo(evento) {
    alert('Error!!, No puede continuar con el registro si no tiene la marca registrada');
}