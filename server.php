<?php

$tasks = [
    'portare fuori il cane',
    'fare la spesa',
    'andare in lavanderia',
    'studiare PHP',
    'ordinare la pizza'
];

//var_dump($tasks);

header('Content-Type: application/json');
echo json_encode($tasks);

?>