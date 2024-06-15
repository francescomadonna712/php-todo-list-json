<?php

$todolist = [
    [
        'titolo' => 'Fare la spesa',
        'descrizione' => 'Latte, Pane, Formaggio, Frutta',
        'stato' => 'in sospeso'
    ],
    [
        'titolo' => 'Pulire casa',
        'descrizione' => 'Pulire bagno, ufficio, cucina',
        'stato' => 'in sospeso'
    ],
    [
        'titolo' => 'Impastare la pizza',
        'descrizione' => 'Fare impasto pizza per cena di sabato',
        'stato' => 'fatto'
    ],
];

header('Content-type: application/json');

$jsonString = json_encode($todolist);

echo $jsonString;
