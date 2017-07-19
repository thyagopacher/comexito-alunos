<?php

/*
 * @author Thyago Henrique Pacher - thyago.pacher@gmail.com
 */

Class Depoimento {

    public $COD_DEPOIMENTO;
    public $NOM_ALUNO;
    public $DAT_DEPOIMENTO;
    public $COD_CURSO;
    public $DES_DEPOIMENTO;
    public $APROVADO;
    public $SITE;
    public $IND_LIDO;
    public $campos = array('COD_DEPOIMENTO', 'NOM_ALUNO', 'DAT_DEPOIMENTO', 'COD_CURSO', 'DES_DEPOIMENTO', 'APROVADO', 'SITE', 'IND_LIDO');
    private $conexao;

    public function __construct($conexao) {
        $this->conexao = $conexao;
    }

    public function __destruct() {
        unset($this);
    }

    public function inserir() {
        if (!isset($this->DAT_DEPOIMENTO) || $this->DAT_DEPOIMENTO == NULL || $this->DAT_DEPOIMENTO == "") {
            $this->DAT_DEPOIMENTO = date("Y-m-d H:i:s");
        }
        return $this->conexao->inserir('depoimento', $this);
    }

    public function atualizar() {
        return $this->conexao->atualizar('depoimento', $this);
    }

    public function procurarCodigo() {
        return $this->conexao->procurarCodigo('depoimento', $this);
    }

    public function excluir() {
        return $this->conexao->excluir('depoimento', $this);
    }

    public function procurar($post) {
        if (isset($post["COD_PRODUTO"]) && $post["COD_PRODUTO"] != NULL && $post["COD_PRODUTO"] != "") {
            $and .= " and produto.COD_PRODUTO = '{$post["COD_PRODUTO"]}'";
        }
        if (isset($post["APROVADO"]) && $post["APROVADO"] != NULL && $post["APROVADO"] != "") {
            $and .= " and depoimento.APROVADO = '{$post["APROVADO"]}'";
        }
        if (isset($post["NOM_ALUNO"]) && $post["NOM_ALUNO"] != NULL && $post["NOM_ALUNO"] != "") {
            $and .= " and depoimento.NOM_ALUNO like '%{$post["NOM_ALUNO"]}%'";
        }
        if (isset($post["data1"]) && $post["data1"] != NULL && $post["data1"] != "") {
            if (strpos($post["data1"], "/")) {
                $data1 = implode("-", array_reverse(explode("/", $post["data1"])));
            } else {
                $data1 = $post["data1"];
            }
            $and .= " and depoimento.DAT_DEPOIMENTO >= '{$data1} 00:00:00'";
        }

        if (isset($post["data2"]) && $post["data2"] != NULL && $post["data2"] != "") {
            if (strpos($post["data2"], "/")) {
                $data2 = implode("-", array_reverse(explode("/", $post["data2"])));
            } else {
                $data2 = $post["data2"];
            }
            $and .= " and depoimento.DAT_DEPOIMENTO <= '{$data2} 23:59:59'";
        }

        $sql = "select COD_DEPOIMENTO, NOM_ALUNO, 
        CONVERT(VARCHAR(10), DAT_DEPOIMENTO, 103) as DAT_DEPOIMENTO2, DES_DEPOIMENTO,
        produto.DES_PRODUTO, produto.NOM_PRODUTO, depoimento.aprovado
        from depoimento 
        inner join produto on produto.COD_PRODUTO = depoimento.COD_CURSO
        where 1 = 1 $and order by DAT_DEPOIMENTO desc";
        return $this->conexao->comando($sql);
    }

}
