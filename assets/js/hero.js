/* PolicyBazaar Style Hero Slider Logic */
document.addEventListener('DOMContentLoaded', function() {
    const wrapper = document.querySelector('.slider-wrapper');
    const slides = document.querySelectorAll('.hero-slide');
    const dots = document.querySelectorAll('.dot');
    let currentIndex = 0;
    const slideCount = slides.length;
    let autoSlideInterval;

    if (!wrapper || slides.length === 0) return;

    function goToSlide(index) {
        if (index < 0) index = slideCount - 1;
        if (index >= slideCount) index = 0;
        
        currentIndex = index;
        wrapper.style.transform = `translateX(-${currentIndex * 100}%)`;
        
        // Update dots
        dots.forEach(dot => dot.classList.remove('active'));
        if (dots[currentIndex]) {
            dots[currentIndex].classList.add('active');
        }

        // Reset slide animations to re-trigger them
        const currentSlide = slides[currentIndex];
        const content = currentSlide.querySelector('.hero-content');
        const image = currentSlide.querySelector('.hero-image img');
        
        if (content) {
            content.style.animation = 'none';
            content.offsetHeight; // trigger reflow
            content.style.animation = null;
        }

        if (image) {
            image.style.animation = 'none';
            image.offsetHeight; // trigger reflow
            image.style.animation = null;
        }
    }

    function startAutoSlide() {
        stopAutoSlide(); // Ensure no duplicates
        autoSlideInterval = setInterval(() => {
            goToSlide(currentIndex + 1);
        }, 5000); // 5 seconds per slide
    }

    function stopAutoSlide() {
        if (autoSlideInterval) {
            clearInterval(autoSlideInterval);
        }
    }

    function resetAutoSlide() {
        stopAutoSlide();
        startAutoSlide();
    }

    // Dot click events
    dots.forEach(dot => {
        dot.addEventListener('click', function() {
            const index = parseInt(this.getAttribute('data-index'));
            goToSlide(index);
            resetAutoSlide();
        });
    });

    // Mobile Touch Support
    let touchStartX = 0;
    let touchEndX = 0;

    wrapper.addEventListener('touchstart', (e) => {
        touchStartX = e.changedTouches[0].screenX;
        stopAutoSlide(); // Pause on touch
    }, {passive: true});

    wrapper.addEventListener('touchend', (e) => {
        touchEndX = e.changedTouches[0].screenX;
        handleSwipe();
        startAutoSlide(); // Resume after touch
    }, {passive: true});

    function handleSwipe() {
        const swipeDistance = touchStartX - touchEndX;
        if (swipeDistance > 50) {
            // Swipe Left -> Next Slide
            goToSlide(currentIndex + 1);
        } else if (swipeDistance < -50) {
            // Swipe Right -> Prev Slide
            goToSlide(currentIndex - 1);
        }
    }

    // Pause on hover (Desktop)
    wrapper.addEventListener('mouseenter', stopAutoSlide);
    wrapper.addEventListener('mouseleave', startAutoSlide);

    // Initial check for screen resize to handle any weirdness
    window.addEventListener('resize', () => {
        goToSlide(currentIndex); // Keep current slide centered on resize
    });

    // Initialize
    startAutoSlide();
});
