<?php
$nomeCliente = "Vitor Gondim";
$idadeTexto = "18";
$renda = 3000;
$score = 800;
$parcela = ($renda * 30) / 100;
$restricaoNome = false;

echo "--- Sistema de Análise de Crédito ---";
print "<br>";
echo " Cliente: " . $nomeCliente;
print "<br>";
echo " Idade do cliente : " . $idadeTexto;
print "<br>";
echo "Renda do cliente: " . $renda;
print "<br>";
echo "Score do cliente: " . $score;
print "<br>";

    if ($idadeTexto >= 18 and $renda >= 2000 and $score >= 600 and $restricaoNome = true) {
        echo " Empréstimo aprovado!";
        print "<br>"; 
        echo "Parcela máxima permitida: " . $parcela;

}   else {
    echo "Empréstimo recusado! ";
}

?>