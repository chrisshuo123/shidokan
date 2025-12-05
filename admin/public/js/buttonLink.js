/**==================== */
/** === Footer JS Buttons */

// Javascript for local folder/file navigation

document.addEventListener('DOMContentLoaded', ()=> {
    console.log("DOM Fully loaded.");
    // Footer Link Button DataLink
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

    // About Us Button DataLink
    document.querySelectorAll('.aboutUs-dataLink').forEach((aboutUsLink) => {
        console.log("Button found: ", aboutUsLink); // Debugging
        aboutUsLink.addEventListener('click', () => {
            // Get the file/folder path from the data-link attribute
            const linkPath = aboutUsLink.getAttribute('data-link'); //Link stored as a data attribute
            console.log("Navigating to: ", linkPath); // Debugging
            if (linkPath) {
                window.location.href = linkPath; // Navigate to the folder/file path
            }
        });
    });

    // Voice from Shinbucho Button DataLink
    document.querySelectorAll('.voiceFrom_datalink').forEach((voicefromLink) => {
        console.log("Button found: ", voicefromLink); // Debugging
        voicefromLink.addEventListener('click', () => {
            // Get the file/folder path from the data-link attribute
            const linkPath = voicefromLink.getAttribute('data-link'); //Link stored as a data attribute
            console.log("Navigating to: ", linkPath); // Debugging
            if (linkPath) {
                window.location.href = linkPath; // Navigate to the folder/file path
            }
        });
    });

    // Blackbelt List Button DataLink
    document.querySelectorAll('.blackbelt_dataLink').forEach((blackbeltLink) => {
        console.log("Button found: ", blackbeltLink); // Debugging
        blackbeltLink.addEventListener('click', () => {
            // Get the file/folder path from the data-link attribute
            const linkPath = blackbeltLink.getAttribute('data-link'); //Link stored as a data attribute
            console.log("Navigating to: ", linkPath); // Debugging
            if (linkPath) {
                window.location.href = linkPath; // Navigate to the folder/file path
            }
        });
    });

    // Sponsors Button DataLink
    document.querySelectorAll('.sponsors_dataLink').forEach((sponsorsLink) => {
        console.log("Button found: ", sponsorsLink); // Debugging
        sponsorsLink.addEventListener('click', () => {
            // Get the file/folder path from the data-link attribute
            const linkPath = sponsorsLink.getAttribute('data-link'); //Link stored as a data attribute
            console.log("Navigating to: ", linkPath); // Debugging
            if (linkPath) {
                window.location.href = linkPath; // Navigate to the folder/file path
            }
        });
    });

    // Sponsors Logo Button DataLink (Not the Catalog Link, but link for each Sponsor's LOGO)
    document.querySelectorAll('.logo_dataLink').forEach((logoLink) => {
        console.log("Button found: ", logoLink); // Debugging

        logoLink.addEventListener('click', () => {
            // Get the file/folder path from the data-link attribute
            const linkPath = logoLink.getAttribute('data-link'); //Link stored as a data attribute
            console.log("Navigating to: ", linkPath); // Debugging
            if (linkPath && linkPath.startsWith("http")) {
                window.location.href = linkPath; // Navigate to the specified URL
            } else {
                console.error("Invalid or missing data-link attribute");
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