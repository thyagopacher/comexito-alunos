<!--menu de cabeçalho-->
<div class="topo">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="logo">
                    <a href="http://comexito.com.br/site3/index.php"><img src="http://comexito.com.br/site3/assets/images/logo.png" alt=""></a>
                </div>
            </div>
            <div class="vantagens-topo hidden-xs hidden-sm">
                <div class="col-md-2">
                    <a href="http://comexito.com.br/site3/cursos">
                        <img src="http://comexito.com.br/site3/assets/images/icons/icon-ead.png" class="img-responsivo pull-left" alt="">
                        <h4>Todos os<br>cursos</h4>                            
                    </a>
                </div>
                <div class="col-md-2">
                    <img src="http://comexito.com.br/site3/assets/images/icons/icon-duvida.png" class="img-responsivo pull-left" alt="">
                    <h4>Dúvidas<br>Frequentes</h4>
                </div>
                <div class="col-md-2">
                    <a href="http://comexito.com.br/site3/contato">
                        <img src="http://comexito.com.br/site3/assets/images/icons/icon-certo.png" class="img-responsivo pull-left" alt="">
                        <h4>Fale<br>conosco</h4>                                
                    </a>
                </div>
            </div>
            <div class="botoes-topo">
                <div class="col-md-1"></div>
                <div class="col-md-2">
                    <a href="http://comexito.com.br/site3/logout.php" target="_top">
                        <button type="button" id="btnLogin" class="pull-right btn btnpadrao2">SAIR</button>
                    </a>
                </div>                           
            </div>
        </div>
    </div>
</div>

<!--menu de cursos-->
<div id="menu" class="menu">

</div>

<!--menu de ambiente visual-->
<div id="div_ambiente_ensino" class="container-fluid">
    <div class="row">
        <div class="col-md-2 col-xs-0"></div>
        <div id="div_boneco" class="col-md-1 col-sm-4 col-xs-4"><div><img src="img/img_tutor.gif" ></div></div>
        <div class="col-md-5 col-sm-8 col-xs-12" style="margin-top: 15px">
            <div class="row">
                <div class="col-sm-12">
                    <span><b>Ambiente de ensino virtual</b></span>
                </div>
            </div>
            <div class="row" id="nav_menu">
                <div class="col-md-1 col-xs-0"></div>
                <div class="col-md-2  col-xs-2 text-center">
                    <a href="home">
                        <i class="fa fa-home ic_sz" aria-hidden="true"></i><br>
                        Home
                    </a>
                </div>
                <div class="col-md-2  col-xs-3 text-center">
                    <a href="meu_cadastro">
                        <i class="fa fa-user ic_sz" aria-hidden="true"></i><br>
                        Meu cadastro
                    </a>
                </div>
                <div class="col-md-2 col-xs-2 text-center">
                    <a href="suporte">
                        <i class="fa fa-envelope ic_sz" aria-hidden="true"></i><br>
                        Suporte
                    </a>
                </div>
                <div class="col-md-2  col-xs-3 text-center">
                    <a href="certificados">
                        <i class="fa fa-certificate ic_sz" aria-hidden="true"></i><br>
                        Certificados
                    </a>
                </div>
                <div class="col-md-2  col-xs-2 text-center">
                    <a href="forum">
                        <i class="fa fa-comments ic_sz" aria-hidden="true"></i><br>
                        Fórum
                    </a>
                </div>
                <div class="col-md-1  col-xs-0"></div>
            </div>
        </div>
        <div class="col-xs-12 col-md-2 col-sm-12" id="acesso_rapido">
            <p><b>ACESSO RÁPIDO AOS MEUS CURSOS</b></p>
            <!--<div class="row">-->
            <!--<div class="col-xs-1"></div>-->                    
            <div class="col-md-10 col-sm-10 col-xs-10">
                <select name="JumpCursos" class="form-control" id="cursos">
                    <?php $curso->optionMeusCursos(); ?>
                </select>
            </div>
            <div class="row col-md-2 col-sm-2 col-xs-2"><button class="btn btn-danger btn-xs">OK</button></div>
            <!--<div class="col-xs-1"></div>-->
            <!--</div>-->
        </div>

    </div>

</div>
<!--fazer a linha subir-->
<div class="row col-lg-12 col-md-12 col-xs-12 separador_meuscursos">
    <div class="col-md-4 col-xs-5 col-md-offset-3 col-xs-offset-0">
        <div>Bem vindo, <b>Marcia Guerra</b></div>
    </div>
    <div class="col-md-5  col-xs-7">
        <span>Último Acesso: 14/07/2017 15:47:18</span>
        <a href="historico_acessos"><i class="fa fa-clock-o" aria-hidden="true"></i> Histórico de acessos</a>
    </div>
</div>
<br>
<br>


