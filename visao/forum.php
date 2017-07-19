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
                            
                            <p>
                                Utilize o fórum para fazer perguntas em relação ao curso ou a qualquer tópico 
                                relacionado à disciplina do curso. Selecione abaixo o curso que você está realizando e 
                                veja se já existem perguntas e respostas sobre o assunto que você deseja esclarecer.  
                            </p>
                            <table class="table table-striped">
                                <thead class="tblForum">
                                    <tr>
                                        <th>Administração & Negócios</th>
                                        <th>Tópicos</th>
                                        <th>Mensagens</th>
                                        <th>Última postagem</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <a href="lista_forum"><b>Balanced Scorecard</b></a>
                                        </td>
                                        <td>103 (38 novo)</td>
                                        <td>344 (127 novo)</td>
                                        <td>12, July , 2017 06:01PM</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="lista_forum"><b>Balanced Scorecard</b></a>
                                        </td>
                                        <td>103 (38 novo)</td>
                                        <td>344 (127 novo)</td>
                                        <td>12, July , 2017 06:01PM</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="lista_forum"><b>Balanced Scorecard</b></a>
                                        </td>
                                        <td>103 (38 novo)</td>
                                        <td>344 (127 novo)</td>
                                        <td>12, July , 2017 06:01PM</td>
                                    </tr>
                                </tbody>
                                <thead class="tblForum">
                                    <tr>
                                        <th>Alimentos</th>
                                        <th>Tópicos</th>
                                        <th>Mensagens</th>
                                        <th>Última postagem</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <a href="lista_forum"><b>APPCC</b></a>
                                        </td> 
                                        <td>51</td> 
                                        <td>161</td> 
                                        <td>25, January , 2017 07:04PM</td> 
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="lista_forum"><b>APPCC</b></a>
                                        </td> 
                                        <td>51</td> 
                                        <td>161</td> 
                                        <td>25, January , 2017 07:04PM</td> 
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="lista_forum"><b>APPCC</b></a>
                                        </td> 
                                        <td>51</td> 
                                        <td>161</td> 
                                        <td>25, January , 2017 07:04PM</td> 
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
    </body>
</html>