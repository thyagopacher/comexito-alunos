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
                                <div class="col-md-12">
                                    <i class="fa fa-list-alt" aria-hidden="true">Lista do Fórum</i>
                                </div>
                            </div>
                            <div class="row">
                                <?php include "./menu_lateral_msg_pri.php";?>
                                <div class="col-md-1"></div>
                                <div class="col-md-8 mensagens_privadas">
                                    <select class="form-control">
                                        <option>...</option>
                                        <option>...</option>
                                        <option>...</option>
                                    </select>
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