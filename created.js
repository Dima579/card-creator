const downloadButton = document.getElementById("downloadBtn");
const createdCard = document.querySelector(".card");

const loadingPage = document.querySelector(".loading-page");
const loadingStatus = document.getElementById("loading-Status");

const loadingIcon = document.getElementById("loading-icon");

const resPlayerName = document.getElementById("playerName");
const resPlayerTitle = document.getElementById("playerTitle");

const resPlayerProfImg = document.getElementById("playerProfImg");

const resGamerType = document.getElementById("gamerType");
const resGamingPlat = document.getElementById("gamingPlat");
const resPrefContType = document.getElementById("prefControllerType");
const resFavGame = document.getElementById("favGame");
const resSpecialAbility = document.getElementById("specialAbility");
const resRank = document.getElementById("gamerRank");

const retrieveCardData = async () =>
    {
        try
        {
            const response = await fetch('get-player-info.php')
            if (!response.ok)
                {
                    errorEnd();
                    return null;
                }
            else
                {
                    const playerInfo = await response.json();
                    return playerInfo;
                }
        }
        catch(error)
        {
            console.log("error:", error);
            errorEnd();
        }
    }

const mapCardData = (playerInfo) => 
    {
        resPlayerName.textContent = playerInfo.playerName;
        resPlayerTitle.textContent = playerInfo.playerTitle;
        
        resPlayerProfImg.src = './images/' + playerInfo.profImage;

        if (playerInfo.imageShape == "circle")
        {
            resPlayerProfImg.classList.add("card__image--circular")
        }

        resGamerType.textContent = playerInfo.gamerType;
        resGamingPlat.textContent = playerInfo.gamingPlatform;
        resPrefContType.textContent = playerInfo.prefControlType;
        resFavGame.textContent = playerInfo.favGame;
        resSpecialAbility.textContent = playerInfo.specialAbility;
        resRank.textContent = playerInfo.playerRank;

        setTimeout(() => {loadingStatus.textContent = "All Done!"; loadingPage.classList.add("fade-out");}, 5000);
    }

const loadEnd = () => 
    {
        loadingPage.style.display = "none";
    }

const errorEnd = () =>
{
    loadingIcon.src = "./images/cross-icon.png";
    loadingStatus.textContent = "Error occurred whilst generating card. Redirecting...";
    setTimeout(() => {window.location.replace("index.php");}, 7000);
};

document.addEventListener("DOMContentLoaded", async () => 
    {
        playerInfo = await retrieveCardData();
        if (playerInfo) {mapCardData(playerInfo);}
    });


document.addEventListener("animationend", loadEnd);


const saveCard = (createdCard) => 
    {
  html2canvas(createdCard).then(canvas => 
    {
        const imgData = canvas.toDataURL("image/png");
        const link = document.createElement("a");
        link.href = imgData;
        link.download = "player-card.png";
        link.click();
  });
};


const exportSave = (playerInfo) => 
{
    const jsonStr = JSON.stringify(window.playerInfo, null, 2);
    const blob = new Blob([jsonStr], { type: "application/json"});
    const url = URL.createObjectURL(blob);

    const link = document.createElement("a");
    link.href = url;
    link.download = "player-card-save.json";
    link.click();

  URL.revokeObjectURL(url);
}