<?php
$preco = 150;
$quantidade = 2;
$desconto = 10;
$vip = true;
$total = $preco * $quantidade - $desconto;

if ($vip = true ) {
    echo "Cliente VIP, aplicando desconto de  R$ 5 <br>";
    $total = $total - 5;
}
 
if ($total >= 200) {
    echo "Frete grátis liberado! <br>";
}
echo "Total a pagar: " . $total;


?>