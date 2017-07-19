/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function procurarMeusCursos(){
    $.ajax({
        url : "../control/ProcurarCurso.php",
        type: "POST",
        dataType: 'text',
        success: function(data, textStatus, jqXHR){
            $("#tabela_meus_cursos").html(data);
            dataTablePadrao("table_cursos_home");
        },error: function (jqXHR, textStatus, errorThrown){
            swal("Erro ao procurar acesso", "Erro causado por:" + errorThrown, "error");
        }
    });  
}

function procurarMeusPedidos(){
    $.ajax({
        url : "../control/ProcurarPedidoAberto.php",
        type: "POST",
        dataType: 'text',
        success: function(data, textStatus, jqXHR){
            $("#pedidos_em_aberto").html(data);
            dataTablePadrao("tbl_pedidos_em_aberto");
        },error: function (jqXHR, textStatus, errorThrown){
            swal("Erro ao procurar acesso", "Erro causado por:" + errorThrown, "error");
        }
    });  
}


procurarMeusPedidos();
procurarMeusCursos();