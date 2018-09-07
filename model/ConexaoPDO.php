<?php

/*
 * @author Thyago Henrique Pacher - thyago.pacher@gmail.com
 */

date_default_timezone_set('America/Sao_Paulo');
set_time_limit(0);

class ConexaoPDO {

    public $host = '';
    public $usuario = '';
    public $senha = '';
    public $banco = '';
    public $porta = '3306';
    public $conexao;

    function __construct() {
        $this->conectar();
    }

    function __destruct() {
        unset($this->conexao);
    }

    public function conectar() {
        $this->conexao = new PDO("sqlsrv:Server={$this->host};Database={$this->banco};ConnectionPooling=1;APP=ComÊxito", $this->usuario, $this->senha);
        if ($this->conexao == FALSE) {
            die("Não conectou via PDO");
        }
    }

    public function comando($query) {
        return $this->conexao->query($query);
    }

    public function comandoArray($query) {
        $consulta = $this->conexao->prepare($query);
        $consulta->execute();
        return $consulta->fetch(PDO::FETCH_ASSOC);
    }

    /*     * retorna a quantidade de resultados da consulta */

    public function qtdResultado($res) {
        if (isset($res) && $res != NULL && $res != "") {
            if (strstr($res->queryString, "ORDER") != FALSE) {
                $separa_query = explode('ORDER', $res->queryString); //retira a ultima parte da query que não pode vir do order by 
            } else {
                $separa_query = explode('order', $res->queryString); //retira a ultima parte da query que não pode vir do order by
            }
            $sql = 'select count(1) as qtd from (' . $separa_query[0] . ') x';
            $qtd = $this->comandoArray($sql);
            return $qtd["qtd"];
        } else {
            return 0;
        }
    }

    public function resultadoArray($resultado) {
        return $resultado->fetch(PDO::FETCH_ASSOC);
    }

    public function inserir($tabela, $objeto) {
        $valores = '';
        $campos = '';
        $valorChavePrimaria = 0;
        foreach ($objeto as $key => $campo) {
            if (in_array($key, $objeto->campos)) {
                if ($campo == "") {
                    continue;
                }
                $tipoChave = $this->comandoArray("SELECT DATA_TYPE FROM INFORMATION_SCHEMA.COLUMNS WHERE COLUMN_NAME LIKE '{$key}'");
                if ($key != $objeto->campos[0]) {
                    $campos .= "{$key} ,";
                    if ($tipoChave["DATA_TYPE"] == "text" || $tipoChave["DATA_TYPE"] == "varchar") {
                        $valores .= "'" . utf8_encode($campo) . "' ,";
                    } elseif ($tipoChave["DATA_TYPE"] == "decimal") {
                        $valores .= "'" . str_replace(',', '.', $campo) . "' ,";
                    } else {
                        $valores .= "'" . $campo . "' ,";
                    }
                }
            }
        }
        $sql = 'insert into ' . $tabela . '(' . substr($campos, 0, strlen(trim($campos)) - 1) . ') values(' . substr($valores, 0, strlen(trim($valores)) - 1) . ')';
        $resInserir = $this->conexao->query($sql);
        return $resInserir;
    }

    /**
     * atualização de objeto 
     * @param string $tabela designa o nome da tabela que vai ser gravado
     * @param string $objeto passa o objeto setado seus valores
     * @return boolean true = sucesso ou false = erro no atualizar
     */
    public function atualizar($tabela, $objeto) {
        $valorChavePrimaria = 0;
        $setar = '';
        foreach ($objeto as $key => $campo) {
            if (in_array($key, $objeto->campos)) {
                
                if ($campo == "") {
                    continue;
                }
                $sql = "SELECT DATA_TYPE FROM INFORMATION_SCHEMA.COLUMNS WHERE COLUMN_NAME LIKE '{$key}'";
                $tipoChave = $this->comandoArray($sql);
                if ($key != $objeto->campos[0]) {
                    if ($tipoChave["DATA_TYPE"] == "text" || $tipoChave["DATA_TYPE"] == "varchar") {
                        $campo = str_replace("'", '"', $campo);
                        $setar .= $key . " = '" . (($campo)) . "' ,";
                    } elseif ($tipoChave["DATA_TYPE"] == "decimal") {
                        $setar .= $key . " = '" . str_replace(',', '.', $campo) . "' ,";
                    } else {
                        $setar .= $key . " = '" . $campo . "' ,";
                    }
                } elseif ($key == $objeto->campos[0]) {
                    $valorChavePrimaria = $campo;
                }
            }
        }
        $sql = 'update ' . $tabela . ' set ' . substr($setar, 0, strlen(trim($setar)) - 1) . ' where ' . $objeto->campos[0] . " = '" . $valorChavePrimaria . "'";
        return $this->conexao->query($sql);
    }

    public function excluir($tabela, $objeto) {
        $valorChavePrimaria = 0;
        foreach ($objeto as $key => $campo) {
            if (in_array($key, $objeto->campos)) {
                if ($key == $objeto->campos[0]) {
                    $valorChavePrimaria = $campo;
                } else {
                    continue;
                }
            }
        }
        $sql = 'delete from ' . $tabela . ' where ' . $objeto->campos[0] . ' = ' . $valorChavePrimaria;
        return $this->conexao->query($sql);
    }

    public function procurarCodigo($tabela, $objeto, $colunas = '*') {
        $valorChavePrimaria = 0;
        foreach ($objeto as $key => $campo) {
            if ($key == $objeto->campos[0]) {
                $valorChavePrimaria = $campo;
            } else {
                continue;
            }
        }
        $sql = 'select ' . $colunas . ' from ' . $tabela . ' where ' . $objeto->campos[0] . ' = ' . $valorChavePrimaria;
        return $this->comandoArray($sql);
    }

    public function mostraErro() {
        $erro .= $this->conexao->errorCode() . '<br>';
        return $erro;
    }

    public function trocaStatus($status) {
        switch ($status) {
            case 'a':
                $status = "Ativo";
                break;
            case 'i':
                $status = "Inativo";
                break;
        }
        return $status;
    }

}
