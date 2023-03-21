<?php
/*
Faça o cálculo da média simples de 
$nota_1 e $nota_2.
Imprima a média simples.
Imprima a condição:
    Se a média menor ou igual a 4.9, reprovado.
    Se a média entre 5 e 7, recuperação.
    Se a média acima de 7, aprovado.

Crie uma função com o nome calculo_media.
Crie validações na função, para que os parâmetros aceitos estejam 
entre 0 e 10.
Crie constantes para os limites ( 0 e 10 )
*/

define('MINIMO', 0);
define('MAXIMO', 10);

function calculo_media($nota_1, $nota_2) {
    if ($nota_1 < MINIMO || $nota_1 > MAXIMO) {
        echo "Nota 1 é invalida!";
        return false;
    }
    if ($nota_2 < MINIMO || $nota_2 > MAXIMO) {
        echo "Nota 2 é Invalida !";
    }

    $media = ($nota_1 + $nota_2) / 2;
    
    if ($media >= 7) {
        echo "Você está aprovado!";
    }elseif ($media >= 5) {
        echo "Você está de recuperação!";
    }else {
        echo "Você está reprovado!";
    }
    
    return $media;
}


$nota_1 = 9;
$nota_2 = 4;
calculo_media($nota_1, $nota_2);


?>