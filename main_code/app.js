/* - - - - - - 1 - HALAMAN MAIN - - - - - - */

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