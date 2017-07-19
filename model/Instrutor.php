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
class Instrutor {
    
    private $conexao;
    
    public function __construct($conexao) {
        $this->conexao = $conexao;
    }
    
    public function perfil($codigo){
        $sql = "select *
        from instrutor 
        where instrutor.COD_INSTRUTOR = {$codigo}";
        return $this->conexao->comandoArray($sql);

    }
}
