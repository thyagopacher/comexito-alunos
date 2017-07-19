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
                                <p class="col-md-8">Você está em Home > <b>Relatório de Acessos</b></p>
                                <i class="fa fa-arrow-circle-left col-md-4" aria-hidden="true" style="float: right; color: green; font-size: 25px">
                                    <b style="font-size: 15px">Voltar ao início</b>
                                </i>
                                <hr style="margin: 5px 5px">
                                <p>
                                    Veja abaixo as datas que você acessou e o IP usado para a conexão. Se por ventura 
                                    você achar que alguém está acessando utilizando o seu login, recomendamos que você 
                                    altere a sua senha de acesso.
                                </p>
                                <div id="tblAcesso" class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Data Acesso</th>
                                                <th>IP de Conexão</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-md-4"><b>Total de acessos até hoje: </b></div>
                                    <div class="col-md-2" id="qtd_resultado"></div>
                                </div>
                                <div class="alert alert-info">
                                    <strong>Observação:</strong> 
                                    O sistema de controle de acessos foi implementado no dia 07 de julho de 2008. 
                                    Acessos anteriores a esta data não foram registrados em nosso banco de dados.
                                </div>                                
                       
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br>
        </div>

        <?php include "rodape.php"; ?>
        <script src="js/ajax/Acesso.js"></script>
    </body>
</html>