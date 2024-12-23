/*========== 1 - HALAMAN MAIN ==========*/

/*===NAVBAR===*/
let menuToggle = document.querySelector('.menuToggle');
let nav = document.querySelector('nav');
menuToggle.onclick = function() {
    nav.classList.toggle('show');
};

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