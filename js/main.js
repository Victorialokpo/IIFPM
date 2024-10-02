document.addEventListener('DOMContentLoaded', function () {
    const slides = document.querySelector('.slides');
    const nextBtn = document.querySelector('.next');
    const prevBtn = document.querySelector('.prev');
    const totalSlides = document.querySelectorAll('.testimonial-card').length;
    let currentIndex = 0;

    // Calculer la largeur d'un slide
    function updateCarouselWidth() {
        const slideWidth = document.querySelector('.testimonial-card').clientWidth;
        slides.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
    }

    // Ajoute un écouteur d'événement pour réagir aux redimensionnements de la fenêtre
    window.addEventListener('resize', updateCarouselWidth);

    nextBtn.addEventListener('click', function () {
        if (currentIndex < totalSlides - 1) {
            currentIndex++;
        } else {
            currentIndex = 0; // Retour à la première slide après la dernière
        }
        updateCarouselWidth();
    });

    prevBtn.addEventListener('click', function () {
        if (currentIndex > 0) {
            currentIndex--;
        } else {
            currentIndex = totalSlides - 1; // Retour à la dernière slide quand on est sur la première
        }
        updateCarouselWidth();
    });

    // Initialiser le carrousel à la bonne largeur
    updateCarouselWidth();
});
