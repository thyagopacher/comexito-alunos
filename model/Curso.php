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
class Curso {

    private $conexao;

    public function __construct($conexao) {
        $this->conexao = $conexao;
    }

    public function optionMeusCursos() {
        $post["codcliente"] = $_SESSION["Codigo"];
        $resCursos = $this->procurar($post, true);
        $qtdCursos = $this->conexao->qtdResultado($resCursos);
        if ($qtdCursos > 0) {
            echo "<option value=''>--Selecione--</option>";
            while ($curso = $this->conexao->resultadoArray($resCursos)) {
                echo "<option value='{$curso["COD_PRODUTO"]}'>{$curso["NOM_PRODUTO"]}</option>";
            }
        } else {
            echo "<option value=''>--Nada encontrado--</option>";
        }
    }

    public function pedidosEmAberto($codcliente){
        $post["codcliente"] = $codcliente;
        $post["LIBERADO"] = 0;
        return $this->procurar($post, false, true);
    }
    
    public function procurar($post, $agrupador = false, $debug = false) {
        if(isset($post["codcliente"]) && $post["codcliente"] != NULL && $post["codcliente"] != ""){
            $and .= " and cp.COD_CLIENTE = {$post["codcliente"]}";
        }
        if(isset($post["LIBERADO"]) && in_array($post["LIBERADO"], array(0, 1))){
            $and .= " and cp.LIBERADO = {$post["LIBERADO"]}";
        }
        if($agrupador){
            $groupBy = " group by produto.COD_PRODUTO, produto.NOM_PRODUTO, produto.IND_TIPO";
        }else{
            $atributos = ", cp.DAT_COMPRA, cp.VAL_PAGO";
        }     
        
        $sql = "select distinct produto.COD_PRODUTO, produto.NOM_PRODUTO, produto.IND_TIPO {$atributos}
        from produto 
        inner join cliente_produto as cp on cp.COD_PRODUTO = produto.COD_PRODUTO
        where 1 = 1 {$and} {$groupBy} order by produto.NOM_PRODUTO";
//        echo "<pre>" . $sql . "</pre>";
        return $this->conexao->comando($sql);
    }
    
    public function trocaTipo($tipo){
        if($tipo == "E"){
            $tipo = "Exame";
        }elseif($tipo == "C"){
            $tipo = "Curso";
        }elseif($tipo == "O"){
            $tipo = "Consultoria";
        }elseif($tipo == "S"){
            $tipo = "Simulado";
        }
        return $tipo;
    }
    
    public function detalhesCurso($codigo){
        $sql = "select *
        from produto 
        where produto.COD_PRODUTO = {$codigo}";
        return $this->conexao->comandoArray($sql);

    }

}
