<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Curso
 *
 * @author thyagopacher
 */
class ClienteAcesso {

    public $campos = array('COD_CLIENTE', 'DAT_ACESSO', 'IP_ACESSO');    
    private $conexao;
    
    public function __construct($conexao) {
        $this->conexao = $conexao;
    }
    

    public function inserir() {
        return $this->conexao->inserir("cliente_acesso", $this);
    }

    public function atualizar() {
        return $this->conexao->atualizar("cliente_acesso", $this);
    }

    public function excluir() {
        return $this->conexao->excluir("cliente_acesso", $this);
    }

    public function procuraCodigo() {
        return $this->conexao->procurarCodigo("cliente_acesso", $this);
    }


    public function procurar($post) {
        if(isset($post["codcliente"]) && $post["codcliente"] != NULL && $post["codcliente"] != ""){
            $and .= " and COD_CLIENTE = {$post["codcliente"]}";
        }
     
        $sql = "select distinct COD_CLIENTE, DAT_ACESSO, IP_ACESSO
        from cliente_acesso 
        where 1 = 1 {$and}  order by DAT_ACESSO desc";

        return $this->conexao->comando($sql);
    }
    
}
