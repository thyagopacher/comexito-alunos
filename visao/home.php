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
                            <i class="fa fa-book txtGrande" aria-hidden="true">
                                <span>MEUS CURSOS</span>                                    
                            </i>                            
                            <p>Confira abaixo os cursos que você está matriculado.</p>

                            <div id="tabela_meus_cursos" class="table-responsive alturaControlada">
                                <table id="tabela_home" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Curso</th>
                                            <th colspan="2" style="text-align: center">Matrícula</th>
                                            <th>Tipo</th>
                                            <th>Ação</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>awd</td>
                                            <td>16/08/2012</td>
                                            <td>00:00</td>
                                            <td>Curso</td>
                                            <td><a href="detalhes_curso" class="btn btn-success">Continuar</a></td>
                                        </tr>
                                        <tr>
                                            <td>awd</td>
                                            <td>16/08/2012</td>
                                            <td>00:00</td>
                                            <td>Curso</td>
                                            <td><a href="detalhes_curso" class="btn btn-success">Continuar</a></td>
                                        </tr>
                                        <tr>
                                            <td>awd</td>
                                            <td>16/08/2012</td>
                                            <td>00:00</td>
                                            <td>Curso</td>
                                            <td><a href="detalhes_curso" class="btn btn-success">Continuar</a></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <table id="tabela_home" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th colspan="5">Sistema de Gestão Integrado + Interpretação ISO 9001 + Interpretação ISO 14001</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Sistema...</td>
                                            <td>01/01/0001</td>
                                            <td>00:00</td>
                                            <td>Curso</td>
                                            <td>Ação</td>
                                        </tr>
                                        <tr>
                                            <td>Sistema...</td>
                                            <td>01/01/0001</td>
                                            <td>00:00</td>
                                            <td>Curso</td>
                                            <td>Ação</td>
                                        </tr>
                                        <tr>
                                            <td>Sistema...</td>
                                            <td>01/01/0001</td>
                                            <td>00:00</td>
                                            <td>Curso</td>
                                            <td>Ação</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>


                            <h5 class="vermelho"><b>Pedidos em aberto</b></h5>
                            <p>Confira abaixo os pedidos de compra que você tem em aberto.</p>
                            <div id="pedidos_em_aberto" class="table-responsive alturaControlada">
                                
                            </div>   
                            <p>
                                <b>Sobre os prazos de liberação</b>
                            </p>
                            <p>
                                Caso você já tenha efetuado o pagamento é necessário aguardar o prazo para que 
                                o nosso sistema confirme o seu pagamento. Confira abaixo o prazo de liberação 
                                para cada modalidade de pagamento:
                            </p>
                            <ul>
                                <li>
                                    <b>Cartão de Crédito: </b>
                                    Até 2 dias úteis.
                                </li>
                                <li>
                                    <b>Débito online: </b>
                                    1 hora.
                                </li>
                                <li>
                                    <b>Boleto bancário: </b>
                                    Após 1 dia útil. Se você mandar comprovante por e-mail ou fax, o seu acesso 
                                    será liberado no mesmo dia.
                                </li>
                                <li>
                                    <b>Depósito bancário: </b>
                                    Necessário mandar e-mail informando a data do depósito. O depósito somente 
                                    será identificado no extrato após 1 dia útil.
                                </li>
                            </ul>
                            <hr>
                            <i class="fa fa-certificate ic_sz vermelho txtGrande" aria-hidden="true">
                                <span><b>MEUS CERTIFICADOS</b></span>
                            </i>
                            <br>                                    
                            <a>
                                <i class="fa fa-chevron-right" aria-hidden="true">
                                    <b> Solicitar o certificado agora</b>
                                </i>
                            </a>
                            <hr>
                            <h5 class="vermelho"><b>Avalie os requisitos técnicos</b></h5>
                            <p>
                                A tabela abaixo exibe se as configurações do seu computador estão otimizadas 
                                para assistir aos nossos cursos. O Status "OK" indica que a configuração está 
                                correta, o status "VERIFIQUE" indica que a configuração precisa ser ajustada. 
                                Os cursos não funcionarão corretamente se você estiver com pendências de 
                                configuração.
                            </p>
                            <div class="table-responsive">
                                <table id="tabela_home" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Status</th>
                                            <th>Item</th>
                                            <th>Sua configuração</th>
                                            <th>Recomendado</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td id="status_resolucao"></td>
                                            <td>Resolução da tela</td>
                                            <td id="resolucao_tela"></td>
                                            <td>1024x768</td>
                                        </tr>
                                        <tr>
                                            <td id="status_flash"></td>
                                            <td>Flash Player</td>
                                            <td id="configuracao_flash"></td>
                                            <td>Versão 6.0 ou superior</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <hr>
                            <h5 class="vermelho"><b>Licença de uso</b></h5>
                            <p>
                                Utilize este material apenas para seus estudos particulares. 
                                <strong>Não redistribua este material. </strong>
                            </p>
                            <a>
                                Leia a licença de uso
                            </a>

                        </div>   
                        <br>
                    </div> 

                </div>

            </div>
            <br><br><br>
        </div>

        <?php include "rodape.php"; ?>
        <script type="text/javascript" src="js/AC_OETags.js"></script>
        <script src="js/ajax/Curso.js"></script>
    </body>
</html>
