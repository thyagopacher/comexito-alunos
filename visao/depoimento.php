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

                            <h5 class="vermelho">ENVIE SEU DEPOIMENTO</h5>
                            <p>
                                Queremos saber a sua opinião sobre os nossos cursos, nosso site e nosso 
                                atendimento, é muito importante para nós identificar o que você deseja 
                                e melhorar nossos produtos e serviços.
                            </p>
                            <p>
                                Os depoimentos depois de analisados, se aprovados pela diretoria, poderão ser publicados 
                                na seção "Depoimentos", se houver espaço. Publicaremos depoimentos positivos e negativos 
                                desde que sejam construtivos e o vocabulário seja adequado.
                            </p>
                            <a><b>suporte técnico</b></a>
                            <p><b>Escreva abaixo o seu depoimento.</b></p>
                            <form action="/control/SalvarDepoimento.php" id="fdepoimento" method="post">
                                
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="">Nome:</label>
                                        <input id="nome" name="nome" type="text" required class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">E-mail:</label>
                                        <input id="email" name="email" type="text" required class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label>Depoimento:</label>
                                        <textarea name="depoimento" maxlength="250" rows="5" required class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="">Curso:</label>
                                        <select name="curso" required class="form-control">
                                            <?php $curso->optionMeusCursos();?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-danger">Enviar Depoimento</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <br><br><br>
        </div>

        <?php include "rodape.php"; ?>
        <script type="text/javascript" src="js/jquery.form.min.js"></script>
        <script type="text/javascript" src="js/ajax/Depoimento.js"></script>
    </body>
</html>