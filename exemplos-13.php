<?php

$json = '[{"nome":"Joao","idade":20},{"nome":"Cristian","idade":25}]';

$data = json_decode($json);

var_dump($data);

?>