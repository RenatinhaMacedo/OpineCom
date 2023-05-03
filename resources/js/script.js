// Navbar responsiva no mobile
var ul = document.querySelector('nav ul');
var menuBtn = document.querySelector('.menu-btn i');

function menuShow() {
    if (ul.classList.contains('open')) {
        ul.classList.remove('open');
    } else {
        ul.classList.add('open');
    }
}

// Mostrar divs melhores empresas e piores empresas no mobile
const mostrarPioresEmpresasBtn = document.getElementById("mostrar-piores-empresas");
const mostrarMelhoresEmpresasBtn = document.getElementById("mostrar-melhores-empresas");
const rankingGoodDiv = document.querySelector(".ranking-good");
const rankingBadDiv = document.querySelector(".ranking-bad");

mostrarPioresEmpresasBtn.addEventListener("click", function() {
    rankingGoodDiv.classList.add("hide");
    rankingBadDiv.classList.remove("hide");
});

mostrarMelhoresEmpresasBtn.addEventListener("click", function() {
    rankingBadDiv.classList.add("hide");
    rankingGoodDiv.classList.remove("hide");
});

const carousel = document.querySelector('.carousel');
const carouselItems = document.querySelectorAll('.cards-gatilhos');
const leftArrow = document.querySelector('#arrow-left');
const rightArrow = document.querySelector('#arrow-right');

let currentSlide = 0;

// exibe a primeira div
carouselItems[currentSlide].style.display = 'block';

// oculta todas as outras divs
for (let i = 1; i < carouselItems.length; i++) {
    carouselItems[i].style.display = 'none';
}

function showSlide(index) {
    carouselItems[currentSlide].style.display = 'none';
    carouselItems[index].style.display = 'block';
    currentSlide = index;
}

leftArrow.addEventListener('click', function() {
let index = currentSlide - 1;
    if (index < 0) {
        index = carouselItems.length - 1;
    }
showSlide(index);
});

rightArrow.addEventListener('click', function() {
let index = currentSlide + 1;
    if (index >= carouselItems.length) {
        index = 0;
    }
showSlide(index);
});














