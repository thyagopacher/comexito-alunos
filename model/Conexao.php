<?php

/*
 * @author Thyago Henrique Pacher - thyago.pacher@gmail.com
 */
date_default_timezone_set('America/Sao_Paulo');
set_time_limit(0);

class Conexao {

    public $host = '186.202.124.22';
    public $usuario = 'comexito2';
    public $senha = 'portbrasil8041';
    public $banco = 'comexito2';
    public $porta = '3306';
    private $resultado;
    public $conexao;

    function __construct() {
        $this->conectar();
    }

    function __destruct() {
        if ($this->conexao != FALSE) {
            sqlsrv_close($this->conexao);
        }
    }

    public function conectar() {
        $connectionInfo = array("Database" => $this->banco, "UID" => $this->usuario, "PWD" => $this->senha, 'ReturnDatesAsStrings' => true, "CharacterSet" => "UTF-8");
        $this->conexao = sqlsrv_connect($this->host, $connectionInfo);
        if (!$this->conexao) {
            echo "Erro ao conectar!!!";
            exit;
        }
    }

    /* retorna mysql_query */

    public function comando($query) {
        return sqlsrv_query($this->conexao, $query, array(), array("Scrollable" => SQLSRV_CURSOR_KEYSET));
    }

    public function comandoArray($query) {
        $resultado = $this->comando($query);
        if ($resultado != FALSE) {
            return sqlsrv_fetch_array($resultado);
        } else {
            return FALSE;
        }
    }

    /*     * retorna a quantidade de resultados da consulta */

    public function qtdResultado($resultado) {
        $row_count = sqlsrv_num_rows($resultado);
        if ($row_count === false) {
            die("Erro ao pegar numero de linhas sqlserver!!!");
        } else {
            return $row_count;
        }
    }

    public function resultadoArray($resultado) {
        return sqlsrv_fetch_array($resultado);
    }

    public function inserir($tabela, $objeto) {
        $valoresTabela = "";
        $campos = "";
        foreach ($objeto as $key => $campo) {
            if (in_array($key, $objeto->campos)) {
                if ($campo == "") {
                    continue;
                }
                $sql1 = "SELECT DATA_TYPE FROM INFORMATION_SCHEMA.COLUMNS WHERE COLUMN_NAME LIKE '{$key}'";
                $tipoChave = $this->comandoArray($sql1);
                if ($key != $objeto->campos[0]) {

                    $campos .= "{$key} ,";
                    if ($tipoChave["DATA_TYPE"] == "text" || $tipoChave["DATA_TYPE"] == "varchar") {
                        $valoresTabela .= "'" . addslashes(utf8_encode($campo)) . "' ,";
                    } elseif ($tipoChave["DATA_TYPE"] == "decimal") {
                        $valoresTabela .= "'" . str_replace(',', '.', $campo) . "' ,";
                    } else {
                        $valoresTabela .= "'{$campo}' ,";
                    }
                }
            }
        }
        $campos = substr($campos, 0, strlen(trim($campos)) - 1);
        $valoresTabela = substr($valoresTabela, 0, strlen(trim($valoresTabela)) - 1);

        $sqlInserir = "insert into $tabela ($campos) values($valoresTabela)";

        $resInserir = $this->comando($sqlInserir);
        return $resInserir;
    }

    public function atualizar($tabela, $objeto) {
        $valorChavePrimaria = 0;
        $setar = '';
        foreach ($objeto as $key => $campo) {
            if (in_array($key, $objeto->campos)) {
                if ($campo == "") {
                    continue;
                }
                $tipoChave = $this->comandoArray("SELECT DATA_TYPE FROM INFORMATION_SCHEMA.COLUMNS WHERE COLUMN_NAME LIKE '{$key}'");
                if ($key != $objeto->campos[0]) {
                    if ($tipoChave["DATA_TYPE"] == "text" || $tipoChave["DATA_TYPE"] == "varchar") {
                        $campo = str_replace("'", '"', $campo);
                        $setar .= $key . " = '" . (utf8_encode($campo)) . "' ,";
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
        return $this->comando($sql);
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
        return $this->comando($sql);
    }

    public function procurarCodigo($tabela, $objeto) {
        $valorChavePrimaria = 0;
        foreach ($objeto as $key => $campo) {
            if ($key == $objeto->campos[0]) {
                $valorChavePrimaria = $campo;
            } else {
                continue;
            }
        }
        $sql = 'select * from ' . $tabela . ' where ' . $objeto->campos[0] . ' = ' . $valorChavePrimaria;
        return $this->comandoArray($sql);
    }

    public function mostraErro() {
        $erro = '';
        if (($errors = sqlsrv_errors() ) != null) {
            foreach ($errors as $error) {
                $erro .= "SQLSTATE: " . $error['SQLSTATE'] . "<br />";
                $erro .= "code: " . $error['code'] . "<br />";
                $erro .= "message: " . $error['message'] . "<br />";
            }
        }
        return $erro;
    }

}
