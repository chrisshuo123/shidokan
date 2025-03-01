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
                //dropdownMenu.style.height = dropdownMenu.scrollHeight + "px"; // Set height dynamically
            } else {
                parentDropdown.classList.remove("show");
                dropdownMenu.classList.remove("show");
                //dropdownMenu.style.height = "0"; // Collapse the height
            }
        }
    });
});

// Prevent default for <a href="#"> to avoid dropdown vanishing
document.querySelectorAll(".navbar-collapse .dropdown-item a[href='#']").forEach((link) => {
    link.addEventListener("click", function (e) {
        e.preventDefault(); // Prevent default navigation behavior
        console.log("Prevented default navigation for href='#'");
    });
});

// Close dropdowns on clicking outside
document.addEventListener("click", function(e) {
    const navbar = document.querySelector(".navbar");
    const containerFluid = document.querySelector(".container-fluid");
    const navbarCollapse = document.querySelector(".navbar-collapse");
    const dropdownItem = document.querySelector(".dropdown-item");

    // Check if the click is outside the navbar
    if(navbarCollapse.contains(e.target)) {
        console.log("Clicked inside .navbar-collapse, no reset triggered");
    } else if(containerFluid.contains(e.target)) {
        console.log(".container-fluid is clicked");
        resetDropdowns(); // Only reset if it's outside .navbar-collapse
    } else if(navbar.contains(e.target)) {
        console.log(".navbar is clicked");
        resetDropdowns(); // Only reset if it's outside .navbar
    } else {
        console.log("Clicked outside navbar and container-fluid");
        resetDropdowns();
    }
});

// Reset dropdowns (for resize or click outside)
function resetDropdowns() {
    document.querySelectorAll(".navbar .dropdown.show").forEach((dropdown) => {
        dropdown.classList.remove("show");
        dropdown.querySelectorAll(".dropdown-menu.show").forEach((menu) => {
            menu.classList.remove("show");
        });
    });
    console.log("Dropdowns reset");
}

// Adjust the height of .container-fluid dynamically
function adjustContainerHeight() {
    const containerFluid = document.querySelector(".container-fluid");

    // Calculate the height of all dropdown menus currently open
    const dropdownMenus = document.querySelectorAll(".navbar .dropdown-menu.show");
    let totalHeight = 0;

    dropdownMenus.forEach((menu) => {
        totalHeight += menu.scrollHeight;
    });

    // Set the height dynamically based on open menus
    if (totalHeight > 0) {
        containerFluid.style.height = `calc(100% + ${totalHeight}px)`;
    } else {
        containerFluid.style.height = ""; // Reset to original height
    }
}

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

