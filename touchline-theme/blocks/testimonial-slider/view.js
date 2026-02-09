(function () {
  function initSlider(slider) {
    const track = slider.querySelector('.touchline-slider__track');
    if (!track) {
      return;
    }
    const slides = Array.from(track.children);
    if (!slides.length) {
      return;
    }
    const prevButton = slider.querySelector('.touchline-slider__prev');
    const nextButton = slider.querySelector('.touchline-slider__next');
    const dotsContainer = slider.querySelector('.touchline-slider__dots');
    let index = 0;
    let timer = null;

    slides.forEach((slide, i) => {
      slide.classList.add('touchline-slider__slide');
      slide.setAttribute('role', 'group');
      slide.setAttribute('aria-roledescription', 'slide');
      slide.setAttribute('aria-label', `Slide ${i + 1} of ${slides.length}`);
    });

    function updateSlides(nextIndex) {
      index = (nextIndex + slides.length) % slides.length;
      const activeSlide = slides[index];
      slides.forEach((slide, i) => {
        slide.setAttribute('aria-hidden', i === index ? 'false' : 'true');
      });
      const offset = activeSlide.offsetLeft;
      track.scrollTo({ left: offset, behavior: 'smooth' });
      if (dotsContainer) {
        dotsContainer.querySelectorAll('button').forEach((dot, i) => {
          dot.setAttribute('aria-current', i === index ? 'true' : 'false');
        });
      }
    }

    function buildDots() {
      if (!dotsContainer) {
        return;
      }
      dotsContainer.innerHTML = '';
      slides.forEach((slide, i) => {
        const button = document.createElement('button');
        button.type = 'button';
        button.className = 'touchline-slider__dot';
        button.setAttribute('aria-label', `Go to slide ${i + 1}`);
        button.addEventListener('click', () => updateSlides(i));
        dotsContainer.appendChild(button);
      });
    }

    function startAutoplay() {
      const autoplay = slider.getAttribute('data-autoplay') === 'true';
      const interval = Number(slider.getAttribute('data-interval')) || 6;
      if (!autoplay) {
        return;
      }
      stopAutoplay();
      timer = window.setInterval(() => {
        updateSlides(index + 1);
      }, interval * 1000);
    }

    function stopAutoplay() {
      if (timer) {
        window.clearInterval(timer);
        timer = null;
      }
    }

    if (prevButton) {
      prevButton.addEventListener('click', () => updateSlides(index - 1));
    }
    if (nextButton) {
      nextButton.addEventListener('click', () => updateSlides(index + 1));
    }

    slider.addEventListener('keydown', (event) => {
      if (event.key === 'ArrowLeft') {
        event.preventDefault();
        updateSlides(index - 1);
      }
      if (event.key === 'ArrowRight') {
        event.preventDefault();
        updateSlides(index + 1);
      }
    });

    slider.addEventListener('mouseenter', stopAutoplay);
    slider.addEventListener('mouseleave', startAutoplay);
    slider.addEventListener('focusin', stopAutoplay);
    slider.addEventListener('focusout', startAutoplay);

    buildDots();
    updateSlides(0);
    startAutoplay();
  }

  document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.touchline-slider').forEach(initSlider);
  });
})();
