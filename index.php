<?php
error_reporting(0);
ini_set('display_errors', 0);

session_start();

$_SESSION["errorCode"] = $_SESSION["errorCode"] ?? null;

 $_SESSION["errorMessages"] = 
[
    "uploadFailed" => "ERROR CODE 400: No player data found or upload error",
    "invalidFile" => "ERROR CODE 415: Uploaded file was invalid",
    "invalidEntries" => "ERROR CODE 422: One or more player data input exceeded max character length or was missing information"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Player Card Creator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="page-container">
        <div class="inner-pad">
            <div class="text-group">
                <h1>Player Card Creator</h1>
                <p>Hi Welcome to my Player Card Creator project! This project was created to show fundamental PHP knowledge, 
                   you can either create a new player card which can be downloaded or you can upload a save file to bring a previous card back. 
                   Thank you for viewing my project!</p>
            </div>

            <div class="card">
                <div class="text-group">
                    <h3 class="text-underlined">Gordon Freeman</h3>
                    <h4 class="text-italic">Champion of the resistance</h4>
                </div>
                <img class="card__image card__image--circular" src="images/gordon-freeman.jpg" alt="Gordon Freeman">
                <div class="text-group-multiple">
                    <p><b>Gamer type:</b> casual</p>
                    <p><b>Gaming platform:</b> PC</p>
                    <p><b>Preferred control type:</b> Mouse & keyboard</p>
                    <p><b>Favourite game:</b> Ricochet</p>
                    <p><b>Special ability:</b> Enhanced environmental protection</p>
                    <p><b>Gamer rank:</b> Master</p>
                </div>
                
            </div>

            <div class="inner-pad-button-group">
                <a class="anchor-button" href="form.php">Create new card</a>
                <form action="upload.php" method="POST" enctype="multipart/form-data" class="upload-form">
                <span class="button-group">
                    <label for="uploader" class="button-style">Upload save file</label>
                    <input type="file" id="uploader" name="uploader" accept=".json" required>
                    <input type="text" id="upload-name" value="choose file" disabled>
                </span>
                    <input type="submit" name="submit-file" id="submit-file-button">
                </form>
                <span id="errorHandler">
                    <?php 
                        if (isset($_SESSION["errorCode"])) 
                            {
                                switch ($_SESSION["errorCode"])
                                {
                                    case 0:
                                        echo '<p class="error-message-container">' . $_SESSION["errorMessages"]["uploadFailed"] . '</p>';
                                        break;

                                    case 1:
                                        echo '<p class="error-message-container">' . $_SESSION["errorMessages"]["invalidFile"] . '</p>';
                                        break;

                                    case 2:
                                        echo '<p class="error-message-container">' . $_SESSION["errorMessages"]["invalidEntries"] . '</p>';
                                        break;
                                }
                                unset($_SESSION["errorCode"]);
                            }
                    ?>
                </span>
            </div>
        </div>
    </section>
    <footer><p class="text-italic">Web application created by Alex Dimakopoulos 2025</p></footer>
    <script src="index.js"></script>
</body>
</html>