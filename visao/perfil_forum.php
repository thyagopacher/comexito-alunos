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
                            <div class="row">
                                <div class="col-md-8">
                                    <a>Início</a> > 
                                    <a>Administração & Negócios</a> > 
                                    <a>Balanced Scorecard</a> > 
                                    <a>Perfil do usuário</a>
                                </div>
                                <div  class="col-md-4 text-right">
                                    <span>Bem-vindo ao Fórum da Com.Êxito!</span>
                                    <a href="">
                                        <i class="fa fa-sign-in" aria-hidden="true"> Login</i>
                                    </a>
                                </div> 
                            </div>
                            <hr style="margin: 5px 5px">
                            <div class="row">
                                <b class="col-md-7" style="font-size: 20px">Perfil do usuário</b>
                                <div class=" col-md-1 text-right">
                                    <i class="fa fa-search" aria-hidden="true" style="font-size: 20px; margin-top: 5px"></i>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" name="pesquisa" class="form-control">
                                </div>
                                <button class="btn btn-default">Procurar</button>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <i class="fa fa-list-alt" aria-hidden="true">Lista do Fórum</i>
                                    <i class="fa fa-list" aria-hidden="true" style="margin-left: 10px"> Lista de Mensagens</i>
                                </div>
                            </div>
                            <div class="forum_perfil">
                                <div class="row">
                                    <br>
                                    <div class="col-md-12 text-center">
                                        <i class="fa fa-user" aria-hidden="true"> Marcia Guerra</i>
                                        [ <a>Mostrar todas as mensagens</a> ]
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-4 text-center">
                                        <i class = "fa fa-user bonecao" aria-hidden = "true"></i>
                                    </div>
                                    <div class="col-md-8">
                                        <p><b>E-mail:</b></p>
                                        <p> Escondido</p><br>
                                        <p><b>Mensagens:</b></p>
                                        <p> 6,215</p><br>
                                        <p><b>Registrado:</b></p>
                                        <p> 31/12/1969 06:00PM</p><br>
                                        <p><b>Última atividade:</b></p>
                                        <p> 12/07/2017 05:37PM</p><br>
                                    </div>
                                </div>
                            </div>
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