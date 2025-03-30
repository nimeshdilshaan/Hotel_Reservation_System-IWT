// Button click events for offers
document.querySelectorAll('.offer button a').forEach(button => {
    button.addEventListener('click', function(event) {
        event.preventDefault(); // Prevent default anchor behavior
        alert('Redirecting to booking page!');
        window.location.href = this.getAttribute('href'); // Redirects to the link
    });
});

// Optional: Animate offer elements on page load
window.addEventListener('load', () => {
    const offers = document.querySelectorAll('.offer');
    offers.forEach((offer, index) => {
        setTimeout(() => {
            offer.style.opacity = 1; // Show offer
            offer.style.transform = 'translateY(0)'; // Reset transform
        }, index * 300); // Stagger the animations
    });
});