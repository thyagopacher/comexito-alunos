<?php
ini_set('display_errors', 1);
ini_set('display_startup_erros', 1);
error_reporting(E_ALL);
/* 
 * @author Thyago Henrique Pacher - thyago.pacher@gmail.com
 */

session_start();
if(!isset($_SESSION)){
    die(json_encode(array('mensagem' => 'Sua sessão caiu, por favor logue novamente!!!', 'situacao' => false)));
}  
if(!isset($_POST["curso"]) || $_POST["curso"] == NULL || $_POST["curso"] == ""){
    die(json_encode(array('mensagem' => 'Por favor preencha o curso para suporte!', 'situacao' => false)));
}  
if(!isset($_POST["nome"]) || $_POST["nome"] == NULL || $_POST["nome"] == ""){
    die(json_encode(array('mensagem' => 'Por favor preencha o nome para suporte!', 'situacao' => false)));
}  
if(!isset($_POST["email"]) || $_POST["email"] == NULL || $_POST["email"] == ""){
    die(json_encode(array('mensagem' => 'Por favor preencha o email para suporte!', 'situacao' => false)));
}elseif(strstr($_POST["email"], "@") == FALSE){
    die(json_encode(array('mensagem' => 'Por favor email deve conter @!', 'situacao' => false)));
}  
if(!isset($_POST["texto"]) || $_POST["texto"] == NULL || $_POST["texto"] == ""){
    die(json_encode(array('mensagem' => 'Por favor preencha o texto para suporte!', 'situacao' => false)));
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

$conexao = new Conexao();
$cursop = $conexao->comandoArray("select NOM_PRODUTO from produto where COD_PRODUTO = ".$_POST["curso"]);

$headers = "From: {$_POST["nome"]} <{$_POST["email"]}>\n";
$headers .= "Content-type: text/html; charset=utf-8\n";
$subject = "contato suporte ComÊxito dia ".date("d/m/Y");
$message = "Mensagem enviada por: {$_POST["nome"]}<br>";
$message .= "Email: {$_POST["email"]}<br>";
$message .= "Curso: {$cursop["NOM_PRODUTO"]}<br>";
$message .= "Problema: {$_POST["texto"]}<br>";

$res = mail($_POST["email"], $subject, $message, $headers);

if ($res === FALSE) {
    $msg_retorno = 'Erro ao enviar!';
    $sit_retorno = false;
} else {
    $msg_retorno = "Enviado com sucesso!";
    $sit_retorno = true;
}

echo json_encode(array('mensagem' => $msg_retorno, 'situacao' => $sit_retorno));
