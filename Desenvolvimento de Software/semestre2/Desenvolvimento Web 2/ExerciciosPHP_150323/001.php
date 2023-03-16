<?php
/*
Variáveis 
*/

$variavel_1 = 'texto';
echo 'A variável ' . $variavel_1 . 'é do tipo: ' . gettype($variavel_1) . '<br>';

// Imprimir o valor a variável e o seu tipo

$variavel_2 = 123;
echo 'A variável ' . $variavel_2 . 'é do tipo: ' . gettype($variavel_2) . '<br>';
// Imprimir o valor a variável e o seu tipo

$variavel_3 = 1;
echo 'A variável ' . $variavel_3 . 'é do tipo ' . gettype($variavel_3). '<br>';
// Imprimir o valor a variável e o seu tipo

$array = [
    "foo" => "bar",
    "bar" => "foo",
];
echo print_r($array, true) . 'esté é um ' . gettype($array) . '<br>';
// Imprimir o valor a variável e o seu tipo

?>