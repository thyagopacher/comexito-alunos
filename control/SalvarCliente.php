<?php

/* 
 * @author Thyago Henrique Pacher - thyago.pacher@gmail.com
 */

session_start();
if(!isset($_SESSION)){
    die(json_encode(array('mensagem' => 'Sua sessão caiu, por favor logue novamente!!!', 'situacao' => false)));
}  

function __autoload($class_name) {
    if (file_exists("../model/" . $class_name . '.php')) {
        include "../model/" . $class_name . '.php';
    } elseif (file_exists("../visao/" . $class_name . '.php')) {
        include "../visao/" . $class_name . '.php';
    } elseif (file_exists("./" . $class_name . '.php')) {
        include "./" . $class_name . '.php';
    }
}

$conexao = new ConexaoPDO();
$cliente  = new Cliente($conexao);

$variables = (strtolower($_SERVER['REQUEST_METHOD']) == 'GET') ? $_GET : $_POST;
foreach ($variables as $key => $value) {
    $cliente->$key = $value;
}

if (isset($_FILES['imagem'])) {
    $upload = new Upload($_FILES['imagem']);
    if ($upload->erro == '') {
        $cliente->imagem = $upload->nome_final;
    }else{
        die(json_encode(array('mensagem' => 'Erro ao fazer upload: '. $upload->erro, 'situacao' => false)));
    }
}

if(!isset($_POST["senha1"]) && !isset($_POST["senha2"]) && !isset($_FILES["imagem"])) {
    if(!isset($cliente->NOM_CLIENTE) || $cliente->NOM_CLIENTE == NULL || $cliente->NOM_CLIENTE == ""){
        die(json_encode(array('mensagem' => 'Por favor preencha nome!!!', 'situacao' => false)));
    }
} else {
    $cliente->DES_SENHA = $_POST["senha1"];
}


$msg_retorno = '';
$sit_retorno = true;

if(isset($cliente->COD_CLIENTE) && $cliente->COD_CLIENTE != NULL && $cliente->COD_CLIENTE != ""){
    $res = $cliente->atualizar();
}else{
    $clientep = $conexao->comandoArray('select COD_CLIENTE from cliente where DES_EMAIL = "'. $cliente->DES_EMAIL.'" and NOM_CLIENTE = "'.$cliente->NOM_CLIENTE.'"');
    if(isset($clientep["COD_CLIENTE"]) && $clientep["COD_CLIENTE"] != NULL && $clientep["COD_CLIENTE"] != ""){
        die(json_encode(array('mensagem' => 'Cliente ja inserido!!!', 'situacao' => false)));
    }
    $res     = $cliente->inserir();
}

if ($res == FALSE) {
    $msg_retorno = 'Erro ao salvar cliente! Causado por:' . $conexao->mostraErro();
    $sit_retorno = false;
} else {
    $msg_retorno = "Cliente salvo com sucesso! {$envioEmail}";
}

echo json_encode(array('mensagem' => $msg_retorno, 'situacao' => $sit_retorno));
