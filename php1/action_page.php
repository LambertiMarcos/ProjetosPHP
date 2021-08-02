<?php
session_start();// para trabalhar com sessão

$fname = filter_input(INPUT_POST,'fname', FILTER_SANITIZE_SPECIAL_CHARS);
$lname = filter_input(INPUT_POST,'lname', FILTER_SANITIZE_SPECIAL_CHARS);
$idade = filter_input(INPUT_POST,'idade', FILTER_SANITIZE_NUMBER_INT);
$email = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL);// VALIDAÇÃO DO EMAIL

    if($fname && $lname && $email){

        // Definir cookie
        $expiracao = time() + (86400 * 30); // time de 30 dias
        setcookie('nome', $fname, $expiracao);

        echo 'Nome :'.$fname."</br>"; 
        echo 'Sobrenome :'.$lname."</br>"; 
        echo 'Idade :'.$idade."</br>"; 
        echo 'E-mail :'.$email; 

    }else{
$_SESSION['aviso'] = 'Preencha os itens corretamente!';

        header("Location: index.php"); // redirecioinamento, apenas se não foi enviado nada antes
        exit;
        //echo 'Nome ou idade não foram enviados!';
    }
//"sessão armazena informações no servidor"