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
                        <div class="col-md-4">
                            <h5 class="vermelho">ACESSE O CONTEÚDO DISPONÍVEL</h5>
                            <div class="row">
                                <div class="col-md-2" style="font-size: 25px">
                                    <i class="fa fa-desktop" aria-hidden="true"></i>
                                </div>
                                <div class="col-md-10">
                                    <span>
                                        <b>Aulas gravadas</b><br>
                                        (<a>9 módulos</a>)
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2" style="font-size: 25px">
                                    <i class="fa fa-book" aria-hidden="true"></i>
                                </div>
                                <div class="col-md-10">
                                    <span>
                                        <b>Material complementar</b><br>
                                        (<a>14 arquivos</a>)
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2" style="font-size: 25px">
                                    <i class="fa fa-link" aria-hidden="true"></i>
                                </div>
                                <div class="col-md-10">
                                    <span>
                                        <b>Links de referência</b><br>
                                        (<a>0 links</a>)
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2" style="font-size: 25px">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </div>
                                <div class="col-md-10">
                                    <span>
                                        <a>Prova de avaliação para emissão de certificado</a>
                                    </span>
                                </div>
                            </div>
                            <br>
                            <br>
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
                            <i class="fa fa-question-circle" aria-hidden="true">
                                <span>PESQUISA DE SATISFAÇÃO</span>
                            </i>
                            <p>Qual é a sua avaliação em relação a este treinamento até o momento?</p>
                            <form>
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <div class="radio" style="color: red">
                                            <label><input type="radio" name="avaliacao">Insatisfeito</label>
                                        </div>
                                        <div class="radio" style="color: orange">
                                            <label><input type="radio" name="avaliacao">Indiferente</label>
                                        </div>
                                        <div class="radio" style="color: blue">
                                            <label><input type="radio" name="avaliacao">Satisfeito</label>
                                        </div>
                                        <div class="radio" style="color: green">
                                            <label><input type="radio" name="avaliacao">Superou minhas expectativas</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>
                                <br>
                                <p>Você faria outros cursos conosco?</p>
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <div class="radio-inline" style="color: green">
                                            <label><input type="radio" name="avaliacao2">Sim</label>                                    
                                        </div>
                                        <div class="radio-inline" style="color: red">
                                            <label><input type="radio" name="avaliacao2">Não</label>                                    
                                        </div>
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>
                                <br>
                                <button type="button" class="btn btn-default">Enviar</button>
                            </form>
                        </div>
                        <?php
                        $cursop = $curso->detalhesCurso($_GET["COD_PRODUTO"]);
                        $perfilp = $instrutor->perfil($cursop["COD_INSTRUTOR"]);
                        ?>

                        <div class="col-md-8">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th colspan="2">
                                            <h5 class="vermelho">DESTALHES CURSO</h5>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><b>Instrutor</b></td>
                                        <td><?= $perfilp["NOM_INSTRUTOR"] ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Curso:</b></td>
                                        <td><?= $cursop["NOM_PRODUTO"] ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Duração:</b></td>
                                        <td><?= str_replace('h', '', $cursop["NUM_CH"]) ?> h</td>
                                    </tr>
                                    <tr>
                                        <td><b>Sua assinatura:</b></td>
                                        <td><?= $cursop["NUM_LIMITE"] ?> meses (este prazo conta a partir do primeiro acesso)</td>
                                    </tr>
                                    <tr>
                                        <td><b>Total de questões da Prova:</b></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><b>Precisa passar na Prova para receber o certificado:</b></td>
                                        <td>
                                            <?php
                                            if ($cursop["IND_PRECISA_PROVA"] == 1) {
                                                echo "Sim";
                                            } else {
                                                echo "Não";
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Mínimo de pontos para passar:</b></td>
                                        <td><?= $cursop["VAL_NOTA_APROVA"] ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Tempo para prova:</b></td>
                                        <td><?= $cursop["NUM_TEMPO_PROVA"] ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Prova implantada em:</b></td>
                                        <td>13/05/2010</td>
                                    </tr>
                                    <tr>
                                        <td><b>Progresso:</b></td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                     aria-valuemin="0" aria-valuemax="100" style="width:89%">
                                                    89%
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Prova disponível:</b></td>
                                        <td>Sim, você já assistiu todo curso</td>
                                    </tr>
                                    <tr>
                                        <td><b>Passou na prova:</b></td>
                                        <td>Não, nota 0 data de realização da prova 20/09/2016</td>
                                    </tr>
                                    <tr>
                                        <td><b>A prova pode ser realizada 3 vezes, você já fez a prova:</b></td>
                                        <td>2 Vezes</td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr>
                            <p>
                                <b>Os cursos ficam disponíveis por 6 meses após o primeiro acesso:</b> 
                                Depois de 6 meses você conseguirá acessar os materiais complementares dos cursos e os 
                                slides em pdf, mas não conseguirá assistir as aulas e realizar provas. Caso deseje, sua 
                                licença poderá ser renovada: basta seguir as orientações quando sua licença expirar.
                            </p>
                            <p>
                                <b>Realização de provas dos cursos e-learning:</b> 
                                ssim que você tiver mais de 80% de participação no curso que exige prova você irá 
                                encontrar no topo da lateral esquerda desta página, na área "ACESSE O CONTEÚDO 
                                DISPONÍVEL" o ícone "Prova de avaliação para emissão do certificado", clique sobre 
                                ele que você irá acessar sua prova.
                            </p>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Conteúdo</th>
                                        <th>Aula</th>
                                        <th>Quiz</th>
                                        <th>PDF</th>
                                        <th>Último acesso</th>
                                        <th>Acesso</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Módulo Introdutório</td>
                                        <td>
                                            <button type="button" class="btn btn-ss btn-success">revisar</button>
                                        </td>
                                        <td></td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-default"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</button>
                                        </td>
                                        <td>14/07/2017<br>14:15:03</td>
                                        <td>5</td>
                                    </tr>
                                </tbody>                                
                            </table>
                            <p style="color: green">
                                <strong>Para assistir ás aulas são necessários os softwares abaixo:</strong>
                            </p>
                            <div style="background-color: #CCCCCC">
                                <div class="row">
                                    <a class="col-md-4" href="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash&amp;promoid=BIOW" target="_blank">
                                        <img src="img/get_adobe_flash_player.png">
                                    </a>
                                    <span class="col-md-8">
                                        É necessário ter o Internet Explorer e o 
                                        <a href="http://www.adobe.com">FlashPlayer</a> 
                                        instalados para assistir às aulas.
                                    </span>

                                </div>
                                <br>
                                <div class="row">
                                    <a class="col-md-4" href="http://www.adobe.com/products/acrobat/readstep2.html" target="_blank">
                                        <img src="img/ContentImageHandler-1.png" width="70%" height="70%">
                                    </a>
                                    <span class="col-md-8">
                                        Para visualizar os arquivos em PDF utilize o 
                                        <a href="http://www.adobe.com">Adobe Acrobat</a>.
                                    </span>
                                </div>
                                <br>
                                <div class="row">
                                    <a class="col-md-4" href="win-rar.com">
                                        <img src="img/winrar_icon_png.png" width="30%" height="30%">
                                        <span style="font-size: 30px">Winrar</span>
                                    </a>
                                    <span class="col-md-8">
                                        Para abrir pastas com arquivos compactados(ZIPADOS), utilize o Winrar.
                                    </span>
                                </div>
                                <p>Qualquer dúvida, consulte nosso suporte técnico.</p>
                            </div>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Conteúdo</th>
                                        <th>Baixar</th>
                                        <th>Último acesso</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Apresentação da Instrutora</td>
                                        <td>
                                            <button type="button" class="btn btn-xs btn-primary">baixar</button>
                                        </td>
                                        <td>20/12/2012 17:00:33</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>                        
                    </div>
                </div>
            </div>
            <br><br><br>
        </div>

        <?php include "rodape.php"; ?>
        <script type="text/javascript" src="js/AC_OETags.js"></script>
        <script src="js/ajax/Curso.js"></script>
    </body>
</html>