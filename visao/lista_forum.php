<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php include "head.php"; ?>
        <link rel="stylesheet" href="css/forum.css?<?= date("YmdHis") ?>" type="text/css">
    </head>
    <body>

        <?php include "cabecalho.php"; ?>

        <div class="container text-center">    
            <div class="row content">
                <div class="col-sm-12 text-left">

                    <div class="row">
                        <div class="col-md-12">
                            <?php include "cabecalhoForum.php";?>
                            <hr style="margin: 5px 5px">
                            <div class="row">
                                <b class="col-md-7" style="font-size: 20px">Balanced Scorecard</b>
                                <div class=" col-md-1 text-right">
                                    <i class="fa fa-search" aria-hidden="true" style="font-size: 20px; margin-top: 5px"></i>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" name="pesquisa" class="form-control">
                                </div>
                                <button class="btn btn-default">Procurar</button>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <i class="fa fa-list-alt" aria-hidden="true"> Lista do Fórum</i>
                                    <i class="fa fa-paper-plane" aria-hidden="true"> Enviar uma pergunta ao tutor</i>
                                </div>
                                <div class="col-md-6 text-right">
                                    <b>Paginação...</b>
                                </div>
                            </div>
                            <table class="table table-striped tblForum">
                                <thead class="">
                                    <tr>
                                        <th colspan="2">Assunto</th>
                                        <th>Mensagens</th>
                                        <th>Última postagem</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="td_center"><i class="fa fa-comment-o" aria-hidden="true"></i></td>
                                        <td>
                                            <a>Fatores determinantes do desempenho relativo</a><br>
                                            por <a>Taline Aparecida da Silva Batista</a>
                                        </td>
                                        <td class="td_center">2</td>
                                        <td>
                                            12/07/2017 06:01PM<br>
                                            Última postagem por
                                            <a href="perfil_forum">Marcia Guerra</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="td_center"><i class="fa fa-comment-o" aria-hidden="true"></i></td>
                                        <td>
                                            <a>Fatores determinantes do desempenho relativo</a><br>
                                            por <a>Taline Aparecida da Silva Batista</a>
                                        </td>
                                        <td class="td_center">2</td>
                                        <td>
                                            12/07/2017 06:01PM<br>
                                            Última postagem por 
                                            <a href="perfil_forum">Marcia Guerra</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="td_center"><i class="fa fa-comment-o" aria-hidden="true"></i></td>
                                        <td>
                                            <a>Fatores determinantes do desempenho relativo</a><br>
                                            por <a>Taline Aparecida da Silva Batista</a>
                                        </td>
                                        <td class="td_center">2</td>
                                        <td>
                                            12/07/2017 06:01PM<br>
                                            Última postagem por 
                                            <a href="perfil_forum">Marcia Guerra</a>
                                        </td>
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
    </body>
</html>