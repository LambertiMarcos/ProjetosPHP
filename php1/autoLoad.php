<?php

spl_autoload_register(function($class){
    if(file_exists('classes/matematica/'.$class.'.php')){
        require 'classes/matematica/'.$class.'.php';
    }
});

$mat = new Basico();
echo $mat->somar(10,50)."</br>";
