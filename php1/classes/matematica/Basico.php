<?php
namespace classes\matematica;
class Basico {
    public function somar($num_1,$num_2){
        $total = $num_1 + $num_2;
        return $total;
    }
}

// injeção de dependência
class Matematica {
    private $basico;

    public function __construct($b){
        $this->basico = $b;
    }

    public function somar($num_1,$num_2){
        return $this->basico->somar($num_1,$num_2);
    }
}

$mat = new Matematica(new Basico());
echo $mat->somar(50,50)."</br>";

/*
// Injeção de Depêndencia "Trabalhar com qualver banco de dados".
class database {
    private $engine;

    public function __construct(DatabaseInterface $eng){
        $this->engine = $eng;
    }

    public function listarTudo(){
        return $this->engine->listar();
    }
}

class MysqlEngine implements DatabaseInterface{
    public function listar(){
        //...
    }
}

class OracleEngine implements DatabaseInterface{
    public function listar(){
        //...
    }
}

class MongoEngine implements DatabaseInterface{
    public function listar(){
        //...
    }
}

$db = new Database( new MysqlEngine() );
$db->listarTudo();

*/