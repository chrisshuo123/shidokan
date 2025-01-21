// To make the Toggle Functions (Eventhough no dropdown toggle animation)
document.querySelector('.navbar-toggler').addEventListener('click', function() {
    const navbarCollapse = document.querySelector('#navbarNav');
    const isExpanded = navbarCollapse.classList.toggle('show');

    this.setAttribute('aria-expanded', isExpanded);
    console.log('Navbar toggled. Current state:', isExpanded);
});

// Detect when the navbar is collapsed
function isNavbarCollapsed() {
    return window.innerWidth < 992; // Bootstrap's lg breakpoint
}

// Reset dropdowns (for resize or click outside)
function resetDropdowns() {
    document.querySelectorAll(".navbar .dropdown.show").forEach((dropdown) => {
        dropdown.classList.remove("show");
        dropdown.querySelectorAll(".dropdown-menu.show").forEach((menu) => {
            menu.classList.remove("show");
        });
    });
}

// Handle click for mobile dropdowns
document.querySelectorAll(".navbar .dropdown > a").forEach((dropdownLink) => {
    dropdownLink.addEventListener("click", function (e) {
        if (isNavbarCollapsed()) {
            e.preventDefault();
            const parentDropdown = this.parentElement;
            const dropdownMenu = parentDropdown.querySelector(".dropdown-menu");

            // Toggle current dropdown
            const isOpen = parentDropdown.classList.contains("show");

            // Close all other dropdowns
            resetDropdowns();

            // Open the current one if it wasn't already open
            if (!isOpen) {
                parentDropdown.classList.add("show");
                dropdownMenu.classList.add("show");
            }
        }
    });
});

// Handle click for submenus (mobile only)
document.querySelectorAll(".dropdown-submenu > a").forEach((submenuLink) => {
    submenuLink.addEventListener("click", function (e) {
        if (isNavbarCollapsed()) {
            e.preventDefault();
            const submenuMenu = this.nextElementSibling;

            // Toggle submenu
            const isSubmenuOpen = submenuMenu.classList.contains("show");

            // Close all submenus
            document.querySelectorAll(".dropdown-submenu .dropdown-menu.show").forEach((menu) => {
                menu.classList.remove("show");
            });

            // Open current submenu if not already open
            if (!isSubmenuOpen) {
                submenuMenu.classList.add("show");
            }

            e.stopPropagation(); // Prevent parent menu from closing
        }
    });
});
// Debug the Nested Toggles
document.querySelectorAll(".dropdown-submenu > a").forEach(function (submenuLink) {
    submenuLink.addEventListener("click", function (e) {
        console.log("Clicked on submenu: ", submenuLink.textContent); // Debug
    });
});

// Handle hover behavior for desktop
document.querySelectorAll(".navbar .dropdown").forEach((dropdown) => {
    dropdown.addEventListener("mouseover", function () {
        if (!isNavbarCollapsed()) {
            this.classList.add("show");
            this.querySelector(".dropdown-menu").classList.add("show");
        }
    });
    dropdown.addEventListener("mouseout", function () {
        if (!isNavbarCollapsed()) {
            this.classList.remove("show");
            this.querySelector(".dropdown-menu").classList.remove("show");
        }
    });
});

// Close dropdowns on clicking outside
document.addEventListener("click", function (e) {
    if (!e.target.closest(".navbar")) {
        resetDropdowns();
    }
});

// Handle window resize
window.addEventListener("resize", resetDropdowns);

// When we click the class .navbar-collapse, the height doesn't reset to 0
// Here is the mitigation

