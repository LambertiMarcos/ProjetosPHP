<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="css/style.css" type="text/css" rel="stylesheet"/>
</head>
<body>

<div class="container">
    <h2>Navigation Tabs</h2>
        <p>Turn the nav menu into navigation tabs with the .nav nav-tabs class. Add the active class to the active/current link. If you want the tabs to be togglable, see the last example on the tutorial page.</p>
    <ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link active" href="index.php">Index</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="leitura.php">Ler</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="escrever.php">Escrever</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="lista.php">Lista</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="copy.php">Copiar</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="array.php">Array</a>
    </li>
    </ul>
</div>

</body>
</html>
<?php
if(isset($_COOKIE['nome'])){
    $nome = $_COOKIE['nome'];
    echo '<h2>'.$nome.'</h2>';
}
