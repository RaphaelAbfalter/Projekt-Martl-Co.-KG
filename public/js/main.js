const dropdownButton = document.getElementById("dropdownButton");

dropdownButton.addEventListener("click", function(e){
    const data=e.target.getAttribute("data-dropdown")
    const dropdown = document.querySelector(".dropdown-content[data-dropdown="+data+"]")
    if(dropdown&&dropdown.style.display!="flex")dropdown.style.display="flex";
    else dropdown.style.display="none";
})