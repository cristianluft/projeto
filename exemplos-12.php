
<?php

$pessoas = array();

array_push($pessoas,array(
    'nome'=>'Joao',
    'idade'=>20
));

array_push($pessoas,array(
    'nome'=>'Cristian',
    'idade'=>25
));

echo json_encode($pessoas);

?>