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
                            <h5 class="vermelho">
                                <b>MEU CADASTRO</b>
                            </h5>
                            <div class="justificado">
                                <p>
                                    Confira abaixo os dados do seu cadastro. Mantenha seu cadastro sempre atualizado 
                                    para que possamos entrar em contato com você quando necessário.
                                </p>
                                <p>
                                    <strong>Importante:</strong> se você alterar o e-mail cadastrado, deverá utilizar 
                                    o novo e-mail para o login no ambiente de ensino. Todas as notificações enviadas 
                                    pelo site serão enviadas para este novo e-mail.
                                </p>
                                <p>
                                    Não é possível alterar o nome. Para alterar o seu nome entre em contato com o 
                                    administrador no e-mail <a href="mailto:contato@comexito.com.br">contato@comexito.com.br</a>. 
                                    <span style="color: red">Não é permitido transferir a licença para outra pessoa 
                                        se o curso já estiver em progresso.</span> 
                                    Demais campos do seu cadastro podem ser editados normalmente.
                                </p>
                            </div>
                            <?php $clientep = $cliente->perfil(); ?>
                            <form action="/control/SalvarCliente.php" id="fmeuCadastro" method="post">
                                <input type="hidden" name="COD_CLIENTE" value="<?=$clientep["COD_CLIENTE"]?>">
                                <p><b>Informações Pessoais</b></p>
                                <div class="row">
                                    <div class="form-group col-md-9 col-sm-9 col-xs-12">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <label> Nome:</label>
                                        <input type="text" required name="NOM_CLIENTE" maxlength="150" class="form-control" value="<?=$clientep["NOM_CLIENTE"]?>">
                                    </div>
                                    <div class="form-group col-md-3  col-sm-3 col-xs-12">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                        <label> Data de nascimento:</label>
                                        <?php
                                            $separa_data = explode('-', $clientep["DAT_NASC"]);
                                            if(isset($clientep["DAT_NASC"]) && $clientep["DAT_NASC"] != NULL 
                                                    && $clientep["DAT_NASC"] != "" && $separa_data[0] > 1990){
                                                $dtnascimento = date("Y-m-d", strtotime($clientep["DAT_NASC"]));
                                            }else{
                                                $dtnascimento = "";
                                            }
                                        ?>
                                        <input type="date" name="DAT_NASC" class="form-control" value="<?=$dtnascimento?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-8  col-sm-8 col-xs-12">
                                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                        <label> E-mail:</label>
                                        <input id="email" type="email" name="DES_EMAIL" required class="form-control" value="<?=$clientep["DES_EMAIL"]?>">
                                    </div>                                    
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-2  col-sm-2 col-xs-12">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <label> CEP:</label>
                                        <input id="cep" type="text" name="NUM_CEP" class="form-control" value="<?=$clientep["NUM_CEP"]?>">
                                    </div>
                                    <div class="form-group col-md-8  col-sm-8 col-xs-12">                                    
                                        <label>Endereço:</label>
                                        <input id="endereco" type="text" name="DES_ENDERECO" class="form-control" value="<?=$clientep["DES_ENDERECO"]?>">
                                    </div>
                                    <div class="form-group col-md-2  col-sm-2 col-xs-4">
                                        <label>Número:</label>
                                        <input type="text" maxlength="10" minlength="1" name="NUM_ENDERECO" class="form-control" value="<?=$clientep["NUM_ENDERECO"]?>">
                                    </div>
                                   
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-3  col-sm-3 col-xs-12">
                                        <label>Complemento:</label>
                                        <input type="text" class="form-control" name="DES_COMPLEMENTO" value="<?=$clientep["DES_COMPLEMENTO"]?>">
                                    </div> 
                                    <div class="form-group col-md-2  col-sm-2 col-xs-12">
                                        <label>Bairro:</label>
                                        <input id="bairro" type="text" name="NOM_BAIRRO" class="form-control" value="<?=$clientep["NOM_BAIRRO"]?>">
                                    </div>
                                    <div class="form-group col-md-5  col-sm-5 col-xs-12">
                                        <label>Cidade:</label>
                                        <input id="cidade" type="text" name="NOM_MUNICIPIO" class="form-control" value="<?=$clientep["NOM_MUNICIPIO"]?>">
                                    </div>   
                                    <div class="form-group col-md-2  col-sm-2 col-xs-4">
                                        <label>UF:</label>
                                        <input id="uf" class="form-control" name="SIG_UF" type="text" value="<?=$clientep["SIG_UF"]?>">
                                    </div>                                    
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-3  col-sm-3 col-xs-6">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <label> Telefone Res:</label>
                                        <input type="text" class="form-control" name="NUM_TELEFONE" value="<?=$clientep["NUM_TELEFONE"]?>">
                                    </div>
                                    <div class="form-group col-md-3  col-sm-3 col-xs-6">
                                        <i class="fa fa-mobile" aria-hidden="true"></i>
                                        <label> Celular:</label>
                                        <input type="text" class="form-control" name="NUM_CELULAR" value="<?=$clientep["NUM_CELULAR"]?>">
                                    </div>
                                </div>                               

                                <p><b>Informações Profissionais</b></p>                                
                                <div class="row">
                                    <div class="form-group col-md-7  col-sm-7 col-xs-12">
                                        <i class="fa fa-building" aria-hidden="true"></i>
                                        <label> Empresa:</label>
                                        <input type="text" class="form-control" name="DES_RAZAO_SOCIAL" value="<?=$clientep["DES_RAZAO_SOCIAL"]?>">
                                    </div>
                                    <div class="form-group col-md-5  col-sm-5 col-xs-12">
                                        <label>Cargo:</label>
                                        <input type="text" class="form-control" name="NOM_CARGO" value="<?=$clientep["NOM_CARGO"]?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-8  col-sm-8 col-xs-12">
                                        <i class="fa fa-briefcase" aria-hidden="true"></i>
                                        <label> Profissão:</label>
                                        <input type="text" class="form-control" name="DES_PROFISSAO" value="<?=$clientep["DES_PROFISSAO"]?>">
                                    </div>
                                    <div class="form-group col-md-4  col-sm-4 col-xs-6">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <label> Telefone Com.:</label>
                                        <input type="text" class="form-control" name="NUM_COMERCIAL" value="<?=$clientep["NUM_COMERCIAL"]?>">
                                    </div>
                                </div>                               
                                <div class="row col-md-12">
                                    <button type="submit" class="btn btn-danger">Atualizar meu cadastro</button>
                                </div>                                

                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <br><br><br>
        </div>

        <?php include "rodape.php"; ?>
        <script type="text/javascript" src="js/ajax/Cliente.js"></script>
    </body>
</html>