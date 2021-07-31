<?php 
//echo para exibir na tela
// variáveis
$nome ='Marcos';
$sobrenome ='Lamberti';
$idade = 25;
$valor = 152.15;
$chovendo = true;
$ingredientes = ['açucar',
                'farinha',
                'ovo',
                'leite'];
$bolo = [
    'fermento',
//    ...$ingredientes, apartir do editor 7.4
    'corante'
];

// phpinfo();
echo $nome."<br/>";
echo $valor."<br/>";
echo $chovendo."<br/>";
echo $nomeCompleto = $nome.' '.$sobrenome."<br/>";
echo "Terceiro ingrediente do array: ".$ingredientes[2]."<br/>";
echo $bolo[0]."<br/>";

print_r($ingredientes);


    $lista = [
        'nome' => 'Marcos',
        'idade' => 90,
        'atributos' => [
            'forca' => 60,
            'agilidade' => 80,
            'destreza' => 50
        ],
        'vida' => 1000,
        'mana' => 928
    ];

    echo "Nome: ".$lista['nome']."<br>";
    echo "Força: ".$lista['atributos']['forca']."<br>";
    echo "Nome: ".$lista['vida']."<br>";

    $tipo = 'video';

    switch ($tipo){
        case 'foto':
            echo 'Exibindo Texto';
            break;
        case 'video':
            echo 'Exibindo video';
            break;
    }
var_dump($ingredientes);

$today = date("F j, Y, g:i a");                 // March 10, 2001, 5:16 pm
$today = date("m.d.y");                         // 03.10.01
$today = date("j, n, Y");                       // 10, 3, 2001
$today = date("Ymd");                           // 20010310
$today = date('h-i-s, j-m-y, it is w Day');     // 05-16-18, 10-03-01, 1631 1618 6 Satpm01
$today = date('\i\t \i\s \t\h\e jS \d\a\y.');   // it is the 10th day.
$today = date("D M j G:i:s T Y");               // Sat Mar 10 17:16:18 MST 2001
$today = date('H:m:s \m \i\s\ \m\o\n\t\h');     // 17:03:18 m is month
$today = date("H:i:s");                         // 17:16:18
$today = date("Y-m-d H:i:s");                   // 2001-03-

$data = '2021-06-12';
echo date('d/m/Y', strtotime($data));

//--------exercício------------//
$data  = date("d/m/Y"); //pega o dia atual 
function dia_da_semana($data) {
    $dia = date("w",strtotime($data));  

    switch($dia){
        case 0: 
            return "Domingo";
        break; 
        case 1: 
            return "Segunda-Feira";
        break; 
        case 2: 
            return "Terça-Feira";
        break; 
        case 4: 
            return "Quarta-Feira";
        break; 
        case 5: 
            return "Quinta-Feira";
        break; 
        case 0: 
            return "Sexta-Feira";
        break; 
        case 0: 
            return "Sabado";
        break; 
    }
}

echo $data." - ".dia_da_semana($data);
?>