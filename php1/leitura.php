<?php

require('header.php');
$texto = file_get_contents('introducao.txt');
$c_texto = explode("\n", $texto);
echo "linhas: ".count($c_texto)."</br>";
echo $texto;

