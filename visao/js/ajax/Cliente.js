/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



$(function () {
    
    $("#btnSbmtFoto").click(function() {
        $("#formFoto").submit();
    });
            
    var progress = $(".progress");
    var progressbar = $("#progressbar");
    var sronly = $("#sronly");
    
    $("#fmeuCadastro, #formFoto").submit(function () {
        $(".progress").css("visibility", "visible");
    }).ajaxForm({
        beforeSend: function () {
            progress.show();
            var percentVal = '0%';
            progressbar.width(percentVal);
            sronly.html(percentVal + ' Completo');
        },
        uploadProgress: function (event, position, total, percentComplete) {
            var percentVal = percentComplete + '%';
            progressbar.width(percentVal);
            sronly.html(percentVal + ' Completo');
        },
        success: function () {
            var percentVal = '100%';
            progressbar.width(percentVal);
            sronly.html(percentVal + ' Completo');
        },
        complete: function (xhr) {
            var data = JSON.parse(xhr.responseText);
            if (data.situacao === true) {
                swal("Cadastro", data.mensagem, "success");
                progress.hide();
            } else if (data.situacao === false) {
                swal("Erro", data.mensagem, "error");
            }
        }
    });

});
