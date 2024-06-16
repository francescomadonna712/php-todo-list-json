<?php

if (isset($_POST["titolo"]) && isset($_POST["descrizione"])) {
    $titolo = $_POST["titolo"];
    $descrizione = $_POST["descrizione"];

    echo "ho ricevuto dei dati $titolo $descrizione";
} else {

    $fileContent = file_get_contents("dati.json");



    header('Content-Type: application/json');

    echo $fileContent;
}
