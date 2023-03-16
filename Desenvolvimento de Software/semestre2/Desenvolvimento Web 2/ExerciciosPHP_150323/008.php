<?php
/*
Descrubra se $numero é :
 - Divisível por 10
 - Divisível por 3
 - Se não é divisível por nenhum destes 

Imprimir mensagem na tela do número e as condições acima.
*/
$numero = 150;

if ($numero % 10 == 0 && $numero % 3 == 0) {
    echo "Número divisível por 10 e 3"; 
} elseif ($numero % 10 == 0) {
    echo "Número divisível por 10";
} elseif ($numero % 3 == 0) {
    echo "Número divisível por 3";
} else {
    echo "$numero não é divisível nem por 10 nem por 3";
}

?> 