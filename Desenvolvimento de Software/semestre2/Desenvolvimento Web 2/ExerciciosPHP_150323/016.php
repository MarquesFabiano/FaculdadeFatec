<?php
/*
Ler um número inteiro entre 1 e 12 e escrever o mês correspondente. Caso o número seja 
Se estiver fora do intervalo, informar que não existe o mês

Utilize array.
*/
$mes = array(
    1 => "Janeiro",
    2 => "Fevereiro",
    3 => "Março",
    4 => "Abril",
    5 => "Maio",
    6 => "Junho",
    7 => "Julho",
    8 => "Agosto",
    9 => "Setembro",
    10 => "Outubro",
    11 => "Novembro",
    12 => "Dezembro"
);
// coloquei um while para o usuario redigitar caso de false =)
while (true) {
    $numeroMes = readline("Digite o número do mês entre 1 e 12: ");

    if ($numeroMes >= 1 && $numeroMes <= 12) {
        echo "O mês correspondente ao número $numeroMes é " . $mes[$numeroMes] . "!\n";
        break;
    } else {
        echo "Não há mês correspondente a esse número, revise!\n";
        continue;
    }
}