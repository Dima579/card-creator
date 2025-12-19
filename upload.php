<?php
session_start();

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

if ($saveDecoded === null) 
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