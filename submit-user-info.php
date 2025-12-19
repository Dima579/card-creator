<?php
session_start();

$playerInfo = [
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

foreach ($playerInfo as $key => $value)
{
   if (empty($value))
   {
        header("location: index.php");
        echo "Error: entries are missing required information";
   }
   elseif (strlen($playerInfo["playerName"]) > 30 || strlen($playerInfo["playerTitle"]) > 50 || strlen($playerInfo["favGame"]) > 30 || strlen($playerInfo["specialAbility"]) > 30)
   {
        header("location: index.php");
        echo "Error: entries are missing required information";
   }
   else
   {
        $_SESSION['player-info'] = $playerInfo;
        header("Location: created.php");
        exit();
   }
}
?>