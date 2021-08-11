<?php
class Post {
    public $id; 
    public $likes = 1;
    public $coments = [];
    private $author;// só pode ser alterado através do setAuthor
/*
    public function __construct($postId){// construct -> serve para definir as propriedades iniciais
        $this->id = $postId;
        // consultar o BD para pegar informações do POST $id
        $this->likes = 12;
    }
*/
    public function aumentaLike(){
        $this->likes++;
    }

    public function setAuthor($name){
        if(!strlen($name) < 5){ 
            $this->author = ucfirst($name);// primerira letra maiúscula
        }  
    }    

    public function getAuthor(){
        return $this->author;// ?? 'Visiatante' se não tiver author recebe o valor
    }
}

$post1 = new Post();
$post1->setAuthor('marcos');
//$post1->likes = 2;
//$post1->aumentaLike();

$post2 = new Post();
$post2->setAuthor('pedro');// pode receber o valor padrão do construtor

echo "POST 1: ".$post1->likes." likes - Author : ".$post1->getAuthor()."</br>";
echo "POST 2: ".$post2->likes." likes - Author : ".$post2->getAuthor()."</br>";