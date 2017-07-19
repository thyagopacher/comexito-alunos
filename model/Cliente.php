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
class Cliente {

    public $campos = array('COD_CLIENTE', 'NOM_CLIENTE', 'DES_EMAIL', 'DES_SENHA',
        'DAT_CADASTRO', 'NUM_CPF', 'NUM_CEP', 'DES_ENDERECO', 'DES_COMPLEMENTO', 'NOM_BAIRRO',
        'NOM_MUNICIPIO', 'SIG_UF', 'NUM_COMERCIAL', 'NUM_TELEFONE', 'NUM_CELULAR', 'imagem',
        'TIP_CLIENTE', 'DES_RAZAO_SOCIAL', 'NUM_CNPJ', 'IND_AUT_RAB', 'nif', 'Pais',
        'NUM_DDI_TELEFONE', 'NUM_DDI_CELULAR', 'NUM_DDI_COMERCIAL', 'NUM_ENDERECO',
        'NUM_DDD_TELEFONE', 'NUM_DDD_CELULAR', 'NUM_DDD_COMERCIAL', 'DES_OBS', 'DAT_NASC');    
    private $conexao;
    
    public function __construct($conexao) {
        $this->conexao = $conexao;
    }
    

    public function inserir() {
        return $this->conexao->inserir("cliente", $this);
    }

    public function atualizar() {
        return $this->conexao->atualizar("cliente", $this);
    }

    public function excluir() {
        return $this->conexao->excluir("cliente", $this);
    }

    public function procuraCodigo() {
        return $this->conexao->procurarCodigo("cliente", $this);
    }
    
    
    public function perfil(){
        $sql = "select *
        from cliente 
        where cliente.COD_CLIENTE = {$_SESSION["Codigo"]}";
        return $this->conexao->comandoArray($sql);

    }
}
