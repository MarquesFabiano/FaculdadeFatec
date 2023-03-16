<?php
/*
Escreva um script que imprima qual o maior número.
Use IF .. ELSE
*/
$a = 10;
$b = 1;
$c = 40;
if ($a > $b && $a > $c) {
    echo "O maior número é: " . $a;
  } elseif ($b > $a && $b > $c) {
    echo "O maior número é: " . $b;
  } else {
    echo "O maior número é: " . $c;
  }
  ?>

?>