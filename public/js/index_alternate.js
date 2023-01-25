let hoverA = false;
let hoverB = false;
let imgA;
let imgB;

let slideIndex = [1,1];
let slideId = ["mySlides1", "mySlides2"];


function hoverCheck (hoverAstate, hoverBstate){
    if(hoverAstate == true && hoverBstate == false){
        imgA.classList.replace("img-bottom", "img-top");
        imgB.classList.replace("img-top", "img-bottom");
        
    }else if(hoverAstate == false && hoverBstate == true){
        imgA.classList.replace("img-top", "img-bottom");
        imgB.classList.replace("img-bottom", "img-top");
    }
}

function showSlides(n, no) {
    let i;
    let x = document.getElementsByClassName(slideId[no]);
    if (n > x.length) {
        slideIndex[no] = 1;
    }    
    if (n < 1) {slideIndex[no] = x.length}
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
    }
    x[slideIndex[no]-1].style.display = "block";  
}

function plusSlides(n, no) {
    showSlides(slideIndex[no] += n, no);
}

function openEdit(){
    document.getElementById("button-parent").innerHTML = '<button type="submit" name="save">Save</button>';
    Array.from(document.getElementsByName("bildtext"))
    .forEach(function (element){
        var content = element.innerHTML;
        element.innerHTML += '<textarea class="form-control" rows="5" name="texts[]">'+ content +'</textarea>';
    }
    );
}

window.onload = function(){
    showSlides(1, 0);
    showSlides(1, 1);
    imgA = document.getElementById('imgA');
    imgB = document.getElementById('imgB');
    
    document.getElementById("edit").addEventListener('click', () => {
        openEdit();
    })

    imgA.addEventListener('mouseover', () => {
        hoverCheck(true, hoverB);
    })
    imgB.addEventListener('mouseover', () => {
        hoverCheck(hoverA, true);
    })
}
