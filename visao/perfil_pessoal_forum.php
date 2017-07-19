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
                                    <p><b>Usuário:</b></p>
                                    <p><p><span><?= $clientep["COD_CLIENTE"] ?></span></p><br>
                                    <p><b>Nome real:</b></p>
                                    <p><span><?= $clientep["NOM_CLIENTE"] ?></span></p><br>
                                    <p><b>E-mail:</b></p>
                                    <p><span><?= $clientep["DES_EMAIL"] ?></span></p><br>
                                    <p><b>Registrado:</b></p>
                                    <p><span><?= date("d/m/Y H:i", strtotime($clientep["DAT_CADASTRO"])) ?></span></p><br>
                                    <p><b>Última atividade:</b></p>
                                    <p><span>18/07/2017 12:42PM</span></p><br>
                                    <p><b>Mensagens:</b></p>
                                    <p><span>2</span></p><br>
                                    <p><b>Assinatura:</b></p>
                                    <p><span>...</span></p>
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