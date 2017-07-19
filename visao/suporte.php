<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php include "head.php"; ?>
        <link rel="stylesheet" href="css/home.css?<?= date("YmdHis") ?>" type="text/css">
    </head>
    <body>

        <?php include "cabecalho.php"; ?>

        <div class="container text-center">    
            <div class="row content">
                <div class="col-sm-12 text-left">

                    <div class="row">

                        <?php include "menu_lateral.php"; ?>

                        <div class="col-md-8">
                            <div class="row">
                                <p class="col-md-8">Você está em Home > <b>Meu Cadastro</b></p>
                                <i class="fa fa-arrow-circle-left col-md-4" aria-hidden="true" style="float: right; color: green; font-size: 25px">
                                    <a href="javascript:voltar()" style="font-size: 15px">Voltar ao início</a>
                                </i>
                            </div>
                            <hr style="margin: 5px 5px">
                        </div>                        

                        <div class="col-md-5">
                            <h5 class="vermelho">
                                <b>SOLICITAR SUPORTE TÉCNICO</b>
                            </h5>
                            <p>O nosso suporte técnico irá atender aos seguintes tipos de solicitações:</p>
                            <ul>
                                <li>Dificuldades para usar o nosso ambiente de ensino virtual</li>
                                <li>Resolução de problemas e erros relacionados ao conteúdo do curso</li>
                            </ul>
                            <p>
                                <strong style="color: red">Importante: </strong>
                                <b>Suporte do Instrutor</b>
                            </p>
                            <p class="justificado">
                                Não utilize este canal para resolver dúvidas sobre o conteúdo apresentado no curso. 
                                Você tem a oportunidade de interagir com o instrutor através do 
                                <a>fórum de discussão</a>. 
                                Utilize este canal apenas para suporte técnico e para reportar erros no conteúdo.
                            </p>
                            <p><b>Preencha abaixo o formulário para enviar questões técnicas:</b></p>
                            <form id="formSuporte" onsubmit="return false" method="post" action="/control/SolicitarSuporte.php">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Nome:</label>
                                            <input type="text" name="nome" maxlength="150" required class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>E-mail:</label>
                                            <input type="email" name="email" maxlength="150" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Curso:</label>
                                            <select name="curso" class="form-control">
                                                <?php $curso->optionMeusCursos(); ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Problema:</label>
                                            <textarea name="texto" class="form-control" rows="10" maxlength="350"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="button" id="bt_enviarMsg" class="btn btn-danger">Enviar mensagem</button>
                                    </div>
                                </div>
                            </form>
                            <br>
                        </div>
                        <div class="col-md-3">
                            <div style="background-color: #CCCCCC">
                                <b>Softwares necessários para uso das aulas gravadas</b>
                            </div>
                            <a href="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash&amp;promoid=BIOW" target="_blank">
                                <img src="img/get_flash.png" class="img-responsive">
                            </a>
                            <p>
                                É necessário ter o Internet Explorer e o 
                                <a href="http://www.adobe.com">FlashPlayer</a> 
                                instalados para assistir às aulas.
                            </p>
                            <a href="http://www.adobe.com/products/acrobat/readstep2.html" target="_blank">
                                <img src="img/get_reader.png" class="img-responsive">
                            </a>
                            <p>
                                Para visualizar os arquivos em PDF utilize o 
                                <a href="http://www.adobe.com">Adobe Acrobat</a>.
                            </p>
                            <div style="background-color: #CCCCCC">
                                <b>Problemas comuns</b>
                            </div>
                            <div class="justificado">
                                <p>
                                    <b>Os slides estão travando e não consigo ouvir o som por completo</b>
                                </p>
                                <p>Solução:</p>
                                <p>
                                    Certamente isto acontece porque o seu navegador não fez o download completo do 
                                    arquivo do slide. Este é um incidente comum. Para resolvê-lo no Internet Explorer, 
                                    acesse o menu Ferramentas > Opções da Internet, e em seguida clique no botão 
                                    Excluir arquivos, para limpar os arquivos temporários. Abra novamente o módulo que 
                                    você estava assistindo e clique no slide que estava travando.
                                </p>
                                <p>
                                    <b>Os arquivos em PDF das aulas não estão abrindo </b>
                                </p>
                                <p>Solução:</p>
                                <p>
                                    Certamente isto acontece porque o seu navegador não fez o download completo do 
                                    arquivo PDF. Para forçar o download completo, clique com o botão direito do 
                                    mouse sobre o link "Acessar" na coluna download e selecione a opção 
                                    "Salvar arquivo como...”
                                </p>
                            </div>                            
                        </div>

                    </div>
                </div>
            </div>
            <br><br><br>
        </div>

        <?php include "rodape.php"; ?>
        <script type="text/javascript" src="js/jquery.form.min.js"></script>
        <script type="text/javascript" src="js/ajax/Suporte.js"></script>
    </body>
</html>