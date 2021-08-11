<?php declare(strict_types=1);
/*
Ao definir strict_types=1, você informa ao mecanismo que int $xsignifica "$ x deve ser apenas
um int adequado, nenhuma coerção de tipo permitida." Você tem grande garantia de que está 
recebendo exatamente e somente o que foi dado, sem qualquer conversão e perda potencial.
*/
namespace classes\matematica;

class Basica {
    public function somar($num_1,$num_2){
        $total = $num_1 + $num_2;
        return $total;
    }
}
