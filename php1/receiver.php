<?php
// UpLoad de arquivo para
echo '<pre>'; // visualizar melhor 
print_r( $_FILES );

// Filtro de imagem 
$permitidos = ['image/jpeg','image/jpg', 'image/png', 'image/gif'];
if(in_array( $_FILES['arquivo']['type'], $permitidos )) {
    $nome = md5(time().rand(0, 1000)).'.jpg';// gera nomes diferentes de arquivos
    move_uploaded_file( $_FILES['arquivo']['tmp_name'],'./repositorio/'.$nome);
    echo 'Arquivo salvo com sucesso!';

}else{

    echo 'Tipo de arquivo não permitido!';

}