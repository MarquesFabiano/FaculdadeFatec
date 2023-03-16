<?php
/*
Crie um script que percorra toda a $array, apresentando os valores.
Utilize foreach.
Adapte o código para exibir somente os valores inteiros.
Realize a soma dos números inteiros

Dica: https://www.php.net/manual/en/control-structures.foreach.php
*/ 
$array = [
    "n1" => 10,
    "n2" => 20,
    "n3" => 30,
    "n4" => 'oi mundo',
];

$soma = 0;

foreach ($array as $value) {
    if (is_int($value)) {
        echo "$value \n";
        $soma += $value;
    } // soma recebe o valor, para somar sempre que percorrer
}
 
echo "A soma é: $soma";
?>