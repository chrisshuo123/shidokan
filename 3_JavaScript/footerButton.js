/**==================== */
/** === Footer JS Buttons */

// Javascript for local folder/file navigation

document.addEventListener('DOMContentLoaded', ()=> {
    console.log("DOM Fully loaded.");
    document.querySelectorAll('.button-style').forEach((footerLink) => {
        console.log("Button found: ", footerLink); // Debugging
        footerLink.addEventListener('click', () => {
            // Get the file/folder path from the data-link attribute
            const linkPath = footerLink.getAttribute('data-link'); //Link stored as a data attribute
            console.log("Navigating to: ", linkPath); // Debugging
            if (linkPath) {
                window.location.href = linkPath; // Navigate to the folder/file path
            }
        });
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