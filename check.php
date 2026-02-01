<?php
$disabled = ini_get('disable_functions');
echo "Target Port: " . $_SERVER['SERVER_PORT'] . "<br>";
echo "Disabled Functions: " . ($disabled ?: "NONE - Warning!");
?>