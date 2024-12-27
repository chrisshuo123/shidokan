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
        const submenu = ulElements[3]; // Reference to the specific submenu
        if(window.innerWidth >= 900) {  /** Recently 811px */
            // styles for screen >= 900px
            /*ulElements[3].style.backgroundColor = "red";*/
            submenu.style.overflowY = "scroll";
            submenu.style.overflowX = "hidden";
            submenu.style.maxHeight = "400px";
            submenu.style.position = "absolute"; // Prevent affecting parent layout
            submenu.style.top = "100%"; // Position below the parent menu
            submenu.style.left = "0";
            submenu.style.marginLeft = "0%";
            submenu.style.zIndex = "1000"; // Ensure it appears above other elements
            submenu.style.visibility = "hidden"; // Default hidden 
            submenu.style.backgroundColor = "#422d41"; // Match design (before, it was setted to 444)
            submenu.style.transition = "visibility 0.2s ease, opacity 0.2s ease";
            submenu.style.opacity = "0"; // Hidden by default

            // Reset mobile specific styles
            submenu.style.paddingLeft = ""; // Reset padding
            submenu.style.marginLeft = "0%"; // Reset margin
            submenu.style.paddingRight = ""; // Reset padding-right
            submenu.style.textalign = "left"; // Default alignment

            // Add hover event to parent to Untuk Menampilkan Submenu
            submenu.parentElement.addEventListener("mouseenter", ()=> {
                submenu.style.visibility = "visible"; // Dinyalakan visibilitasnya
                submenu.style.opacity = "1";  // Opasitas 1 karena sebelumnya diset 0 alias ga bisa lihat
            });
            submenu.parentElement.addEventListener("mouseleave", ()=> {
                submenu.style.visibility = "hidden"; // Visibilitas dimatikan (buat jaga2 jika nyala terus saat di-unhover)
                submenu.style.opacity = "0"; // Jaga2 jika sub-menu masih nyala terus saat di-unhover
            });


        } else if(window.innerWidth <= 900) {
            // Styles for screens <= 900 yang sebelumnya diset sebagai 811px
            submenu.style.overflowY = "hidden"; // Hide scrollbar
            submenu.style.maxHeight = "none"; // Adjust to content size
            submenu.style.backgroundColor = "red";
            submenu.style.visibility = "visible"; // Ensure content is visible
            submenu.style.position = "relative"; // Ensure proper layout
            submenu.style.paddingLeft = "14%";
            submenu.style.marginLeft = "-0.5%";
            submenu.style.paddingRight = "-80%";
            /*submenu.style.width = "90%";*/
        }
    } else {
        console.log("ulElements[3] not found");
    }

    // Adjusting the "voice of Shinbucho's" Sub-Menu Width
    const subMenuShinbucho = ulElements[4];
    subMenuShinbucho.style.backgroundColor = "#422d41";
    if(window.innerWidth >= 900) {
        subMenuShinbucho.style.width = "100%";
    } else if (window.innerWidth <= 900) {
        subMenuShinbucho.style.width = "90%";
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

/*document.addEventListener('click', (e) => {
    if(e.target.classList.contains('button-style')) {
        const linkPath = e.target.getAttribute('data-link');
        if(linkPath) {
            window.location.href = linkPath;
        }
    }
});*/