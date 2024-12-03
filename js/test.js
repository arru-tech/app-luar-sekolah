const track = document.querySelector('.carousel-track');
const prevButton = document.querySelector('.prev-btn');
const nextButton = document.querySelector('.next-btn');
const cards = document.querySelectorAll('.alumni-card');


let currentSlide = 0;
const totalSlides = cards.length;
const visibleCards = 3; 
const cardWidth = cards[0].getBoundingClientRect().width + 20;


function updateCarousel() {
    const newPosition = -currentSlide * cardWidth;
    track.style.transform = `translateX(${newPosition}px)`;

    
    prevButton.disabled = currentSlide === 0;
    nextButton.disabled = currentSlide >= totalSlides - visibleCards;
}


nextButton.addEventListener('click', () => {
    if (currentSlide < totalSlides - visibleCards) {
        currentSlide++;
        updateCarousel();
    }
});


prevButton.addEventListener('click', () => {
    if (currentSlide > 0) {
        currentSlide--;
        updateCarousel();
    }
});


updateCarousel();