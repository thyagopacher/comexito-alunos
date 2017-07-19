<?php
session_start();
spl_autoload_register(function ($class_name) {
    include '../model/' . $class_name . '.php';
});

$conexao = new ConexaoPDO();
$curso = new Curso($conexao);

$_POST["codcliente"] = $_SESSION["Codigo"];
$res = $curso->procurar($_POST);
$qtd = $conexao->qtdResultado($res);

if ($qtd > 0) {
    echo "<table id='tbl_cetifiados' class='display' cellspacing='0' width='100%'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Curso</th>";
    echo "<th>Opções</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    while ($cursop = $conexao->resultadoArray($res)) {
        echo "<tr>";
        echo "<td>{$cursop["NOM_PRODUTO"]}</td>";
        echo "<td>".$curso->trocaTipo($cursop["IND_TIPO"])."</td>";
        echo "<td>";
        echo "<a href='detalhes_curso?COD_PRODUTO={$cursop["COD_PRODUTO"]}' class='btn btn-success btn-sm'>Continuar</a>";
        echo "</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
}