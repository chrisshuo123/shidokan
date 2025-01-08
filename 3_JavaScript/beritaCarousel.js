document.addEventListener("DOMContentLoaded", function() {
    const beritaScroll = document.querySelector(".berita-scroll");
    const newsCarousel = document.getElementById("newsCarousel");

    function toggleCarousel() {
        if(window.matchMedia("(max-width:992px)").matches) {
            // Enable Carousel
            beritaScroll.classList.add("d-none");
            newsCarousel.classList.remove("d-none");
        } else {
            // Show original Layout
            beritaScroll.classList.remove("d-none");
            newsCarousel.classList.add("d-none");
        }
    }

    // Initial Check
    toggleCarousel();

    // Listen to resize events
    window.addEventListener("resize", toggleCarousel);
});