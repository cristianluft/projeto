<?php
/*
$qualASuaIdade = 40;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if($qualASuaIdade < $idadeCrianca) {
    echo "Criança";
}else if($qualASuaIdade > $idadeMelhor) {
    echo "Idoso";
}else if($qualASuaIdade > $idadeCrianca && $qualASuaIdade < $idadeMaior){
    echo "Adolescente";
}else {
    echo "Nem idoso nem adolescente";
}
*/
/*
$diaSemana = date("w");

switch($diaSemana) {
    case 0:
        echo "Domingo";
    break;
    case 1:
        echo "Segunda";
    break;
}
*/

echo "<select>";

for($i = date("Y"); $i > date("Y")-100; $i--) {
    echo '<option value="'.$i.'">'.$i.'</option>';
}

echo "</select>";

?>
