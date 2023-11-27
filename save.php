<?php

$new_todo_text = $_POST['todo'] ?? '';

// Recupero e leggo il contenuto del file json 
$todos_string = file_get_contents('./todos.json');

// Decodifico il file json cercato e lo trasformo in un array
$todos = json_decode($todos_string, true);

$todo = [
    'done' => false,
    'task' => $new_todo_text
];


// L'array ottenuto sarà il nuovo todo, quindi verrà pushato all'interno dell'array contenente già dati
$todos[] = $todo;


// Codifichiamo la stringa
$todos_string = json_encode($todos);

// Salviamo il file generale con il nuovo contenuto
file_put_contents('./todos.json', $todos_string);


header('Content-type: application/json');
echo json_encode($todos);
