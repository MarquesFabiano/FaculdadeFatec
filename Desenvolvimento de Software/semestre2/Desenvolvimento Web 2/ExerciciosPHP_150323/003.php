<?php
/*
Escreva um script que imprima qual o maior número.
Converter variáveis strings em inteiros
Use IF
*/
$a = "10";
$b = "1";

$a = intval($a);
$b = intval ($b);

if ($a > $b) {
    echo 'A maior variável é "a", que vale: ' . $a . '. Agora ela é do tipo ' . gettype($a);
 } else {
    echo 'A maior variábel é "b" que vale; ' . $b . '. Agora ela é do tipo '. gettype($b);
 }

?>