<?php
session_start();
spl_autoload_register(function ($class_name) {
    include '../model/' . $class_name . '.php';
});

$conexao = new ConexaoPDO();
$curso = new Curso($conexao);

$_POST["codcliente"] = $_SESSION["Codigo"];
$res = $curso->pedidosEmAberto($_SESSION["Codigo"]);
$qtd = $conexao->qtdResultado($res);

if ($qtd > 0) {
    echo "<table id='tbl_pedidos_em_aberto' class='display' cellspacing='0' width='100%'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Item</th>";
    echo "<th>Valor</th>";
    echo "<th>Pagamento</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    while ($cursop = $conexao->resultadoArray($res)) {
        echo "<tr>";
        echo "<td>{$cursop["NOM_PRODUTO"]}</td>";
        echo "<td>".number_format($cursop["VAL_PAGO"], 2, ',', '')."</td>";
        echo "<td>";
        echo "<a href='detalhes_curso?COD_PRODUTO={$cursop["COD_PRODUTO"]}' class='btn btn-success btn-sm'>";
        echo "<i class='fa fa-money' aria-hidden='true'></i> Pagar</a>";
        echo "<a href='detalhes_curso?COD_PRODUTO={$cursop["COD_PRODUTO"]}' class='btn btn-danger btn-sm'>";
        echo "<i class='fa fa-times' aria-hidden='true'></i> Cancelar</a>";
        echo "</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
}