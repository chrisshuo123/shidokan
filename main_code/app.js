/*========== 1 - HALAMAN MAIN ==========*/

/*===NAVBAR===*/
let menuToggle = document.querySelector('.menuToggle');
let nav = document.querySelector('nav');
menuToggle.onclick = function() {
    nav.classList.toggle('show');
};

/* --Scrollbar Features-- */
const ulElements = document.querySelectorAll("header ul li ul");

function adjustStyles() {
    console.log("Detected ul elements: ", ulElements); // Debug
    if(ulElements[3]) { // Ensure the 4th ul elements exist
        if(window.innerWidth >= 811) {
            // styles for screen >= 811px
            /*ulElements[3].style.backgroundColor = "red";*/
            ulElements[3].style.overflowY = "scroll";
            ulElements[3].style.overflowX = "hidden";
            ulElements[3].style.maxHeight = "400px";
        } else if(window.innerWidth <= 811) {
            // Styles for screens <= 811px
            ulElements[3].style.overflowY = "hidden"; // Hide scrollbar
            ulElements[3].style.maxHeight = "none"; // Adjust to content size
            ulElements[3].style.backgroundColor = "red";
            ulElements[3].style.visibility = "visible"; // Ensure content is visible
            ulElements[3].style.position = "relative"; // Ensure proper layout
            ulElements[3].style.paddingLeft = "14%";
            ulElements[3].style.marginLeft = "-0.5%";
            ulElements[3].style.paddingRight = "-80%";
        }
    } else {
        console.log("ulElements[3] not found");
    }
}

// Run the function on Load and resize
adjustStyles();
window.addEventListener("resize", adjustStyles);

/* --Button Dropdown when Navbar in Mobile View (burger stack)-- */
document.addEventListener('DOMContentLoaded', function () {
    // Select all the <b> tags that trigger the dropdown
    const dropdownArrows = document.querySelectorAll('a b');
    
    dropdownArrows.forEach(arrow => {
        // Add click event listener to the <b> tag
        arrow.addEventListener('click', function (event) {
            event.preventDefault();  // Prevent the default link redirection
            
            // Toggle the dropdown visibility (next sibling <ul>)
            const submenu = this.closest('a').nextElementSibling; // Find the <ul> after the <a> tag
            if (submenu) {
                submenu.classList.toggle('show');  // Add a class to show/hide the dropdown
            }
        });
    });
});


/*===Header===*/

document.addEventListener('DOMContentLoaded', init);

const baseURL = '../img/1-banner/';
const nxt = document.querySelector('.nxt');
const bck = document.querySelector('.prev');
const slide = document.querySelector('.pic');
const cars = ['banner-sample-1.jpg', 'banner-sample-2.jpg'];
let index = 0; // Start with the first image in the array

function init() {
    // Set the initial image source to the first image in the 'cars' array
    slide.src = baseURL + cars[index];
    console.log('Initial image:', slide.src); // Debugging
}

nxt.onclick = function(e) {
    e.preventDefault(); // ignores event so page wont reload

    // Increment the index to the next image in the array
    index++;

    // If the index is greater than or equal to the length of the array, reset it to 0
    if (index >= cars.length) {
        index = 0;
    }

    // Set the image source to the next image in the array
    slide.src = baseURL + cars[index];
};

bck.onclick = function(e) {
    e.preventDefault(); // ignores event so page wont reload

    index--;

    if(index < 0) {
        index = cars.length - 1;
    }

    slide.src = baseURL + cars[index];
};

/**====================== */
/* === Katalog Linking === */
/* Without using button tag */

// Javascript for local folder/file navigation
document.querySelectorAll('.catalog-btn').forEach((catalog) => {
    catalog.addEventListener('click', () => {
        // Get the file/folder path from the data-link attribute
        const linkPath = catalog.getAttribute('data-link'); //Link stored as a data attribute
        if (linkPath) {
            window.location.href = linkPath; // Navigate to the folder/file path
        }
    });
});

/*=======================*/
/*=======SEJARAH=======*/
/*---dropdown---*/

function toggleDropdown(button) {
    // Close any open dropdowns
    /*document.querySelectorAll('.dropdown-content').forEach(dropdown => {
        if (dropdown !== button.nextElementSibling) {
            dropdown.classList.remove('show');
        }
    });*/

    // Toggle the target dropdown
    const dropdown = button.nextElementSibling;
    // dropdown.classList.toggle('show');

    // Check if the dropdown is already shown
    if(dropdown.classList.contains('show')) {
        dropdown.classList.remove('show');

        // Delay hiding the display to allow the animation to finish
        setTimeout(()=> {
            dropdown.style.display = 'none';
        }, 500); // Match the CSS transition duration (0,5s)
    } else {
        dropdown.style.display = 'block'; // Show immediately
        // Allow transition to animate
        setTimeout(()=> {
            dropdown.classList.add('show');
        }, 0); // Wait briefly to trigger animation
    }

    // Making the button turn 180 degree
    const arrow = button.querySelector('.arrow');
    arrow.classList.toggle('rotated');
}

// Close dropdowns when clicking outside
/*window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
        document.querySelectorAll('.dropdown-content').forEach(dropdown => {
            dropdown.classList.remove('show');
        });
    }
}*/

/**==================== */
/** === Footer JS Buttons */

// Javascript for local folder/file navigation
document.querySelectorAll('.button-style').forEach((footerLink) => {
    footerLink.addEventListener('click', () => {
        // Get the file/folder path from the data-link attribute
        const linkPath = footerLink.getAttribute('data-link'); //Link stored as a data attribute
        if (linkPath) {
            window.location.href = linkPath; // Navigate to the folder/file path
        }
    });
});