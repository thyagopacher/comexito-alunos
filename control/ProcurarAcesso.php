<?php
session_start();
spl_autoload_register(function ($class_name) {
    include '../model/' . $class_name . '.php';
});

$conexao = new ConexaoPDO();
$acesso = new ClienteAcesso($conexao);

$_POST["codcliente"] = $_SESSION["Codigo"];
$res = $acesso->procurar($_POST);
$qtd = $conexao->qtdResultado($res);

if ($qtd > 0) {
    
    echo "<input type='hidden' id='qtd_acesso' value='".$qtd."'>";
    echo "<table id='tbl_acesso' class='display' cellspacing='0' width='100%'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Data Acesso</th>";
    echo "<th>Hora</th>";
    echo "<th>IP de Conexão</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    while ($acessop = $conexao->resultadoArray($res)) {
        $separa_data = explode(" ", $acessop["DAT_ACESSO"]);
        echo "<tr>";
        echo "<td data-order='{$separa_data[0]}'>".date("d/m/Y", strtotime($separa_data[0]))."</td>";
        echo "<td data-order='{$acessop["DAT_ACESSO"]}'>".date("H:i:s", strtotime($separa_data[1]))."</td>";
        echo "<td>".$acessop["IP_ACESSO"]."</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
}