// Hover effect when mouse went over the navbar menu, sub-menu, and the sub-sub-menu
document.querySelectorAll(".navbar .dropdown").forEach(function (dropdown) {
    dropdown.addEventListener('mouseover', function () {
        this.classList.add("show"); // Add 'show' class on hover
        this.querySelector(".dropdown-menu").classList.add("show");
    });
    dropdown.addEventListener('mouseout', function () {
        this.classList.remove("show"); // Remove 'show' class when not hovered
        this.querySelector(".dropdown-menu").classList.remove("show");
    });

    // And here is for the dropdown-submenu:
    document.querySelectorAll(".dropdown-submenu").forEach(function(subdropdown) {
        subdropdown.addEventListener('mouseover', function() {
            this.classList.add("show");
            this.querySelector("#blackbeltlist").classList.add("show");
        });
        subdropdown.addEventListener('mouseout', function() {
            this.classList.remove("show");
            this.querySelector("#blackbeltlist").classList.remove("show");
        });
    });
});