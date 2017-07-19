/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function suporte(){
    $.ajax({
        url : "../control/SolicitarSuporte.php",
        type: "POST",
        data: $("#formSuporte").serialize(),
        dataType: 'json',
        success: function(data, textStatus, jqXHR){
            if(data.situacao == true){
                swal("Suporte", data.mensagem, "success");
            }else{
                swal("Erro", data.mensagem, "error");
            }
        },error: function (jqXHR, textStatus, errorThrown){
            swal("Erro", "Erro causado por:" + errorThrown, "error");
        }
    });  
}

$("#bt_enviarMsg").click(function(){
    suporte();
});
//suporte();