<?php

// Dichiaro un array iniziale, il quale contenuto sono una serie di array associativi contenenti la proprietà 'required' che sarà un valore booleano e 'task' che sarà il nostro $todo
$todos = [
    [
        "required" => true,
        "task" => "Fare la spesa"
    ],
    [
        "required" => true,
        "task" => "Pulire casa"
    ],
    [
        "required" => true,
        "task" => "Chiamare l'idraulico"
    ],
];

// Conversione dell'array in un file json
header('Content-Type: application/json');

// Stampa in pagina dell'array codificato
echo json_encode($todos);

?>