<?php
setcookie('nome', '', time() - 3600);// apagar o cookie- set com time no passado

header("Location: index.php"); // redirecioinamento
exit;