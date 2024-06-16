<?php
//leggp il file json dal disco
$fileContent = file_get_contents("dati.json");

if (isset($_POST["titolo"]) && isset($_POST["descrizione"])) {



    //converto il json in un array associativo php
    $todolist = json_decode($fileContent, true);

    //creo un nuovo toDo
    $newToDO = [
        "titolo" => $_POST["titolo"],
        "descrizione" => $_POST["descrizione"],
    ];

    //pusho il nuovo toDo nel array
    $todolist[] = $newToDO;

    //converto l'array in un json
    $fileContent = json_encode($todolist);

    //scrivo il json su disco
    file_put_contents("dati.json", $fileContent);

    header('content-type: application/json');

    echo $fileContent;
}

header('Content-Type: application/json');

echo $fileContent;
