<div class = "col-md-4">
    <div class = "col-md-12 menu_lateral">
        <div class = "row">
            <div class = "col-md-5 col-xs-5">
                <span>MEU CADASTRO</span>
                <i class = "fa fa-user bonecao" aria-hidden = "true"></i>
            </div>
            <div id = "links_cadastro" class="col-md-7 col-xs-7">
                <a href="alterar_senha">Altera minha senha</a><br>
                <a href="meu_cadastro">Altera meus dados</a><br>
                <a data-toggle="modal" data-target="#modalAlteraFoto">Altera minha foto</a><br>
            </div>
        </div>
    </div>
    <div class = "col-md-12 menu_lateral">
        <div class = "row col-md-12 text-center">
            <i class = "fa fa-envelope-o" aria-hidden = "true">
                <span>ENVIE SEU DEPOIMENTO</span>
            </i>
        </div>
        <p class = "texto_menu">
            Queremos saber a sua opinião sobre os nossos cursos,
            nosso site e nosso atendimento. Não deixe de enviar
            seus comentários, é muito importante para nós identificar
            o que você deseja e melhorar nossos produtos e serviços.
        </p>
        <p class = "texto_menu">
            Os depoimentos depois de analisados, se aprovados pela
            diretoria, poderão ser publicados, se houver espaço, na
            seção "Depoimentos".
        </p>
        <div class="text-center">
            <a target="_blank" href="http://comexito.com.br/site3/depoimentos" class="btn btn-default btn-xs">LER DEPOIMENTOS</a>
            <a href="depoimento.php" class = "btn btn-default btn-xs">ENVIAR DEPOIMENTO</a>
        </div>

    </div>
    <div class = "col-md-12 menu_lateral">
        <div class = "row col-md-12 text-center">
            <i class = "fa fa-users" aria-hidden = "true">
                <span>PEÇA AJUDA AO INSTRUTOR</span>
            </i>
        </div>
        <p class = "texto_menu">
            Utilize o nosso fórum de discução para solicitar suporte
            em relação ao conteúdo deste curso. Aproveite e veja também
            duvidas que outros alunos já postaram.
        </p>
        <div class="text-center">
            <button class = "btn btn-default btn-xs">ACESSAR AGORA</button>
        </div>
    </div>

    <div id="modalAlteraFoto" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title text-center vermelho">Publique sua foto no seu perfil</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-3">
                            <i class = "fa fa-user bonecao" aria-hidden = "true"></i>
                        </div> 
                        <div class="col-md-9 justificado">
                            <p>
                                Localize no seu computador o arquivo da foto que você 
                                gostaria de publicar no seu cadastro.
                            </p>
                            <p>
                                <b>Formato do arquivo da imagem:</b> apenas JPEG tamanho 100x100 pixeis. 
                                Fotos maiores serão redimensionadas
                            </p>
                            <p><b>Tamanho máximo permitido:</b> 2MB</p>
                            <form id="formFoto" action="/control/SalvarCliente.php" method="post">
                                <input type="hidden" name="COD_CLIENTE" value="<?=$_SESSION["Codigo"]?>">
                                <input type="file" accept="image/*" name="imagem" required>          
                            </form>
                        </div>
                    </div>                                        
                </div>
                <div class="modal-footer">
                    <button id="btnSbmtFoto" class="btn btn-danger" style="float: left"><i class="fa fa-upload" aria-hidden="true"></i> Publicar foto</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i> Fechar</button>
                </div>
            </div>

        </div>
    </div>
</div> 