const squareOption = document.getElementById("square");
const circleOption = document.getElementById("circle");
const radioImageItem = document.querySelectorAll(".radio-image-container-item__image");

squareOption.addEventListener("change", () => 
{
    if (squareOption.checked)
    {
        radioImageItem.forEach(img => 
        {
          img.classList.remove("radio-image-container-item__image--circle");
          img.classList.add("radio-image-container-item__image--square");
        });
    }
});

circleOption.addEventListener("change", () => 
{
    if (circleOption.checked)
    {
        radioImageItem.forEach(img => 
        {
          img.classList.remove("radio-image-container-item__image--square");
          img.classList.add("radio-image-container-item__image--circle");
        });
    }
});