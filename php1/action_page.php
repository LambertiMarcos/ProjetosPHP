<?php
$fname = filter_input(INPUT_POST,'fname');
$lname = filter_input(INPUT_POST,'lname');

    if($fname && $lname){

        echo 'Nome :'.$fname."</br>"; 
        echo 'Sobrenome :'.$lname; 

    }else{
        header("Location: index.php"); // redirecioinamento
        exit;
        //echo 'Nome ou idade não foram enviados!';
    }
