<?php
session_start();

$allowedImages = 
[
    "ncr-ranger.jpg", "stalker-dyegtarev.jpg", "gordon-freeman.jpg", 
    "max-payne.jpg", "sw-clone-trooper.jpg", "subject106.jpg", 
    "fc2-merc.jpg", "serious-sam.jpg", "kyle-crane.jpg"
];

if (empty($_FILES["uploader"]) || $_FILES["uploader"]["error"] !== UPLOAD_ERR_OK)
{
    $_SESSION["errorCode"] = 0;
    header("Location: index.php#error");
    exit();
}
else
{
    $saveCoded = file_get_contents($_FILES["uploader"]["tmp_name"]);
    $saveDecoded = json_decode($saveCoded, true);
}

if ($saveDecoded === null || !is_array($saveDecoded)) 
{
    $_SESSION["errorCode"] = 1;
    header("Location: index.php");
    exit();
}

$requiredKeys = ["playerName", "profImage", "playerTitle", "favGame", "specialAbility"];
foreach ($requiredKeys as $key) 
{
    if (!isset($saveDecoded[$key]) || empty(trim($saveDecoded[$key]))) 
    {
        $_SESSION["errorCode"] = 2;
        header("location: index.php");
        exit();
    }
}

if (!in_array($saveDecoded["profImage"], $allowedImages)) 
{
    $_SESSION["errorCode"] = 1;
    header("Location: index.php");
    exit();
}

foreach ($saveDecoded as $key => $value)
{
    if ($value === null)
   {
        $_SESSION["errorCode"] = 1;
        header("location: index.php");
        exit();
   }
   elseif (strlen($saveDecoded["playerName"]) > 30 || strlen($saveDecoded["playerTitle"]) > 50 || strlen($saveDecoded["favGame"]) > 30 || strlen($saveDecoded["specialAbility"]) > 30)
   {
        $_SESSION["errorCode"] = 2;
        header("location: index.php");
        exit();
   }
}

$_SESSION["player-info"] = $saveDecoded;
header("Location: created.php");
exit();
?>