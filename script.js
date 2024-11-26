const wrapper = document.querySelector('.testimonial-wrapper');
const slides = document.querySelectorAll('.testimonial-slide');
const leftArrow = document.querySelector('.left-arrow');
const rightArrow = document.querySelector('.right-arrow');
let currentIndex = 1; // Start at 1 because the first slide is a clone of the last one
const totalSlides = slides.length;

// Adjust the wrapper's transform to show the first actual slide
wrapper.style.transform = `translateX(-100%)`;

function showSlide(index) {
    wrapper.style.transition = 'transform 0.5s ease-in-out';
    wrapper.style.transform = `translateX(-${index * 100}%)`;
}

function nextSlide() {
    currentIndex++;
    showSlide(currentIndex);
    if (currentIndex === totalSlides - 1) { // If it's the last slide
        setTimeout(() => {
            wrapper.style.transition = 'none'; // Disable transition for the loop
            currentIndex = 1; // Reset to the first real slide
            wrapper.style.transform = `translateX(-100%)`;
        }, 500); // Timeout matches the transition duration
    }
}

function prevSlide() {
    currentIndex--;
    showSlide(currentIndex);
    if (currentIndex === 0) { // If it's the first slide (which is a clone)
        setTimeout(() => {
            wrapper.style.transition = 'none'; // Disable transition for the loop
            currentIndex = totalSlides - 2; // Reset to the last real slide
            wrapper.style.transform = `translateX(-${currentIndex * 100}%)`;
        }, 500); // Timeout matches the transition duration
    }
}

// Event listeners for arrow clicks
rightArrow.addEventListener('click', nextSlide);
leftArrow.addEventListener('click', prevSlide);

// Initial slide setup
showSlide(currentIndex);

// Optional: Auto-slide every 5 seconds
setInterval(nextSlide, 5000);
