<?php
/*
Importar a função criada em 014_a.php para ser utilizada aqui.
*/
require_once '014_a.php';

$nota_1 = 9;
$nota_2 = 4;
$media = calculo_media($nota_1, $nota_2);
echo "Sua média é: $media \n";

$nota_1 = 1;
$nota_2 = 5;
$media = calculo_media($nota_1, $nota_2);
echo "Sua média é: $media \n";

$nota_1 = 5;
$nota_2 = 3;
$media = calculo_media($nota_1, $nota_2);
echo "Sua média é: $media \n";

?>