<?php

header("Content-Type: application/json");

// riceve input JSON
$data = json_decode(file_get_contents("php://input"), true);

$word = strtolower($data["word"] ?? "");

// 🔐 parola segreta nascosta nel server
$SECRET = "accesso0101";

if ($word === $SECRET) {
    echo json_encode([
        "success" => true,
        "message" => "Accesso autorizzato"
    ]);
} else {
    echo json_encode([
        "success" => false,
        "message" => "Accesso negato"
    ]);
}
?>