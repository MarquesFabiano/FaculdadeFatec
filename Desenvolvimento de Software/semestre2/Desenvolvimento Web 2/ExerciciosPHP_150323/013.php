<?php
/*
Crie uma função que demonstre 
 - Passagem por valor.
 - Passagem por referência.

 
*/

function passagemValor ($valor)  {
    $valor = $valor * 3;
    echo "PASSAGEM COM VALOR: Dentro da função o valor é: $valor \n";
}

$valorPassagem = 1;
passagemValor($valorPassagem);
echo "fora da função o valor é: $valorPassagem \n";

function passagemReferencia (&$valor){
    $valor = $valor * 3;
    echo "PASSAGEM COM REFERÊNCIA: Dentro da função o valor é: $valor \n";
}

$valorPassagemRef = 2;
passagemReferencia($valorPassagemRef);
echo "fora da função o valor é: $valorPassagemRef \n";

?>