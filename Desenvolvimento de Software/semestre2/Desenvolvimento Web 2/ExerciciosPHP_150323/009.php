<?php
/*
Faça o cálculo da média simples de 
$nota_1 e $nota_2.
Imprima a média simples.
Imprima a condição:
    Se a média menor ou igual a 4.9, reprovado.
    Se a média entre 5 e 7, recuperação.
    Se a média acima de 7, aprovado.
*/
$nota_1 = 9;
$nota_2 = 4;
$media = $nota_1 + $nota_2 / 2;

echo "A média é: $media \n" ;

if ($media >= 7) {
    echo "Você está aprovado!";
}elseif ($media >= 5) {
    echo "você está de recuperação!";
}else {
    echo "Você está reprovado!";
}

?>