const slideImage = document.querySelectorAll(".slide-image"); /* document.querySelectorAll ritorna tutti gli elementi del document che hanno il selettore CSS indicato tra parentesi*/
const slidesContainer = document.querySelector(".slides-container");
const nextBtn = document.querySelector(".next-btn");
const prevBtn = document.querySelector(".prev-btn");
const navigationDots = document.querySelector(".navigation-dots");

let numberOfImages = slideImage.length; //numero di immagini
let slideWidth = slideImage[0].clientWidth; // larghezza dell'immagine iniziale
let currentSlide = 0;


/*Inizializza lo slider, ponendo le foto una accanto all'altra, prende una foto e la posiziona a sinista nella posizione dell'indice i
moltiplicato per 100% */
function init() {
    /*
      slideImage[0] = 0
      slideImage[1] = 100%
      slideImage[2] = 200%
      */

    slideImage.forEach((img, i) => {
      img.style.left = i * 100 + "%";
    });

    slideImage[0].classList.add("active");

    createNavigationDots();
}
init();

// Create navigation dots

function createNavigationDots() {
    for (let i = 0; i < numberOfImages; i++) {
      const dot = document.createElement("div"); // crea un div
      dot.classList.add("single-dot"); // aggiunge la classe single dot al div creato precedentemente
      navigationDots.appendChild(dot); // append del div creato nella classe navigation-dots

      dot.addEventListener("click", () => {
        goToSlide(i);
      });
    }

    navigationDots.children[0].classList.add("active"); // rende il primo dot attivo
}

// Next Button
nextBtn.addEventListener("click", () => {
    if (currentSlide >= numberOfImages - 1) { // verifico di essere all'ultima slide, in quel caso torno alla prima
      goToSlide(0);
      return;
    }

    currentSlide++;
    goToSlide(currentSlide);
});

// Previous Button

prevBtn.addEventListener("click", () => {
    if (currentSlide <= 0) {
      goToSlide(numberOfImages - 1);
      return;
    }

    currentSlide--;
    goToSlide(currentSlide);
  });

// Go To Slide

function setWidth(currentSlide){
  slideWidth = slideImage[currentSlide].clientWidth;
}

function goToSlide(slideNumber) {
  setWidth(currentSlide);
    slidesContainer.style.transform =
    "translateX(-" + slideWidth * slideNumber + "px)"; // trasla la finestra della larghezza della finestra* il numero della slide DA VERIFICARE PERCHè NON TRASLA BENE
    currentSlide = slideNumber;
    setActiveClass();

}

// Set Active Class

function setActiveClass() {
// Set active class for Slide Image

    let currentActive = document.querySelector(".slide-image.active");
    currentActive.classList.remove("active");
    slideImage[currentSlide].classList.add("active"); //sostituisce l'immagine attualmente attiva

    //   set active class for navigation dots

    let currentDot = document.querySelector(".single-dot.active");
    currentDot.classList.remove("active");
    navigationDots.children[currentSlide].classList.add("active");
}

window.onresize = function (){
    slideWidth = slideImage[0].clientWidth;
    slidesContainer.style.transform = `translateX(-${slideWidth * currentSlide}px)`;
    console.log(slideWidth); // corregge il ridimensionamento della galleria in caso di ridimensionamento schermo
}


