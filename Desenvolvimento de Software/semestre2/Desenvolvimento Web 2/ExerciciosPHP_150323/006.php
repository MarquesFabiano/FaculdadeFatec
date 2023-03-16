<?php
/*
Crie um script que apresente o tipo de $array e os valores presentes.
Neste mesmo script, tente acessar na $array com a chave 'teste' e descubra o que acontece.
*/ 
$array = [
    "n1" => 10,
    "n2" => 20,
    "n3" => 30,
    "n4" => 'oi mundo',
];
echo "Tipo de \$array: " . gettype($array) . "\n";
echo "Valores presentes em \$array:\n";

foreach ($array as $var => $valor) {
    echo "$var = $valor \n"; 
}
// teste de chave
if (array_key_exists('teste', $array)) {
    echo "Valor da chave 'teste': " . $array['teste'] . "\n";
} else {
    echo "A chave 'teste' não existe em \$array.\n";
}


?>