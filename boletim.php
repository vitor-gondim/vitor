<?php
$nome = "Vitor";
$nota1 = 9;
$nota2 = 9;
$nota3 = 9;
$media = ($nota1 + $nota2 + $nota3) / 3;
$frequencia = 80;

echo "Olá" . " " . $nome;
print "<br>";
echo "A sua média foi:" . " " . $media;
print "<br>";
echo "A sua frequência foi:" . " " . $frequencia;
print "<br>";
if ($media >= 7 and $frequencia >= 75) {
	echo "Aprovado!";
} else {
	echo "Você está de recuperação!";
}

?>