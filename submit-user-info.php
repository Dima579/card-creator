<?php
session_start();

$_SESSION['player-info'] = [
    "profImage" => $_POST["profile-image-option"],
    "imageShape" => $_POST["shape-selector-option"],
    "playerName" => $_POST["player-name"],
    "playerTitle" => $_POST["player-title"],
    "gamerType" => $_POST["gamer-type"],
    "gamingPlatform" => $_POST["gaming-platform"],
    "prefControlType" => $_POST["control-type"],
    "favGame" => $_POST["favourite-game"],
    "specialAbility" => $_POST["special-ability"],
    "playerRank" => $_POST["rank"]
];

header("Location: created.php");
exit();
?>