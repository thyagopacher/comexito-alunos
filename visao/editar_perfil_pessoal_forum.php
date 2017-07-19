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
                            <div class="row">
                                <?php include "./menu_lateral_perfil_pessoal.php";?>
                                <div class="col-md-1"></div>
                                <div class="col-md-8 mensagens_privadas">
                                    <?php $clientep = $cliente->perfil(); ?>
                                    <form>
                                        <div class="form-group">
                                            <label>Nome real:</label>
                                            <textarea class="form-control" rows="5"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-default btn-sm">Atualizar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> 

                </div>

            </div>
            <br><br><br>
        </div>

        <?php include "rodape.php"; ?>
    </body>
</html>