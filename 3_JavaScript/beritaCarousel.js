document.addEventListener("DOMContentLoaded", function () {
    const carouselElement = document.querySelector("#newsCarousel");

    // Function to toggle carousel and scroll visibility based on screen size
    function toggleView() {
        const width = window.innerWidth;
        if(width < 992) {
            document.querySelector(".berita-scrollz").classList.add("d-none");
            document.querySelector(".news-carousel").classList.remove("d-none");
        } else {
            document.querySelector(".berita-scrollz").classList.remove("d-none");
            document.querySelector(".news-carousel").classList.add("d-none");
        }
    }

    // Initial Toggle
    toggleView();

    // Re-check on window resize
    window.addEventListener("resize", toggleView);

    // Initialize the Bootstrap carousel
    const carousel = new bootstrap.Carousel(carouselElement, {
        interval: 5000, // Auto slide interval (5 seconds)
        ride: 'carousel',
    });
});

// Ensure the Buttons are being Clicked
document.addEventListener("DOMContentLoaded", function () {
    const prevButton = document.querySelector(".carousel-control-prev");
    const nextButton = document.querySelector(".carousel-control-next");

    if (prevButton && nextButton) {
        prevButton.addEventListener("click", function () {
            console.log("Prev button clicked");
        });

        nextButton.addEventListener("click", function () {
            console.log("Next button clicked");
        });
    } else {
        console.error("Prev or Next button not found in the DOM.");
    }
});

