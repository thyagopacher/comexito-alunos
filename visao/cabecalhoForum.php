<div class="row">
    <div class="col-md-8">
        <a>Início</a>
        <?php if ($uri != "/forum") { ?>
            > <a>Administração & Negócios</a>
            > <a>Balanced Scorecard</a>
        <?php } ?>
    </div>
    <div  class="col-md-4 text-right cboForum">
        <i class="fa fa-user" aria-hidden="true">
            <a href="perfil_pessoal_forum"> Meus Perfil</a>
        </i>
        <i class="fa fa-commenting" aria-hidden="true" style="margin-left: 10px">
            <a href="/msg_privada"> Mensagens privadas</a>
        </i>
    </div> 
</div>
<hr style="margin: 5px 5px">
<div class="row">
    <b class="col-md-9">Produção</b>
    <form>
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Procurar">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit">
                    <i class="glyphicon glyphicon-search"></i>
                </button>
            </div>
        </div>
    </form>
</div>
<div class="row">
    <div class="col-md-12">
        <i class="fa fa-list-alt" aria-hidden="true">Lista do Fórum</i>
        <i class="fa fa-list" aria-hidden="true" style="margin-left: 10px"> Lista de Mensagens</i>
    </div>
</div>