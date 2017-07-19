/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function voltar() {
    location.href = "home.php";
}

function dataTablePadrao(id) {
    $('#' + id).DataTable({
        "language": {
            "lengthMenu": "Mostrando _MENU_ por pág.",
            "zeroRecords": "Nada encontrado - desculpe",
            "info": "pág _PAGE_ de _PAGES_ com _TOTAL_ resultados",
            "infoEmpty": "Nenhum resultado disponivel",
            "infoFiltered": "(filtrando de _MAX_ total resultados)",
            "search": 'Procurar',
            "paginate": {
                "previous": "Pág. ant.",
                "next": "Próx. pág."
            }
        },
        "order": [[0, "desc"]]
    });
}

// Shorthand for $( document ).ready()
function procurarMenuGeral() {
    if (localStorage.getItem("menuGeral") == null || localStorage.getItem("menuGeral") == "") {
        $.ajax({
            url: "http://comexito.com.br/site3/control/menuGeral.php",
            type: "POST",
            dataType: 'text',
            success: function (data, textStatus, jqXHR) {
                if (data != '') {
                    localStorage.setItem('menuGeral', data);
                    $("#menu").html(data);
                } else {
                    swal("Atenção", "Não conseguiu montar estrutura de menu inicial!", "info");
                }
            }, error: function (jqXHR, textStatus, errorThrown) {
                swal("Erro", "Erro causado por:" + errorThrown, "error");
            }
        });
    } else {
        $("#menu").html(localStorage.getItem("menuGeral"));
    }
}

function verificaFlash() {
    // Check to see if the version meets the requirements for playback
    if (typeof DetectFlashVer == 'function' && DetectFlashVer(7, 5, 0)) {
        $("#status_flash").html("<font color='green'>OK</font>");
        $("#configuracao_flash").html("Detectado");        
    } else {  // flash is too old or we can't detect the plugin
        $("#status_flash").html("<font color='red'>Erro</font>");
        $("#configuracao_flash").html("Não instalado");
    }
}

$(function () {
    
    if ($("#cep").length) {
        $("#cep").mask("99.999-999");
    }    
    if ($("#telefone").length) {
        $("#telefone").mask("+99(99)9999-9999");
    }    
    if ($("#celular").length) {
        $("#celular").mask("+99(99)99999-9999");
    }    
   
    
    if ($(".inteiro").length) {
        $('.inteiro').keypress(function (event) {
            var tecla = (window.event) ? event.keyCode : event.which;
            if ((tecla > 47 && tecla < 58)) {
                return true;
            } else {
                if (tecla !== 8) {
                    return false;
                } else {
                    return true;
                }
            }
        });
    }
    
    $("#resolucao_tela").html(screen.width + 'X' + screen.height);
    if ((screen.width > 800) && (screen.height > 600)) {
        $("#status_resolucao").html("<font color='green'>OK</font>");
    } else {
        $("#status_resolucao").html("<font color='red'>OK</font>");
    }
    procurarMenuGeral();
    verificaFlash();
    
    $("#bt_confirmar_senha").click(function () {
        if($("#senha1").val() != $("#senha2").val()) {
            swal("Atenção", "As senhas não conferem!", "info");
        } else {
            $("#fmAtualiza").submit();
        }
    });
    
    $("#cep").blur(function () {
        $.ajax({
            url: "http://comexito.com.br/site3/control/BuscaCep.php",
            type: "POST",
            data: {cep: $("#cep").val()},
            dataType: 'json',
            success: function (data, textStatus, jqXHR) {
                $("#endereco").val(data.tipologradouro + ' ' + data.logradouro);
                $("#cidade").val(data.cidade);
                $("#uf").val(data.uf);
                $("#bairro").val(data.bairro);
            }, error: function (jqXHR, textStatus, errorThrown) {
                swal("Erro ao procurar", "Erro causado por:" + errorThrown, "error");
            }
        });
    });
});