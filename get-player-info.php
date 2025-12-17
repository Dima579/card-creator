<?php
session_start();

header('Content-Type: application/json');

if (!isset($_SESSION['player-info'])) {
    http_response_code(404);
    echo json_encode(["error" => "No player data found"]);
    exit();
}

echo json_encode($_SESSION['player-info']);
