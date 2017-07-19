
function procurarAcesso(){
    $.ajax({
        url : "../control/ProcurarAcesso.php",
        type: "POST",
        dataType: 'text',
        success: function(data, textStatus, jqXHR){
            $("#tblAcesso").html(data);
            dataTablePadrao("tbl_acesso");
            $("#qtd_resultado").html($("#qtd_acesso").val());
        },error: function (jqXHR, textStatus, errorThrown){
            swal("Erro ao procurar acesso", "Erro causado por:" + errorThrown, "error");
        }
    });  
}

procurarAcesso();