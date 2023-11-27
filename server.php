<?php

// Dopo aver creato un file json contenente l'array, importiamolo per renderlo disponibile nel server
$todos_json = file_get_contents('./todos.json');

// Decodifichiamo il file
$todos = json_decode($todos_json, true);


$response = [
    'success' => true,
    'results' => $todos,
];

header('Content-type: application/json');
echo json_encode($response);

?>