<?php

function teste() {
    global $nome;
    $nome = "Cristian";
}

teste();

echo $nome;

?>