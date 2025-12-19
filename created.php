<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Created</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <section class="page-container">
        <div class="loading-page">
            <h1 id="loading-Status">GENERATING PLAYER CARD...</h1>
            <img id="loading-icon" class="loading-icon" src="./images/loading-icon.gif" alt="Loading animation">
        </div>

        <div class="inner-pad">
            <div class="text-group">
                <h1>Here is your card!</h1>
                <p>Thank you for using my player card creator! If you want to save the card as an image, press the "Export as image button", 
                    otherwise if you'd like to export it as a save file to view in the web application later, press the "Export as save file" button.</p>
            </div>

            <div class="card">
                <div class="text-group">
                    <h3 class="text-underlined"><span id="playerName"></span></h3>
                    <h4 class="text-italic"><span id="playerTitle"></span></h4>
                </div>
                <img id="playerProfImg" class="card__image" src="" alt="Player Profile Picture">

                <div class="text-group-multiple">
                    <p><b>Gamer type:</b> <span id="gamerType"></span></p>
                    <p><b>Gaming platform:</b> <span id="gamingPlat"></span></p>
                    <p><b>Preferred control type:</b> <span id="prefControllerType"></span></p>
                    <p><b>Favourite game:</b> <span id="favGame"></span></p>
                    <p><b>Special ability:</b> <span id="specialAbility"></span></p>
                    <p><b>Gamer rank:</b> <span id="gamerRank"></span></p>
                </div>
            </div>

            <div class="inner-pad-button-group">
                    <button type="button" id="downloadBtn" onclick="saveCard(createdCard)">Export as image</button>
                    <button type="button" id="exportBtn" onclick="exportSave()">Export as save file</button>
                    <a class="anchor-button" href="index.php">Return to Main Page</a>
                    <a class="anchor-button" href="form.php">Create new card</a>
            </div>
        </div>
    </section>
     <footer><p class="text-italic">Web application created by Alex Dimakopoulos 2025</p></footer>
     <script src="created.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/html2canvas@1.4.1/dist/html2canvas.min.js"></script>
</body>
</html>