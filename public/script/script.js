document.addEventListener('DOMContentLoaded', function() {
    var backToTopButton = document.getElementById('back-to-top-btn');


    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 100) {
            backToTopButton.style.display = 'block';
        } else {
            backToTopButton.style.display = 'none';
        }
    });


});





let slideIndex = 0;
const slideWidth= 350;
const transitionDuration = 500;

function moveSlide(n) {
  const slider = document.querySelector('.slider');
  const slides = slider.querySelectorAll('img');
  const sliderWidth = slider.offsetWidth;
  const maxSlides = slides.length;

  slideIndex += n;

  if (slideIndex < 0) {
    slideIndex = maxSlides - 1;
  } else if (slideIndex >= maxSlides) {
    slideIndex = 0;
  }

  const offset = -slideIndex * slideWidth;

  slider.style.transition = `transform ${transitionDuration}ms ease-in-out`;
  slider.style.transform = `translateX(${offset}px)`;

  setTimeout(() => {
    slider.style.transition = '';
  }, transitionDuration);
}



