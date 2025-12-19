const uploadName = document.getElementById("upload-name");
const uploadBtn = document.getElementById("uploader");
const submitFileBtn = document.getElementById("submit-file-button");

uploadBtn.addEventListener("change", () => 
{
    uploadName.value = uploadBtn.files[0].name;
});

submitFileBtn.addEventListener("click", () => 
{
    if (uploadBtn.files.length === 0)
    {
        submitFileBtn.setCustomValidity("Invalid submission, please submit a valid upload (JSON file format only)");
        uploadBtn.reportValidity();
    }
    else
    {
        uploadBtn.setCustomValidity("");
    }
});