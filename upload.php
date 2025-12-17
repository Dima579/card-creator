<?php
session_start();

if (isset($_POST["submit-file"]))
{
   $playerInfo = $_FILES["uploader"];
   header("Location: created.php");
   exit();
}
else
{
    http_response_code(404);
    echo json_encode(["error" => "No player data found"]);
}
?>