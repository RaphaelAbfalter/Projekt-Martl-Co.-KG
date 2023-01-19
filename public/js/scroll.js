function sticky(){
    const nav = document.querySelector("nav");
    const stickyBar = document.getElementById("stickyBar");
    console.log(stickyBar)
    let rect = nav.getBoundingClientRect();
    if(rect.top <= -80){
        stickyBar.style.height="2.5rem";
        stickyBar.style.width="100%";
    }
    else{
        stickyBar.style.height="";
        stickyBar.style.width=0;
    }
}
document.addEventListener("scroll", function(){
    sticky();
})
document.addEventListener("load", function(){
    sticky();
})
