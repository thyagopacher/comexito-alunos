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
                                <p class="col-md-8">Você está em Home > <b>Certificados</b></p>
                                <i class="fa fa-arrow-circle-left col-md-4" aria-hidden="true" style="float: right; color: green; font-size: 25px">
                                    <a href="javascript:voltar()" style="font-size: 15px">Voltar ao início</a>
                                </i>
                            </div>
                            <hr style="margin: 5px 5px">
                            <h5 class="vermelho">MEU CADASTRO</h5>
                            <p>Informe abaixo a sua nova senha de acesso e confirme.</p> 
                            <p>A partir do seu próximo login você deverá passar a utilizar esta nova senha.</p>
                            <form id="fmeuCadastro" method="post" action="/control/SalvarCliente.php">
                                <input type="hidden" name="COD_CLIENTE" value="<?=$_SESSION["Codigo"]?>">
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="form-group col-md-4">
                                        <label for="">Digite a nova senha:</label>
                                        <input id="senha1" required name="senha1" type="text" class="form-control">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="">Confirme novamente:</label>
                                        <input id="senha2" required name="senha2" type="text" class="form-control">
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4 text-center">
                                        <button id="bt_confirmar_senha" type="submit" class="btn btn-danger"><i class="fa fa-floppy-o" aria-hidden="true"></i> Confirmar</button>
                                    </div>                                    
                                    <div class="col-md-4"></div>
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
        <script type="text/javascript" src="js/ajax/Cliente.js"></script>
    </body>
</html>