const slides = document.querySelectorAll(".slides");

slides.forEach((slide, indx) => {
    slide.style.transform = `translateX(${indx * 100}%)`;
});
const btn_esquerdo = document.querySelector(".btn_esquerda");
const btn_direito = document.querySelector(".btn_direita");
var slideAtual = 0;
var slideMax_slide = slides.length - 1;

btn_esquerdo.addEventListener("click", function () {
    if (slideAtual === 0) {
        slideAtual = slideMax_slide;
    } else {
        slideAtual--;
    }

    slides.forEach((slide, indx) => {
        slide.style.transform = `translateX(${100 * (indx - slideAtual)}%)`;
    });
});

btn_direito.addEventListener("click", function () {
    if (slideAtual === slideMax_slide) {
        slideAtual = 0;
    } else {
        slideAtual++;
    }

    slides.forEach((slide, indx) => {
        slide.style.transform = `translateX(${100 * (indx - slideAtual)}%)`;
    });
});

setInterval(() =>{
    if (slideAtual === slideMax_slide) {
        slideAtual = 0;
    } else {
        slideAtual++;
    }

    slides.forEach((slide, indx) => {
        slide.style.transform = `translateX(${100 * (indx - slideAtual)}%)`;
    });
}, 5000)