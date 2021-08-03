<!DOCTYPE html>
<html>
<body>

<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age);

foreach($age as $x => $x_value) {
echo "Key=" . $x . ", Value=" . $x_value;
echo "<br>";
}
if(key_exists('Ben', $age)){
    $age = $age['Ben'];
    echo "Eu tenho ".$age." anos"."</br>";
}else{
    echo "Nome não encontrado!";
}
echo "<br><br>";

$lista = ['color' => 'red',
        'taste' => 'sweet',
        'shape' => 'round',
        'name'  => 'apple'];

$chaves = array_keys($lista);
print_r($chaves);
echo "<br><br>";

$valores = array_values($lista);
print_r($valores);
echo "<br><br>";
?>

<table border="1">
    <tr>
        <?php foreach($chaves as $chave): ?>
            <th><?php echo $chave; ?></th>
        <?php endforeach; ?>
    </tr>
    <tr>
        <?php foreach($valores as $valor): ?>
            <td style="color: blue"><?php echo $valor; ?></td>
        <?php endforeach; ?>
    </tr>
</table>


</body>
</html>