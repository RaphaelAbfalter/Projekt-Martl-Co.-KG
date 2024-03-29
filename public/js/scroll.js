function stickyHeader(){
    const nav = document.querySelector("nav");
    const stickyBar = document.getElementById("stickyBar");
    let rect = nav.getBoundingClientRect();
    if(rect.top <= -40){
        stickyBar.style.height="2.5rem";
        stickyBar.style.width="100%";
    }
    else{
        stickyBar.style.height="";
        stickyBar.style.width=0;
    }
}
function stickyFooter(){
    const footer = document.querySelector("footer");
    if ((window.innerHeight + window.scrollY) >= (document.body.offsetHeight) -20) {
        footer.style.bottom="0";
    }
    else{
        footer.style.bottom="-7rem";
    }
}
document.addEventListener("scroll", function(){
    stickyHeader();
    stickyFooter();
})
window.addEventListener("resize", function(){
    stickyFooter();
})
stickyHeader();
stickyFooter();