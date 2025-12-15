<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Creation Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="page-container">
    <form class="form-container" action="submit-user-info.php" method="POST">
        
        <p class="text-bold">Select your profile picture and shape</p>
        <div class="profile-pic-selection-menu">

            <div class="radio-image-container">

                <div class="radio-image-container-item">
                    <input type="radio" name="profile-image-option" id="ncr-ranger" value="ncr-ranger.jpg" required>
                    <label for="ncr-ranger">
                        <img class="radio-image-container-item__image radio-image-container-item__image--square" src="./images/ncr-ranger.jpg" alt="NCR Ranger">
                    </label>
                </div>

                <div class="radio-image-container-item">
                    <input type="radio" name="profile-image-option" id="dyegtarev" value="stalker-dyegtarev.jpg">
                    <label for="dyegtarev">
                        <img class="radio-image-container-item__image radio-image-container-item__image" src="./images/stalker-dyegtarev.jpg" alt="Stalker Dyegtarev">
                    </label>
                </div>

                <div class="radio-image-container-item">
                    <input type="radio" name="profile-image-option" id="freeman" value="gordon-freeman.jpg">
                    <label for="freeman">
                        <img class="radio-image-container-item__image radio-image-container-item__image" src="./images/gordon-freeman.jpg" alt="Gordon Freeman">
                    </label>
                </div>

                <div class="radio-image-container-item">
                    <input type="radio" name="profile-image-option" id="payne" value="max-payne.jpg">
                    <label for="payne">
                        <img class="radio-image-container-item__image radio-image-container-item__image" src="./images/max-payne.jpg" alt="Max Payne">
                    </label>
                </div>

                <div class="radio-image-container-item">
                    <input type="radio" name="profile-image-option" id="clone" value="sw-clone-trooper.jpg">
                    <label for="clone">
                        <img class="radio-image-container-item__image radio-image-container-item__image" src="./images/sw-clone-trooper.jpg" alt="Clone Trooper">
                    </label>
                </div>

                <div class="radio-image-container-item">
                    <input type="radio" name="profile-image-option" id="s106" value="subject106.jpg">
                    <label for="s106">
                        <img class="radio-image-container-item__image radio-image-container-item__image" src="./images/subject106.jpg" alt="Subject 106">
                    </label>
                </div>

                <div class="radio-image-container-item">
                    <input type="radio" name="profile-image-option" id="fc2merc" value="fc2-merc.jpg">
                    <label for="fc2merc">
                        <img class="radio-image-container-item__image radio-image-container-item__image" src="./images/fc2-merc.jpg" alt="Far Cry 2 Mercenary">
                    </label>
                </div>

                <div class="radio-image-container-item">
                    <input type="radio" name="profile-image-option" id="sam" value="serious-sam.jpg">
                    <label for="sam">
                        <img class="radio-image-container-item__image radio-image-container-item__image" src="./images/serious-sam.jpg" alt="Serious Sam">
                    </label>
                </div>

                <div class="radio-image-container-item">
                    <input type="radio" name="profile-image-option" id="crane" value="kyle-crane.jpg">
                    <label for="crane">
                        <img class="radio-image-container-item__image radio-image-container-item__image" src="./images/kyle-crane.jpg" alt="Kyle Crane">
                    </label>
                </div>
            </div>

            <div class="shape-selector-container">

                <div class="ssc__item">
                    <input type="radio" name="shape-selector-option" id="square" value="square" required>
                    <label for="square">
                        <img class="ssc__image" src="./images/square-profile-image.jpg" alt="default profile image square">
                    </label>
                </div>

                <div class="ssc__item ssc__item--circle">
                    <input type="radio" name="shape-selector-option" id="circle" value="circle">
                    <label for="circle">
                        <img class="ssc__image" src="./images/square-profile-image.jpg" alt="default profile image circular">
                    </label>
                </div>

            </div>
        </div>


        <div class="input-group">
            <label for="player-name" class="text-bold">Player Name:</label>
            <input type="text" id="player-name" name="player-name" required>
        </div>

        <div class="input-group">
            <label for="player-title" class="text-bold">Player Title:</label>
            <input type="text" id="player-title" name="player-title" required maxlength="30">
        </div>

        <div class="radio-section">
            <p class="text-bold">Gamer Type:</p>

            <label for="competitive">Competitive</label>
            <input type="radio" name="gamer-type" id="competitive" value="competitive" required>

            <label for="casual">Casual</label>
            <input type="radio" name="gamer-type" id="casual" value="casual">
        </div>

        <div class="input-group">
            <label for="gaming-platform" class="text-bold">Gaming Platform:</label>
            <select id="gaming-platform" name="gaming-platform" required>
                <option value="" disabled selected>Please select an option</option>
                <option value="pc">PC</option>
                <option value="console">Console</option>
                <option value="handheld">Handheld</option>
            </select>
        </div>

        <div class="radio-section">
            <p class="text-bold">Preferred Controller Type:</p>

            <label for="mouse-keyboard">Mouse & Keyboard</label>
            <input type="radio" name="control-type" id="mouse-keyboard" value="mouse-keyboard" required>

            <label for="controller">Controller</label>
            <input type="radio" name="control-type" id="controller" value="controller">
        </div>

        <div class="input-group">
            <label for="favourite-game" class="text-bold">Favourite game:</label>
            <input type="text" id="favourite-game" name="favourite-game" required>
        </div>

        <div class="input-group">
            <label for="special-ability" class="text-bold">Special ability:</label>
            <input type="text" id="special-ability" name="special-ability" required maxlength="30">
        </div>

        <div class="input-group">
            <label for="rank" class="text-bold">Player Rank:</label>
            <select id="rank" name="rank" required>
                <option value="" disabled selected>Please select an option</option>
                <option value="rookie">Rookie</option>
                <option value="grunt">Grunt</option>
                <option value="seasoned">Seasoned</option>
                <option value="master">Master</option>
            </select>
        </div>

        <div class="button-group">
            <input type="submit" name="submit">
            <input type="reset" name="reset">
            <a class="anchor-button" href="index.php">Return to Main Page</a>
        </div>

    </form>
</section>

    <footer><p class="text-italic">Web application created by Alex Dimakopoulos 2025</p></footer>
    <script src="form.js"></script>
</body>
</html>