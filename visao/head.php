<?php

session_start();
spl_autoload_register(function ($class_name) {
    include '../model/' . $class_name . '.php';
});

$conexao = new ConexaoPDO();
$curso = new Curso($conexao);
$instrutor = new Instrutor($conexao);
$cliente = new Cliente($conexao);

$_SESSION["Codigo"] = '6065';
$_SESSION["MM_UserAuthorization"] = 'true';

$uri = getenv("REQUEST_URI");
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://comexito.com.br/site3/assets/css/style.css" media="all">
<link rel="stylesheet" href="http://css.comexito.com.br/style.min.css" media="all">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,300,700" type="text/css">
<link rel="stylesheet" href="css/geral.css?<?= date("YmdHis") ?>">
<link rel="stylesheet" href="css/sweetalert.min.css">
<link rel="stylesheet" href="css/jquery.dataTables.min.css">
<?php
if (!isset($title) || $title == NULL || $title == "") {
    $title = "Painel de Alunos - ComÊxito";
}
?>
<title><?= $title ?></title>