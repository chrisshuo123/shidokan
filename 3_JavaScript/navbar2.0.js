// Detect when the navbar is collapsed
function isNavbarCollapsed() {
    return window.innerWidth < 992; // Bootstrap's lg breakpoint
    //return window.getComputedStyle(document.querySelector('.navbar-toggler')).display !== 'none';
}

// Toggle Sub-menu on Click
document.querySelectorAll(".dropdown-submenu > .dropdown-item").forEach(function (submenu) {
    submenu.addEventListener('click', function (e) {
        e.preventDefault;
        e.stopPropagation(); // Prevent parent dropdown from closing
        this.parentElement.classList.toggle("show");
    });
});

// Close all submenus if clicked elsewhere
document.addEventListener('click', function() {
    document.querySelector('dropdown-submenu').foreach(function (submenu) {
        submenu.classList.remove("show");
    });
});

// Hover effect when mouse went over the navbar menu, sub-menu, and the sub-sub-menu
// + Handle hover for dropdowns
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

// Handle click for mobile screens
document.querySelectorAll(".navbar .dropdown > a").forEach(function (dropdownLink) {
    dropdownLink.addEventListener('click', function (e) {
        if (isNavbarCollapsed()) { // Only handle clicks for mobile screens
            e.preventDefault(); // Prevent default link behavior
            const parentDropdown = this.parentElement;

            // Close any open dropdowns except the current one
            document.querySelectorAll(".navbar .dropdown.show").forEach(function (openDropdown) {
                if(openDropdown !== parentDropdown) {
                    openDropdown.classList.remove("show");
                    openDropdown.querySelector(".dropdown-menu").classList.remove("show");
                }
            });

            // Toggle the dropdown menu
            parentDropdown.classList.toggle("show");
            parentDropdown.querySelector(".dropdown-menu").classList.toggle("show");
        }
    });
});

// Fix toggle behavior
document.querySelector(".navbar-toggler").addEventListener('click', function() {
    const navbarCollapse = document.querySelector(".navbar-collapse");

    if(navbarCollapse.classList.contains('show')) {
        // If the navbar is open, hide it
        navbarCollapse.classList.remove('show');
        this.setAttribute('aria-expanded', 'false'); // Update ARIA Attribute
    } else {
        // If the navbar is hidden, show it
        navbarCollapse.classList.show('show');
        this.setAttribute('aria-expanded', 'true'); // Update ARIA Attribute
    }
});

// Giving click function when the screen width is below <992px (when the navbar shows toggle mode)