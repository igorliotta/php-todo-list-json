<?php

// Recupero e leggo il contenuto del file json 
$todos_string = file_get_contents('./todos.json');

// Decodifico il file json cercato e lo trasformo in un array
$todos = json_decode($todos_string, true);

$currentTodoIndex = $_POST['id'] ?? null;
$currentTodoIndex = intval($currentTodoIndex);

$todosNew = [];
foreach ($todos as $index => $todo) {
    if ($currentTodoIndex !== $index) {
        $todosNew[] = $todo;
    }
}

$returnData = [
    'success' => true,
    'results' => $todosNew, 
    'postdata' => $_POST,
];

// Salvare il nuovo array nel file todos.json

// Codifichiamo la stringa
$todos_string = json_encode($todosNew);

// Salviamo il file generale con il nuovo contenuto
file_put_contents('./todos.json', $todos_string);

header('Content-type: application/json');
echo json_encode($returnData);
?>