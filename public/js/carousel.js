//arrows
const left=document.querySelector(".left") ,right = document.querySelector(".right");
//slides
const slides = document.querySelectorAll(".slide");
//translates slides for correct order
slides.forEach((slide,index)=>{
    slide.style.transform=`translateX(${index * 100}%)`;
});

let curSlide=0;

const maxSlide=slides.length -1;

//detects right arrow click and moves translate of picture
right.addEventListener("click", ()=>{
  if (curSlide === maxSlide) {
    curSlide = 0;
  } else {
    curSlide++;
  }
  slides.forEach((slide, index) => {
  slide.style.transform = `translateX(${100 * (index - curSlide)}%)`;
  });
});
//detects left arrow click and moves translate of picture
left.addEventListener("click", function () {
  if (curSlide === 0) {
    curSlide = maxSlide;
  } else {
    curSlide--;
  }
  slides.forEach((slide, index) => {
    slide.style.transform = `translateX(${100 * (index - curSlide)}%)`;
  });
});

//https://blog.logrocket.com/build-image-carousel-from-scratch-vanilla-javascript/