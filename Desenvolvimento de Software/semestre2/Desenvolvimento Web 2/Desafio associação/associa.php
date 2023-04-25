<?php
require_once 'SalaVirtual.php';
require_once 'Pessoa.php';

$s1 = new SalaVirtual('ti', 21, 'fessor');
$s2 = new SalaVirtual('ge', 22, 'fessora');

$p1 = new Pessoa('fabiano', 11, 2, 'ti', $s1);
$p2 = new Pessoa('julia', 12, 5, 'ti', $s1);
$p3 = new Pessoa('carlos', 13, 2, 'ge', $s2);
$p4 = new Pessoa('maria', 14, 1, 'ti', $s1);
$p5 = new Pessoa('pedro', 15, 3, 'ge', $s2);


$p1->irAula(); 
$p2->irAula(); 
$p3->irAula(); 
$p4->irAula(); 
$p5->irAula(); 
