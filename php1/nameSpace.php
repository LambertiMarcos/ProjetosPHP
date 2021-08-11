<?php
// Teste de nameSpaçe

require 'classes/matematica/basica.php';

use classes\matematica\Basico as OperacoesMatematica;

$s = new OperacoesMatematica();
echo $s->somar(5,5)."</br>";


