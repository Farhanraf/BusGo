// script.js
const slides = document.querySelector('.slides');
const indicators = document.querySelectorAll('.indicator');

let currentIndex = 0;

// Function to update carousel position
function updateCarousel(index) {
    const slideWidth = slides.children[0].clientWidth;
    slides.style.transform = `translateX(-${index * slideWidth}px)`;

    indicators.forEach((indicator, i) => {
        indicator.classList.toggle('active', i === index);
    });
}

// Auto-slide
setInterval(() => {
    currentIndex = (currentIndex + 1) % slides.children.length;
    updateCarousel(currentIndex);
}, 5000);

// Indicator click event
indicators.forEach((indicator, index) => {
    indicator.addEventListener('click', () => {
        currentIndex = index;
        updateCarousel(currentIndex);
    });
});

document.querySelectorAll('.tab-button').forEach(button => {
    button.addEventListener('click', () => {
        // Remove active class from all tab buttons
        document.querySelectorAll('.tab-button').forEach(btn => btn.classList.remove('active'));
        
        // Add active class to clicked tab button
        button.classList.add('active');
        
        // Hide all forms
        document.querySelectorAll('.login-form').forEach(form => form.style.display = 'none');
        
        // Show the selected form
        const tab = button.getAttribute('data-tab');
        document.getElementById(tab).style.display = 'block';
    });
});
