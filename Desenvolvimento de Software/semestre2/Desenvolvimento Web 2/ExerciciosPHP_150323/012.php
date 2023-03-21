<?php
/*
Faça o cálculo da média simples de 
$nota_1 e $nota_2.
Imprima a média simples.
Imprima a condição:
    Se a média menor ou igual a 4.9, reprovado.
    Se a média entre 5 e 7, recuperação.
    Se a média acima de 7, aprovado.

Edite a função com o nome calculo_media.
*/
function calculo_media(float $nota_1, float $nota_2): float{
    $media = ($nota_1 + $nota_2) / 2;
    return $media;
}
$nota_1 = 9;
$nota_2 = 4;

$media = calculo_media($nota_1, $nota_2);
echo "Sua média é: $media \n";

if ($media >= 7) {
    echo "Você está aprovado!";
} elseif ($media >= 5) {
    echo "Você está de recuperação!";
} else {
    echo "Você está reprovado!";
}

?>