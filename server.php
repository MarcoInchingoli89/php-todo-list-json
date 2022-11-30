<?php

$tasks = [
    'portare fuori il cane',
    'fare la spesa',
    'andare in lavanderia',
    'studiare PHP',
    'ordinare la pizza'
];

//var_dump($tasks);

$tasks_string = file_get_contents('todolist.json');
/* var_dump($tasks_string); */
$tasks_array = json_decode($tasks_string);
/* var_dump($tasks_array); */


header('Content-Type: application/json');
echo json_encode($tasks_array);

?>