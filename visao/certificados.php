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
                            <p><b>Cursos</b></p>
                            <div class="justificado">
                                <p>
                                    Quando um curso não possuir prova, ao terminar de assistir 80% das aulas, você 
                                    poderá solicitar o seu certificado. Se uma prova está prevista, é necessário que 
                                    primeiro você realize a prova e seja aprovado para depois solicitar o certificado, 
                                    esse certificado é da ComÊxito e não tem relacionamento com os certificados de 
                                    exames reconhecidos pelo EXEMPLAR GLOBAL. Nos cursos é necessário 70% de acerto 
                                    em toda prova para que você passe e possa solicitar o certificado.
                                </p>
                                <p>
                                    O certificado digital para os cursos é emitido sem custo. Se você quiser receber 
                                    o mesmo certificado em cópia física (impresso) podemos enviar pelo correio, essa 
                                    emissão tem um custo que representa o custo de impressão e envio, clique abaixo 
                                    em emitir certificado impresso que você irá ser informado do valor.
                                </p>
                            </div>
                            <p><b>Cursos com exames reconhecidos pelo EXEMPLAR GLOBAL (ANTIGO RABQSA)</b></p>
                            <div class="justificado">
                                <p>
                                    Nos exames dos cursos de Auditor Líder de Sistemas de Gestão da Qualidade ou Meio 
                                    Ambiente ou Saúde e Segurança, com certificados reconhecidos pelo EXEMPLAR GLOBAL, 
                                    para demonstrar competência é necessário que você alcance 75% de acerto em cada 
                                    critério de competência e 75% no exame como um todo.
                                </p>
                                <p>
                                    No caso de exames reconhecidos pelo EXEMPLAR GLOBAL o certificado físico de 
                                    Aprovação já está incluso no valor que você pagou pelo produto e será enviado 
                                    pelo correio em até 30 dias após você ter utilizado todas as tentativas de exame 
                                    disponíveis no produto que você adquiriu, ou ter sido considerado competente em 
                                    todos os exames. Você não poderá criar certificado eletrônico para este produto. 
                                    Em caso de dúvidas ou problemas entre em contato pelo e-mail 
                                    <b><a href="mailto:contato@comexito.com.br">contato@comexito.com.br</a></b>.
                                </p>
                            </div>
                            <p style="color: #C50000; font-size: 15px">
                                <b>Veja os cursos disponíveis para solicitar o certificado de conclusão:</b>
                            </p>
                            <table class="table table-striped">
                                <thead style="background-color: #D7261A; color: white">
                                    <tr>
                                        <th>Curso</th>
                                        <th>Opções</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Nome curso...</td>
                                        <td>Ação/Notificação</td>
                                    </tr>
                                    <tr>
                                        <td>Nome curso...</td>
                                        <td>Ação/Notificação</td>
                                    </tr>
                                    <tr>
                                        <td>Nome curso...</td>
                                        <td>Ação/Notificação</td>
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
        <script type="text/javascript" src="js/AC_OETags.js"></script>
    </body>
</html>