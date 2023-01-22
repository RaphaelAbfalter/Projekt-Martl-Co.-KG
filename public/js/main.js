const dropdownButtons = document.querySelectorAll("#dropdownButton");
const csb = document.getElementById("csb");
const csbSay = document.getElementById("csbSay");
const dropdowns = document.querySelectorAll(".dropdown-content");
//uses dropdown of clicked button
function useDropdown(dropdownButton, dropdowns){
    const data=dropdownButton.getAttribute("data-dropdown");
    const targetDropdown = document.querySelector(".dropdown-content[data-dropdown="+data+"]");
    dropdowns.forEach(dropdown=>{
        if(dropdown!=targetDropdown&&dropdown.style.display=="flex"){
            dropdown.style.display="none";
        }
    });
    const buttons = document.querySelectorAll(".dropdown-button");
    buttons.forEach(button=>{
        if(button!=dropdownButton){
            button.style.borderBottomLeftRadius="0.8rem";
        }
    })
    if(targetDropdown&&targetDropdown.style.display!="flex"){
        targetDropdown.style.display="flex";
        dropdownButton.style.borderBottomLeftRadius=0;
    }
    else if(targetDropdown&&targetDropdown.style.display=="flex"){
        targetDropdown.style.display="none";
        dropdownButton.style.borderBottomLeftRadius="0.8rem";
    }
}
//checkes if click occured in document
document.addEventListener("click", function(e){
    if(e.target.classList.contains("dropdown-button")){
        dropdownButtons.forEach(dropdownButton=>{
            if(dropdownButton==e.target){
                useDropdown(e.target, dropdowns);
            }
            return;
        });
    }
    else if(e.target.classList.contains("dropdown-button")!=true){
        dropdowns.forEach(dropdown=>{
            dropdown.style.display="none";
        })
    }
    //checks if click occured on csb-logo
    if(e.target==csb&&csbSay.style.display=="block"||e.target!=csb&&csbSay.style.display=="block"){
        csbSay.style.display="";
        csb.removeAttribute("style");
    }
    else if(e.target==csb&&csbSay.style.display==""){
        csbSay.style.display="block";
        csb.style.transform="scale(2) translate(1rem, -1rem)";
    }
})