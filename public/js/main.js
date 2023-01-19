const dropdownButton = document.querySelectorAll("#dropdownButton");

dropdownButton.forEach(b =>{
    b.addEventListener("click", function(e){
        const data=e.target.getAttribute("data-dropdown");
        const targetDropdown = document.querySelector(".dropdown-content[data-dropdown="+data+"]");
        const dropdowns = document.querySelectorAll(".dropdown-content");
        dropdowns.forEach(dropdown=>{
            if(dropdown!=targetDropdown&&dropdown.style.display=="flex"){
                dropdown.style.display="none";
            }
        });
        const buttons = document.querySelectorAll(".dropdown-button");
        buttons.forEach(button=>{
            if(button!=e.target){
                button.style.borderBottomLeftRadius="0.8rem";
            }
        })
        if(targetDropdown&&targetDropdown.style.display!="flex"){
            targetDropdown.style.display="flex";
            e.target.style.borderBottomLeftRadius=0;
        }
        else{
            targetDropdown.style.display="none";
            e.target.style.borderBottomLeftRadius="0.8rem";
        }
    });
});

const csb = document.getElementById("csb");
const csbSay = document.getElementById("csbSay");

document.addEventListener("click", function(e){
    if(e.target==csb&&csbSay.style.display=="block"||e.target!=csb&&csbSay.style.display=="block"){
        csbSay.style.display="";
        csb.removeAttribute("style");
    }
    else if(e.target==csb&&csbSay.style.display==""){
        csbSay.style.display="block";
        csb.style.transform="scale(2) translate(1rem, -1rem)";
    }
})