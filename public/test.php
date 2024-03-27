<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

$response = [
    "message" => "Hello from PHP!",
    "name" => "https://image-cdn.hypb.st/https%3A%2F%2Fjp.hypebeast.com%2Ffiles%2F2020%2F07%2Fdragonball-goku-kakarot-collection-1-1.jpg?w=960&cbr=1&q=90&fit=max",
    "age" => "25"
];

echo json_encode($response);
?>