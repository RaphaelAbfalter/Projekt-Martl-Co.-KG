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
//color modes
const colorToggler = document.getElementById("color-toggle");
const rootStyle = document.querySelector(":root").style;
function setColorMode(mode){
    console.log(mode);
    switch(mode){
        case "true":
            rootStyle.setProperty("--main-color", "#1f1f1f");
            rootStyle.setProperty("--secondary-color","#303030");
            rootStyle.setProperty("--text-color","#f1f1f1");
            localStorage.darkMode=true;
            colorToggler.checked=true;
        break;
        case "false":
            rootStyle.setProperty("--main-color","#f1f1f1");
            rootStyle.setProperty("--secondary-color","#e2e2e2");
            rootStyle.setProperty("--text-color","#1f1f1f");
            localStorage.darkMode=false;
        break;
    }
}
if(!localStorage.darkMode){
    let mode = false;
    if(window.matchMedia("(prefers-color-scheme: light)").matches){
    }
    else if(window.matchMedia("(prefers-color-scheme: dark)").matches){
        colorToggler.checked=true;
        mode = true;
    }
    localStorage.setItem("darkMode", mode);
    setColorMode(localStorage.getItem("darkMode"));
}
else{
    setColorMode(localStorage.getItem("darkMode"));
}
colorToggler.addEventListener("change",function(){
    if(colorToggler.checked==true){
        setColorMode("true");
    }else{
        setColorMode("false");
    }
})